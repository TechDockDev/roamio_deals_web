
@extends('layouts.app')
@push('css')
    <link href="{{ asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}"/>
    <style>
.categories{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;
  background-repeat: no-repeat;
  background-image: url("https://images.pexels.com/photos/5087165/pexels-photo-5087165.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");   
}
.heading{
    color: white;
    position: relative;
    top: 140px;
    text-align: center;
    font-size: 22px;
}
   

.Daily-Deals{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;"
  background-repeat: no-repeat;
  background-image: url("images/05102023125612645b946ceee0b.jpg");
}
.fass {
    font-size: 19px;
    color: white;
    float: right;
    position: relative;
    left: -17px;
    top: 9px;
}
.Daily-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
color:white;
padding: 4px 4px;
}

.image{
        background: url("images/img.png");
         height:400px;
         border-radius:10px;
    }
    .image1{
        background: url("images/img_1.png");
         height:400px;
         border-radius:10px;   
    }
    .text1{
        font-size: 30px;
    position: relative;
    top: 244px;
    left: 10px;
    color: white;
    }
    .text2{
        font-size: 16px;
    position: relative;
    top: 234px;
    left: 10px;
    color: white;   
    }
    .butn{
        position: relative;
    top: 241px;
    left: 10px;
}

</style>
@endpush
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  

.Daily-Deals{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;"
  background-repeat: no-repeat;
  background-image: url("images/05102023125612645b946ceee0b.jpg");
}
.fass {
    font-size: 19px;
    color: white;
    float: right;
    position: relative;
    left: -17px;
    top: 9px;
}
.Daily-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
color:white;
padding: 4px 4px;
}
/* Anchor tag decoration */
a {
    text-decoration: none;
    color: #5673C8;
}
  
a:hover {
    color: lightblue;
}
  
.row {
    margin: 0px -14px;
    padding: 8px;
}
  
.row>.column {
    padding: 6px;
}
  
.column {
    float: left;
    width: 100%;
    display: none;
}
  
/* Content decoration */
.content {
    /* background-color: white;
    padding: 10px;
    border: 1px solid gray; */
}
  
/* Paragraph decoration */
p {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    overflow: hidden;
}
  
.row:after {
    content: "";
    display: table;
    clear: both;
}
  
/* .content {
    background-color: white;
    padding: 10px;
    border: 1px solid gray;
} */
  
.show {
    display: block;
}
  
/* Style the filter buttons */
.bttn {
    border: none;
    padding: 8px 14px;
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color:white;
    border-radius:4px;
}
  
.bttn:hover {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    opacity: 0.8;
    color:white;
}
  
.bttn.active {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
}
  
/* Window size 850 width set */
/* @media screen and (max-width: 850px) {
    .column {
        width: 50%;
    }
} */
  
/* Window size 400 width set */
/* @media screen and (max-width: 400px) {
    .column {
        width: 100%;
    }
} */

.categories{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;
  background-repeat: no-repeat;
  background-image: url("https://images.pexels.com/photos/5087165/pexels-photo-5087165.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");   
}
.heading{
    color: white;
    position: relative;
    top: 140px;
    text-align: center;
    font-size: 22px;
}
   

</style>
  <center><h3  class="title" style="margin-top: 43px;">Explore UAE <span style="color: #FE9000;">Staycation</span></h3>
  
      <div class="title">
           <img src = "{{asset('uploads/0000/1/2023/07/04/banner.jpg')}}">
        </div>
        </center>
  
 
  
  
