<div class="container">
    <div class="context" <?php if(!empty($bg_color)): ?> style="background-color: <?php echo e($bg_color ?? "#f6b756"); ?> !important;" <?php endif; ?>>
        <div class="row">
            <div class="col-md-8">
                <div class="title">
                    <?php echo e($title); ?>

                </div>
                <div class="sub_title">
                    <?php echo e($sub_title); ?>

                </div>
            </div>
            <div class="col-md-4">
                <?php if($link_title): ?>
                    <a class="btn-more" href="<?php echo e($link_more); ?>">
                        <?php echo e($link_title); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\roamio_deals_web\themes/BC/Tour/Views/frontend/blocks/call-to-action/style-normal.blade.php ENDPATH**/ ?>