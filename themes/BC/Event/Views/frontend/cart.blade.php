@extends('layouts.app')

@push('css')
    <link href="{{ asset('dist/frontend/module/event/css/event.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .rounded-start {
            padding: 10px;
            height: 200px;
            border-radius: 20px;
        }
        .totl {
            background: #FFF3E3;
        }
        .fa {
            color: #FF3500;
        }
        .price {
            float: right;
            color: #FF3500;
        }
        .text {
            color: black;
            font-size: 12px;
        }

        .input-container {
    display: flex;
    align-items: center;
  }

  .input-container img {
    width: 15px;
    height: 15px;
    margin-right: 10px;
    position: relative;
    left:10px;
  }

  .input-container input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  #calendar {
    max-width: 384px;
    height: 300px;
    margin: 0 auto;
  }

  .fc-toolbar h2 {
    font-size: 0.999em;
    margin: 0;
}

  .fc-dayGridMonth-view .fc-day-grid {
    width: 100%; /* Adjust the grid cell width */
  }

  .fc-dayGridMonth-view .fc-day-grid .fc-day {
    width: 25px; /* Adjust the grid cell size */
    height: 25px; /* Adjust the grid cell size */
  }
  
  .fc-title{

    background: #FF3500 !Important;
    border: none !important;
  }
   .fc-event, .fc-event-dot {
      background: #FF3500 !Important;
    border: none !important;
      }
   
    .fc-dayGrid {
    border: none;
  }

    #calendar {
       border-radius: 10px;
    }

.fc-day:hover {
    background-color: #f0f0f0;
    cursor: pointer;
    border-radius:12px;
  }

  .fc-dayGridMonth-view .fc-day-grid .fc-day {
    width: 25px;
    height: 25px;
    border: none;
}


    </style>


@endpush

@section('content')
<div class="container mt-3">
    <div class="row">
        <h4 class="title py-3 mx-3">Cart</h4>
    </div>
</div>
<div class="container mt-3 card">

    @php
$totalAmount = 0;
 // Initialize the total amount variable outside the loop
@endphp

    @foreach($data as $dd)
    <div class="card mb-3 totl mt-3">
        <div class="row">
            <div class="col-md-4 text-end">
                <img src="https://media.cntraveller.com/photos/62f51fb12148309d8a68838b/4:3/w_2664,h_1998,c_limit/25hours%20dubai-aug22-pr-%20global-Ingrid%20Rasmussen1.jpg" class="img-fluid rounded-start" alt="...">
            </div>

            <input type="hidden" value="{{$dd->id}}"  id="datafetchget">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <span>{{$dd->package_name}}</span>
                       <a href="{{url('deleteCart/'.$dd->id)}}"> <span class="text-end" style="float:right;"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                    </h5>
                    <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i><span>@if($dd->type == 'hotel')   Staycation 

                        @else     

                            Activity
                    @endif     </span></p>
                        
                        <input type="text" name="start_date[]" placeholder="start date"  id="startDate">

                        <input type="text" name="end_date[]" placeholder="end date" id="endDate" >

                        <div id="calendar"></div>

                    <p class="card-text"><small><i class="fa fa-users" aria-hidden="true"></i> <span>{{$dd->room_qty}} x Adult</span></small></p>
                    <h5 class="card-text price  pricex{{$dd->id}}">{{$dd->room_price * $dd->room_qty}}<span class="text">AED</span></h5>
                </div>
            </div>
        </div>
    </div>

     @php
    $itemTotal = $dd->room_price * $dd->room_qty;
    $totalAmount += $itemTotal;
    @endphp
  @endforeach


    <div class="card mb-3  mb-3">
      <div class="row d-flex justify-content-center">
          <div class="col-md-5">
            <p class="py-2 mx-3">Apply Promocode</p>
            <div class="form p-3">
              <div class="input-container" style="border:1px solid gray; border-radius:10px;">
                <img src="{{asset(url('images/Group.png'))}}" alt="Image">
                <input type="text" placeholder="Apply" style="border:none">
              </div> 
            </div>
            
          </div>
          <div class="col-md-7 ">
              <div class="card-body totl">
                <div class="row ">
                  <div class="col-md-6">
                    <p class="text-start">Total</p>
                    <p class="text-start">Promo Code</p>
                    <p class="text-start">Roamio Credits</p>
                    <p class="text-start">Total Saving</p>
                    <p class="text-start">TAX</p>
                  </div>
                  <div class="col-md-6">
                   <p class="text-end" style="color:#FF3500">{{ $totalAmount }} AED</p>
                    <p class="text-end" style="color:#FF3500">00</p>
                    <p class="text-end" style="color:#FF3500">00</p>
                    <p class="text-end" style="color:#FF3500">00</p>
                    <p class="text-end">00</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p class="text-end">Sab Total</p>
                  </div>
                  <div class="col-md-6">
                    <p class="text-end">{{ $totalAmount }} AED</p>
                  </div>
                </div>

              </div>
          </div>
      </div>
  </div>
  
