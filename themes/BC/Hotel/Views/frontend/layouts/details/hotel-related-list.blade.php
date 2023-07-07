  <style>
 .text-item{
 color:#FF3500;
 font-size:19px; 
 }
 .text-item2{
text-decoration: line-through;
 }
 .inbtn{
    border-radius: 17px;
    width: 25px;
    border: 1px solid #FF3500;
 }
 .card-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color:white;
 
 }
 .btn-text{
    color:#FF3500;   
 }
</style>

{{-- @if(count($hotel_related) > 0) --}}



{{-- {{ dd ($hotel_related) }} --}}
    {{-- <div class="bravo-list-hotel-related-widget">
        <h3 class="heading">{{__("Related Hotel")}}</h3>
        <div class="list-item">
            @foreach($hotel_related as $k=>$item)
                @php
                    $translation_item = $item->translate();
                @endphp
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="{{$item->getDetailUrl(false)}}">
                                @if($item->image_url)
                                    @if(!empty($disable_lazyload))
                                        <img src="{{$item->image_url}}" class="img-responsive" alt="{{$translation_item->title}}">
                                    @else
                                        {!! get_image_tag($item->image_id,'thumb',['class'=>'img-responsive','alt'=>$translation_item->title]) !!}
                                    @endif
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            @if($item->star_rate)
                                <div class="star-rate">
                                    @for ($star = 1 ;$star <= $item->star_rate ; $star++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                            @endif
                            <h4 class="media-heading">
                                <a href="{{$item->getDetailUrl(false)}}">
                                    {{$translation_item->title}}
                                </a>
                            </h4>
                            <div class="price-wrapper">
                                {{__("from")}}
                                <span class="price">{{ $item->display_price }}</span>
                                <span class="unit">{{__("/night")}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    {{--  --}}

    {{-- @endif --}}
   
    <div class="bravo-list-hotel-related-widget">
        <h5  style="margin-top:-23px;">Packages</h5>
        @if(count($datas) > 0)
        @foreach($datas as $rooms)
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-title">{{ $rooms->title }}</p>
                    <p class="card-text">
                        <span class="text-item2">{{ $rooms->price }} AED</span>
                        <span class="text-item">{{ $rooms->discount_percent }}</span>
                        <br>
                        <span class="text-black">{{ $rooms->discounted_price }}</span>
                        <small>AED / night</small>
                    </p>
                    <p>
                        <div class="container">
                            <button data-decrease class="inbtn">-</button>
                            <input data-value type="text" value="1" disabled style="width: 21px; border:none;">
                            <button data-increase class="inbtn">+</button>
                            <small>Number of Room</small>
                        </div>
                    </p>
                </div>
            </div>
        @endforeach
    @else
        <p>No data found.</p>
    @endif
    
       
        <button class="btn btn-light btn-text w-100 mb-3">Quick Checkout</button>
        <button class="btn btn-light w-100 card-btn mb-3">Add to Cart</button> 
    </div>
    




<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
    $(function() {
	$('[data-decrease]').click(decrease);
	$('[data-increase]').click(increase);
	$('[data-value]').change(valueChange);
});

function decrease() {
	var value = $(this).parent().find('[data-value]').val();
	if(value > 1) {
		value--;
		$(this).parent().find('[data-value]').val(value);
	}
}

function increase() {
	var value = $(this).parent().find('[data-value]').val();
	if(value < 100) {
		value++;
		$(this).parent().find('[data-value]').val(value);
	}
}

function valueChange() {
	var value = $(this).val();
	if(value == undefined || isNaN(value) == true || value <= 0) {
		$(this).val(1);
	} else if(value >= 101) {
		$(this).val(100);
	}
}
</script>