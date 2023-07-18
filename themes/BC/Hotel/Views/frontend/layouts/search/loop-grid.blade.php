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
            padding: 8px 7px;
            border-radius: 30px;
            color:black;
            text-shadow: 1px 1px 27px black;
        "></i>
        </div>
    </div>
    <div class="item-title">
        <a @if(!empty($blank)) target="_blank" @endif href="{{$row->getDetailUrl()}}">
            @if($row->is_instant)
                <i class="fa fa-bolt d-none"></i>
            @endif
                {{$translation->title}}
        </a>
        @if($row->discount_percent)
            <div class="sale_info">{{$row->discount_percent}}</div>
        @endif
    </div>
    <div class="location">
        @if(!empty($row->location->name))
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
        <span class="rate Daily-btn text-white mb-5">
            @if($reviewData['total_review'] > 0) {{$score_total}}/5 @endif <span class="rate-text">{{$reviewData['review_text']}}</span>
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
    <div class="info mt-4">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text" style="color:black;">{{__("from")}}</span>
            </div>
            <div class="price">
                <span class="text-price btn btn-light Daily-btn text-white" style="padding: 0px 1px;">{{ $row->display_price }} <span class="unit  text-white">{{__("/night")}}</span></span>
            </div>
        </div>
    </div>
</div>
