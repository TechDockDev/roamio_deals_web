<div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo e(__('')); ?></h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close" style="border-radius: 20px;
                border: 3px solid black;
                padding: 5px 8px;">
                    <i class="input-icon field-icon fa">
                        <img src="<?php echo e(url('images/ico_close.svg')); ?>" alt="close" style="height:17px;">
                    </i>
                </span>
            </div>
            <div class="modal-body relative">

                <h2 style="width: fit-content;
                margin: auto;">
                    <img src="<?php echo e(asset('uploads/0000/1/2023/05/11/logo.png')); ?>" style="height: 90px">
                     <p class="pt-3 text-center" style="font-size: 20px;">Login or Sign up</p>
                </h2>
                <?php echo $__env->make('Layout::auth/login-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo e(__('')); ?></h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close" style="border-radius: 20px;
                border: 3px solid black;
                padding: 5px 8px;">
                    <i class="input-icon field-icon fa">
                        <img src="<?php echo e(url('images/ico_close.svg')); ?>" alt="close" style="height:17px;">
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <h2 style="width: fit-content;
                margin: auto;">
                    <img src="<?php echo e(asset('uploads/0000/1/2023/05/11/logo.png')); ?>" style="height: 90px">
                     <p class="pt-3 text-center" style="font-size: 20px;">Login or Sign up</p>
                </h2>
                <?php echo $__env->make('Layout::auth/register-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\roamio_deals_web\modules/Layout/parts/login-register-modal.blade.php ENDPATH**/ ?>