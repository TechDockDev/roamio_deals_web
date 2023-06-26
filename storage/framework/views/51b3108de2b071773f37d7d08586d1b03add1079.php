<div class="panel">
    <div class="panel-title"><strong><?php echo e(__("Hotel Content")); ?></strong></div>
    <div class="panel-body">
        <?php
        
        $fdata = DB::table('bravo_hotels')->where('id',$row->id)->first();
        
        ?>
        <div class="form-group">
            <label><?php echo e(__("Title")); ?></label>
            <input type="text" value="<?php if($fdata !== null) { echo $fdata->title;}  ?>" placeholder="<?php echo e(__("Name of the hotel")); ?>" name="title" class="form-control">
        </div>
        
        
        
       
        <div class="form-group">
            <label class="control-label"><?php echo e(__("Content")); ?></label>
            <div class="">
                <textarea name="content" class="d-none has-ckeditor" cols="30" rows="10"><?php if($fdata !== null) { echo $fdata->content;}  ?></textarea> 
            </div>
        </div>
        <?php if(is_default_lang()): ?>
            <div class="form-group">
                <label class="control-label"><?php echo e(__("Youtube Video")); ?></label>
                <input type="text" name="video" class="form-control" value="<?php echo e($row->video); ?>" placeholder="<?php echo e(__("Youtube link video")); ?>">
            </div>
        <?php endif; ?>
        <?php if(is_default_lang()): ?>
            <div class="form-group">
                <label class="control-label"><?php echo e(__("Banner Image")); ?></label>
                <div class="form-group-image">
                    <?php echo \Modules\Media\Helpers\FileHelper::fieldUpload('banner_image_id',$row->banner_image_id); ?>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo e(__("Gallery")); ?></label>
                <?php echo \Modules\Media\Helpers\FileHelper::fieldGalleryUpload('gallery',$row->gallery); ?>

            </div>
        <?php endif; ?>
    </div>
</div>


<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\modules/Hotel/Views/admin/hotel/content.blade.php ENDPATH**/ ?>