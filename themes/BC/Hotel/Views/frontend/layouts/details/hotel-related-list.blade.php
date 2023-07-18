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
   

   <?php

   $cc = request()->slug;

    $hotel = DB::table('bravo_hotels')->where('slug',$cc)->first();

    $room = DB::table('bravo_hotel_rooms')->where('parent_id',$hotel->id)->where('deleted_at',null)->get();
 
   ?>
   
 
 <form id="packagesForm">
    @csrf


    <div class="bravo-list-hotel-related-widget">
        <h5  style="margin-top:-23px;">Packages</h5>
        @if(count($datas) > 0)
        @foreach($room as $rooms)
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-title">{{ $rooms->title }}</p>
                    <p class="card-text">

                          <input type="text"  style="display:none;"  name="package_name[]" value="{{$rooms->title}}">
 
                          <input type="text"  style="display:none;"  name="product_id[]" value="{{$hotel->id}}">

                          <input type ="text" style="display:none;" id="packagesId" name ="id[]" value="{{$rooms->id}}">

                          <input type ="text" style="display:none;" id = "parentnameofpackages" name ="type[]" value="hotel">

                <input type ="text" style="display:none;" id = "xparentnameofpackages" name ="price[]" value="{{ number_format($rooms->price - $rooms->discount_price, 2) }}">


                         

                        <span class="text-item2">{{ $rooms->price }} AED</span>
                        <span class="text-item">
  <?php
$originalPrice = $rooms->price;
$discountAmount = $rooms->discount_price;

$discountPercentage = ($discountAmount / $originalPrice) * 100;

$formattedDiscountPercentage = number_format($discountPercentage, 2);
?>

                    {{ $formattedDiscountPercentage }}%

                        </span>
                        <br>
                        <span class="text-black">{{ number_format($rooms->price - $rooms->discount_price, 2) }}</span>
                        <small>AED </small>
                    </p>
                    <p>
                        <div class="container">
                            <button type="button" data-decrease class="inbtn">-</button>
                            <input type="text"  name="packageQuantity[]" value="0"  data-value  style="width: 21px; border:none;">
                            <button type="button" data-increase class="inbtn">+</button>
                            <small>Quantity</small>
                        </div>
                    </p>
                     
                </div>
            </div>

             </form>
        @endforeach
    @else
        <p>No data found.</p>
    @endif
    
       
        <?php 
      
      if(auth()->check())
      {
       $user_id = auth()->user()->id;

      }else{

        $user_id = null;
      }
     
      

    ?>

       @if($user_id == null)
       
        <button type="button" class="btn btn-light btn-text w-100 mb-3" data-toggle="modal" data-target="#login">Quick Checkout</button>


        <button type="button" class="btn btn-light w-100 card-btn mb-3" data-toggle="modal" data-target="#login">Add to Cart</button> 
          
          @else

         <button type="button" class="btn btn-light btn-text w-100 mb-3">Quick Checkout</button>


         <button type="button" id ="cartSubmitButton" class="btn btn-light w-100 card-btn mb-3">Add to Cart</button> 


          @endif
    </div>
    




<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
   
    $("#cartSubmitButton").click(function(e) {
        e.preventDefault(); 

        $.ajax({
            type: "POST", 
            url: "/adding-to-cart", 
            data: $("#packagesForm").serialize(), 
            success: function(response) {
                

                if(response.status == true)
                {

                  window.location.href ="/user-cart"

                }else if(response.status == false)
                {

                    Swal.fire(
  'No Quantity?',
  'Please select at least one package qunatity',
  'question'
)

                }else{

                    alert("Please sign In first for adding to cart");


                }

               
            },
            error: function(xhr, status, error) {
                
                console.error("Error submitting the form:", error);
            }
        });
    });
});
</script>
   


<script>
    $(function() {
	$('[data-decrease]').click(decrease);
	$('[data-increase]').click(increase);
	$('[data-value]').change(valueChange);
});

function decrease() {
  var value = $(this).parent().find('[data-value]');
  var currentValue = parseInt(value.val());

  if (currentValue > 1) {
    currentValue--;
  } else {
    currentValue = 0;
  }

  value.val(currentValue);
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
		$(this).val(0);
	} else if(value >= 101) {
		$(this).val(100);
	}
}
</script>