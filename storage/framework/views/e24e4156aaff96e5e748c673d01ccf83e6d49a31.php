
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-D/6EhP9EoPWv/+iu/joNRhv+4S3YSSyfG6+Cwy1c4PoCvqj0qvK9cmumvv9SKCXL" crossorigin="anonymous">
<style>
  
    .fas{
 color:red;
    }
    .cancellation-btn{
    padding: 6px 6px;
     font-size: 12px;   
    }
    .Offer-btn{
     padding: 6px 6px;
     font-size: 12px;  
     background:#FFF3E3;
     color: #FF3500; 
    }
    ..star-rate {
    color: gold; /* Change the color as desired */
}
</style>

<?php if($row->getGallery()): ?>
    <div class="g-gallery">
        <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135" data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
            <?php $__currentLoopData = $row->getGallery(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item['large']); ?>" data-thumb="<?php echo e($item['thumb']); ?>" data-alt="<?php echo e(__("Gallery")); ?>"></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="social">
            <div class="social-share">
                <span class="social-icon">
                    <i class="icofont-share"></i>
                </span>
                <ul class="share-wrapper">
                    <li>
                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($translation->title); ?>" target="_blank" rel="noopener" original-title="<?php echo e(__("Facebook")); ?>">
                            <i class="fa fa-facebook fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="https://twitter.com/share?url=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($translation->title); ?>" target="_blank" rel="noopener" original-title="<?php echo e(__("Twitter")); ?>">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="service-wishlist <?php echo e($row->isWishList()); ?>" data-id="<?php echo e($row->id); ?>" data-type="<?php echo e($row->type); ?>">
                <i class="fa fa-heart-o"></i>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="g-header">
    <div class="left">
       
        <h3><?php echo e($translation->title); ?></h3>

        <p><?php echo e($row->star_rate); ?></p>
        <div class="star-rate">
            <i class="fa fa-star"><?php echo e($row->review_score); ?></i> Excellent
        </div>
            
          
          
        
          
            <?php if($translation->address): ?>
            <h2 class="address"><i class="fa fa-map-marker"></i>
                <?php echo e($translation->address); ?> 
            </h2>
          <?php endif; ?>
          
          <p><button class="btn btn-light mt-2 cancellation-btn">Free cancellation (24 Hours Prior)</button> 
            <span>
                <button class="btn btn-light mt-2 cancellation-btn">Instant confirmation</button>
            </span>
        </p> 
          <p><button class="btn btn-light mt-2 Offer-btn">TRENDING</button> 
            <span>
                <button class="btn btn-light mt-2 Offer-btn">Offer Ending Soon</button>
            </span>
         </p>   
    </div>
    
</div>

<?php if($translation->content): ?>
    <div class="g-overview">
        <h3><?php echo e(__("DescriptionX")); ?></h3>
        <div class="description">
            <?php echo $translation->content ?>
        </div>
    </div>
<?php endif; ?>



<?php

 
  $slug = request()->slug;

  $data = DB::table('bravo_hotels')->where('slug',$slug)->first();

  $description = $data->extra_price;

  $descriptionArray = json_decode($description, true);

?>

<style>
 .accordion {
    margin-bottom: 2px;
    background-color: #fff;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: 2px solid lightgrey;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-left: none;
    border-right: none;
    border-top: none;
    position: relative;
}


.accordion:after {
    height: 27px;
    content: '\203A';
    color: #777;
    font-weight: bold;
    float: right;
    font-size: 29px;
    margin-left: 5px;
}

.active:after {
  content: '\2039'; /* Left-pointing arrow when accordion is active (open) */
}

.panelx {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>




<?php $__currentLoopData = $descriptionArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dsc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<button class="accordion"><b><?php echo e($dsc['title']); ?></b></button>
<div class="panelx">
  <p> <?php echo e($dsc['description']); ?></p>
 
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panelx.style.maxHeight = null;
    } else {
      panelx.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


<?php echo $__env->make('Hotel::frontend.layouts.details.hotel-rooms', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="g-all-attribute is_mobile">
    <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="g-rules">
    <h3><?php echo e(__("Rules")); ?></h3>
    <div class="description">
        <div class="row">
            <div class="col-lg-4">
                <div class="key"><?php echo e(__("Check In")); ?></div>
            </div>
            <div class="col-lg-8">
                <div class="value">	<?php echo e($row->check_in_time); ?> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="key"><?php echo e(__("Check Out")); ?></div>
            </div>
            <div class="col-lg-8">
                <div class="value">	<?php echo e($row->check_out_time); ?> </div>
            </div>
        </div>
        <?php if($translation->policy): ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="key"><?php echo e(__("Hotel Policies")); ?></div>
                </div>
                <div class="col-lg-8">
                    <?php $__currentLoopData = $translation->policy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item <?php if($key > 1): ?> d-none <?php endif; ?>">
                            <div class="strong"><?php echo e($item['title']); ?></div>
                            <div class="context"><?php echo $item['content']; ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if( count($translation->policy) > 2): ?>
                        <div class="btn-show-all">
                            <span class="text"><?php echo e(__("Show All")); ?></span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="bravo-hr"></div>
<?php if ($__env->exists("Hotel::frontend.layouts.details.hotel-surrounding")) echo $__env->make("Hotel::frontend.layouts.details.hotel-surrounding", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if($row->map_lat && $row->map_lng): ?>
    <div class="g-location">
        <div class="location-title">
            <h3><?php echo e(__("Location")); ?></h3>
            <?php if($translation->address): ?>
                <div class="address">
                    <i class="icofont-location-arrow"></i>
                    <?php echo e($translation->address); ?>

                </div>
            <?php endif; ?>
        </div>

        <div class="location-map">
            <div id="map_content"></div>
        </div>
    </div>
<?php endif; ?>
<div class="bravo-hr"></div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script><?php /**PATH D:\new_roamio\roamio_deals_web\themes/BC/Hotel/Views/frontend/layouts/details/hotel-detail.blade.php ENDPATH**/ ?>