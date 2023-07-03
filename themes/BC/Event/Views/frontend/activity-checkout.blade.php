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
      <h4 class="title py-3 mx-3">Cheers or High Tea at The View At The Palm</h4>
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

<div class="container mt-3 card">
<div class="row">
  <div class="col-md-4">
   <div class="card" style="border:none;">
    <img src="https://media.istockphoto.com/id/506472311/photo/sunrise.jpg?s=612x612&w=0&k=20&c=SuDedU0KOEe19hk-zFAV7CuUmOLrudxqjwjLtzY53Ec=" alt="" srcset=""  class="act-img">
  </div>
  </div>
  <div class="col-md-8">
 
    <h6 class="pt-4">High Tea by St Regis at The View at The Palm for 1 person</h6>
    <p><span style="color:#FF3500"> 275 </span><span> AED/person </span></p>
    <p>Quantity
        <span>
        <button onclick="decrement()" class="increment">-</button>
        <input type="number" id="value" value="0" readonly style="width: 32px;
         border: none; 
        position: relative;
        left: 4px; 
        padding: 1px 0px;">
        <button onclick="increment()" class="increment">+</button>
    </span></p>

    <div class="row">
        <div class="col-md-6">
            <label> Select Date </label>
            <input class="form-control" type="date">
        </div>
        <div class="col-md-6">
            <label>Apply Promocode </label>
            <input class="form-control" type="date">
        </div>
    </div>
     <h6 class="pt-3">Pricing</h6>
     <div class="row pt-3 totl">
        <div class="col-md-6">
             <p class="text-start">Total</p>
             <p class="text-end">Promo Code</p>
             <p class="text-end">Roamio Credits</p>
             <p class="text-end">Total Saving</p>
             <p class="text-end">TAX</p>

        </div>
        <div class="col-md-6 text-end">
            <p class="text-start">AED 747.00</p>
            <p class="text-end" style="color:#FF3500">AED 747.00</p>
            <p class="text-end" style="color:#FF3500">-AED 5.00</p>
            <p class="text-end" style="color:#FF3500">-AED 125.00</p>
            <p class="text-end">AED 7.00</p>
       </div>
    </div>
       <div class="row mb-2 totl1">
        <div class="col-md-6 ">
          <p class="text-end text-bold" >Sub Total</p>
        </div>
       <div class="col-md-6 text-end">
         <p class="text-end">AED 522.30</p>
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
  
</script>


@endsection