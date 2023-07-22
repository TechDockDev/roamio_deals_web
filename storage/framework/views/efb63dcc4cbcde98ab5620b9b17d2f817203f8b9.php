<style>
   @media only screen and (max-width: 600px) {
    .helloo{
 display: none !important;
  }
  .mailchimp{
    display: none !important; 
  }
 
} 

 .text-heading{
    font-size:18px;
  }
</style>


<?php if(!empty($style) and $style == "carousel" and !empty($list_slider)): ?>
    <div class="effect">
        <div class="owl-carousel">
            <?php $__currentLoopData = $list_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $img = get_file_url($item['bg_image'],'full') ?>
                <div class="item">
                    <div class="item-bg" style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('<?php echo e($img); ?>') !important"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row" style="margin-top:-80px;">
        
        
        <div class="col-lg-12" style="left: 50px;">
            <div class="row">
             <div class="col-md-4">
                <h4 class="text-heading"  style="font-size:30px; font-weight:600; font-family:'poppins';margin-top: 38px;"> <?php echo e($title); ?></h4>
                <div class="sub-heading mb-3"><?php echo e($sub_title); ?></div>
                <button class="btn btn-light">Explore</button>
                </div>   
            </div>
           
            <?php if(empty($hide_form_search)): ?>
                <div class="g-form-control">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php if(!empty($service_types)): ?>
                            <?php $number = 0; ?>
                            <?php $__currentLoopData = $service_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $allServices = get_bookable_services();
                                    if(empty($allServices[$service_type])) continue;
                                    $module = new $allServices[$service_type];
                                ?>
                                <li role="bravo_<?php echo e($service_type); ?>">
                                    <a href="#bravo_<?php echo e($service_type); ?>" class="<?php if($number == 0): ?> active <?php endif; ?>" aria-controls="bravo_<?php echo e($service_type); ?>" role="tab" data-toggle="tab">
                                        <i class="<?php echo e($module->getServiceIconFeatured()); ?>"></i>
                                        <?php echo e(!empty($modelBlock["title_for_".$service_type]) ? $modelBlock["title_for_".$service_type] : $module->getModelName()); ?>

                                    </a>
                                </li>
                                <?php $number++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul> 
                    <div class="col-md-12 w-100 helloo">
                        <div role="tabpanel" class="tab-pane active" id="bravo_flight" style="width:90%;top: 186px;position: relative; background:white; border-radius:10%">
                            <?php echo $__env->make(ucfirst("flight").'::frontend.layouts.search.form-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div> 
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/Base/Template/Views/frontend/blocks/form-search-all-service/style-normal.blade.php ENDPATH**/ ?>