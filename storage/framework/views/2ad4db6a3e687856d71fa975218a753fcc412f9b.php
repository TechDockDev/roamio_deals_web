 
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('flight.admin.store')); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>
        <div class="container-fluid">
            <input type="text" value="" style="display:none;">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar"><?php if($data) { $data->id ? __('Edit: ').$data->entry : __('Add new Visa'); } ?></h1>
                  </div>
                <div class="">
                    <?php if(!$data): ?>
                        <a class="btn btn-primary btn-sm" href="" data-toggle="modal" data-target="#exampleModalLong" target="_blank"><i class="fa fa-ticket" aria-hidden="true"></i> <?php echo e(__("Add Visa type")); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row">
                    <div class="col-md-9">
                        <?php echo $__env->make('Flight::admin.flight.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Core::admin/seo-meta/seo-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-title"><strong><?php echo e(__('Publish')); ?></strong></div>
                            <div class="panel-body">
                                <?php if(is_default_lang()): ?>
                                       <div>
                                        <label><input type="radio" name="status" value="publish"> <?php echo e(__("Publish")); ?>

                                        </label></div>
                                    <div>
                                       </div>
                                <?php endif; ?>
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> <?php echo e(__('Save Changes')); ?></button>
                                </div>
                            </div>
                        </div>
                       
                       
                    
                      </div>
                 </div>
            </div>
    </form>
<?php $__env->stopSection(); ?>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form method = "post" action="<?php echo e(route('flight.admin.entry')); ?>">
          <?php echo csrf_field(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visa Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body" >
     <input type ="text" class="form-control" name="entry" placeholder="please enter visa type name">
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>



<div class="modal fade" id="editModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method ="post" action="<?php echo e(route('flight.admin.entry')); ?>">
          <?php echo csrf_field(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visa Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">

                 <input type ="text" style="display:none;" value="" class="entryidedit">
          
                 <input type ="text"  class="form-control editentry" name="entry" placeholder="please enter visa type name">
              
               </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">update</button>
          </div>
       </div>
    </form>
   </div>
</div>





<?php $__env->startPush('js'); ?>

<script>


 $('document').ready(function(){

  $('.editbutton').click(function(){

  var id =  $(this).attr('attr');

  $('.entryidedit').val(id);

  var entry =  $(this).attr('name');

  $('.editentry').val(entry);

  });


 });


    </script>


    <script>
        $(document).ready(function () {
            $('.has-datetimepicker').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                showCalendar: false,
                autoUpdateInput: false, //disable default date
                sameDate: true,
                autoApply           : true,
                disabledPast        : true,
                enableLoading       : true,
                showEventTooltip    : true,
                classNotAvailable   : ['disabled', 'off'],
                disableHightLight: true,
                timePicker24Hour: true,

                locale:{
                    format:'YYYY/MM/DD HH:mm:ss'
                }
            }).on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('YYYY/MM/DD HH:mm:ss'));
            });
        })
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u533143048/domains/techdocklabs.com/public_html/roamiodeals/modules/Flight/Views/admin/detail.blade.php ENDPATH**/ ?>