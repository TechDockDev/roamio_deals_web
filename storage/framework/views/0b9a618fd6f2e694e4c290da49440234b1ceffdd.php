
<div class ="main-content">
 <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar"><?php echo e(!empty($recovery) ? __('Recovery') : __("All Banners")); ?></h1>
            <div class="title-actions">
                <?php if(empty($recovery)): ?>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><?php echo e(__("Add new Banner")); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="filter-div d-flex justify-content-between ">
            <div class="col-left">
                <?php if(!empty($rows)): ?>
                    <form method="post" action="<?php echo e(route('hotel.admin.bulkEdit')); ?>" class="filter-form filter-form-left d-flex justify-content-start">
                        <?php echo e(csrf_field()); ?>

                        <select name="action" class="form-control">
                            <option value=""><?php echo e(__(" Bulk Actions ")); ?></option>
                            
                            <?php if(!empty($recovery)): ?>
                                <option value="recovery"><?php echo e(__(" Recovery ")); ?></option>
                                <option value="permanently_delete"><?php echo e(__("Permanently delete")); ?></option>
                            <?php else: ?>
                                <option value="publish"><?php echo e(__(" Publish ")); ?></option>
                                <option value="draft"><?php echo e(__(" Move to Draft ")); ?></option>
                                <option value="pending"><?php echo e(__("Move to Pending")); ?></option>
                                <option value="delete"><?php echo e(__(" Delete ")); ?></option>
                            <?php endif; ?>

                        </select>
                        <button data-confirm="<?php echo e(__("Do you want to delete?")); ?>" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button"><?php echo e(__('Apply')); ?></button>
                    </form>
                <?php endif; ?>
            </div>
          
        </div>
        
          
       
        <div class="panel">
            <div class="panel-body">
              

  <?php if($errors->count()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p class="yellow-text font lato-normal center"><?php echo e($error); ?></p>
  <br>
  <br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>


                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            
                            <th> <?php echo e(__('Image Name')); ?></th>
                            <th width="200px"> <?php echo e(__('Link')); ?></th>
                            <th width="200px"> <?php echo e(__('Created_at')); ?></th>
                            <th width="180px"> <?php echo e(__('updated_at')); ?></th>
                            <th width="100px"><?php echo e(__('action')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr class="">
                            <td><img attr="<?php echo e(asset($d->bannerImage)); ?>" class="imageclass<?php echo e($d->id); ?>" src="<?php echo e(asset($d->bannerImage)); ?>" style="height:100px;"></td>
                                    <td class="lnktd<?php echo e($d->id); ?>"><?php echo e($d->link); ?></td>
                                    <td><?php echo e($d->created_at); ?></td>
                                 
                                    <td><?php echo e($d->updated_at); ?></td>
                                    <td style="display: flex;"><button class="btn btn-primary editbutton" data-toggle="modal" data-target="#editmodal" attr="<?php echo e($d->id); ?>">Edit</button>&nbsp;&nbsp;<button attr="<?php echo e($d->id); ?>" data-toggle="modal" data-target="#deletemodal" class="btn btn-danger deletebutton">Delete</button></td>
                                   
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
                    </div>
               
          </div>

      </div>
  </div>

</div>




<div class="modal fade" id="editmodal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Banner Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
<form id="formget" method="post"  enctype="multipart/form-data" action="<?php echo e(route('hotel.admin.updateslider')); ?>">
         <?php echo csrf_field(); ?>
<div class="form-group">

    <input type= "text" name="id" class="formx" style="display:none;" value="">
    <label for="bannerImage">Banner Image:</label>
   <center><img id="xflah" class="d-block imagechange" src="" alt="First slide" style="height:160px; width:420px;"></center>
  </div>

  <div class="form-group">
    <label for="bannerImage">Banner Image:</label>

    <input type="file" name="bannerImage"  class="form-control" onchange="document.getElementById('xflah').src = window.URL.createObjectURL(this.files[0])" placeholder="select picture for slider" id="banner">
  </div>


  <div class="form-group">
    <label for="link">Link(optional):</label>
    <input type="text" name="link" class="form-control" placeholder="type link of this image" id="link">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>




<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Banner</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
<form id="formget" method="post"  enctype="multipart/form-data" action="<?php echo e(route('hotel.admin.upload')); ?>">
         <?php echo csrf_field(); ?>
<div class="form-group">
    <label for="bannerImage">Banner Image:</label>
   <center><img id="flah" class="d-block imagechange" src="https://www.pngarts.com/files/10/Default-Profile-Picture-PNG-Transparent-Image.png" alt="First slide" style="height:160px; width:300px;"></center>
  </div>

  <div class="form-group">
    <label for="bannerImage">Banner Image:</label>

    <input type="file" name="bannerImage" class="form-control" onchange="document.getElementById('flah').src = window.URL.createObjectURL(this.files[0])" placeholder="select picture for slider" id="banner">
  </div>


  <div class="form-group">
    <label for="link">Link(optional):</label>
    <input type="text" name="link" class="form-control" placeholder="type link of this image" id="link">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

     </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>










<div class="modal fade" id="deletemodal" style="display: block;
    width: 40%;
    padding-right: 135px;
    left: 437px;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">delete Banner</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
<form id="formget" method="post" action="<?php echo e(route('hotel.admin.deleteslider')); ?>">
         <?php echo csrf_field(); ?>

         <h5>Are you sure want to delete this banner??</h5>

        <input type="text" name="id" class="form-control" style="display:none;" id="deletefield" value="">

         <button type="submit" class="btn btn-primary">Yes delete</button>

</form>

     </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

 $('document').ready(function(){
  
  $('.editbutton').click(function(){
       var id = $(this).attr('attr');
        $('.formx').val(id);

        var lnk = $('.lnktd'+id).html();
   
        $('#link').val(lnk);

       var image = $('.imageclass'+id).attr('attr');
       $('.imagechange').attr('src',image); 
  });

$('.deletebutton').click(function(){

    var id = $(this).attr('attr');

    $('#deletefield').val(id);

});

});


    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <?php if(\Session::has('bannerdeleted')): ?>  


<script>
    
Swal.fire({
  icon: 'success',
  title: 'operation success',
  text: 'banner deleted successfully'
});   
  
</script>

 <?php endif; ?> 


 <?php if(\Session::has('bannerupdated')): ?>  


<script>
    
Swal.fire({
  icon: 'success',
  title: 'operation success',
  text: 'banner detail updated successfully'
});   
  
</script>

 <?php endif; ?> 


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u533143048/domains/techdocklabs.com/public_html/roamiodeals/modules/Hotel/Views/admin/banner.blade.php ENDPATH**/ ?>