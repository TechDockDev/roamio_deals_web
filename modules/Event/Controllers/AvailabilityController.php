<?php
namespace Modules\Event\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Modules\Booking\Models\Booking;
use Modules\Event\Models\Event;
use Modules\Event\Models\EventDate;
use Modules\FrontendController;
use DB;
use Session;

use Carbon\Carbon;

class AvailabilityController extends FrontendController{

    protected $eventClass;
    /**
     * @var EventDate
     */
    protected $eventDateClass;

    /**
     * @var Booking
     */
    protected $bookingClass;

    protected $indexView = 'Event::frontend.user.availability';

    public function __construct(Event $eventClass, EventDate $eventDateClass,Booking $bookingClass)
    {
        parent::__construct();
        $this->eventDateClass = $eventDateClass;
        $this->bookingClass = $bookingClass;
        $this->eventClass = $eventClass;
    }

    public function callAction($method, $parameters)
    {
        if(!Event::isEnable())
        {
            return redirect('/');
        }
        return parent::callAction($method, $parameters); // TODO: Change the autogenerated stub
    }
    public function index(Request $request){
        $this->checkPermission('event_create');

        $q = $this->eventClass::query();

        if($request->query('s')){
            $q->where('title','like','%'.$request->query('s').'%');
        }

        if(!$this->hasPermission('event_manage_others')){
            $q->where('author_id',$this->currentUser()->id);
        }

        $q->orderBy('bravo_events.id','desc');

        $rows = $q->paginate(15);

        $current_month = strtotime(date('Y-m-01',time()));

        if($request->query('month')){
            $date = date_create_from_format('m-Y',$request->query('month'));
            if(!$date){
                $current_month = time();
            }else{
                $current_month = $date->getTimestamp();
            }
        }
        $breadcrumbs = [
            [
                'name' => __('Events'),
                'url'  => route('event.vendor.index')
            ],
            [
                'name'  => __('Availability'),
                'class' => 'active'
            ],
        ];
        $page_title = __('Events Availability');

        return view($this->indexView,compact('rows','breadcrumbs','current_month','page_title','request'));
    }