</div>


   

    @push('css')
    <link rel="stylesheet" href="{{asset('libs/fullcalendar-4.2.0/core/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/fullcalendar-4.2.0/daygrid/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/daterange/daterangepicker.css')}}">

@endpush

@push('js')
    <script src="{{asset('libs/daterange/moment.min.js')}}"></script>
    <script src="{{asset('libs/daterange/daterangepicker.min.js?_ver='.config('app.asset_version'))}}"></script>
    <script src="{{asset('libs/fullcalendar-4.2.0/core/main.js')}}"></script>
    <script src="{{asset('libs/fullcalendar-4.2.0/interaction/main.js')}}"></script>
    <script src="{{asset('libs/fullcalendar-4.2.0/daygrid/main.js')}}"></script>

      <!-- FullCalendar CSS and JavaScript -->
<link rel="stylesheet" href="{{ asset('libs/fullcalendar-4.2.0/core/main.css') }}">
<link rel="stylesheet" href="{{ asset('libs/fullcalendar-4.2.0/daygrid/main.css') }}">
<script src="{{ asset('libs/daterange/moment.min.js') }}"></script>
<script src="{{ asset('libs/daterange/daterangepicker.min.js?_ver=' . config('app.asset_version')) }}"></script>
<script src="{{ asset('libs/fullcalendar-4.2.0/core/main.js') }}"></script>
<script src="{{ asset('libs/fullcalendar-4.2.0/interaction/main.js') }}"></script>
<script src="{{ asset('libs/fullcalendar-4.2.0/daygrid/main.js') }}"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    // Fetch prices from the backend API
    fetch('/get_dates_data')
      .then(response => response.json())
      .then(data => {
        var events = data.map(item => ({
          title: 'AED' + item.price,
          start: item.date,
          price: item.price 
        }));
         
        // Initialize FullCalendar with events data
        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: ['interaction', 'dayGrid'],
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          selectable: true, // Allow date selection
          select: function(info) {
            var selectedEvent = events.find(event => event.start === info.startStr);
            if (selectedEvent) {
              alert('Selected Date: ' + info.startStr + ' Price: ' + selectedEvent.price);
            } else {
              alert('Selected Date: ' + info.startStr + ' Price: Default Price (500)');
            }
          },
          events: events // Use the events array containing the price data
        });

        // Get the current month's start and end dates
        // var currentDate = new Date();
        // var currentYear = currentDate.getFullYear();
        // var currentMonth = currentDate.getMonth() + 1; // Adding 1 to month since it's 0-indexed
        // var daysInMonth = new Date(currentYear, currentMonth, 0).getDate();
        // var defaultStartDate = currentYear + '-' + currentMonth + '-01';
        // var defaultEndDate = currentYear + '-' + currentMonth + '-' + daysInMonth;

        // // Set the values of the hidden form fields with the default date range
        // document.getElementById('startDateInput').value = defaultStartDate;
        // document.getElementById('endDateInput').value = defaultEndDate;

        // Submit the form on page load
        // document.getElementById('dateForm').submit();

        calendar.render();
      })
      .catch(error => {
        console.error('Error fetching price data:', error);
      });
  });
</script>


    @endpush




@if(Session::get('successdataadded'))
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

 Swal.fire('Item Deleted Successfully')

</script>


{{Session::forget('successdataadded')}}

@endif

@endsection

