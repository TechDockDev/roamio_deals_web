 <?php

$entry =DB::table('visa_entry')->get();

?>

<?php if(Session::has('dataAdded')): ?>


<h5 style="color:green;">Data added successfully</h5>

<?php elseif(Session::has('dataUpdated')): ?>

<h5 style="color:green;">Data updated successfully</h5>


<?php else: ?>

<?php endif; ?>

<?php $__currentLoopData = $datachild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <div class="panel">
    <div class="panel-title"><strong><?php echo e(__("Content")); ?></strong></div>
    <div class="panel-body">
            <div class="row">
                <input type="text" value="<?php echo e($dt->id); ?>" style="display:none;" name="id[]">
                <div class="form-group col-lg-6">
                    <label><?php echo e(__("Select Visa Type")); ?></label>
                   <select name="entry_id" class="form-control" required>
                       <option value="<?php  if($datachild){ echo $dt->entry_id; }; ?>"><?php  if($datachild){ echo $data->entry; }; ?></option>
                       <?php $__currentLoopData = $entry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($aa->id); ?>"><?php echo e($aa->entry); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </select>
                </div>
                 <div class="form-group col-lg-6">
                    <label><?php echo e(__("Days")); ?></label>

                    <input type="text" name="days[]" value="<?php echo e($dt->days); ?>" placeholder="<?php echo e(__('Type visa days')); ?>" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label><?php echo e(__("Heading")); ?></label>
                    <input type="text" name="title[]" value="<?php echo e($dt->title); ?>" placeholder="<?php echo e(__('Tourist|Standard|Single Entry|14 days')); ?>"  class="form-control">
                </div>
                 <div class="form-group col-lg-6">
                    <label><?php echo e(__("Visa Price")); ?></label>
                    <input type="text" name="price[]" value="<?php echo e($dt->price); ?>" placeholder="<?php echo e(__('AED 350')); ?>" name="code" class="form-control">
                </div>
            </div>
            
        <div class="form-group">
            <label class="control-label"><?php echo e(__("Visa Content")); ?></label>
            <div class="">
                <textarea name="discription[]" class="d-none has-ckeditor" cols="30" rows="10"><?php echo e($dt->discription); ?></textarea> 
            </div>
        </div>
        
    </div>
</div>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php if($datachild == '[]'): ?>


<div class="panel">
    <div class="panel-title"><strong><?php echo e(__("Content")); ?></strong></div>
    <div class="panel-body">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label><?php echo e(__("Select Visa Type")); ?></label>
                   <select name="entry_id" class="form-control" required>
                       <option >Select--visa</option>
                       <?php $__currentLoopData = $entry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($aa->id); ?>"><?php echo e($aa->entry); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </select>
                </div>
                 <div class="form-group col-lg-6">
                    <label><?php echo e(__("Days")); ?></label>
                    <input type="text" name="days" value="" placeholder="<?php echo e(__('Type visa days')); ?>" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label><?php echo e(__("Heading")); ?></label>
                    <input type="text" name="title" value="" placeholder="<?php echo e(__('Tourist|Standard|Single Entry|14 days')); ?>"  class="form-control">
                </div>
                 <div class="form-group col-lg-6">
                    <label><?php echo e(__("Visa Price")); ?></label>
                    <input type="text" name="price" value="" placeholder="<?php echo e(__('AED 350')); ?>" name="code" class="form-control">
                </div>
            </div>
            
        <div class="form-group">
            <label class="control-label"><?php echo e(__("Visa Content")); ?></label>
            <div class="">
                <textarea name="discription" class="d-none has-ckeditor" cols="30" rows="10"></textarea> 
            </div>
        </div>
        
    </div>
</div>

<?php endif; ?>

<div class="panel">

<div class="panel-title"><strong><?php echo e(__("Visa Entry Type")); ?></strong></div>
    <div class="panel-body">
           
               <table class="table">

                   <tr>
                       <th>Entry Name</th>
                       <th>Action</th>
                   </tr>
                   
                   <tbody>
                       <?php $__currentLoopData = $entry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class=""><?php echo e($a->entry); ?></td>
                        <td>&nbsp;<button type="button" attr="<?php echo e($a->id); ?>" name="<?php echo e($a->entry); ?>" data-toggle="modal" data-target="#editModalLong" class="editbutton btn btn-success">Edit</button></td>
                     </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                   
               </table>
    </div>
</div>






<?php /**PATH /home/u533143048/domains/techdocklabs.com/public_html/roamiodeals/modules/Flight/Views/admin/flight/form.blade.php ENDPATH**/ ?>