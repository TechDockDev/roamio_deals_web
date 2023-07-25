

<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css")); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/fotorama/fotorama.css")); ?>"/>
    <style>
.categories{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;
  background-repeat: no-repeat;
  background-image: url("https://images.pexels.com/photos/5087165/pexels-photo-5087165.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");   
}
.heading{
    color: white;
    position: relative;
    top: 140px;
    text-align: center;
    font-size: 22px;
}
   

.Daily-Deals{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;"
  background-repeat: no-repeat;
  background-image: url("images/05102023125612645b946ceee0b.jpg");
}
.fass {
    font-size: 19px;
    color: white;
    float: right;
    position: relative;
    left: -17px;
    top: 9px;
}
.Daily-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
color:white;
padding: 4px 4px;
}

.image{
        background: url("images/img.png");
         height:400px;
         border-radius:10px;
    }
    .image1{
        background: url("images/img_1.png");
         height:400px;
         border-radius:10px;   
    }
    .text1{
        font-size: 30px;
    position: relative;
    top: 244px;
    left: 10px;
    color: white;
    }
    .text2{
        font-size: 16px;
    position: relative;
    top: 234px;
    left: 10px;
    color: white;   
    }
    .butn{
        position: relative;
    top: 241px;
    left: 10px;
}


</style>
<?php $__env->stopPush(); ?>
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
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  

.Daily-Deals{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;"
  background-repeat: no-repeat;
  background-image: url("images/05102023125612645b946ceee0b.jpg");
}
.fass {
    font-size: 19px;
    color: white;
    float: right;
    position: relative;
    left: -17px;
    top: 9px;
}
.Daily-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
color:white;
padding: 4px 4px;
}
/* Anchor tag decoration */
a {
    text-decoration: none;
    color: #5673C8;
}
  
a:hover {
    color: lightblue;
}
  
.row {
    margin: 0px -14px;
    padding: 8px;
}
  
.row>.column {
    padding: 6px;
}
  
.column {
    float: left;
    width: 100%;
    display: none;
}
  
/* Content decoration */
.content {
    /* background-color: white;
    padding: 10px;
    border: 1px solid gray; */
}
  
/* Paragraph decoration */
p {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    overflow: hidden;
}
  
.row:after {
    content: "";
    display: table;
    clear: both;
}
  
/* .content {
    background-color: white;
    padding: 10px;
    border: 1px solid gray;
} */
  
.show {
    display: block;
}
  
/* Style the filter buttons */
.bttn {
    border: none;
    padding: 8px 14px;
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color:white;
    border-radius:4px;
}
  
.bttn:hover {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    opacity: 0.8;
    color:white;
}
  
.bttn.active {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
}
  

.categories{
  background-size: cover;
  height:200px;
  width:100%;
  border-radius: 10px;
  background-repeat: no-repeat;
  background-image: url("https://images.pexels.com/photos/5087165/pexels-photo-5087165.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");   
}
.heading{
    color: white;
    position: relative;
    top: 140px;
    text-align: center;
    font-size: 22px;
}
   
.dp-wrap {
  /* margin: 120px auto; */
  position: relative;
  perspective: 1000px;
  height: 100%;
}

.dp-slider {
  height: 100%;
  width: 100%;
  position: absolute;
  transform-style: preserve-3d;
}

.dp-slider div {
  transform-style: preserve-3d;
}

.dp_item {
  display: block;
  position: absolute;
  text-align: center;
  color: #fff;
  border-radius: 10px;
  transition: transform 1.2s;
}

.dp-img img {
  border-left: 1px solid #fff;
}

#dp-slider .dp_item:first-child {
  z-index: 10 !important;
  transform: rotateY(0deg) translateX(0px) !important;
}

.dp_item[data-position="2"] {
  z-index: 9;
  transform: rotateY(0deg) translateX(10%) scale(0.9);
}

.dp_item[data-position="3"] {
  z-index: 8;
  transform: rotateY(0deg) translateX(20%) scale(0.8);
}

