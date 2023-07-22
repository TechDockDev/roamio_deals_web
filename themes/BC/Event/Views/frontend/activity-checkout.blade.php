@extends('layouts.app')
@push('css')
    <link href="{{ asset('dist/frontend/module/event/css/event.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <style>
    
   .title{
    font-weight: 800;
    }
    .fa{
     color:#FF3500;
    }
    .star-item {
     margin-top: -20px;
    }
    .act-img{
        padding:20px; 
        border-radius: 30px;
    }
    .act-btn{
        float: right;
    color: white;
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    position: relative;
    top: 52px;
    }
    
    .increment{
     border: 1px solid red;
    border-radius: 17px;
    width: 25px;
    background: white;
    }
    .totl{
        background:#FFF3E3;border-top-right-radius: 11px;
       border-top-left-radius: 11px;
    }
    .totl1{
        background:#FFF3E3;border-bottom-right-radius: 11px;
       border-bottom-left-radius: 11px;
    }
   


  </style>

@endpush
@section('content')
 <div class="container mt-3">
     <div class="row">
      <h4 class="title py-3 mx-3">{{$data->title}}</h4>
    </div>
</div>
<div class="container star-item">
<p><span>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</span>
<span>(4 reviews) Excellent</span>
</p>
<p><i class="fa fa-location"></i> Dubai</p>
</div>


<?php

$value = request()->quantity;


?>




<div class="container mt-3 card">
<div class="row">
  <div class="col-md-4">
   <div class="card" style="border:none;">

    <?php

    $image = DB::table('media_files')->where('id',$data->image_id)->first();


    ?>

    <img src="{{asset('uploads/'.$image->file_path)}}" alt="" srcset=""  class="act-img">


  </div>
  </div>
  <div class="col-md-8">
 
    <h6 class="pt-4">{{$data->title}}</h6>
    <p><span style="color:#FF3500" id="realupcomingPrice" class="price pricex" data-price="{{$data->price}}">{{$data->price}}</span><span> AED/person </span></p>
    <p>Quantity
        <span>
      <button onclick="decrement()" class="increment">-</button>
<input type="number" value="{{$value}}" data-value="{{$value}}" id="value" value="0" readonly style="width: 32px;
         border: none; 
        position: relative;
        left: 4px; 
        padding: 1px 0px;">
<button onclick="increment()" class="increment">+</button>


    </span></p>
 <p id="finalPrice"></p>

    <div class="row">
        <div class="col-md-6">
            <label> Select Date </label>
             <input type="text" name="activityDAte" class="form-control" id="activityBookDate" aria-describedby="emailHelp" placeholder="Travel Dates" pattern="\d{2}/\d{2}/\d{4}">
        </div>
        <div class="col-md-6">
            <label>Apply Promocode </label>
            <input id="promoInput" class="form-control" type="text">
        </div>
    </div>
     <h6 class="pt-3">Pricing</h6>
     <div class="row pt-3 totl">
        <div class="col-md-6">
             <p class="text-end">Total</p>
             <p class="text-end">Promo Code</p>
             <p class="text-end">Total Saving</p>
            
        </div>
        <div class="col-md-6 text-end">
            <p class="text-end" id="totalPrice">{{$data->price * $value}}</p>
            <p class="text-end" id="result" style="color:#FF3500">00</p>
            <p class="text-end" id="2result" style="color:#FF3500">00</p>
          
       </div>
    </div>
       <div class="row mb-2 totl1">
        <div class="col-md-6 ">
          <p class="text-end text-bold">Sub Total</p>
        </div>
      <div class="col-md-6 text-end">
    <p class="text-end updated-price">AED {{$data->price * $value}}</p>
  
</div>
     </div>
     <div class="row">
        <div class="col-md-12">
         <button class="btn btn-light act-btn">Save</button>
        </div>
     </div>
 
</div>

</div>
</div>


  <script>
    var valueField = document.getElementById("value");

    function increment() {
      var value = parseInt(valueField.value);
      value++;
      valueField.value = value;
    }

    function decrement() {
      var value = parseInt(valueField.value);
      value--;
      valueField.value = value;
    }


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

                    $('#2result').text(discount.toFixed(2));

                } else {

                    $('#result').text('');
                     // Empty the result if data is null or undefined
                }

                var priceElement = $('.pricex[data-price]');
                 
                var price = parseFloat(priceElement.attr('data-price'));
                
                var quantity = parseInt($('[data-value]').val());

                if (!isNaN(price) && !isNaN(quantity) && quantity >= 1) {
                    var total = price * quantity;
                    var updatedPrice = total - discount;

                    // Update the new div with the updated price
                    var updatedPriceElement = $('.updated-price');
                    updatedPriceElement.html('AED ' + updatedPrice.toFixed(2));

                    // Subtract the #realupcomingPrice from the updatedPrice
                    var realUpcomingPriceElement = $('#realupcomingPrice');
                    var realUpcomingPrice = parseFloat(realUpcomingPriceElement.attr('data-price'));
                    var finalPrice = updatedPrice - realUpcomingPrice;

                    // Update the final price in the span
                    var finalPriceElement = $('#finalPrice');
                    finalPriceElement.html('AED ' + finalPrice.toFixed(2));
                }
            },
            error: function(error) {
                console.error('Error:', error);
                // Handle the error if the server request fails
            }
        });
    });
});


 function updateTotalPrice() {
        var priceElement = $('#realupcomingPrice');
        var price = parseFloat(priceElement.attr('data-price'));
        var quantity = parseInt($('#value').val());

        if (!isNaN(price) && !isNaN(quantity) && quantity >= 1) {
            var total = price * quantity;

            // Update the totalPrice element with the calculated value
            var totalPriceElement = $('#totalPrice');
            totalPriceElement.text('AED ' + total.toFixed(2));

            // Subtract the result value from the total price
            var resultValue = parseFloat($('#result').text());
            var finalPrice = total - resultValue;

            // Update the updated-price element with the final price
            var updatedPriceElement = $('.updated-price');
            updatedPriceElement.text('AED ' + finalPrice.toFixed(2));
        }
    }

    function increment() {

        var valueElement = $('#value');
        var currentValue = parseInt(valueElement.val());

        // Increment the value
        valueElement.val(currentValue + 1);
        updateTotalPrice();
    }

    function decrement() {
        var valueElement = $('#value');
        var currentValue = parseInt(valueElement.val());

        // Decrement the value
        if (currentValue > 0) {
            valueElement.val(currentValue - 1);
        }
        updateTotalPrice();
    }

   
    updateTotalPrice();

</script>


@endsection