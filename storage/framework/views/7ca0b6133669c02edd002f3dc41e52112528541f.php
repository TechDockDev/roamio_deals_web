<style>
    .image{
        background: url("images/img.png");
         height:400px;
         border-radius:10px;
    }
    .image1{
        background: url("images/img_1.png");
         height:400px;
         border-radius:10px;   
    }
</style>


<div class="bravo-list-news">
    <div class="container">
        <?php if($title): ?>
            <div class="title">
                <?php echo e($title); ?>

                <?php if(!empty($desc)): ?>
                    <div class="sub-title">
                        <?php echo e($desc); ?>

                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="list-item">
            <div class="row">
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <?php echo $__env->make('News::frontend.blocks.list-news.loop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>




<div class="bravo-list-news">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
              <div class="card1">
                <div class="destination-item">
                    <div class="image">
                    <div class="effect"></div>
                     <div class="content">
                        <h4 class="title">Dubai</h4>
                          <div class="desc">                                                                                                                                                                                                                                             
                         <a href="http://127.0.0.1:8000/hotel?location_id=11" target="_blank"> 
                        2 Hotels
                         </a> 
                        </div>
                      </div>
                </div>
            </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card1"> 
                <div class="destination-item">
                    <div class="image1">
                    <div class="effect"></div>
                     <div class="content">
                        <h4 class="title">Dubai</h4>
                          <div class="desc">                                                                                                                                                                                                                                             
                         <a href="http://127.0.0.1:8000/hotel?location_id=11" target="_blank"> 
                        2 Hotels
                         </a>                                                                                                                                                                                                 </div>
                      </div>
                </div>
            </div>
              </div>
        </div>
    </div>

    </div>
</div>



<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/News/Views/frontend/blocks/list-news/index.blade.php ENDPATH**/ ?>