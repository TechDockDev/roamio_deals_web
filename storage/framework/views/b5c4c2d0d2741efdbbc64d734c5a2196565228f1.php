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
  
/* Window size 850 width set */
/* @media screen and (max-width: 850px) {
    .column {
        width: 50%;
    }
} */
  
/* Window size 400 width set */
/* @media screen and (max-width: 400px) {
    .column {
        width: 100%;
    }
} */

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
.fass:hover {
  color: red !important;
}
    


</style>



<div class="container mt-5">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dealydeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
       <h4 class="title" style="margin-top: 43px;"><?php echo e($dealydeal['parent_name']); ?> <span style="float:right; color:#FF3500; font-size:15px;">View All</span></h4>
    </div>
    <div class="row">
       <?php $__currentLoopData = $dealydeal['hotels']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-md-4">
          <div class="card mb-3" style="border-radius: 10px; padding: 10px; position: relative;">
             <div class="Daily-Deals1" style="position: relative;">
                
               <a href="<?php echo e(url('/hotel/' . $hotel->slug)); ?>"><img src="<?php echo e($hotel->banner_image); ?>" style="height:200px; width:100%; border-radius: 10px;"></a>
                <span class="fa fa-heart fa-3x fass" style="position: absolute;
                top: 10px;
                right: 10px;
                color: white;
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
                <h5 class="card-title"><?php echo e($hotel->title); ?></h5>
                <p class="card-text">
                   <span><i class="fa fa-map-marker" aria-hidden="true"></i>  <?php echo e($hotel->address); ?></span>
                </p>
                <p>
                   <span class="btn btn-light Daily-btn"><?php echo e($hotel->star_rate); ?> <i class="fa fa-star"></i></span>
                   (4)
                   <span> Excellent </span>
                </p>
                <p>
                   <span style="font-size:25px; color:black;"><?php echo e($hotel->price); ?></span>
                   <span style="font-size:25px;"> AED </span>
                   <span class="btn btn-light Daily-btn"><?php echo e($hotel->discount_percent); ?>% OFF</span>
                </p>
             </div>
          </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>





<div class="container">
    <div class="bravo-list-hotel layout_<?php echo e($style_list); ?>">
        <?php if($title): ?>
        <div class="title">
            <?php echo e($title); ?>

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
                            <?php echo $__env->make('Hotel::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php if($style_list === "carousel"): ?>
                <div class="owl-carousel">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('Hotel::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <h4 class="title">Explore the peak of Dubai</h4>
    </div>
    <div class="row">  
        <div id="filtering">
            <button class="bttn active" onclick="geeksportal('all')">Show all</button>
            <button class="bttn" onclick="geeksportal('Top Trending In Dubai')">Top Trending In Dubai</button>
            <button class="bttn" onclick="geeksportal('Top Discount')">Top Discount</button>
            <button class="bttn" onclick="geeksportal('Top Rated')">Top Rated</button>
            <button class="bttn" onclick="geeksportal('Top Selling')">Top Selling</button>
        </div>
    </div>

    <div class="row">
        <h4 class="title">Categories</h4>
    </div>

    <div class="row"> 
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
  
<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Hotel/Views/frontend/blocks/list-hotel/index.blade.php ENDPATH**/ ?>