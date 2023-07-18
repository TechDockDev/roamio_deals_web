
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/fotorama/fotorama.css')); ?>"/>
  

    <!-- Latest compiled and minified CSS -->

     <style>
       
        .img{
            width: 100%;
        }
        .background{
        background:#FFF5E9;   
        }
      .UAE-Img{
            margin-top:30px;
            height: 48px;
            width: 17%; 
        }
        .card-item{
        background:white;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
       

    margin-top: -46px;
    width: 100%;
    text-align: center;
    border-radius: 10px;
        }
    </style>
 <?php $__env->stopPush(); ?>
 <?php $__env->startSection('content'); ?>
 
   <div class="container mt-4 pt-4">
    <div class="row">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://www.wonderplugin.com/wp-content/uploads/2019/05/tutorial-city-900x288.jpg" alt="Los Angeles" class="d-block" style="width:100%; border-radius:10px;">
            </div>
            <div class="carousel-item">
              <img src="https://www.jqueryscript.net/demo/Responsive-Full-Width-jQuery-Image-Slider-Plugin-skdslider/slides/1.jpg" alt="Chicago" class="d-block" style="width:100%; border-radius:10px;">
            </div>
            <div class="carousel-item">
              <img src="https://wowslider.com/sliders/demo-18/data1/images/hongkong1081704.jpg" alt="New York" class="d-block" style="width:100%;  border-radius:10px;">
            </div>
          </div>
        
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>   
     </div>
    </div>
    <div class="container">
        <div class="col-md-10 w-100 card-item justify-content-center offset-md-1">
            <div class="row  text-center">
                <div class="col-md-4 py-4">
                    <a href="" style="text-decoration: none;"><img src="<?php echo e(asset('images\list-check_2.svg')); ?>" alt="" srcset="">
                    <div class="card-body" 
                    >
                        Check Visa Status
                    </div> </a>
                </div>
                <?php if(auth()->user()): ?>
                <div class="col-md-4 py-4">
                   <a href="<?php echo e(url('apply-visa-page')); ?>" style="text-decoration: none;"><img src="<?php echo e(asset('images\info-circle_1.svg')); ?>" alt="">
                    <div class="card-body">
                        Apply UAE Visa
                    </div>
                </a>
                </div>
                <?php else: ?>
              
                <div class="col-md-4 py-4">
                   <a href="#" data-toggle="modal" data-target="#login" style="text-decoration: none;"><img src="<?php echo e(asset('images\info-circle_1.svg')); ?>" alt="">
                    <div class="card-body">
                        Apply UAE Visa
                    </div>
                </a>
                </div>



                <?php endif; ?>
                <div class="col-md-4 py-4">
                    <a href="<?php echo e(url('visa-status')); ?>" style="text-decoration: none;"><img src="<?php echo e(asset('images\hand-index-thumb_3.svg')); ?>" alt="">
                    <div class="card-body">
                        Important Terms & Conditions
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
    

   <div class="container">
    <div class="row d-flex justify-content-center">
        <h4 class="text-center py-5">How to apply Visa for UAE</h4>
    </div>

    <div class="row">
        <div class="col-md-4">
         <p>Select your nationality, travel date and number of passengers</p>
          <img src="<?php echo e(asset('images/Complete_3.png')); ?>"  class="img">
        </div>
       <div class="col-md-4">
        <img src="<?php echo e(asset('images/Vector _134.png')); ?>"  class="img">
       </div>
       <div class="col-md-4">
        <p>Select visa type </p>
        <img src="<?php echo e(asset('images/Complete_4.png')); ?>"  class="img">
       </div>
    </div>

    <div class="row pt-2">
        <div class="col-md-4">
         <p>finish payment and there you go</p>
          <img src="<?php echo e(asset('images/Complete_1.png')); ?>"  class="img">
        </div>
       <div class="col-md-4">
        <img src="<?php echo e(asset('images/Vector_132.png')); ?>"  class="img">
       </div>
       <div class="col-md-4">
        <p>enter your personal details and upload travel documents </p>
        <img src="<?php echo e(asset('images/Complete_4.png')); ?>"  class="img">
       </div>
    </div>
</div>
<div class="background"> 
    <div class="container">
        <div class="row d-flex justify-content-start">
            <h4 class="text-center py-5">Why get UAE Visa from us!</h4>
        </div>
        <div class="row  d-flex justify-content-center">
            <div class="col-md-4 text-center">
                <div class="card1">
                    <img class="card-img-top UAE-Img" src="<?php echo e(asset('images/Complete_6.svg')); ?>" alt="Card image cap">
                    <div class="card-body py-2">
                      <h5 class="card-title">Simple & hassle free process</h5>
                      <p class="card-text">Our visa application process is designed to be easy and straightforward. You can complete the application form in just a few minutes</p>

                    </div>
                  </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card1 ">
                    <img class="card-img-top UAE-Img" src="<?php echo e(asset('images/Complete_7.png')); ?>" alt="Card image cap">
                    <div class="card-body py-2">
                      <h5 class="card-title">Best Price Guaranteed</h5>
                      <p class="card-text">We offer competitive pricing for our visa services, and we are committed to providing the best value for our customers.</p>
                      
                    </div>
                  </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="card1">
                    <img class="card-img-top UAE-Img" src="<?php echo e(asset('images/Complete_8.png')); ?>" alt="Card image cap">
                    <div class="card-body py-2">
                      <h5 class="card-title">Check Visa Status</h5>
                      <p class="card-text">You can easily check the status of your visa application at any time. Simply enter your visa reference number, and you will be able to see the progress of your application.</p>
                  
                    </div>
                  </div>
            </div>
           
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <h4 class="text-left py-3">Frequently Asked Questions</h4>
    </div>
    <div class="row">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Is it mandatory for me to obtain a Application to enter Dubai as well as UAE?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Dubai is a part of the United Arab Emirates (UAE) and with a UAE Application, you can visit all the seven Emirates of UAE. Citizens of all countries have to get a UAE Application, except for those belonging to GCC nations: Qatar, Saudi Arabia, Oman, Bahrain and Kuwait.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do infants and kids require Application to enter UAE?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Which countries are eligible for Application on arrival in Dubai?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="fourThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Which countries are eligible for Application on arrival in Dubai?
                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="fourThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="fiveThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Which countries are eligible for Application on arrival in Dubai?
                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="fiveThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Flight/Views/frontend/vish.blade.php ENDPATH**/ ?>