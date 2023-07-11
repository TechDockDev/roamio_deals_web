 <style>
    .Daily-btn{
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
   color:white;
padding: 4px 4px;
}
..fass {
    font-size: 19px;
    color: white;
    float: right;
    position: relative;
    left: -17px;
    top: 9px;
}
 </style>



<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css")); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/fotorama/fotorama.css")); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bravo_detail_hotel">
        <?php echo $__env->make('Layout::parts.bc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <?php $review_score = $row->review_data ?>
                        <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-review', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <?php echo $__env->make('Tour::frontend.layouts.details.vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-form-enquiry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-related-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="g-all-attribute is_pc">
                            <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
               
        
                    

                  
                     
                        <div class="row">
                           <h4 class="title" style="margin-top: 43px;">Recently Viewed Deals<span style="float:right; color:#FF3500; font-size:15px;">View All</span></h4>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="col-md-4">
                              <div class="card mb-3" style="border-radius: 10px; padding: 10px; position: relative;">
                                 <div class="Daily-Deals1" style="position: relative;">
                                    <img src="<?php echo e(asset($hotel->bannerImage)); ?>" style="height:200px; width:100%; border-radius: 10px;">
                                     <span class="fa fa-heart fa-3x fass" style="position: absolute;
                                    top: 10px;
                                    right: 10px;
                                    color: white;
                                   
                                    left: 270px;
                                   
                                        font-size:17px;
                                    padding: 6px 6px;
                                    border-radius:30px;
                                   "></span>
                                 </div>
                                 <div class="card-body">
                                    <h5 class="card-title"><?php echo e($hotel->title); ?></h5>
                                    <p class="card-text">
                                       <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($hotel->address); ?> </span>
                                    </p>
                                    <p>
                                       <span class="btn btn-light Daily-btn"  style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
                                       color:white;
                                    padding: 4px 4px;"> <?php echo e($hotel->review_score); ?><i class="fa fa-star"></i></span>
                                       <?php echo e($hotel->star_rate); ?>

                                       <span> Excellent </span>
                                    </p>
                                    <p>
                                       <span style="font-size:25px; color:black;" ><?php echo e($hotel->price); ?></span>
                                       <span style="font-size:25px;"> AED </span>
                                       <span class="btn btn-light Daily-btn" style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
                                       color:white;
                                    padding: 4px 4px;"><?php echo e($hotel->discount_percent); ?> % OFF</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                     
                    </div>
                  
              

       
            
             

        </div>
        <?php echo $__env->make('Hotel::frontend.layouts.details.hotel-form-enquiry-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script>
        jQuery(function ($) {
            <?php if($row->map_lat && $row->map_lng): ?>
            new BravoMapEngine('map_content', {
                disableScripts: true,
                fitBounds: true,
                center: [<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>],
                zoom:<?php echo e($row->map_zoom ?? "8"); ?>,
                ready: function (engineMap) {
                    engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {
                        icon_options: {
                            iconUrl:"<?php echo e(get_file_url(setting_item("hotel_icon_marker_map"),'full') ?? url('images/icons/png/pin.png')); ?>"
                        }
                    });
                }
            });
            <?php endif; ?>
        })
    </script>
    <script>
        var bravo_booking_data = <?php echo json_encode($booking_data); ?>

        var bravo_booking_i18n = {
			no_date_select:'<?php echo e(__('Please select Start and End date')); ?>',
            no_guest_select:'<?php echo e(__('Please select at least one guest')); ?>',
            load_dates_url:'<?php echo e(route('space.vendor.availability.loadDates')); ?>',
            name_required:'<?php echo e(__("Name is Required")); ?>',
            email_required:'<?php echo e(__("Email is Required")); ?>',
        };
    </script>
    <script type="text/javascript" src="<?php echo e(asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset("libs/fotorama/fotorama.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset("libs/sticky/jquery.sticky.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('module/hotel/js/single-hotel.js?_ver='.config('app.asset_version'))); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Hotel/Views/frontend/detail.blade.php ENDPATH**/ ?>