    public function loadDates(Request $request){
        $rules = [
            'id'=>'required',
            'start'=>'required',
            'end'=>'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }
        $event = $this->eventClass::find($request->query('id'));
        if(empty($event)){
            return $this->sendError(__('Event not found'));
        }
        $lang = app()->getLocale();
        $is_single = $request->query('for_single');
        $query = $this->eventDateClass::query();
        $query->where('target_id',$request->query('id'));
        $query->where('start_date','>=',date('Y-m-d H:i:s',strtotime($request->query('start'))));
        $query->where('end_date','<=',date('Y-m-d H:i:s',strtotime($request->query('end'))));
        $rows =  $query->take(50)->get();
        $allDates = [];
        $period = periodDate($request->input('start'),$request->input('end'));
        foreach ($period as $dt){
            $date = [
                'id'=>rand(0,999),
                'active'=>0,
                'textColor'=>'#2791fe',
                'price'=>(!empty($event->sale_price) and $event->sale_price > 0 and $event->sale_price < $event->price) ? $event->sale_price : $event->price,
            ];
            $date['start'] = $date['end'] = $dt->format('Y-m-d');
            if($event->default_state){
                $date['active'] = 1;
            }else{
                $date['title'] = $date['event'] = __('Blocked');
                $date['backgroundColor'] = 'orange';
                $date['borderColor'] = '#fe2727';
                $date['classNames'] = ['blocked-event'];
                $date['textColor'] = '#fe2727';
            }
            if ($event->ticket_types and $event->getBookingType() == "ticket") {
                $date['ticket_types'] = $event->ticket_types;
                $c_title = "";
                foreach ($date['ticket_types'] as &$ticket) {
                    $ticket['name'] = !empty($ticket['name_' . $lang])?$ticket['name_' . $lang]:$ticket['name'];
                    if (!$is_single) {
                        $c_title .= $ticket['name'] . ": " . format_money_main($ticket['price']) ." x ".$ticket['number']. "<br>";
                        //for single
                        $ticket['display_price'] = format_money_main($ticket['price']);
                    } else {
                        $c_title .= $ticket['name'] . ": " . format_money($ticket['price']) ." x ".$ticket['number']. "<br>";
                        //for single
                        $ticket['display_price'] = format_money($ticket['price']);
                    }
                    $ticket['min'] = 0;
                    $ticket['max'] = $ticket['number'];
                    if ($is_single) {
                        $ticket['number'] = 0;
                    }
                }
                $date['ticket_types'] = array_values($date['ticket_types']);
                $date['title'] = $date['event'] = $c_title;
            }
            if ($event->getBookingType() == "time_slot") {
                if (!$is_single) {
                    $date['title'] = $date['event'] = format_money_main($date['price']);
                } else {
                    $date['title'] = $date['event'] = format_money($date['price']);
                }
                if ($time_slots = $event->getBookingTimeSlot()) {
                    $date['booking_time_slots'] = $time_slots;
                }
            }
            $allDates[$dt->format('Y-m-d')] = $date;
        }
        if(!empty($rows))
        {
            foreach ($rows as $row)
            {
                $ticketData = $allDates[date('Y-m-d',strtotime($row->start_date))];
                if ($row->ticket_types and $event->getBookingType() == "ticket") {
                    $list_ticket_types = $row->ticket_types;
                    $c_title = "";
                    foreach ( $list_ticket_types as $k=>&$ticket){
                        $ticket['name'] = !empty($ticket['name_' . $lang])?$ticket['name_' . $lang]:$ticket['name'];
                        if(!$is_single){
                            $c_title .= $ticket['name'].": ".format_money_main($ticket['price'])." x ".$ticket['number']."<br>";
                            //for single
                            $ticket['display_price'] = format_money_main($ticket['price']);
                        }else{
                            $c_title .= $ticket['name'].": ".format_money($ticket['price'])." x ".$ticket['number']."<br>";
                            //for single
                            $ticket['display_price'] = format_money($ticket['price']);
                        }
                        $ticket['min'] = 0;
                        $ticket['max'] = $ticket['number'];
                        if($is_single){
                            $ticket['number'] = 0;
                        }
                    }
                    $ticketData['title'] = $ticketData['event']  = $c_title;
                    $ticketData['ticket_types'] = $list_ticket_types;
                }

                if ($event->getBookingType() == "time_slot") {
                    if (!$is_single) {
                        $ticketData['title'] = $ticketData['event'] = format_money_main($row['price']);
                    } else {
                        $ticketData['title'] = $ticketData['event'] = format_money($row['price']);
                    }
                    $ticketData['price'] = $row['price'];
                }
                if(!$row->active)
                {
                    $ticketData['title'] = $row->event = __('Blocked');
                    $ticketData['backgroundColor'] = '#fe2727';
                    $ticketData['classNames'] = ['blocked-event'];
                    $ticketData['textColor'] = '#fe2727';
                    $ticketData['active'] = 0;
                }else{
                    $ticketData['classNames'] = ['active-event'];
                    $ticketData['active'] = 1;
                }
                $allDates[date('Y-m-d',strtotime($row->start_date))] = $ticketData;
            }
        }
        $bookings = $this->bookingClass::getAllBookingInRanges($event->id,$event->type,$request->query('start'),$request->query('end'));
        if(!empty($bookings))
        {
            foreach ($bookings as $booking){
                $period = periodDate($booking->start_date,$booking->end_date);
                foreach ($period as $dt){
                    $date = $dt->format('Y-m-d');
                    if(isset($allDates[$date])){
                        $isBook = false;

                        if($event->getBookingType() == "ticket")
                        {
                            $c_title = "";
                            $list_ticket_types = $allDates[$dt->format('Y-m-d')]['ticket_types'];
                            $bookingTicketTypes = $booking->getJsonMeta('ticket_types') ?? [];
                            foreach ($bookingTicketTypes as $bookingTicket){
                                $numberBoook = $bookingTicket['number'];
                                foreach ($list_ticket_types as &$ticket){
                                    if( $ticket['code'] == $bookingTicket['code']){
                                        $ticket['max'] =  $ticket['max'] - $numberBoook;
                                        if($ticket['max'] <= 0){
                                            $ticket['max'] = 0;
                                        }
                                        $c_title .= $ticket['name'].": ".format_money_main($ticket['price'])." x ".$ticket['max']."<br>";
                                    }
                                    if($ticket['max'] > 0){
                                        $isBook = true;
                                    }
                                }
                            }
                            $allDates[$dt->format('Y-m-d')]['title'] = $c_title;
                            $allDates[$dt->format('Y-m-d')]['ticket_types'] = $list_ticket_types;
                        }
                        if($event->getBookingType() == "time_slot")
                        {
                            $timeSlots = $booking->time_slots;
                            foreach ($timeSlots as $item){
                                $value = date("H:i",strtotime($item->start_time));
                                if( in_array($value,$allDates[$date]['booking_time_slots'])){
                                    $allDates[$date]['booking_time_slots'] = array_diff( $allDates[$date]['booking_time_slots'] , [$value]);
                                }
                            }
                            if(count($allDates[$date]['booking_time_slots']) > 0){
                                $isBook = true;
                            }
                            $allDates[$date]['booking_time_slots'] = array_values($allDates[$date]['booking_time_slots']);
                        }

                        if($isBook == false){
                            $allDates[$date]['active'] = 0;
                            $allDates[$date]['event'] = __('Full Book');
                            $allDates[$date]['title'] = __('Full Book');
                            $allDates[$date]['classNames'] = ['full-book-event'];
                        }
                    }
                }
            }
        }
        $data = array_values($allDates);
        return response()->json($data);
    }

    public function store(Request $request){

        $request->validate([
            'target_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);
        $event = $this->eventClass::find($request->input('target_id'));
        $target_id = $request->input('target_id');
        if(empty($event)){
            return $this->sendError(__('Event not found'));
        }
        if(!$this->hasPermission('event_manage_others')){
            if($event->author_id != Auth::id()){
                return $this->sendError("You do not have permission to access it");
            }
        }
        $postData = $request->input();
        $period = periodDate($request->input('start_date'),$request->input('end_date'));
        foreach ($period as $dt){

            $date = $this->eventDateClass::where('start_date',$dt->format('Y-m-d'))->where('target_id',$target_id)->first();
            if(empty($date)){
                $date = new $this->eventDateClass();
                $date->target_id = $target_id;
            }
            $postData['start_date'] = $dt->format('Y-m-d H:i:s');
            $postData['end_date'] = $dt->format('Y-m-d H:i:s');

            $date->fillByAttr([
                'start_date','end_date','active','price'
            ],$postData);
            $ticket_types = $request->input("ticket_types");
            if(!empty($ticket_types)){
                foreach ( $ticket_types  as &$ticket){
                    unset($ticket['min']);
                    unset($ticket['max']);
                    unset($ticket['display_price']);
                }
            }
            $date->ticket_types = $ticket_types;
            $date->save();
        }
        return $this->sendSuccess([],__("Update Success"));
    }

   public function packagepage(request $request)
   {
   
        $get = DB::table('activity_packages')->get();

     return view('Event::admin.activitypackages',compact('get'));

   }

    public function packagestore(request $request)
    {
 
        
        $data = DB::table('activity_packages')->insertGetId([
               
                'title' =>$request->title,
                'content'=>$request->content,
                'image_id'=>$request->image_id,
                'gallery'=>$request->gallery,
                'price'=>$request->price,
                'number'=>$request->number,
                'discount_price'=>$request->discount_price,
                'adults'=>$request->adults,
                'children'=>$request->children,
                'ical_import_url'=>$request->ical_import_url,
                'parent_id' => $request->parent_id,
               'status' =>$request->status
      
        ]);

      if($data)
      {
        return redirect()->back()->with('pacakagestoreadded','packages added successfully');
      }

    }

    public function pricebydate(request $request)
      {
               

            if($request->query('month')){
            $date = date_create_from_format('m-Y',$request->query('month'));
            if(!$date){
                $current_month = time();
            }else{
                $current_month = $date->getTimestamp();
            }
          }
          $current_month = time();

             $breadcrumbs = [
            [
                'name' => __('Staycation'),
                'url'  => route('hotel.vendor.index')
            ],
            [
                // 'name' => __('Hotel: :name',['name'=>$this->currentHotel->title]),
                // 'url'  => route('hotel.vendor.edit',[$this->currentHotel->id])
            ],
            [
                'name'  => __('Availability'),
                'class' => 'active'
            ],
        ]; 

        $rows = DB::table('activity_packages')->where('parent_id',$request->activity_id)->get();

        $hotel = DB::table('bravo_events')->select('id','title')->where('id',$request->activity_id)->first();

        $page_title = __('Packages Price Availability');


        return view('Event::admin.packagesavailable',compact('page_title','current_month','rows','hotel'));



      }


public function xloadDates(Request $request){
             
 


//  $data = [];

// foreach ($dd as $dds) {

//     $row = [
//         'active' => "1",
//         'end' => $dds->end_date,
//         'event' => $dds->price,
//         'is_default' => true,
//         'is_instant' => 0,
//         'number' => $dds->number,
//         'price' => $dds->price,
//         'price_html' => "AED " . $dds->price,
//         'start' => $dds->start_date,
//         'textColor' => "#2791fe",
//         'title' => "AED" . $dds->price,
//         'classNames' => ["active-event"],
//     ];

//     $data[] = $row;
//  }


$allDates = [];


$dd = DB::table('activity_packages_date')->where('target_id', $request->id)->where('active', '1')->get();

foreach($dd as $dds)
{

$startDate  = $dds->start_date;
$endDate = $dds->end_date;
$first_price = $dds->price;

$period = periodDate($startDate,$endDate, false);
$ss = DB::table('activity_packages')->where('id', $request->id)->first();
$allDates = [];

foreach ($period as $dt) {
    $date = [
        'id' => rand(0, 999),
        'active' => 1,
        'price' => $dds->price,
        'number' => "1",
        'is_instant' => 0,
        'is_default' => true,
        'textColor' => '#2791fe'
    ];
    $date['price_html'] = $dds->price;
    $date['title'] = $date['event'] = $date['price_html'] . ' x ' . '1';
    $date['start'] = $date['end'] = $dt->format('Y-m-d');

    $allDates[$dt->format('Y-m-d')] = $date;
}

$data = array_values($allDates);

}
 
  






return response()->json($data);

    }


    public function xstore(Request $request){

    
    $matchingTasks = DB::table('activity_packages_date')->where('start_date',$request->start_date)->where('target_id',$request->target_id)
        ->first();

        if($matchingTasks)
        {
         

          DB::table('activity_packages_date')->where('start_date',$request->start_date)->where('target_id',$request->target_id)->update([
         'start_date' =>$request->start_date,
         'end_date'   => $request->end_date,
         'active' => $request->active,
         'price' =>$request->price,
         'number' => $request->number,
         'target_id' => $request->target_id,
         'event_id' =>$request->event_id,
        ]);

        }else{


         DB::table('activity_packages_date')->insertGetId([
         'start_date' =>$request->start_date,
         'end_date'   => $request->end_date,
         'active' => $request->active,
         'price' =>$request->price,
         'number' => $request->number,
         'target_id' => $request->target_id,
         'event_id' =>$request->event_id,
        ]);


        }

        return $this->sendSuccess([],__("Update Success"));

    }




}
