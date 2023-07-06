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





    
    

    
   
    <div class="bravo-list-hotel-related-widget">
        <h5  style="margin-top:-23px;">Packages</h5>
    
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-title">Weekday Stay for 2 adults & 2 children below 12 years</p>
                <p class="card-text">
                    <span class="text-item2">250 AED</span>
                    <span class="text-item">199</span>
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
    
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-title">Weekday Stay for 2 adults & 2 children below 12 years</p>
                <p class="card-text">
                    <span class="text-item2">250 AED</span>
                    <span class="text-item">199</span>
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
    
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-title">Weekday Stay for 2 adults & 2 children below 12 years</p>
                <p class="card-text">
                    <span class="text-item2">250 AED</span>
                    <span class="text-item">199</span>
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
    
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-title">Weekday Stay for 2 adults & 2 children below 12 years</p>
                <p class="card-text">
                    <span class="text-item2">250 AED</span>
                    <span class="text-item">199</span>
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
</script><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Hotel/Views/frontend/layouts/details/hotel-related-list.blade.php ENDPATH**/ ?>