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
   </style>


<div class="bravo_single_book_wrap @if(setting_item('event_enable_inbox')) has-vendor-box @endif">
    <div class="bravo_single_book"  style="border:#FF3500;">
        <div id="bravo_event_book_app" v-cloak>
            {{-- @if($row->discount_percent)
                <div class="tour-sale-box">
                    <span class="sale_class box_sale sale_small">{{$row->discount_percent}}</span>
                </div>
            @endif --}}
            {{-- <div class="form-head">
                <div class="price">
                    <span class="label">
                        {{__("from")}}
                    </span>
                    <span class="value">
                        <span class="onsale">{{ $row->display_sale_price }}</span>
                        <span class="text-lg">{{ $row->display_price }}</span>
                    </span>
                </div>
            </div> --}}
            {{-- <div class="nav-enquiry" v-if="is_form_enquiry_and_book">
                <div class="enquiry-item active" >
                    <span>{{ __("Book") }}</span>
                </div>
                <div class="enquiry-item" data-toggle="modal" data-target="#enquiry_form_modal">
                    <span>{{ __("Enquiry") }}</span>
                </div>
            </div> --}}
            {{-- <div class="form-book" :class="{'d-none':enquiry_type!='book'}">
                <div class="form-content">
                    <div class="form-group form-date-field form-date-search clearfix " data-format="{{get_moment_date_format()}}">
                        <div class="date-wrapper clearfix" @click="openStartDate">
                            <div class="check-in-wrapper">
                                <label>{{__("Start Date")}}</label>
                                <div class="render check-in-render">@{{start_date_html}}</div>
                            </div>
                            <i class="fa fa-angle-down arrow"></i>
                        </div>
                        <input type="text" class="start_date" ref="start_date" style="height: 1px; visibility: hidden">
                    </div>
                    <div class="" v-if="ticket_types">
                        <div class="form-group form-guest-search" v-for="(type,index) in ticket_types">
                            <div class="guest-wrapper d-flex justify-content-between align-items-center" :class="{'item-disable':type.max==0}">
                                <div class="flex-grow-1">
                                    <label>@{{type.name}}</label>
                                    <div class="render check-in-render">@{{type.desc}}</div>
                                    <div class="render check-in-render">@{{type.display_price}} {{__("per ticket")}}</div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="input-number-group">
                                        <i class="icon ion-ios-remove-circle-outline" @click="minusPersonType(type)"></i>
                                        <span class="input"><input type="number" v-model="type.number" min="1" @change="changePersonType(type)"/></span>
                                        <i class="icon ion-ios-add-circle-outline" @click="addPersonType(type)"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section-group form-group" v-if="booking_time_slots">
                        <h4 class="form-section-title">{{__('Start Time:')}}</h4>
                        <div class="slots-wrapper d-flex justify-content-start flex-wrap">
                            <div @click="selectStartTime(time)" :class="{'btn-success':isInArray(time) == true}" v-for="(time,index) in booking_time_slots" class="btn btn-sm mr-2 mb-2 w-25">@{{time}}</div>
                        </div>
                    </div>
                    <div class="form-section-group form-group" v-if="extra_price.length">
                        <h4 class="form-section-title">{{__('Extra prices:')}}</h4>
                        <div class="form-group" v-for="(type,index) in extra_price">
                            <div class="extra-price-wrap d-flex justify-content-between">
                                <div class="flex-grow-1">
                                    <label><input type="checkbox" true-value="1" false-value="0" v-model="type.enable"> @{{type.name}}</label>
                                    <div class="render" v-if="type.price_type">(@{{type.price_type}})</div>
                                </div>
                                <div class="flex-shrink-0">@{{type.price_html}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section-group form-group-padding" v-if="buyer_fees.length">
                        <div class="extra-price-wrap d-flex justify-content-between" v-for="(type,index) in buyer_fees">
                            <div class="flex-grow-1">
                                <label>@{{type.type_name}}
                                    <i class="icofont-info-circle" v-if="type.desc" data-toggle="tooltip" data-placement="top" :title="type.type_desc"></i>
                                </label>
                                <div class="render" v-if="type.price_type">(@{{type.price_type}})</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="unit" v-if='type.unit == "percent"'>
                                    @{{ type.price }}%
                                </div>
                                <div class="unit" v-else >
                                    @{{ formatMoney(type.price) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="form-section-total list-unstyled" v-if="total_price > 0">
                    <li>
                        <label>{{__("Total")}}</label>
                        <span class="price">@{{total_price_html}}</span>
                    </li>
                    <li v-if="is_deposit_ready">
                        <label for="">{{__("Pay now")}}</label>
                        <span class="price">@{{pay_now_price_html}}</span>
                    </li>
                </ul>
                <div v-html="html"></div>
                <div class="submit-group">
                    <a class="btn btn-large" @click="doSubmit($event)" :class="{'disabled':onSubmit,'btn-success':(step == 2),'btn-primary':step == 1}" name="submit">
                        <span>{{__("BOOK NOW")}}</span>
                        <i v-show="onSubmit" class="fa fa-spinner fa-spin"></i>
                    </a>
                    <div class="alert-text mt10" v-show="message.content" v-html="message.content" :class="{'danger':!message.type,'success':message.type}"></div>
                </div>
            </div> --}}



    <?php

    $cc = request()->slug;

    $hotel = DB::table('bravo_events')->where('slug',$cc)->first();

    $room = DB::table('activity_packages')->where('parent_id',$hotel->id)->get();
  
    ?>
             <form id ="packagesForm">
                        @csrf
               
<div class="bravo-list-hotel-related-widget">
        <h5  style="margin-top:-23px;">Packages</h5>
        @if(count($room) > 0)
        @foreach($room as $rooms)
            <div class="card mb-3">
                <div class="card-body">

                   <input type="text"  style="display:none;"  name="package_name[]" value="{{$rooms->title}}">


                   <input type="text"  style="display:none" name = "product_id[]" value="{{$hotel->id}}">

                    <input type ="text" style="display:none;" id="packagesId" name ="id[]" value="{{$rooms->id}}">

                    <input type ="text" style="display:none;" id = "parentnameofpackages" name ="type[]" value="event">

                <input type ="text" style="display:none;" id = "xparentnameofpackages" name ="price[]" value="{{ number_format($rooms->price - $rooms->discount_price, 2) }}">




                    <p class="card-title">{{ $rooms->title }}</p>
                    <p class="card-text">
                        <span class="text-item2">{{ $rooms->price }} AED</span>
                        <span class="text-item">
    <?php
     $originalPrice = $rooms->price;
     $discountAmount = $rooms->discount_price;
     $discountPercentage = ($discountAmount / $originalPrice) * 100;
     $formattedDiscountPercentage = number_format($discountPercentage, 2);
    ?>

                    {{ $formattedDiscountPercentage }}%

                        </span>
                        <br>
                        <span class="text-black">{{ number_format($rooms->price - $rooms->discount_price, 2) }}</span>
                        <small>AED </small>
                    </p>
                    <p>
                        <div class="container">
                            <button type="button" data-decrease class="inbtn">-</button>
                            <input name="packageQuantity[]"  data-value type="text" value="0" style="width: 21px; border:none;">
                            <button type="button" data-increase class="inbtn">+</button>
                            <small>Quantity</small>
                        </div>
                    </p>


                </div>
            </div>
        @endforeach


                     </form>
    @else
        <p>No data found.</p>
    @endif
    

    <?php 
      
      if(auth()->check())
      {
       $user_id = auth()->user()->id;

      }else{

        $user_id = null;
      }
     
      

    ?>

       @if($user_id == null)
       
        <button class="btn btn-light btn-text w-100 mb-3" data-toggle="modal" data-target="#login">Quick Checkout</button>


        <button class="btn btn-light w-100 card-btn mb-3" data-toggle="modal" data-target="#login">Add to Cart</button> 
          
          @else

         <button class="btn btn-light btn-text w-100 mb-3">Quick Checkout</button>


    <button type="button" id ="cartSubmitButton" class="btn btn-light w-100 card-btn mb-3">Add to Cart</button> 


          @endif

    </div>
    
            <div class="form-send-enquiry" v-show="enquiry_type=='enquiry'">
                <button class="btn btn-primary" data-toggle="modal" data-target="#enquiry_form_modal">
                    {{ __("Contact Now") }}
                </button>
            </div>
        </div>
    </div>
</div>

@include("Booking::frontend.global.enquiry-form",['service_type'=>'event'])



<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
$(document).ready(function() {
   
    $("#cartSubmitButton").click(function(e) {
        e.preventDefault(); 

        $.ajax({
            type: "POST", 
            url: "/adding-to-cart", 
            data: $("#packagesForm").serialize(), 
            success: function(response) {
              
                if(response.status == true)
                {

                    alert("data added to cart successfully");
                }else if(response.status == false)
                {

                    
                  alert("Please select Packages Quantity");

                }else{

                        alert("Please sign In first for adding to cart");
                }
            },
            error: function(xhr, status, error) {
                
                console.error("Error submitting the form:", error);
            }
        });
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
  var value = $(this).parent().find('[data-value]');
  var currentValue = parseInt(value.val());

  if (currentValue > 1) {
    currentValue--;
  } else {
    currentValue = 0;
  }

  value.val(currentValue);
}

function increase() {
    var value = $(this).parent().find('[data-value]').val();
    if(value < 100) {
        value++;
        $(this).parent().find('[data-value]').val(value);
    }
}

function valueChange() {
    var value = $(this).val();
    if(value == undefined || isNaN(value) == true || value <= 0) {
        $(this).val(0);
    } else if(value >= 101) {
        $(this).val(100);
    }
}
</script>