.dp_item[data-position="4"] {
  z-index: 7;
  transform: rotateY(0deg) translateX(30%) scale(0.7);
}

#dp-next,
#dp-prev {
  position: absolute;
  top: 50%;
  right: 16%;
  height: 33px;
  width: 33px;
  z-index: 10;
  cursor: pointer;
}

#dp-prev {
  left: 15px;
  transform: rotate(180deg);
}

#dp-dots {
  position: absolute;
  bottom: -5px;
  z-index: 12;
  left: 38%;
  cursor: default;
}

#dp-dots li {
  display: inline-block;
  width: 13px;
  height: 13px;
  background: #fff;
  border-radius: 50%;
}

#dp-dots li:hover {
  cursor: pointer;
  background: goldenrod;
  transition: background 0.3s;
}

#dp-dots li.active {
  background: goldenrod;
}

.dp_item {
  width: 85%;
}

.dp-content,
.dp-img {
  text-align: left;
}

.dp_item {
  display: flex;
  align-items: center;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  border-top: none;
}

.dp-content {
  padding-left: 100px;
  padding-right: 0;
  display: inline-block;
  width: 100%;
}

.dp-content h2 {
  color: #41414b;
  font-family: Circular Std Bold;
  font-size: 48px;
  max-width: 460px;
  margin-top: 8px;
  margin-bottom: 0px;
}

.dp-content p {
  color: #74747f;
  max-width: 490px;
  margin-top: 15px;
  font-size: 24px;
}

.dp-content .site-btn {
  margin-top: 15px;
  font-size: 18px;
  padding: 19px 40px;
}

.dp-img:before {
  background: -webkit-linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0.25),
    rgba(255, 255, 255, 0)
  );
  background: -o-linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0.25),
    rgba(255, 255, 255, 0)
  );
  background: -moz-linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0.25),
    rgba(255, 255, 255, 0)
  );
  background: linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0.75),
    rgba(255, 255, 255, 0)
  );
  content: "";
  position: absolute;
  height: 100%;
  width: 25%;
  z-index: 1;
  top: 0;
  pointer-events: none;
  background: -webkit-linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 0.75)
  );
  background: -o-linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 0.75)
  );
  background: -moz-linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 0.75)
  );
  background: linear-gradient(
    -90deg,
    rgba(255, 255, 255, 0),
    rgb(255, 255, 255)
  );
}

.dp-img img {
  object-fit: cover;
  object-position: right;
}

#dp-slider,
.dp-img img {
  height: 738px;
}

#dp-slider .dp_item:hover:not(:first-child) {
  cursor: pointer;
}

.site-btn {
  color: #fff;
  font-size: 18px;
  font-family: "Circular Std Medium";
  background: goldenrod;
  padding: 14px 33px;
  display: inline-block;
  border-radius: 50px;
  position: relative;
  top: -10px;
  text-decoration: none;
}

.site-btn:hover {
  text-decoration: none;
  color: #fff;
}
.image{
        background: url("images/img.png");
         height:400px;
         border-radius:10px;

    }
    .image1{
        background: url("images/img_1.png");
         height:400px;
         border-radius:10px;   
    }
    .text1{
        font-size: 30px;
    position: relative;
    top: 244px;
    left: 10px;
    color: white;
    }
    .text2{
        font-size: 16px;
    position: relative;
    top: 234px;
    left: 10px;
    color: white;   
    }
    .butn{
        position: relative;
    top: 241px;
    left: 10px;
}
fass:hover{
  color: #FF3500;   
}

.ican-img{
    padding: 3px 10px;
 width: 11%;
} 


 .class{

   color: red !important;

     }


