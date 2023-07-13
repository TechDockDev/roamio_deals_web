
<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/fotorama/fotorama.css')); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
  .cancel{
    color:#FF3500;
    background: #FFF5E9;
    float: right;
    left: -17px;
    position: relative;
  }

  .proced{
    color:white;
    background: #FF3500;
    float: right;
  }
</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


<div class="container d-flex justify-content-center">
  <div class="row">
      <h4 class="text-center pt-5">
          <span><img src="<?php echo e(asset('images/Flag_of_the_United_Arab_Emirates_1.png')); ?>"></span> UAE Visa Application
      </h4>
  </div>
</div>




<div class="container card mt-3 pt-3">
  <div class="row">
    <h6 class="text-center py-3">
        <span>Confirm Traveler Details
        </h6>
    </div>

  <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $confirm_visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card mt-3 pt-3" style="background:#FAFAFA;">
    <div class="row py-3">
      <div class="col-md-12">
        <h5 class="py-2 mx-3">
          Traveler 1
          <span  style="float:right; color:red;">
            <i class="fa fa-edit"></i> Edit 

            <span>
              <i class="fa fa-trash" aria-hidden="true"></i>
            </span>
          </span>
         
        </h5>
      </div>
    </div>
      <div class="row py-3">
          <div class="col-md-4 text-center">
              <p class="card-text">First Name</p>
              <h6 class="card-text"><?php echo e($confirm_visa->firstname); ?></h6>

              <p class="card-text">Email</p>
              <h6 class="card-text"><?php echo e($confirm_visa->email); ?></h6>

              <p class="card-text">Passport Number</p>
              <h6 class="card-text"><?php echo e($confirm_visa->passport_no); ?></h6>

              <p class="card-text">Passport Size Photo</p>
              <?php if($confirm_visa->passport_size_photo): ?>
                  <img src="<?php echo e($confirm_visa->passport_size_photo); ?>" alt="Passport Size Photo" style="height:150px ;width:150px;border-radius:10px;">
              <?php else: ?>
                  <h6 class="card-text">No photo available</h6>
              <?php endif; ?>
          </div>
          <div class="col-md-4 text-center">
              <p class="card-text">Last Name</p>
              <h6 class="card-text"><?php echo e($confirm_visa->lastname); ?></h6>

              <p class="card-text">Contact Number</p>
              <h6 class="card-text"><?php echo e($confirm_visa->contact_no); ?></h6>

              <p class="card-text">Passport Expiry Date</p>
              <h6 class="card-text"><?php echo e($confirm_visa->passport_expiry); ?></h6>

              <p class="card-text">Passport First Page</p>
              <?php if($confirm_visa->passport_first_page): ?>
                  <img src="<?php echo e($confirm_visa->passport_first_page); ?>" alt="Passport First Page" style="height:150px ;width:150px;border-radius:10px;">
              <?php else: ?>
                  <h6 class="card-text">No image available</h6>
              <?php endif; ?>
          </div>
          <div class="col-md-4 text-center">
              <p class="card-text">Date of Birth</p>
              <h6 class="card-text"><?php echo e($confirm_visa->dob); ?></h6>
       
              <p class="card-text">Alternate Number</p>
              <h6 class="card-text"><?php echo e($confirm_visa->alternate_number); ?></h6>
      
              <p class="card-text">Place of Issue</p>
              <h6 class="card-text"><?php echo e($confirm_visa->place_issues); ?></h6>


              <p class="card-text">Passport Second Page</p>
              <?php if($confirm_visa->passport_second_page): ?>
                  <img src="<?php echo e($confirm_visa->passport_second_page); ?>" alt="Passport Second Page" style="height:150px ;width:150px;border-radius:10px;">
              <?php else: ?>
                  <h6 class="card-text">No image available</h6>
              <?php endif; ?>
          </div>
      </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="footer-card-btn py-4">
  <button class="btn btn-light proced">Proceed to Payment</button>
  <button class="btn btn-light cancel">Cancel</button>
 
  </div>
</div>


 
  





 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Flight/Views/frontend/visaconfirmation.blade.php ENDPATH**/ ?>