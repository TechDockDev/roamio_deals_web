 
 
   <style>
    

    @font-face {
    font-family: 'WebSymbolsRegular';
    src: url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.eot');
    src: url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.eot?#iefix') format('embedded-opentype'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.woff') format('woff'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.ttf') format('truetype'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont#WebSymbolsRegular') format('svg');
}

@import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700);

* {
    margin: 0;
    padding: 0;
}



h1 { color: white }

#slideshow-wrap {
    display: block;
    height: 320px;
    min-width: 260px;
    max-width: 640px;
    margin: auto;
    border: 12px rgba(255,255,240,1) solid;
    -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    -moz-box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    margin-top: 20px;
    position: relative;
}

#slideshow-inner {
    width: 100%;
    height: 100%;
    background-color: white;
    overflow: hidden;
    position: relative;
}

#slideshow-inner>ul {
    list-style: none;
    height: 100%;
    width: 500%;
    overflow: hidden;
    position: relative;
    left: 0px;
    -webkit-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    -moz-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    -o-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
}

#slideshow-inner>ul>li {
    width: 20%;
    height: 320px;
    float: left;
    position: relative;
}

#slideshow-inner>ul>li>img {
    margin: auto;
    height: 100%;
}

#slideshow-wrap input[type=radio] {
    position: absolute;
    left: 50%;
    bottom: 15px;
    z-index: 100;
    visibility: hidden;
}

#slideshow-wrap label:not(.arrows):not(.show-description-label) {
    position: absolute;
    left: 50%;
    bottom: -45px;
    z-index: 100;
    width: 12px;
    height: 12px;
    background-color: rgba(200,200,200,1);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    cursor: pointer;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    -webkit-transition: background-color .2s;
    -moz-transition: background-color .2s;
    -o-transition: background-color .2s;
    transition: background-color .2s;
}

#slideshow-wrap label:not(.arrows):active { bottom: -46px }

#slideshow-wrap input[type=radio]#button-1:checked~label[for=button-1] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-2:checked~label[for=button-2] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-3:checked~label[for=button-3] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-4:checked~label[for=button-4] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-5:checked~label[for=button-5] { background-color: rgba(100,100,100,1) }

#slideshow-wrap label[for=button-1] { margin-left: -36px }

#slideshow-wrap label[for=button-2] { margin-left: -18px }

#slideshow-wrap label[for=button-4] { margin-left: 18px }

#slideshow-wrap label[for=button-5] { margin-left: 36px }

#slideshow-wrap input[type=radio]#button-1:checked~#slideshow-inner>ul { left: 0 }

#slideshow-wrap input[type=radio]#button-2:checked~#slideshow-inner>ul { left: -100% }

#slideshow-wrap input[type=radio]#button-3:checked~#slideshow-inner>ul { left: -200% }

#slideshow-wrap input[type=radio]#button-4:checked~#slideshow-inner>ul { left: -300% }

#slideshow-wrap input[type=radio]#button-5:checked~#slideshow-inner>ul { left: -400% }

label.arrows {
    font-family: 'WebSymbolsRegular';
    font-size: 25px;
    color: rgb(255,255,240);
    position: absolute;
    top: 50%;
    margin-top: -25px;
    display: none;
    opacity: 0.7;
    cursor: pointer;
    z-index: 1000;
    background-color: transparent;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    text-shadow: 0px 0px 3px rgba(0,0,0,.8);
}

label.arrows:hover { opacity: 1 }

label.arrows:active { margin-top: -23px }

input[type=radio]#button-1:checked~.arrows#arrow-2, input[type=radio]#button-2:checked~.arrows#arrow-3, input[type=radio]#button-3:checked~.arrows#arrow-4, input[type=radio]#button-4:checked~.arrows#arrow-5 {
    right: -55px;
    display: block;
}

input[type=radio]#button-2:checked~.arrows#arrow-1, input[type=radio]#button-3:checked~.arrows#arrow-2, input[type=radio]#button-4:checked~.arrows#arrow-3, input[type=radio]#button-5:checked~.arrows#arrow-4 {
    left: -55px;
    display: block;
    -webkit-transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -ms-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    transform: scaleX(-1);
}

