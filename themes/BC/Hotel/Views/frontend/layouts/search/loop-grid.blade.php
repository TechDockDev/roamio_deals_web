<style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 5px !important;
}
</style>



@php
    $translation = $row->translate();
@endphp
<div class="item-loop {{$wrap_class ?? ''}} h-100" >
    @if($row->is_featured == "1")
        <div class="featured">
            {{__("Featured")}}
        </div>
    @endif
    <div class="thumb-image ">
        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl()}}">
            
          
           <?php
           
           
           $data = DB::table('media_files')->where('id',$row->banner_image_id)->select('file_path')->first();  
           ?>
            
            
           
                @if(!empty($disable_lazyload))
                
              
                     {!! get_image_tag($row->image_id,'medium',['class'=>'img-responsive','alt'=>$translation->title]) !!}
                @else
                     
                    
                    <img src="{{asset('uploads/'.$data->file_path)}}" class="img-responsive" alt="">
                 
                @endif
         
        </a>
        @if($row->star_rate)
            <div class="star-rate">
                <div class="list-star">
                    <ul class="booking-item-rating-stars">
                        @for ($star = 1 ;$star <= $row->star_rate ; $star++)
                            <li><i class="fa fa-star"></i></li>
                        @endfor
                    </ul>
                </div>
            </div>
        @endif
        <div class="service-wishlist {{$row->isWishList()}}" data-id="{{$row->id}}" data-type="{{$row->type}}">
            <i class="fa fa-heart-o" style="height: 30px;
            width: 30px;
            background: white;
            padding: 8px 8px;
            border-radius: 30px;
            color:black;
            margin-top: -6px;
            text-shadow: 1px 1px 27px black;
        "></i>
        </div>
    </div>
    <div class="item-title">
       <h5> <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl()}}">
            @if($row->is_instant)
                <i class="fa fa-bolt d-none"></i>
            @endif
                {{$translation->title}}
        </a></h5>
        @if($row->discount_percent)
            <div class="sale_info">{{$row->discount_percent}}</div>
        @endif
    </div>
    <div class="location">
        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>   @if(!empty($row->location->name))
            @php $location =  $row->location->translate() @endphp
            {{$location->name ?? ''}}
        @endif
    </div>
    @if(setting_item('hotel_enable_review'))
    <?php
    $reviewData = $row->getScoreReview();
    $score_total = $reviewData['score_total'];
    ?>
    <div class="service-review">
        <span class="rate">
            <span class="Daily-btn text-white w-30"style=" padding: 4px 6px !important;">@if($reviewData['total_review'] > 0) {{$score_total}}/5 <i class="fa fa-star"></i> @endif</span> &nbsp;<span class="rate-text" style="color:black">{{$reviewData['review_text']}}</span>
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
    <div class="info mt-4 mb-1">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text" style="color:black;">{{__("AED")}}</span>
            </div>
            <div class="price">
                <span class="text-price" style="padding: 0px 1px;">{{ $row->display_price }} <span class="unit  text-dark">{{__("/night")}}</span></span> &nbsp;
               
                @if(isset($row->discount_percent))
                <span class=" btn btn-light Daily-btn text-white" style="padding: 4px 6px !important;">{{ $row->discount_percent }}% off</span>
        @else
       <span class=" btn btn-light Daily-btn text-white" style="color: white !important; padding: 4px 6px !important;"
      >0% off</span>
   @endif
            </div>
        </div>
    </div>
</div>
