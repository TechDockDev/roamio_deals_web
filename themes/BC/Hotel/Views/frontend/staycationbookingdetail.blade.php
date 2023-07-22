@extends('layouts.app')

@push('css')
    <link href="{{ asset('dist/frontend/module/event/css/event.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/fotorama/fotorama.css') }}"/>
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
            float: ;
            color: #FF3500;
            left: 30px;
            position: relative;
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
    left: -110px;
    max-width: 384px;
    height: 300px;
    margin: 0 auto;
    position: relative;
    margin-top:10px;
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
    color:white;
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


.fc-day-grid-container
{

height: 336px !Important;
border-radius: 12px;

}

.fc-scroller{
height: 336px;

}
    </style>
<style>
   .text-item{
    color:#FF3500;
    font-size:19px; 
    }
    .text-item2{
   text-decoration: line-through;
    }
    .inbtn{
       border-radius: 17px;
       width: 25px;
       border: 1px solid #FF3500;
    }
    .card-btn{
       background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
       color:white;
    }
    .btn-text{
       color:#FF3500;   
    }
    .fc-right{

      display:none;
    }
   .totlx {
    border-radius: 14px;
    background: #FFF3E3;
}
    
    .totl {
   background: none;
}

.cardbodyx{

    margin-top: -18px;
    left: 118px;
    position: relative;

}

}
   </style>

@endpush

@section('content')
<div class="container mt-3">
    <div class="row">
        <h4 class="title py-3 mx-3">Staycation Booking Details</h4>
    </div>
</div>
<div class="container mt-3 card" style="border-radius: 20px;">
   

  

    @foreach($data as $dd)
    <div class=" mb-3 totl mt-3">
        <div class="row">
            <div class="col-md-4 text-end">

               <?php

                $file = DB::table('media_files')->where('id',$dd->image_id)->first();
                
               ?>

               @if($file)

               <img src="{{asset('uploads/'.$file->file_path)}}" class="img-fluid rounded-start" alt="...">

               @else

                <img  style="border-radius: 12px;
    left: 12px;
    position: relative;
    top: 20px; max-width: 139%;
    height: auto;" src="https://media.cntraveller.com/photos/62f51fb12148309d8a68838b/4:3/w_2664,h_1998,c_limit/25hours%20dubai-aug22-pr-%20global-Ingrid%20Rasmussen1.jpg" alt="...">

               @endif
               
            </div>

            <input type="hidden" value="{{$dd->id}}"  id="datafetchget">
            <div class="col-md-8">
                <div class="card-body  cardbodyx">
                    <h5 class="card-title">
                        <span>{{$dd->title}}</span>
                       <!-- <a href="{{url('deleteCart/'.$dd->id)}}"> <span class="text-end" style="float:right;"><i class="fa fa-trash" aria-hidden="true"></i></span></a> -->
                    </h5>

                      <span style="
                     
                      position: relative;
                      top: 22px;;" class="multiply-quantity"></span>  <h5 class="card-text price pricex" data-price="{{$dd->price}}">
                            {{$dd->price}}<span class="text">AED</span>
                          </h5>


                    <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i>
                      <div class = "container" style="left: 24px;
                      position: relative;
                      margin-top: -38px;
                      margin-bottom: 46px;">
                            <button type="button" data-decrease class="inbtn">-</button>
                            <input name="packageQuantity[]"  data-value type="text" value="1" style="width: 21px; border:none;">
                            <button type="button" data-increase class="inbtn">+</button>
                            <small>Quantity</small>
                        </div></p> 

                    

                        <div class="row">
                        <div class="col-md-4" style="">  

                        <label>Check In:</label>
                        <input type="text"  name="start_date[]" class="opencalender"   id="startDate" style="border-radius: 5px;
                         border: 1px solid lightgrey;" readonly>
                       </div>
                        <div class="col-md-4" style="">
                          <label>Check Out</label>
                        <input type="text"  style="border-radius: 5px;
                         border: 1px solid lightgrey;"  name="end_date[]" class="opencalender"  id="endDate" readonly>
                         </div>
                       </div>

                        <div id="calendar" class="calendershowhide" style="margin-bottom:100px; display:none;"></div>
                        <br>
                        <br>
                        <br>

              <div class="row" style="margin-top: -45px;
               margin-bottom: -5px;">
              <div class="col-md-4">
              <label>Lead Guest Name:</label>
              <input type="text"  style="border-radius: 5px;
               border: 1px solid lightgrey;" name="guest_name" >

              <label>Phone No:</label>
              <input type="text"  style="border-radius: 5px;
               border: 1px solid lightgrey;"  name="Phone_no" >

              <br>

              </div>

            <div class="col-md-4">
           

@if($dd->adults)
@for ($i = 0; $i < $dd->adults; $i++)
    <label for="adults">Adult Age {{ $i + 1 }}:</label>
    <input type="number" style="border-radius: 5px;
             border: 1px solid lightgrey;" id="adults age{{ $i }}" name="adults[]" min="0" value="">
@endfor

@endif


@if($dd->children)

@for ($i = 0; $i < $dd->children; $i++)
    <label for="children">Child Age {{ $i + 1 }}:</label>
    <input type="number" style="border-radius: 5px;
             border: 1px solid lightgrey;" id="children age{{ $i }}" name="children[]" min="0" value="">
@endfor

