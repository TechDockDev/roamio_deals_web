<style>
    .Daily-btn {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    color: white;
    padding: 4px 4px;
}
</style>

<?php
    $translation = $row->translate();
?>
<div class="item-loop <?php echo e($wrap_class ?? ''); ?> h-100">
    <?php if($row->is_featured == "1"): ?>
        <div class="featured">
            <?php echo e(__("Featured")); ?>

        </div>
    <?php endif; ?>
    <div class="thumb-image ">
        
     <?php
     
       $gget = DB::table('media_files')->where('id',$row->banner_image_id)->get();
     
     
     ?>
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl($include_param ?? true)); ?>">
            <?php if($row->banner_image_id): ?>
                <?php if(!empty($disable_lazyload)): ?>
                    <img src="<?php echo e($row->image_url); ?>" class="img-responsive" alt="">
                <?php else: ?>
                
               <?php $__currentLoopData = $gget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                 <img src="<?php echo e(asset('/uploads/'.$ggg->file_path)); ?>" class="img-responsive" alt="">
                 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
                <?php endif; ?>
            <?php endif; ?>
        </a>
        <div class="service-wishlist <?php echo e($row->isWishList()); ?>" data-id="<?php echo e($row->id); ?>" data-type="<?php echo e($row->type); ?>">
            <i class="fa fa-heart-o" style="height:30px; width:30px; border-radius:30px;background: white;
            padding: 9px 7px; text-shadow: 1px 1px 27px black; color: red;"></i>
        </div>
        <?php if($row->discount_percent): ?>
            <div class="sale_info"><?php echo e($row->discount_percent); ?></div>
        <?php endif; ?>
    </div>
   
    <div class="item-title mt-2 pt-2">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl($include_param ?? true)); ?>">
            <?php if($row->is_instant): ?>
                <i class="fa fa-bolt d-none"></i>
            <?php endif; ?>
                <?php echo e($translation->title); ?>

        </a>
    </div>

    <div class="location mb-3" style="color:black; margin-top:-7px;">
      <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>   <?php if(!empty($row->location->name)): ?>
            <?php $location =  $row->location->translate() ?>
            <?php echo e($location->name ?? ''); ?>

        <?php endif; ?>
    </div>
    <?php if(setting_item('space_enable_review')): ?>
    <?php
    $reviewData = $row->getScoreReview();
    $score_total = $reviewData['score_total'];
    ?>
        <div class="service-review">
            <span class="rate">
              <span class="Daily-btn text-white w-30"> <?php if($reviewData['total_review'] > 0): ?> <?php echo e($score_total); ?>/5 <i class="fa fa-star"></i> <?php endif; ?>  </span> &nbsp; &nbsp;<span class="rate-text"><?php echo e($reviewData['review_text']); ?></span>
            </span>
            <span class="review">
             <?php if($reviewData['total_review'] > 1): ?>
                    <?php echo e(__(":number Reviews",["number"=>$reviewData['total_review'] ])); ?>

                <?php else: ?>
                    <?php echo e(__(":number Review",["number"=>$reviewData['total_review'] ])); ?>

                <?php endif; ?>
            </span>
        </div>
    <?php endif; ?>
    
    <div class="info mt-3">
        
        
        <div class="g-price text-start">
            <div class="prefix">
                <span class="fr_text"><?php echo e(__("AED")); ?></span>
            </div>
            <div class="price">
                 <span class="text-price" style="font-weight:700;"><?php echo e($row->display_price); ?></span>&nbsp;
                 <?php if(isset($row->discount_percent)): ?>
                 <span class=" btn btn-light Daily-btn text-white"><?php echo e($row->discount_percent); ?>% off</span>
         <?php else: ?>
        <span class=" btn btn-light Daily-btn text-white" style="color: white !important;
       ">0% off</span>
    <?php endif; ?>
              
            </div>
        </div>
    </div>
</div>



<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Event/Views/frontend/layouts/search/loop-grid.blade.php ENDPATH**/ ?>