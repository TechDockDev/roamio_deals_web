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


<div class="bravo_single_book_wrap <?php if(setting_item('event_enable_inbox')): ?> has-vendor-box <?php endif; ?>">
    <div class="bravo_single_book"  style="border:#FF3500;">
        <div id="bravo_event_book_app" v-cloak>
            
            
            
            
                <div class="card mb-3">
                <div class="card-body ">
                    <p class="card-title">Cheers at The View for 1 adult</p>
                    <p class="card-text">
                        <span class="text-item2">50 AED</span>
                        <span class="text-item">30</span>
                        <br>
                        <span class="text-black">34.000</span>
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
                <div class="card-body ">
                    <p class="card-title">Cheers at The View for 1 adult</p>
                    <p class="card-text">
                        <span class="text-item2">50 AED</span>
                        <span class="text-item">30</span>
                        <br>
                        <span class="text-black">34.000</span>
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
          

     
           
            <div class="form-send-enquiry" v-show="enquiry_type=='enquiry'">
                <button class="btn btn-primary" data-toggle="modal" data-target="#enquiry_form_modal">
                    <?php echo e(__("Contact Now")); ?>

                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make("Booking::frontend.global.enquiry-form",['service_type'=>'event'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    // Get the input element
    const roomInput = document.getElementById('roomInput');
  
    // Get the increase and decrease buttons
    const increaseButton = document.querySelector('[data-increase]');
    const decreaseButton = document.querySelector('[data-decrease]');
  
    // Add event listeners to the buttons
    increaseButton.addEventListener('click', () => {
        incrementValue(1);
    });
  
    decreaseButton.addEventListener('click', () => {
        incrementValue(-1);
    });
  
    // Function to increment the value
    function incrementValue(value) {
        let currentValue = parseInt(roomInput.value);
        if (!isNaN(currentValue)) {
            currentValue += value;
            if (currentValue < 1) {
                currentValue = 1; // Prevent negative values
            }
            roomInput.value = currentValue;
        }
    }
</script><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Event/Views/frontend/layouts/details/form-book.blade.php ENDPATH**/ ?>