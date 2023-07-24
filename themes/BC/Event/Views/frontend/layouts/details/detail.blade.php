
<style>
    .cancellation-btn {
    padding: 6px 6px;
    font-size: 12px;
}
.Offer-btn {
    padding: 6px 6px;
    font-size: 12px;
    background: #FFF3E3;
    color: #FF3500;
}
.star-item{
    color: #FF3500; 
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

 <div class="g-header mt-3 pt-3">
    <div class="left">
        <h3>{{$translation->title}}</h3>
        @if($translation->address)
            <p class="address"><i class="fa fa-map-marker"></i>
                {{$translation->address}}
            </p>
        @endif

    
            <p>
                <i class="fa fa-star star-item"></i>
                <i class="fa fa-star star-item"></i>
                <i class="fa fa-star star-item"></i>
                <i class="fa fa-star star-item"></i>
                <i class="fa fa-star star-item"></i>
                <span> (4) Excellent</span>

            </p>

                
        <?php

         $wdata = DB::table('bravo_terms')->where('attr_id',11)->get();


        ?>

            <p>
                 
                 @foreach($wdata as $zdata)
                <span>
                    <button class="btn btn-light mt-2 cancellation-btn">{{$zdata->name}}</button>
                </span>
                  @endforeach
            </p>
      
    </div>
    {{-- <div class="right">
        @if($row->getReviewEnable())
            @if($review_score)
                <div class="review-score">
                    <div class="head">
                        <div class="left">
                            <span class="head-rating">{{$review_score['score_text']}}</span>
                            <span class="text-rating" style="color:#FF3500;">{{__("from :number reviews",['number'=>$review_score['total_review']])}}</span>
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

{{-- @if(!empty($row->duration)  or !empty($row->location->name))
    <div class="g-event-feature">
        <div class="row">
            <div class="col-xs-6 col-lg-3 col-md-6">
                <div class="item">
                    <div class="icon">
                        <i class="icofont-heart-beat"></i>
                    </div>
                    <div class="info">
                        <h4 class="name">{{__("Wishlist")}}</h4>
                        <p class="value">
                            {{ __("People interest: :number",['number'=>$row->getNumberWishlistInService()]) }}
                        </p>
                    </div>
                </div>
            </div>
            @if($row->start_time)
                <div class="col-xs-6 col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="icofont-wall-clock"></i>
                        </div>
                        <div class="info">
                            <h4 class="name">{{__("Start Time")}}</h4>
                            <p class="value">
                                {{ $row->start_time }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if($row->duration)
                <div class="col-xs-6 col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="icofont-infinite"></i>
                        </div>
                        <div class="info">
                            <h4 class="name">{{__("Duration")}}</h4>
                            <p class="value">
                                {{duration_format($row->duration)}}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(!empty($row->location->name))
                @php $location =  $row->location->translate() @endphp
                <div class="col-xs-6 col-lg-3 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="icofont-island-alt"></i>
                        </div>
                        <div class="info">
                            <h4 class="name">{{__("Location")}}</h4>
                            <p class="value">
                                {{$location->name ?? ''}}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif --}}

@if($translation->content)
    <div class="g-overview">
        <h3>{{__("Description")}}</h3>
        <div class="description">
            <?php echo $translation->content ?>
        </div>
    </div>
@endif



<?php

 
  $slug = request()->slug;

  $data = DB::table('bravo_events')->where('slug',$slug)->first();

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
<button class="accordion">{{$dsc['name']}}</button>
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





@include('Event::frontend.layouts.details.attributes')
@if($translation->faqs)
<div class="g-faq">
    <h3> {{__("FAQs")}} </h3>
    @foreach($translation->faqs as $item)
        <div class="item">
            <div class="header">
                <i class="field-icon icofont-support-faq"></i>
                <h5>{{$item['title']}}</h5>
                <span class="arrow"><i class="fa fa-angle-down"></i></span>
            </div>
            <div class="body">
                {{$item['content']}}
            </div>
        </div>
    @endforeach
</div>
@endif
<div class="bravo-hr"></div>
@includeIf("Hotel::frontend.layouts.details.hotel-surrounding")
<div class="bravo-hr"></div>

@if($row->map_lat && $row->map_lng)
<div class="g-location">
    <h3>{{__("Location")}}</h3>
    <div class="location-map">
        <div id="map_content"></div>
    </div>
</div>
@endif

