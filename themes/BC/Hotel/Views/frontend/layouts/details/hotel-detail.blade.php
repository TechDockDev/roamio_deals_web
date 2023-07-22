
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-D/6EhP9EoPWv/+iu/joNRhv+4S3YSSyfG6+Cwy1c4PoCvqj0qvK9cmumvv9SKCXL" crossorigin="anonymous">
<style>
  
    .fas{
 color:red;
    }
    .cancellation-btn{
    padding: 6px 6px;
     font-size: 12px;   
    }
    .Offer-btn{
     padding: 6px 6px;
     font-size: 12px;  
     background:#FFF3E3;
     color: #FF3500; 
    }
    ..star-rate {
    color: gold; /* Change the color as desired */
}
</style>

@if($row->getGallery())
    <div class="g-gallery">
        <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135" data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
            @foreach($row->getGallery() as $key=>$item)
                <a href="{{$item['large']}}" data-thumb="{{$item['thumb']}}" data-alt="{{ __("Gallery") }}"></a>
            @endforeach
        </div>
        <div class="social">
            <div class="social-share">
                <span class="social-icon">
                    <i class="icofont-share"></i>
                </span>
                <ul class="share-wrapper">
                    <li>
                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{$row->getDetailUrl()}}&amp;title={{$translation->title}}" target="_blank" rel="noopener" original-title="{{__("Facebook")}}">
                            <i class="fa fa-facebook fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="https://twitter.com/share?url={{$row->getDetailUrl()}}&amp;title={{$translation->title}}" target="_blank" rel="noopener" original-title="{{__("Twitter")}}">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="service-wishlist {{$row->isWishList()}}" data-id="{{$row->id}}" data-type="{{$row->type}}">
                <i class="fa fa-heart-o"></i>
            </div>
        </div>
    </div>
@endif

<div class="g-header">
    <div class="left">
       
        <h3>{{$translation->title}}</h3>

        <p>{{$row->star_rate }}</p>
        <div class="star-rate">
            <i class="fa fa-star">{{$row->review_score }}</i> Excellent
        </div>
            {{-- @if($row->star_rate) --}}
          {{-- <div class="star-rate">
            @for ($star = 1 ;$star <= $row->star_rate ; $star++)
                <i class="fa fa-star"> {{ $row->star_rate}}</i>
            @endfor
          </div> --}}
          {{-- @endif --}}
        
          {{-- (4 reviews)  --}}
            @if($translation->address)
            <h2 class="address"><i class="fa fa-map-marker"></i>
                {{$translation->address}} 
            </h2>
          @endif
          
          <p><button class="btn btn-light mt-2 cancellation-btn">Free cancellation (24 Hours Prior)</button> 
            <span>
                <button class="btn btn-light mt-2 cancellation-btn">Instant confirmation</button>
            </span>
        </p> 
          <p><button class="btn btn-light mt-2 Offer-btn">TRENDING</button> 
            <span>
                <button class="btn btn-light mt-2 Offer-btn">Offer Ending Soon</button>
            </span>
         </p>   
    </div>
    {{-- <div class="right">
        @if($row->getReviewEnable())
            @if($review_score)
                <div class="review-score">
                    <div class="head">
                        <div class="left">
                            <span class="head-rating">{{$review_score['score_text']}}</span>
                            <span class="text-rating">{{__("from :number reviews",['number'=>$review_score['total_review']])}}</span>
                        </div>
                        <div class="score">
                            {{$review_score['score_total']}}<span>/5</span>
                        </div>
                    </div>
                    <div class="foot">
                        {{__(":number% of guests recommend",['number'=>$row->recommend_percent])}}
                    </div>
                </div>
            @endif
        @endif
    </div> --}}
</div>

@if($translation->content)
    <div class="g-overview">
        <h3>{{__("DescriptionX")}}</h3>
        <div class="description">
            <?php echo $translation->content ?>
        </div>
    </div>
@endif



<?php

 
  $slug = request()->slug;

  $data = DB::table('bravo_hotels')->where('slug',$slug)->first();

  $description = $data->extra_price;

  $descriptionArray = json_decode($description, true);

?>

<style>
 .accordion {
    margin-bottom: 2px;
    background-color: #fff;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: 2px solid lightgrey;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-left: none;
    border-right: none;
    border-top: none;
    position: relative;
}


.accordion:after {
    height: 27px;
    content: '\203A';
    color: #777;
    font-weight: bold;
    float: right;
    font-size: 29px;
    margin-left: 5px;
}

.active:after {
  content: '\2039'; /* Left-pointing arrow when accordion is active (open) */
}

.panelx {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>




@foreach($descriptionArray as $dsc)
<button class="accordion"><b>{{$dsc['title']}}</b></button>
<div class="panelx">
  <p> {{$dsc['description']}}</p>
 
</div>
@endforeach


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panelx.style.maxHeight = null;
    } else {
      panelx.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>



              



@include('Hotel::frontend.layouts.details.hotel-rooms')
<div class="g-all-attribute is_mobile">
    @include('Hotel::frontend.layouts.details.hotel-attributes')
</div>
<div class="g-rules">
    <h3>{{__("Rules")}}</h3>
    <div class="description">
        <div class="row">
            <div class="col-lg-4">
                <div class="key">{{__("Check In")}}</div>
            </div>
            <div class="col-lg-8">
                <div class="value">	{{$row->check_in_time}} </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="key">{{__("Check Out")}}</div>
            </div>
            <div class="col-lg-8">
                <div class="value">	{{$row->check_out_time}} </div>
            </div>
        </div>
        @if($translation->policy)
            <div class="row">
                <div class="col-lg-4">
                    <div class="key">{{__("Hotel Policies")}}</div>
                </div>
                <div class="col-lg-8">
                    @foreach($translation->policy as $key => $item)
                        <div class="item @if($key > 1) d-none @endif">
                            <div class="strong">{{$item['title']}}</div>
                            <div class="context">{!! $item['content'] !!}</div>
                        </div>
                    @endforeach
                    @if( count($translation->policy) > 2)
                        <div class="btn-show-all">
                            <span class="text">{{__("Show All")}}</span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
<div class="bravo-hr"></div>
@includeIf("Hotel::frontend.layouts.details.hotel-surrounding")

@if($row->map_lat && $row->map_lng)
    <div class="g-location">
        <div class="location-title">
            <h3>{{__("Location")}}</h3>
            @if($translation->address)
                <div class="address">
                    <i class="icofont-location-arrow"></i>
                    {{$translation->address}}
                </div>
            @endif
        </div>

        <div class="location-map">
            <div id="map_content"></div>
        </div>
    </div>
@endif
<div class="bravo-hr"></div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>