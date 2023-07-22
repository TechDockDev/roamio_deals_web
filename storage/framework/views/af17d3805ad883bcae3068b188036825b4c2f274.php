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
<div class="item-loop <?php echo e($wrap_class ?? ''); ?> h-100" >
    <?php if($row->is_featured == "1"): ?>
        <div class="featured">
            <?php echo e(__("Featured")); ?>

        </div>
    <?php endif; ?>
    <div class="thumb-image ">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl()); ?>">
            
          
           <?php
           
           
           $data = DB::table('media_files')->where('id',$row->banner_image_id)->select('file_path')->first();  
           ?>
            
            
           
                <?php if(!empty($disable_lazyload)): ?>
                
              
                     <?php echo get_image_tag($row->image_id,'medium',['class'=>'img-responsive','alt'=>$translation->title]); ?>

                <?php else: ?>
                     
                    
                    <img src="<?php echo e(asset('uploads/'.$data->file_path)); ?>" class="img-responsive" alt="">
                 
                <?php endif; ?>
         
        </a>
        <?php if($row->star_rate): ?>
            <div class="star-rate">
                <div class="list-star">
                    <ul class="booking-item-rating-stars">
                        <?php for($star = 1 ;$star <= $row->star_rate ; $star++): ?>
                            <li><i class="fa fa-star"></i></li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <div class="service-wishlist <?php echo e($row->isWishList()); ?>" data-id="<?php echo e($row->id); ?>" data-type="<?php echo e($row->type); ?>">
            <i class="fa fa-heart-o" style="height: 30px;
            width: 30px;
            background: white;
            padding: 8px 7px;
            border-radius: 30px;
            color:black;
            text-shadow: 1px 1px 27px black;
        "></i>
        </div>
    </div>
    <div class="item-title">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl()); ?>">
            <?php if($row->is_instant): ?>
                <i class="fa fa-bolt d-none"></i>
            <?php endif; ?>
                <?php echo e($translation->title); ?>

        </a>
        <?php if($row->discount_percent): ?>
            <div class="sale_info"><?php echo e($row->discount_percent); ?></div>
        <?php endif; ?>
    </div>
    <div class="location">
        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>   <?php if(!empty($row->location->name)): ?>
            <?php $location =  $row->location->translate() ?>
            <?php echo e($location->name ?? ''); ?>

        <?php endif; ?>
    </div>
    <?php if(setting_item('hotel_enable_review')): ?>
    <?php
    $reviewData = $row->getScoreReview();
    $score_total = $reviewData['score_total'];
    ?>
    <div class="service-review">
        <span class="rate">
            <span class="Daily-btn text-white w-30"><?php if($reviewData['total_review'] > 0): ?> <?php echo e($score_total); ?>/5 <i class="fa fa-star"></i> <?php endif; ?></span> &nbsp;<span class="rate-text" style="color:black"><?php echo e($reviewData['review_text']); ?></span>
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
    <div class="info mt-4 mb-1">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text" style="color:black;"><?php echo e(__("AED")); ?></span>
            </div>
            <div class="price">
                <span class="text-price" style="padding: 0px 1px;"><?php echo e($row->display_price); ?> <span class="unit  text-dark"><?php echo e(__("/night")); ?></span></span> &nbsp;
               
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
<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Hotel/Views/frontend/layouts/search/loop-grid.blade.php ENDPATH**/ ?>