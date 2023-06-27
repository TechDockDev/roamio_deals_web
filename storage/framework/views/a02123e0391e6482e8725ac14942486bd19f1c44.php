

<?php $__env->startSection('content'); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Banner</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      
      <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
    <tr>
      <th ><img class="xfirstpage<?php echo e($b->id); ?>" attr="<?php echo e(asset($b->bannerImage)); ?>" src="<?php echo e(asset($b->bannerImage)); ?>" style="height:150px; width:150px;"></th>
      <td><?php echo e($b->created_at); ?></td>
      <td><?php echo e($b->updated_at); ?></td>
      <td><button class="btn btn-primary viewxbutton" data-toggle="modal" attr = "<?php echo e($b->id); ?>" data-target="#eventxampleModalLong" >Edit</button> &nbsp; <button data-toggle="modal" data-target="#deleteeventxampleModalLong" attr = "<?php echo e($b->id); ?>" class="btn btn-danger deleteXbutton">Delete</button></td>
    </tr>
   
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
  </tbody>
</table>



<?php $__env->stopSection(); ?>


<div class="modal fade" id="eventxampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form method = "post" action="<?php echo e(route('event.admin.edietbanner')); ?>">
          <?php echo csrf_field(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visa Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
          
      <div class="row"> 
      
      <input type="text" name="id" class="wxid"  style="display:none;">
           <div class="col">  
          <label for="bannerImage">Banner Image</label>
  <img id="dflah" class="d-block ximagechange" src="https://www.pngarts.com/files/10/Default-Profile-Picture-PNG-Transparent-Image.png" alt="First slide" style="height:160px; width:280px;">
   <label for="bannerImage">Banner Image</label>

    <input type="file" style="width:40%;" name="passport_second_page" class="form-control" onchange="document.getElementById('dflah').src = window.URL.createObjectURL(this.files[0])" placeholder="select picture for slider" id="banner">
    </div>  </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>



<div class="modal fade" id="deleteeventxampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form method ="post" action="<?php echo e(route('event.admin.bannerdelete')); ?>">
          <?php echo csrf_field(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visa Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">

                 <input type ="text" style="display:none;" value="" class="entryidedit wxid">
          
                 <h5>Are you sure want to delete data?</h5>
              
               </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Delete</button>
          </div>
       </div>
    </form>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$('document').ready(function(){
    
     $('.deleteXbutton').click(function(){
            
            var id = $(this).attr('attr');
            $('.wxid').val(id);
            
        });

 $('.viewxbutton').click(function(){
    
    var id = $(this).attr('attr');
    $('.wxid').val(id);
    
        var image = $('.xfirstpage'+id).attr('attr');
        $('.ximagechange').attr('src',image); 
        
        });
    
});
   
       
        
</script>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\modules/Event/Views/admin/banner.blade.php ENDPATH**/ ?>