input[type=radio]#button-2:checked~.arrows#arrow-1 { left: -19px }

input[type=radio]#button-3:checked~.arrows#arrow-2 { left: -37px }

input[type=radio]#button-5:checked~.arrows#arrow-4 { left: -73px }

.description {
    position: absolute;
    top: 0;
    left: 0;
    width: 260px;
    font-family: 'Yanone Kaffeesatz';
    z-index: 1000;
}

.description input { visibility: hidden }

.description label {
    font-family: 'WebSymbolsRegular';
    background-color: rgba(255,255,240,1);
    position: relative;
    left: -17px;
    top: 00px;
    width: 40px;
    height: 27px;
    display: inline-block;
    text-align: center;
    padding-top: 7px;
    border-bottom-right-radius: 15px;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    z-index: 5;
    color: rgb(20,20,20);
}

#slideshow-inner>ul>li:hover .description label { opacity: 1 }

.description input[type=checkbox]:checked~label { opacity: 1 }

.description .description-text {
    background-color: rgba(255,255,230,.5);
    padding-left: 45px;
    padding-top: 25px;
    padding-right: 15px;
    padding-bottom: 15px;
    position: relative;
    top: -35px;
    z-index: 4;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    color: rgb(20,20,20);
}

.description input[type=checkbox]:checked~.description-text { opacity: 1 }

@keyframes slide {
    0% { left: 0; }
    20% { left: 0; }
    25% { left: -100%; }
    45% { left: -100%; }
    50% { left: -200%; }
    70% { left: -200%; }
    75% { left: -300%; }
    95% { left: -300%; }
    100% { left: -400%; }
}

#slideshow-inner>ul {
    animation: slide 20s infinite;
}

#slideshow-wrap:hover #slideshow-inner>ul {
    animation-play-state: paused;
}

</style>



<?php
$review = DB::table('bravo_review')->limit(10)->get();
$reviews = DB::table('bravo_review')->first();



$user_review = [];

