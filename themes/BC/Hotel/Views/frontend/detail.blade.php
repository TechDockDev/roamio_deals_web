 <style>
    .Daily-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
   color:white;
padding: 4px 4px;
}
..fass {
    font-size: 19px;
    color: white;
    float: right;
    position: relative;
    left: -17px;
    top: 9px;
}
 </style>


@extends('layouts.app')
@push('css')
    <link href="{{ asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}"/>
@endpush
@section('content')
    <div class="bravo_detail_hotel">
        @include('Layout::parts.bc')
        @include('Hotel::frontend.layouts.details.hotel-banner')
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        @php $review_score = $row->review_data @endphp
                        @include('Hotel::frontend.layouts.details.hotel-detail')
                        @include('Hotel::frontend.layouts.details.hotel-review')
                    </div>
                    <div class="col-md-12 col-lg-3">
                        @include('Tour::frontend.layouts.details.vendor')
                        @include('Hotel::frontend.layouts.details.hotel-form-enquiry')
                        @include('Hotel::frontend.layouts.details.hotel-related-list')
                        <div class="g-all-attribute is_pc">
                            @include('Hotel::frontend.layouts.details.hotel-attributes')
                        </div>
                    </div>
                </div>
               
        
                    

                  
                     
                        <div class="row">
                           <h4 class="title" style="margin-top: 43px;">Recently Viewed Deals<span style="float:right; color:#FF3500; font-size:15px;">View All</span></h4>
                        </div>
                        <div class="row">
                            @foreach ($datas as $hotel)
                           <div class="col-md-4">
                              <div class="card mb-3" style="border-radius: 10px; padding: 10px; position: relative;">
                                 <div class="Daily-Deals1" style="position: relative;">
                                    <img src="{{ asset($hotel->bannerImage) }}" style="height:200px; width:100%; border-radius: 10px;">
                                     <span class="fa fa-heart fa-3x fass" style="position: absolute;
                                    top: 10px;
                                    right: 10px;
                                    color: white;
                                   
                                    left: 270px;
                                   
                                
                                    padding: 6px 6px;
                                    border-radius:30px;
                                   "></span>
                                 </div>
                                 <div class="card-body">
                                    <h5 class="card-title">{{ $hotel->title}}</h5>
                                    <p class="card-text">
                                       <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{  $hotel->address}} </span>
                                    </p>
                                    <p>
                                       <span class="btn btn-light Daily-btn"  style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
                                       color:white;
                                    padding: 4px 4px;"> {{  $hotel->review_score}}<i class="fa fa-star"></i></span>
                                       {{  $hotel->star_rate}}
                                       <span> Excellent </span>
                                    </p>
                                    <p>
                                       <span style="font-size:25px; color:black;" >{{  $hotel->price}}</span>
                                       <span style="font-size:25px;"> AED </span>
                                       <span class="btn btn-light Daily-btn" style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
                                       color:white;
                                    padding: 4px 4px;">{{  $hotel->discount_percent}} % OFF</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     
                    </div>
                  
              

       
            
             

        </div>
        @include('Hotel::frontend.layouts.details.hotel-form-enquiry-mobile')
    </div>
@endsection

@push('js')
    {!! App\Helpers\MapEngine::scripts() !!}
    <script>
        jQuery(function ($) {
            @if($row->map_lat && $row->map_lng)
            new BravoMapEngine('map_content', {
                disableScripts: true,
                fitBounds: true,
                center: [{{$row->map_lat}}, {{$row->map_lng}}],
                zoom:{{$row->map_zoom ?? "8"}},
                ready: function (engineMap) {
                    engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
                        icon_options: {
                            iconUrl:"{{get_file_url(setting_item("hotel_icon_marker_map"),'full') ?? url('images/icons/png/pin.png') }}"
                        }
                    });
                }
            });
            @endif
        })
    </script>
    <script>
        var bravo_booking_data = {!! json_encode($booking_data) !!}
        var bravo_booking_i18n = {
			no_date_select:'{{__('Please select Start and End date')}}',
            no_guest_select:'{{__('Please select at least one guest')}}',
            load_dates_url:'{{route('space.vendor.availability.loadDates')}}',
            name_required:'{{ __("Name is Required") }}',
            email_required:'{{ __("Email is Required") }}',
        };
    </script>
    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("libs/fotorama/fotorama.js") }}"></script>
    <script type="text/javascript" src="{{ asset("libs/sticky/jquery.sticky.js") }}"></script>
    <script type="text/javascript" src="{{ asset('module/hotel/js/single-hotel.js?_ver='.config('app.asset_version')) }}"></script>

@endpush
