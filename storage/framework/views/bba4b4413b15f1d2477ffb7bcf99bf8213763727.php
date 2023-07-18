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
        <?php if(count($datas) > 0): ?>
        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-title"><?php echo e($rooms->title); ?></p>
                    <p class="card-text">
                        <span class="text-item2"><?php echo e($rooms->price); ?> AED</span>
                        <span class="text-item"><?php echo e($rooms->discount_percent); ?></span>
                        <br>
                        <span class="text-black"><?php echo e($rooms->discounted_price); ?></span>
                        <small>AED / night</small>
                    </p>
                    <p>
                        <div class="container">
                            <button data-decrease class="inbtn">-</button>
                            <input  data-value type="text" value="0" disabled style="width: 21px; border:none;">
                            <button data-increase class="inbtn">+</button>
                            <small>Quantity</small>
                        </div>
                    </p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No data found.</p>
    <?php endif; ?>
    
       
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
</script><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Hotel/Views/frontend/layouts/details/hotel-related-list.blade.php ENDPATH**/ ?>