</style>


  <center><h3  class="title py-2" style="margin-top: 43px; font-weight:700; font-size:28px;">Explore UAE <span style="color: #FE9000;">Activities!</span></h3></center>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo e(asset('images\benner-img.png')); ?>" alt="" srcset="" style="width:100%;">
        </div>
       
    </div>
  </div>
 
  <div class="container">
    <div class="row"> 
      <h4 class="mt-2 mx-3" style="font-weight:700; font-size:28px;">Categories</h4> 
      <?php $__currentLoopData = $fetch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-md-3">
           <div class="column Top Trending In Dubai">
              <div class="card1" style="position: relative;">
                  <div class="categories1" style="position: relative;">
                      <img src="<?php echo e($cat->banner_image); ?>" alt="" srcset="" style="height:200px; width:100%; border-radius:10px;">
                      <h2 class="heading" style="position: absolute; top: 76%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; width: 100%; font-weight: 900;"><?php echo e($cat->name); ?></h2>
                  </div>
              </div>
           </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
    
</div>



<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="container mt-5">
   <div class="row">
    <h4  class="title mx-3" style="margin-top:43px; font-weight:700; font-size:28px;"><?php echo e($datas['parent_name']); ?><a href="<?php echo e(url('activity')); ?>" ><span style="font-size:15px; font-weight: 900; float:right;color:#FF3500; ">View All</span></a></h4> 
   </div>
   <div class="row">
       <?php $__currentLoopData = $datas['events']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-4 mb-3">
            <a href = "<?php echo e(url('/activity/'.$dt->slug)); ?>" style="text-decoration:none;">
            <div class="card"  style="border-radius: 10px;">
                <div class="Daily-Deals1" style="position: relative;">
                  <img src="<?php echo e($dt->banner_image); ?>" style="height:200px; width:100%; border-radius: 10px;">
                 
            <input type ="text" class="objectidgetclass<?php echo e($dt->id); ?>" style="display:none;" name="object_id" value="<?php echo e($dt->id); ?>">
           <input type ="text" class="objectmodalgetclass<?php echo e($dt->id); ?>" style="display:none;" name="object_model" value="event">
 



                <span class="fa fa-heart fa-3x fass newhotelheartstatus<?php echo e($dt->id); ?> hotelwishlistaddingheart <?php if ($dt->wishlist== true) {
                  echo "class";
                }   ?>" attr="<?php echo e($dt->id); ?>" style="position: absolute;
                top: 10px;
                right: 10px;
                color: red;
                text-shadow: 1px 1px 27px black;
                /* float: right; */
                left: 270px;
                height: 30px;
                width: 30px;
                background: white;
                padding: 6px 6px;
                border-radius:30px;
            "></span>


                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($dt->title); ?></h5>
                  <p class="card-text">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?php echo e($dt->address); ?></p></span>
                    <p><span class="btn btn-light Daily-btn"><?php echo e($dt->review_score); ?> </span></span><span> Excellent </span></p>
                  <p><span style="font-size:25px; color:black;"><?php echo e($dt->price); ?></span><span style="font-size:25px;"> AED </span> <span class="btn btn-light Daily-btn"><?php echo e($dt->discount); ?>% OFF</span></p>
                </div>
              </div>
              </a>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<div class="container-fluid mb-5 w-100 mt-5 pt-5" style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);">
    <div class="row d-flex justify-content-center p-4">
   
      <div class="col-md-6">
        <h3 class="card-text pt-5 text-white p-1">Listen to Our Happy Customers</h3>
        <p class="card-text text-white pt-3">Experience blissful relaxation, captivating local adventures, and charming accommodations - all in one staycation destination; our guests' reviews speak volumes about the unforgettable memories and cherished experiences awaiting you!</p>
        <div class="row">
          <div class="col-md-6">
            <h3 class="card-text pt-2 text-white p-1"><?php echo e($totalUsers); ?> +</h3>
            <p class="card-text text-white">Happy Customers</p>
          </div>
          <div class="col-md-6">
            
           <i class="fa fa-star"></i></h3>
        
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
   <div class="container">
       <div class="row">
       <div class="col-md-6">
             <div class="card1">
               <div class="destination-item">
                   <div class="image">
                   <div class="effect"></div>
                    <div class="content">
                       
                       <small class="text2">Experience Better</small>
                       <h4 class="title text1">Top Staycation Around UAE</h4>
                         <div class="desc">                                                                                                                                                                                                                                             
                        <a href="<?php echo e(url('staycation?location_id=11')); ?>" class="btn btn-light butn" target="_blank"> 
                           Explore
                        </a> 
                       </div>
                     </div>
               </div>
           </div>
             </div>
       </div>
       <div class="col-md-6">
           <div class="card1"> 
               <div class="destination-item">
                   <div class="image1">
                   <div class="effect"></div>
                   <div class="content">
                       
                       <small class="text2">Experience More</small>
                       <h4 class="title text1">Top Activities Around UAE</h4>
                         <div class="desc">                                                                                                                                                                                                                                             
                        <a href="<?php echo e(url('staycation?location_id=11')); ?>" class="btn btn-light butn" target="_blank"> 
                           Explore
                        </a> 
                       </div>
                     </div>
               </div>
           </div>
             </div>
       </div>
     </div>
  </div>
    <div class="container mt-5 pt-5 mb-5">
       <div class="row">
           <div class="col-md-4 text-center">
               <div class="card1">
                <img src="<?php echo e(url('images/Frame_1.svg')); ?>" class="card-img-top" alt="...">
                 
               </div>
           </div>
           <div class="col-md-4 text-center">
               <div class="card1">
                <img src="<?php echo e(url('images/Frame_2.png')); ?>" class="card-img-top" alt="...">
                  
               </div>
           </div>
           <div class="col-md-4 text-center">
               <div class="card1">
                <img src="<?php echo e(('images/Group2608634.svg')); ?>" class="card-img-top" alt="..." style="height:64px">
                   <div class="card-body">
                       <h5 class="card-title pt-3" style="font-weight:900">Best Offer</h5>
                       <p class="card-text">Best Recommendations according to your Interest and offers.</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
       

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

   <script>