@endif

            </div>
            </div>
       
                </div>
            </div>
        </div>
    </div>

    
  @endforeach

  


    <div class=" mb-3  mb-3">
      <div class="row d-flex justify-content-center">
          <div class="col-md-5">
            <p class="py-2 mx-3">Apply Promocode</p>
            <div class="form p-3">
              <div class="input-container" style="border:1px solid gray; border-radius:10px;">
                <img src="{{asset(url('images/Group.png'))}}" alt="Image">
                <input type="text" id="promoInput" placeholder="Apply" style="border:none">
              </div> 
            </div>
            
          </div>
          <div class="col-md-7 ">
              <div class="card-body totlx">
                <div class="row ">
                  <div class="col-md-6">
                    <p class="text-start">Total</p>
                    <p class="text-start">Promo Code</p>
                    <p class="text-start">Total Savings</p>
                
                  </div>
                  <div class="col-md-6">
                   <p class="text-end pricex" style="color:#FF3500">{{$dd->price}} AED</p>
                    <p class="text-end" id="result" style="color:#FF3500">00</p>
                    <p class="text-end"  id="2result" style="color:#FF3500">00</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p class="text-end">SUb Total</p>
                  </div>
                  <div class="updated-price col-md-6">
                        <span class="text-end">{{$dd->price}}</span>
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
   
   $('.opencalender').click(function(){

    $('.calendershowhide').show();

   });
   

$(document).ready(function() {
    $('#promoInput').on('input', function() {
        var code = $(this).val();
        
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: '/promo',
            type: 'POST',
            data: { promoCode: code },
            success: function(response) {
                var discount = 0; // Default discount is 0 if response.data is null or undefined

                if (response.data !== null && response.data !== undefined) {
                    discount = parseFloat(response.data.discount);
                    $('#result').text(discount.toFixed(2));
                     // Update with the discount value
                    $('#2result').text(discount.toFixed(2)); // Update with the discount value
                } else {
                    $('#result').text(''); // Empty the result if data is null or undefined
                }

                // Calculate the updated price after applying the discount
                var priceElement = $('.pricex[data-price]');
                var price = parseFloat(priceElement.attr('data-price'));
                var quantity = parseInt($('[data-value]').val());

                if (!isNaN(price) && !isNaN(quantity) && quantity >= 1) {
                    var total = price * quantity;
                    var updatedPrice = total - discount;

                    // Update the new div with the updated price
                    var updatedPriceElement = $('.updated-price');
                    updatedPriceElement.html(updatedPrice.toFixed(2) + '<span class="text">AED</span>');
                }
            },
            error: function(error) {
                console.error('Error:', error);
                // Handle the error if the server request fails
            }
        });
    });
});


  </script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var startDateInput = document.getElementById('startDate');
    var endDateInput = document.getElementById('endDate');

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
                    var selectedDate = new Date(info.startStr);
                    var currentDate = new Date();

                    // Check if the selected date is before today's date
                    if (selectedDate < currentDate) {
                        // Deselect the date and prevent further processing
                        calendar.unselect();
                        return;
                    }

                    var selectedEvent = events.find(event => event.start === info.startStr);
                    startDateInput.value = info.startStr;
                    endDateInput.value = info.endStr;

                    // Update the price in the corresponding <h5> element
                    var priceElement = document.querySelector('.pricex');
                    if (priceElement) {
                        var selectedDatePrice = selectedEvent.price;
                        priceElement.innerHTML = selectedDatePrice + '<span class="text">AED</span>';
                        priceElement.setAttribute('data-price', selectedDatePrice);
                    }
                },
                events: events // Use the events array containing the price data
            });
            calendar.render();
        })
        .catch(error => {
            console.error('Error fetching price data:', error);
        });
});

</script>

<script>
 $(function() {
    $('[data-decrease]').click(decrease);
    $('[data-increase]').click(increase);
    $('[data-value]').change(valueChange);
});

function decrease() {
    var valueElement = $(this).parent().find('[data-value]');
    var currentValue = parseInt(valueElement.val());

    if (currentValue > 1) {
        currentValue--;
    } else {
        currentValue = 1;
    }

    valueElement.val(currentValue);
    updatePrice();
}

function increase() {
    var valueElement = $(this).parent().find('[data-value]');
    var currentValue = parseInt(valueElement.val());

    if (currentValue < 100) {
        currentValue++;
        valueElement.val(currentValue);
    }

    updatePrice();
}

function valueChange() {
    var value = $(this).val();
    if (value == undefined || isNaN(value) || value <= 1) {
        $(this).val(1);
    } else if (value >= 101) {
        $(this).val(100);
    }

    updatePrice();
}

function updatePrice() {
    var priceElement = $('.pricex[data-price]');
    var price = parseFloat(priceElement.attr('data-price'));
    var quantity = parseInt($('[data-value]').val());

    if (!isNaN(price) && !isNaN(quantity) && quantity >= 1) {
        var total = price * quantity;

        // Update the new div with the updated price
        var updatedPriceElement = $('.updated-price');
        updatedPriceElement.html(total.toFixed(2) + '<span class="text">AED</span>');

        // Get the current value of #result
        var resultValue = parseFloat($('#result').text());
        if (!isNaN(resultValue)) {
            var updatedPrice = total - resultValue;

            // Update the updatedPriceElement with the calculated updated price
            updatedPriceElement.html(updatedPrice.toFixed(2) + '<span class="text">AED</span>');
        }

        // Update the multiply-quantity span
        var multiplyQuantityElement = $('.multiply-quantity');
        multiplyQuantityElement.html(quantity + ' * ');
    }
}



</script>


    @endpush




@if(Session::get('successdataadded'))
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

 Swal.fire('Item Deleted Successfully')

</script>


<?php

Session::forget('successdataadded');


?>


@endif

@endsection