<div class="container mt-5">
    
   <div class="row">
    <h4  class="title" style="margin-top: 43px;">Best Deals On Staycation</h4>
  </div>
  
  <a href="" style="top: -32px;
    position: relative;
    left: -111px;
    float: right;"><h5>View All</h5></a>
  
  
   <div class="row">
        <div class="col-md-4">
            <div class="card"  style="border-radius: 10px;">
                <div class="Daily-Deals">
                <span class="fa fa-heart fa-3x fass"></span>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Burj Khalifa Observation Deck</h5>
                  <p class="card-text">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Al Ain</p></span>
                    <p><span class="btn btn-light Daily-btn">4.2 </span> (4) </span><span> Excellent </span></p>
                  <p><span style="font-size:25px; color:black;">1,800</span><span style="font-size:25px;"> AED </span> <span class="btn btn-light Daily-btn">23% OFF</span></p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card"  style="border-radius: 10px;">
                <div class="Daily-Deals">
                <span class="fa fa-heart fa-3x fass"></span>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Burj Khalifa Observation Deck</h5>
                  <p class="card-text">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Al Ain</p></span>
                    <p><span class="btn btn-light Daily-btn">4.2 </span> (4) </span><span> Excellent </span></p>
                  <p><span style="font-size:25px; color:black;">1,800</span><span style="font-size:25px;"> AED </span> <span class="btn btn-light Daily-btn">23% OFF</span></p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card"  style="border-radius: 10px;">
                <div class="Daily-Deals">
                <span class="fa fa-heart fa-3x fass"></span>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Burj Khalifa Observation Deck</h5>
                  <p class="card-text">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Al Ain</p></span>
                    <p><span class="btn btn-light Daily-btn">4.2 </span> (4) </span><span> Excellent </span></p>
                  <p><span style="font-size:25px; color:black;">1,800</span><span style="font-size:25px;"> AED </span> <span class="btn btn-light Daily-btn">23% OFF</span></p>
                </div>
              </div>
        </div>
   
   </div>
</div>



<div class="container">
    <div class="bravo-list-hotel layout_normal">
                <div class="title">
            StayCation
        </div>
        
         <a href="" style="top: -32px;
    position: relative;
    left: -111px;
    float: right;"><h5>View All</h5></a>
    
            <div class="sub-title">
                Hotel highly rated for thoughtful design
            </div>
                <div class="list-item">
                            <div class="row">
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="https://roamiogit.techdocklabs.com/hotel/hotel-roamio-khan">        
                    
                    <img src="https://roamiogit.techdocklabs.com/uploads/0000/1/2023/05/15/316127300.jpg" class="img-responsive" alt="">
        </a>
                <div class="service-wishlist " data-id="12" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="https://roamiogit.techdocklabs.com/hotel/hotel-roamio-khan">
                            Hotel Roamio Khan
        </a>
            </div>
    <div class="location">
                                Ras al khaimah
            </div>
            <div class="service-review">
        <span class="rate">
             2.3/5  <span class="rate-text">Poor</span>
        </span>
        <span class="review">
                             3 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$340 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="https://roamiogit.techdocklabs.com/hotel/hyatt-centric-victoria">
            
                    <img src="https://roamiogit.techdocklabs.com/uploads/demo/space/space-3.jpg" class="img-responsive" alt="">
                 
                         
        </a>
                <div class="service-wishlist " data-id="14" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="https://roamiogit.techdocklabs.com/hotel/hyatt-centric-victoria">
                            Hyatt Centric Victoria 
        </a>
            </div>
    <div class="location">
                                Sharjah
            </div>
            <div class="service-review">
        <span class="rate">
             1.5/5  <span class="rate-text">Poor</span>
        </span>
        <span class="review">
                             2 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$599 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="https://roamiogit.techdocklabs.com/hotel/jitendra-hotel">
            
                    <img src="https://roamiogit.techdocklabs.com/uploads/0000/1/2023/05/15/images.jpg" class="img-responsive" alt="">
                 
                         
        </a>
                <div class="service-wishlist " data-id="17" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="https://roamiogit.techdocklabs.com/hotel/jitendra-hotel">
                            Jitendra Hotel
        </a>
            </div>
    <div class="location">
                                Dubai
            </div>
            <div class="service-review">
        <span class="rate">
             1.5/5  <span class="rate-text">Poor</span>
        </span>
        <span class="review">
                             4 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$420 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="https://roamiogit.techdocklabs.com/hotel/sierra-hotel">
        
                    
                    <img src="https://roamiogit.techdocklabs.com/uploads/0000/1/2023/05/19/life-resort-hotel-resort-hotel-wallpaper-preview.jpeg" class="img-responsive" alt="">
                 
                         
        </a>
                <div class="service-wishlist " data-id="19" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="https://roamiogit.techdocklabs.com/hotel/sierra-hotel">
                            Sierra Hotel
        </a>
            </div>
    <div class="location">
                                Dubai
            </div>
            <div class="service-review">
        <span class="rate">
             0.0/5  <span class="rate-text">Terrible</span>
        </span>
        <span class="review">
                             2 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$650 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                    </div>
                                </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <h4  class="title">Explore the Staycation around UAE</h4>
    </div>
    <div class="row">  
        <div id="filtering">
     <button class="bttn active" onclick="geeksportal('all')">Dubai</button>
            <button class="bttn" onclick="geeksportal('Top Trending In Dubai')">Fujairah</button>
            <button class="bttn" onclick="geeksportal('Top Discount')">Ajman</button>
            <button class="bttn" onclick="geeksportal('Top Rated')">Umm Al quwain</button>
            <button class="bttn" onclick="geeksportal('Top Selling')">Sharjah</button>
            <button class="bttn" onclick="geeksportal('Top Rated')">Abu Dhabi</button>
            <button class="bttn" onclick="geeksportal('Top Selling')">Ras al khaimah</button>


        </div>
    </div>

   
    
       
    