$('document').ready(function(){
 
$('.hotelwishlistaddingheart').click(function() {
  var id = $(this).attr('attr');
  var object_id = $('.objectidgetclass' + id).val();
  var object_modal = $('.objectmodalgetclass' + id).val();

  var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve the CSRF token from the meta tag

  $.ajax({
    url: '/user/wishlist',
    type: 'post',
    data: {
      object_id: object_id,
      object_model: object_modal
    },
    headers: {
      'X-CSRF-TOKEN': csrfToken // Set the CSRF token in the request headers
    },
   success: function(response) {
  if (response.class === "active") {
    alert("Wishlist updated successfully");

      $('.newhotelheartstatus' +id).addClass('class');
    
  
  } else if (response.class === "inactive") {
    
    $('.newhotelheartstatus' +id).removeClass('class');
  
    
  } else {

    alert("Unexpected response status: " + response.status);
   
  }
},
    error: function(xhr, status, error) {
     $('#login').modal('show');
      
    }
  });
});



});



</script>



       

   <script>
        geeksportal("all")
  
   function geeksportal(c) {
    var x, i;
  
    x = document.getElementsByClassName("column");
  
    if (c == "all") c = "";
  
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
  
        if (x[i].className.indexOf(c) > -1)
            w3AddClass(x[i], "show");
    }
}
  
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
  
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}
  
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}
  
// Add active class to the current
// button (highlight it)
var btnContainer = document.getElementById("filtering");
var btns = btnContainer.getElementsByClassName("bttn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
  
        var current =
            document.getElementsByClassName("active");
  
        current[0].className =
            current[0].className.replace(" active", "");
  
        this.className += " active";
    });
}
    </script> 
  


      
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
   </script>
   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\new_roamio\roamio_deals_web\themes/BC/Event/Views/frontend/explore-activity.blade.php ENDPATH**/ ?>