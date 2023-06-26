
<?php $__env->startSection('content'); ?>


 <div class="panel">
     
     
     <?php if(Session::get('dataUpdated')): ?>
      <div class="panel-title" style="color:green;">
        Data updated Successfully 
      </div>
     <?php endif; ?>
     
     
    <div class="panel-title"><strong><?php echo e(__("Terms & condition")); ?></strong></div>
    <div class="panel-body">
           <form method="post" action="<?php echo e(route('flight.admin.visaTerms')); ?>">
           <?php echo csrf_field(); ?>
        <div class="form-group">
            <label class="control-label"><?php echo e(__("Visa Terms & Condition Content")); ?></label>
            <div class="">
                <textarea name="discription" class="d-none has-ckeditor" cols="30" rows="10"><?php  if($data) {echo $data->discription; } ?></textarea> 
            </div>
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary"> Update</button>
        
        </form>
        
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u533143048/domains/techdocklabs.com/public_html/roamiodeals/modules/Flight/Views/admin/terms.blade.php ENDPATH**/ ?>