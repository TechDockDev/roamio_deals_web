<?php
namespace App\Http\Controllers;

use App\User;
use Modules\Hotel\Models\Hotel;
use Modules\Location\Models\LocationCategory;
use Modules\Page\Models\Page;
use Modules\News\Models\NewsCategory;
use Modules\News\Models\Tag;
use Modules\News\Models\News;
use Illuminate\Http\Request;
use DB;
use Session;
use DateTime;

use DatePeriod;

use dateInterval;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_page_id = setting_item('home_page_id');
        if($home_page_id && $page = Page::where("id",$home_page_id)->where("status","publish")->first())
        {
            $this->setActiveMenu($page);
            $translation = $page->translate();
            $seo_meta = $page->getSeoMetaWithTranslation(app()->getLocale(), $translation);
            $seo_meta['full_url'] = url("/");
            $seo_meta['is_homepage'] = true;
            $data = [
                'row'=>$page,
                "seo_meta"=> $seo_meta,
                'translation'=>$translation,
                'is_home' => true,
            ];
            return view('Page::frontend.detail',$data);

        }

        $model_News = News::where("status", "publish");
        $data = [
            'rows'=>$model_News->paginate(5),
            'model_category'    => NewsCategory::where("status", "publish"),
            'model_tag'         => Tag::query(),
            'model_news'        => News::where("status", "publish"),
            'breadcrumbs' => [
                ['name' => __('News'), 'url' => url("/news") ,'class' => 'active'],
            ],
            "seo_meta" => News::getSeoMetaForPageList()
        ];
        return view('News::frontend.index',$data);
    }

    public function checkConnectDatabase(Request $request){
        $connection = $request->input('database_connection');
        config([
            'database' => [
                'default' => $connection."_check",
                'connections' => [
                    $connection."_check" => [
                        'driver' => $connection,
                        'host' => $request->input('database_hostname'),
                        'port' => $request->input('database_port'),
                        'database' => $request->input('database_name'),
                        'username' => $request->input('database_username'),
                        'password' => $request->input('database_password'),
                    ],
                ],
            ],
        ]);
        try {
            DB::connection()->getPdo();
            $check = DB::table('information_schema.tables')->where("table_schema","performance_schema")->get();
            if(empty($check) and $check->count() == 0){
                return $this->sendSuccess(false , __("Access denied for user!. Please check your configuration."));
            }
            if(DB::connection()->getDatabaseName()){
                return $this->sendSuccess(false , __("Yes! Successfully connected to the DB: ".DB::connection()->getDatabaseName()));
            }else{
                return $this->sendSuccess(false , __("Could not find the database. Please check your configuration."));
            }
        } catch (\Exception $e) {
            return $this->sendError( $e->getMessage() );
        }
    }


  public function cartaddingfunction(request $request)
  {
 
// $user_id = null;

// if (auth()->check()) {
//     $user_id = auth()->user()->id;
// }

// $cart = [];

// foreach ($request->id as $index => $id) {
//     $packageQuantity = $request->packageQuantity[$index];

//     if ($packageQuantity != "0") {
//         $cartId = DB::table('cart')->insertGetId([
//             'user_id' => $user_id,
//             'type' => $request->type[$index],
//             'room_qty' => $packageQuantity,
//             'product_id' => $request->product_id[$index],
//             'package_id' => $id,
//             'room_price' => $request->price[$index],
//             'package_name' => $request->package_name[$index],
//         ]);

//         $cart[] = $cartId;
//     }
// }


//    if (!empty($cart)) {
//     return response()->json(['message' => 'Data added successfully', 'status' => true]);
//    } else {
//     return response()->json(['message' => 'Oops, something error', 'status' => false]);
//    }

  }

 
public function cartDelete(request $request)
{

   $id = $request->cartId;
   $delete = DB::table('cart')->where('id',$id)->delete();

   if($delete)
  {
   
   return redirect()->back()->with('successdataadded','dataadded successfully');

  }else{

   return redirect()->back()->with('faileddata','data failed'); 
  }

}

public function getDatesData(Request $request)
{

 $id =  Session::get('rooms_id_session');


 $hotel = DB::table('bravo_hotel_rooms')->where('id',$id)->first();

 $choosingdate = DB::table('bravo_hotel_room_dates')->where('target_id',$id)->get();

$data = [];

foreach ($choosingdate as $choosing) {
    $start = new DateTime($choosing->start_date);
    $end = new DateTime($choosing->end_date);
    $price = $choosing->price;

    $dateInterval = $start->diff($end);
    $numberOfDays = $dateInterval->days;

    $period = new DatePeriod($start, new DateInterval('P1D'), $end);
    foreach ($period as $date) {
        $data[] = [
            'date' => $date->format('Y-m-d'),
            'price' => $price,
        ];
    }
}

$currentYear = date('Y');
$currentMonth = date('m');
$currentDay = date('d');

$startDateString = $currentYear . '-' . $currentMonth . '-01';
$startDate = new DateTime($startDateString);

$endDate = clone $startDate;
$endDate->modify('+2 months');

$dates = [];
$defaultPrice = $hotel->price; 

while ($startDate <= $endDate) {
    $dateString = $startDate->format('Y-m-d');
    $price = null;
if (!empty($data)) {
    // Get the first and last dates from $data
    $firstDate = new DateTime($data[0]['date']);
    $lastDate = new DateTime(end($data)['date']);

    // Check if the $startDate is within the range of $data dates
    if ($startDate >= $firstDate && $startDate <= $lastDate) {
        foreach ($data as $item) {
            if ($item['date'] === $dateString) {
                $price = $item['price'];
                break;
            }
        }
    }
}


    $price = ($price !== null) ? $price : $defaultPrice;

    $dates[] = ['date' => $dateString, 'price' => $price];

    $startDate->modify('+1 day');
}

return response()->json($dates);

    }



}
