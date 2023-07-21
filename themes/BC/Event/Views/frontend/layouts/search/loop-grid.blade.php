<style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>

@php
    $translation = $row->translate();
@endphp
<div class="item-loop {{$wrap_class ?? ''}} h-100">
    @if($row->is_featured == "1")
        <div class="featured">
            {{__("Featured")}}
        </div>
    @endif
    <div class="thumb-image ">
        
     <?php
     
       $gget = DB::table('media_files')->where('id',$row->banner_image_id)->get();
     
     
     ?>
        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl($include_param ?? true)}}">
            @if($row->banner_image_id)
                @if(!empty($disable_lazyload))
                    <img src="{{$row->image_url}}" class="img-responsive" alt="">
                @else
                
               @foreach($gget as $ggg)
                
                 <img src="{{asset('/uploads/'.$ggg->file_path)}}" class="img-responsive" alt="">
                 
                 @endforeach
                 
                @endif
            @endif
        </a>
        <div class="service-wishlist {{$row->isWishList()}}" data-id="{{$row->id}}" data-type="{{$row->type}}">
            <i class="fa fa-heart-o" style="height:30px; width:30px; border-radius:30px;background: white;
            padding: 9px 7px; text-shadow: 1px 1px 27px black; color: red;"></i>
        </div>
        @if($row->discount_percent)
            <div class="sale_info">{{$row->discount_percent}}</div>
        @endif
    </div>
   
    <div class="item-title mt-2 pt-2">
        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl($include_param ?? true)}}">
            @if($row->is_instant)
                <i class="fa fa-bolt d-none"></i>
            @endif
                {{$translation->title}}
        </a>
    </div>

    <div class="location mb-3" style="color:black; margin-top:-7px;">
      <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>   @if(!empty($row->location->name))
            @php $location =  $row->location->translate() @endphp
            {{$location->name ?? ''}}
        @endif
    </div>
    @if(setting_item('space_enable_review'))
    <?php
    $reviewData = $row->getScoreReview();
    $score_total = $reviewData['score_total'];
    ?>
        <div class="service-review">
            <span class="rate">
              <span class="Daily-btn text-white w-30"> @if($reviewData['total_review'] > 0) {{$score_total}}/5 <i class="fa fa-star"></i> @endif  </span> &nbsp; &nbsp;<span class="rate-text">{{$reviewData['review_text']}}</span>
            </span>
            <span class="review">
             @if($reviewData['total_review'] > 1)
                    {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
                @else
                    {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
                @endif
            </span>
        </div>
    @endif
    {{-- @if(!empty($time = $row->start_time))
        <div class="start-time mt-1">
            {{ __("Start Time: :time",['time'=>$time]) }}
        </div>
    @endif --}}
    <div class="info mt-3">
        {{-- <div class="duration">
            {{duration_format($row->duration)}}
        </div> --}}
        {{-- onsale --}}
        <div class="g-price text-start">
            <div class="prefix">
                <span class="fr_text">{{__("AED")}}</span>
            </div>
            <div class="price">
                 <span class="text-price" style="font-weight:700;">{{ $row->display_price }}</span>&nbsp;
                 @if(isset($row->discount_percent))
                 <span class=" btn btn-light Daily-btn text-white">{{ $row->discount_percent }}% off</span>
         @else
        <span class=" btn btn-light Daily-btn text-white" style="color: white !important;
       ">0% off</span>
    @endif
              
            </div>
        </div>
    </div>
</div>