<div class="container">
    <div class="bravo-list-hotel layout_normal">
                <div class="title">
          Top Rated  StayCation
        </div>
         <a href="" style="top: -32px;
    position: relative;
    left: -111px;
    float: right;"><h5>View All</h5></a>
            <div class="sub-title">
                Hotel highly rated for thoughtful design
            </div>
                <div class="list-item">
                            <div class="row">
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="https://roamiogit.techdocklabs.com/hotel/hotel-roamio-khan">        
                    
                    <img src="https://roamiogit.techdocklabs.com/uploads/0000/1/2023/05/15/316127300.jpg" class="img-responsive" alt="">
        </a>
                <div class="service-wishlist " data-id="12" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="https://roamiogit.techdocklabs.com/hotel/hotel-roamio-khan">
                            Hotel Roamio Khan
        </a>
            </div>
    <div class="location">
                                Ras al khaimah
            </div>
            <div class="service-review">
        <span class="rate">
             2.3/5  <span class="rate-text">Poor</span>
        </span>
        <span class="review">
                             3 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$340 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="{{url('hotel/hyatt-centric-victoria')}}">
            
                    
                    <img src="{{asset('uploads/demo/space/space-3.jpg')}}" class="img-responsive" alt="">
                 
                         
        </a>
                <div class="service-wishlist " data-id="14" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="{{url('hotel/hyatt-centric-victoria')}}">
                            Hyatt Centric Victoria 
        </a>
            </div>
    <div class="location">
                                Sharjah
            </div>
            <div class="service-review">
        <span class="rate">
             1.5/5  <span class="rate-text">Poor</span>
        </span>
        <span class="review">
                             2 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$599 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="{{url('hotel/jitendra-hotel')}}">
            
                    <img src="{{asset('uploads/0000/1/2023/05/15/images.jpg')}}" class="img-responsive" alt="">
                 
        </a>
                <div class="service-wishlist " data-id="17" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="{{url('hotel/jitendra-hotel')}}">
                            Jitendra Hotel
        </a>
            </div>
    <div class="location">
                                Dubai
            </div>
            <div class="service-review">
        <span class="rate">
             1.5/5  <span class="rate-text">Poor</span>
        </span>
        <span class="review">
                             4 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$420 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                            <div class="col-lg-3 col-md-6">
                            <style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>



<div class="item-loop ">
        <div class="thumb-image ">
        <a href="{{url('hotel/sierra-hotel')}}">
            
                    <img src="{{asset('uploads/0000/1/2023/05/19/life-resort-hotel-resort-hotel-wallpaper-preview.jpeg')}}" class="img-responsive" alt="">
                 
                         
        </a>
                <div class="service-wishlist " data-id="19" data-type="hotel">
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <div class="item-title">
        <a href="{{url('hotel/sierra-hotel')}}">
                            Sierra Hotel
        </a>
            </div>
    <div class="location">
                                Dubai
            </div>
            <div class="service-review">
        <span class="rate">
             0.0/5  <span class="rate-text">Terrible</span>
        </span>
        <span class="review">
                             2 Reviews
                    </span>
    </div>
        <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text">from</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white">$650 <span class="unit  text-white">/night</span></span>
            </div>
        </div>
    </div>
</div>
                        </div>
                                    </div>
                                </div>
    </div>
</div>
    
</div>
       

   <script>
        geeksportal("all")
  
function geeksportal(c) {
    var x, i;
  
    x = document.getElementsByClassName("column");
  
    if (c == "all") c = "";
  
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
  
        if (x[i].className.indexOf(c) > -1)
            w3AddClass(x[i], "show");
    }
}
  
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
  
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}
  
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}
  
// Add active class to the current
// button (highlight it)
var btnContainer = document.getElementById("filtering");
var btns = btnContainer.getElementsByClassName("bttn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
  
        var current =
            document.getElementsByClassName("active");
  
        current[0].className =
            current[0].className.replace(" active", "");
  
        this.className += " active";
    });
}
    </script> 
  
@endsection