foreach ($review as $rr) {
    $user = DB::table('users')->select('first_name', 'last_name', 'images')->where('id', $rr->user_id)->first();
    $rr->user = $user;
    $user_review[] = $rr;
}
$totalUsers = count($user_review);
?>

 
 <div class="container">
    <div class="bravo-list-event layout_<?php echo e($style_list); ?>">
        <?php if($title): ?>
        <div class="title">
            <?php echo e($title); ?> <span><a href="<?php echo e(url('/event/')); ?>"><span style="float:right; color:#FF3500; font-size:15px; font-weight: 900;">View All</span></a></span>
        </div>
        <?php endif; ?>
        <?php if($desc): ?>
            <div class="sub-title">
                <?php echo e($desc); ?>

            </div>
        <?php endif; ?>
        <div class="list-item">
            <?php if($style_list === "normal"): ?>
                <div class="row">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-<?php echo e($col ?? 3); ?> col-md-6">
                            <?php echo $__env->make('Event::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php if($style_list === "carousel"): ?>
                <div class="owl-carousel">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('Event::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="container-fluid mb-5 w-100 mt-5 pt-5" style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);">
    <div class="row d-flex justify-content-center p-4">
   
      <div class="col-md-6">
        <h3 class="card-text pt-5 text-white p-1">Listen to Our Happy Customers</h3>
        <p class="card-text text-white pt-3"><?php echo e($reviews->title); ?> </p>
        <div class="row">
          <div class="col-md-6">
            <h3 class="card-text pt-2 text-white p-1"><?php echo e($totalUsers); ?> +</h3>
            <p class="card-text text-white">Happy Customers</p>
          </div>
          <div class="col-md-6">
            <h3 class="card-text pt-2 text-white p-1"><?php echo e($reviews->rate_number); ?> <i class="fa fa-star"></i></h3>
            <p class="card-text text-white">Overall Rating</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-4">
        <div id="slider" style="height: 400px;">
          <div class="dp-wrap">
            <div id="dp-slider">

              <?php $__currentLoopData = $user_review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
               <div class="dp_item" data-class="1" data-position="1">
                <div class="row">
                  <div class="col-md-12">
                    <p class="card-text text-dark p-3 text-item-p">
                      <?php echo e($item->content); ?> 
                    </p>
                  </div>
                  <div class="col-md-12 mb-4">
                    <div class="row">
                      <div class="col-md-4 offset-md-1">
                        <?php if(!empty($item->user->images)): ?>
                        <img class="img-fluid dpimg" src="/image/<?php echo e($item->user->images); ?>" height="10%" alt="investing" style="border-radius:100%; height:100px; width:100px;">
                        <?php endif; ?>
                      </div>
                      <div class="col-md-5">
                        <?php if(!empty($item->user->first_name) && !empty($item->user->last_name)): ?>
                        <h6 class="text-dark sell-item">
                       <?php echo e($item->user->first_name); ?> <?php echo e($item->user->last_name); ?>

                        </h6>
                        <?php endif; ?>
                        <p class="text-dark">
                          <?php if(!empty($item->rate_number)): ?>
                          <div class="star">
                              <?php for($i = 0; $i < $item->rate_number; $i++): ?>
                                  <i class="fa fa-star" style="color:#FE9000;"></i>
                              <?php endfor; ?>
                          </div>
                      <?php endif; ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </div>
            <ul id="dp-dots" style="display:none;">
              <li data-class="slide1"></li>
              <li data-class="slide2"></li>
              <li data-class="slide3"></li>
            </ul>
            <div class="btn" style="display:none;">
              <button id="dp-prev" class="btn btn-light"></button>
              <button id="dp-next" class="btn btn-light"></button>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>


<script>
var slides = document.querySelectorAll('#slideshow-inner>ul>li');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000);

function nextSlide() {
    slides[currentSlide].classList.remove('show');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('show');
}
</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      
<script>
 $(document).ready(function () {
   function detect_active() {
     // get active
     var get_active = $("#dp-slider .dp_item:first-child").data("class");
     $("#dp-dots li").removeClass("active");
     $("#dp-dots li[data-class=" + get_active + "]").addClass("active");
   }
   
   function autoplay() {
     $("#dp-next").click();
   }
 
   $("#dp-next").click(function () {
     var total = $(".dp_item").length;
     $("#dp-slider .dp_item:first-child").hide().appendTo("#dp-slider").fadeIn();
     $.each($(".dp_item"), function (index, dp_item) {
       $(dp_item).attr("data-position", index + 1);
     });
     detect_active();
   });
 
   $("#dp-prev").click(function () {
     var total = $(".dp_item").length;
     $("#dp-slider .dp_item:last-child").hide().prependTo("#dp-slider").fadeIn();
     $.each($(".dp_item"), function (index, dp_item) {
       $(dp_item).attr("data-position", index + 1);
     });
 
     detect_active();
   });
 
   $("#dp-dots li").click(function () {
     $("#dp-dots li").removeClass("active");
     $(this).addClass("active");
     var get_slide = $(this).attr("data-class");
     console.log(get_slide);
     $("#dp-slider .dp_item[data-class=" + get_slide + "]")
       .hide()
       .prependTo("#dp-slider")
       .fadeIn();
     $.each($(".dp_item"), function (index, dp_item) {
       $(dp_item).attr("data-position", index + 1);
     });
   });
 
   $("body").on("click", "#dp-slider .dp_item:not(:first-child)", function () {
     var get_slide = $(this).attr("data-class");
     console.log(get_slide);
     $("#dp-slider .dp_item[data-class=" + get_slide + "]")
       .hide()
       .prependTo("#dp-slider")
       .fadeIn();
     $.each($(".dp_item"), function (index, dp_item) {
       $(dp_item).attr("data-position", index + 1);
     });
 
     detect_active();
   });
 
   // Autoplay
   setInterval(autoplay, 2000); // Change the interval time as per your requirement
 });
 </script><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Event/Views/frontend/blocks/list-event/index.blade.php ENDPATH**/ ?>