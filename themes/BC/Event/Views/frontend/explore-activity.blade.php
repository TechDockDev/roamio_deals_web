
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


  <center><h3  class="title" style="margin-top: 43px;">Explore UAE <span style="color: #FE9000;">Activities!</span></h3></center>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%;">
        </div>
       
    </div>
  </div>
 
  <div class="container">
    <div class="row">
     <h4 class="py-2 mx-3">Categories</h4> 
    </div>
    {{-- <div class="row">
        <div class="col-md-2">
            <div class="card" style="border-radius:10px;">
                <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%;height:150px; border-radius:10px;">
            </div>
            </div>  
        <div class="col-md-2" >
            <div class="card" style="border-radius:10px;">
                <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%;height:150px; border-radius:10px;">
            </div>
            </div> 
        <div class="col-md-2" >
            <div class="card" style="border-radius:10px;">
                <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%;height:150px; border-radius:10px;">
            </div>
        </div>   
        <div class="col-md-2" >
            <div class="card" style="border-radius:10px;">
                <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%;height:150px; border-radius:10px;">
            </div>
        </div> 
        <div class="col-md-2" >
            <div class="card" style="border-radius:10px;">
                <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%;height:150px; border-radius:10px;">
            </div>
            </div>  
        <div class="col-md-2" >
            <div class="card" style="border-radius:10px;">
                <img src="{{asset('images\benner-img.png')}}" alt="" srcset="" style="width:100%; height:150px; border-radius:10px;">
            </div>
            </div>    
    </div> --}}
    <div class="row"> 
      @foreach($fetch as $cat)
       <div class="col-md-3">
           <div class="column Top Trending In Dubai">
              <div class="card1" style="position: relative;">
                  <div class="categories1" style="position: relative;">
                      <img src="{{$cat->banner_image }}" alt="" srcset="" style="height:200px; width:100%; border-radius:10px;">
                      <h2 class="heading" style="position: absolute; top: 76%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; width: 100%; font-weight: 900;">{{ $cat->name }}</h2>
                  </div>
              </div>
           </div>
      </div>
      @endforeach
  </div>
    
</div>

@foreach($data as $datas)

<div class="container mt-5">
   <div class="row">
    <h4  class="title mx-3" style="margin-top:43px;">{{$datas['parent_name']}}</h4> 
   </div>
   <div class="row">

       @foreach($datas['events'] as $dt)

      
        <div class="col-md-4">
            <div class="card"  style="border-radius: 10px;">
                <div class="Daily-Deals1" style="position: relative;">
                   <a href = "{{url('/event/'.$dt->slug)}}"> <img src="{{ $dt->banner_image }}" style="height:200px; width:100%; border-radius: 10px;"></a>
                  <span class="fa fa-heart fa-3x fass" style=" 
                 
                    right: 10px;
                    color: white;
                    text-shadow: 1px 1px 2px black;
                    top: -188px;
                    padding: 6px 6px;
                    border-radius:30px;">
                </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $dt->title}}</h5>
                  <p class="card-text">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                    {{ $dt->address}}</p></span>
                    <p><span class="btn btn-light Daily-btn">{{$dt->review_score}} </span> (4) </span><span> Excellent </span></p>
                  <p><span style="font-size:25px; color:black;">{{$dt->price}}</span><span style="font-size:25px;"> AED </span> <span class="btn btn-light Daily-btn">{{$dt->discount}}% OFF</span></p>
                </div>
              </div>
        </div>

        @endforeach
    </div>
</div>

@endforeach


 
 
 <div class="container">
    <div class="row">
        <h4  class="title mx-3">Explore the peak of Dubai</h4>
    </div>
	<div class="row">  
		<div id="filtering">
			<button class="bttn active" onclick="geeksportal('all')">Show all</button>
			<button class="bttn" onclick="geeksportal('Top Trending In Dubai')">Dubai</button>
			<button class="bttn" onclick="geeksportal('Top Discount')">Fujairah</button>
			<button class="bttn" onclick="geeksportal('Top Rated')">Ajman</button>
			<button class="bttn" onclick="geeksportal('Top Selling')">Umm Al quwain</button>
			<button class="bttn" onclick="geeksportal('Top Selling')">Ras al khaimah</button>
            <button class="bttn" onclick="geeksportal('Top Selling')">Abu dhabi</button>
            <button class="bttn" onclick="geeksportal('Top Selling')">Sharjah</button>
		</div>
	</div>

    <div class="row">
        <h5  class="title  mx-3">Categories</h5>
    </div>
    

	<div class="row"> 
    <div class="col-md-3">
        <div class="column Top Trending In Dubai">
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
    <div class="col-md-3">
        <div class="column Top Discount">
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
    <div class="col-md-3">
        <div class="column Top Rated">
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
    <div class="col-md-3">
        <div class="column Top Selling">
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