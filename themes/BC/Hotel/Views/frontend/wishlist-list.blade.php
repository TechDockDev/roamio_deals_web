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
<div class="container mt-3">
    <div class="row">
     <h4  class="title py-3 mx-3 text-center" >Wishlist</h4>
    </div>
    <div class="row mb-4">

      <?php


 $wishlist = DB::table('user_wishlist')
    ->where('user_id', auth()->user()->id)
    ->where('object_model', 'hotel')
    ->get();

$staycation = [];

foreach ($wishlist as $stay) {
    $hotel = DB::table('bravo_hotels')->where('id', $stay->object_id)->first();
    $bannerImage = DB::table('media_files')->select('file_path')->where('id', $hotel->banner_image_id)->first();

    $staycation[] = [
        'hotel' => $hotel,
        'file_path' => '/uploads/'.$bannerImage->file_path ?? null,
    ];
}


 $xxwishlist = DB::table('user_wishlist')
    ->where('user_id', auth()->user()->id)
    ->where('object_model','event')
    ->get();

$activitiesall = [];

foreach ($xxwishlist as $xstay) {
    $xhotel = DB::table('bravo_events')->where('id', $xstay->object_id)->where('deleted_at',null)->first();

    if($xhotel)
    {

           $xbannerImage = DB::table('media_files')->select('file_path')->where('id', $xhotel->banner_image_id)->first();
    }
 

    $file_path = null;
    if ($xbannerImage) {
        $file_path = '/uploads/' .$xbannerImage->file_path;
    }

    $activitiesall[] = [
        'hotel' => $xhotel,
        'file_path' => $file_path,
    ];
}

 


                ?>
      
      @if(count($staycation) > 0)

    <div class="row">
     <h4  class="title py-3 mx-3 text-center btn btn-light Daily-btn" >Staycation</h4>
    </div>


    @foreach($staycation as $wishlist)
        <div class="col-md-4">
            <div class="card" style="border-radius: 10px;">
                <div class="Daily-Deals1" style="position: relative;">
                    <img src="{{ $wishlist['file_path']}}" style="height:200px; width:100%; border-radius: 10px;">
                  <!--   <span class="fa fa-heart fa-3x fass" style=" 
                        right: 10px;
                        color: white;
                        text-shadow: 1px 1px 2px black;
                        top: -188px;
                        padding: 6px 6px;
                        border-radius:30px;">
                    </span> -->
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{  $wishlist['hotel']->title }}</h5>
                    <p class="card-text">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $wishlist['hotel']->address }}</p></span>
                    <p>
                        <span class="btn btn-light Daily-btn">4.2 </span> (4)
                        </span><span> Excellent </span>
                    </p>
                    <p>
                        <span style="font-size: 25px; color: black;">{{ $wishlist['hotel']->price }}</span>
                        <span style="font-size: 25px;"> AED </span>
                        <span class="btn btn-light Daily-btn">23% OFF</span>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center  mx-3">No data found.</p>
@endif

 
  @if(count($activitiesall) > 0)
    <div class="row" style="margin-top:14px;">
     <h4  class="title py-3 mx-3 text-center btn btn-light Daily-btn" >Activities</h4>
    </div>


    @foreach($activitiesall as $wishlist)
        <div class="col-md-4">
            <div class="card" style="border-radius: 10px;">
                <div class="Daily-Deals1" style="position: relative;">
                    <img src="{{ $wishlist['file_path']}}" style="height:200px; width:100%; border-radius: 10px;">
                    <!-- <span class="fa fa-heart fa-3x fass" style=" 
                        right: 10px;
                        color: white;
                        text-shadow: 1px 1px 2px black;
                        top: -188px;
                        padding: 6px 6px;
                        border-radius:30px;">
                    </span> -->
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $wishlist['hotel']->title }}</h5>
                    <p class="card-text">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $wishlist['hotel']->address }}</p></span>
                    <p>
                        <span class="btn btn-light Daily-btn">4.2 </span> (4)
                        </span><span> Excellent </span>
                    </p>
                    <p>
                        <span style="font-size: 25px; color: black;">{{ $wishlist['hotel']->price }}</span>
                        <span style="font-size: 25px;"> AED </span>
                        <span class="btn btn-light Daily-btn">23% OFF</span>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center  mx-3">No data found.</p>
@endif

  
  
  
 









        
 </div>
 
     <div class="bravo-list-news">
     <div class="container">
        <div class="row">
        <div class="col-md-6">
              <div class="card1">
                <div class="destination-item">
                    <div class="image">
                    <div class="effect"></div>
                     <div class="content">
                        
                        <small class="text2">Experience Better</small>
                        <h4 class="title text1">Top Staycation Around UAE</h4>
                          <div class="desc">                                                                                                                                                                                                                                             
                         <a href="http://127.0.0.1:8000/hotel?location_id=11" class="btn btn-light butn" target="_blank"> 
                            Explore
                         </a> 
                        </div>
                      </div>
                </div>
            </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card1"> 
                <div class="destination-item">
                    <div class="image1">
                    <div class="effect"></div>
                    <div class="content">
                        
                        <small class="text2">Experience More</small>
                        <h4 class="title text1">Top Activities Around UAE</h4>
                          <div class="desc">                                                                                                                                                                                                                                             
                         <a href="http://127.0.0.1:8000/hotel?location_id=11" class="btn btn-light butn" target="_blank"> 
                            Explore
                         </a> 
                        </div>
                      </div>
                </div>
            </div>
              </div>
        </div>
      </div>
      </div>
    </div>
    
     <div class="container mt-5 pt-5 mb-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card1">
                    <img src="images/Frame_1.svg" class="card-img-top" alt="...">
                    {{-- <div class="card-body">
                        <h5 class="card-title">Best Price Guarantee</h5>
                        <p class="card-text">Best Recommendations according to your Interest</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card1">
                    <img src="images/Frame_2.png" class="card-img-top" alt="...">
                    {{-- <div class="card-body">
                        <h5 class="card-title">Best Offer</h5>
                        <p class="card-text">Best Recommendations according to your Interest and offers.</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card1">
                    <img src="images/Group2608634.svg" class="card-img-top" alt="..." style="height:64px">
                    <div class="card-body">
                        <h5 class="card-title pt-3" style="font-weight:900">Best Offer</h5>
                        <p class="card-text">Best Recommendations according to your Interest and offers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection

