
<?php
 $review = DB::table('bravo_review')->limit(10)->get();

$user_review = [];

foreach ($review as $rr) {
    $user = DB::table('users')->select('first_name', 'last_name', 'images')->where('id', $rr->user_id)->first();
    $rr->user = $user;
    $user_review[] = $rr;
}




?>

<style>
    
    
  .carousel-control-prev-icon {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e);
    background-color: black;
}

.carousel-control-next-icon {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e);
    background-color: black;
}
</style>

<div>
    <?php if(!empty($user_review)): ?>
        <div id="testimonial-carousel" class="carousel slide bravo-testimonial" data-ride="carousel">
            <div class="container">
                <h3><?php echo e($title); ?></h3>
                <div class="carousel-inner">
                    <?php $active = true; ?>
                    <?php $__currentLoopData = array_chunk($user_review, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php echo e($active ? 'active' : ''); ?>">
                            <div class="row">
                                <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <div class="item has-matchHeight">
                                            <div class="author">
                                                <?php if(!empty($item->user->images)): ?>
                                                    <img src="/image/<?php echo e($item->user->images); ?>" alt="<?php echo e($item->user->first_name); ?>">
                                                <?php else: ?>
                                                    <img src="/default-image.jpg" alt="Default Image">
                                                <?php endif; ?>
                                                <div class="author-meta">
                                                    <?php if(!empty($item->user->first_name) && !empty($item->user->last_name)): ?>
                                                        <h4><?php echo e($item->user->first_name); ?> <?php echo e($item->user->last_name); ?></h4>
                                                    <?php endif; ?>
                                                    <?php if(!empty($item->rate_number)): ?>
                                                        <div class="star">
                                                            <?php for($i = 0; $i < $item->rate_number; $i++): ?>
                                                                <i class="fa fa-star"></i>
                                                            <?php endfor; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <p>
                                                <?php echo e($item->content); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php $active = false; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="carousel-control-prev" href="#testimonial-carousel" role="button" style="color:black;" data-slide="prev">
                    <span style="color:black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonial-carousel" style="color:black;"  role="button" data-slide="next">
                    <span style="color:black;" class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    <?php endif; ?>
</div>



<?php /**PATH /home/u533143048/domains/techdocklabs.com/public_html/roamiodeals/themes/BC/Tour/Views/frontend/blocks/testimonial/index.blade.php ENDPATH**/ ?>