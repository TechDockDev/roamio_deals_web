
<?php $__env->startSection('content'); ?>

<style>
    
    .table td, .table th {
    padding: 0.45rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
    
</style>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">Visa Booking Details</h1>
        </div>
        <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            
            <?php
            
            $datas = DB::table('visa_booking_detail')->paginate(10);
            
            ?>
        
            <div class="col-md-12">
                <div class="filter-div d-flex justify-content-between ">
                  
                    <div class="col-left">
                        <!--<form method="get" action="<?php echo e(route('flight.admin.seat_type.index')); ?> " class="filter-form filter-form-right d-flex justify-content-end" role="search">-->
                        <!--    <input type="text" name="s" value="<?php echo e(Request()->s); ?>" class="form-control" placeholder="<?php echo e(__("Search by name")); ?>">-->
                        <!--    <button class="btn-info btn btn-icon btn_search" id="search-submit" type="submit"><?php echo e(__('Search')); ?></button>-->
                        <!--</form>-->
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-title"><?php echo e(__("All")); ?></div>
                    <div class="panel-body">
                        <form class="bravo-form-item">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="60px"><input type="checkbox" class="check-all"></th>
                                     <th><?php echo e(__("Name")); ?></th>
                                    <th class=""><?php echo e(__("Email")); ?></th>
                                    <th class=""><?php echo e(__("Contact")); ?></th>
                                    <th class=""><?php echo e(__("Passport No")); ?></th>
                                    <th class=""><?php echo e(__("Visa Day")); ?></th>
                                    <th class=""><?php echo e(__("Nationality")); ?></th>
                                    <th class=""><?php echo e(__("Payment Status")); ?></th>
                                    <th class=""><?php echo e(__("Price")); ?></th>
                                    <th class=""><?php echo e(__("Action")); ?></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(count($datas) > 0): ?>
                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="xid" style="display:none;"><?php echo e($row->id); ?></td>
                                            <td class="xfirstpage<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->passport_first_page); ?></td>
                                            <td class="xsecondpage<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->passport_second_page); ?></td>
                                            <td class="xpassportphoto<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->passport_size_photo); ?></td>
                                            <td><input type="checkbox" class="check-item" name="ids[]" value="<?php echo e($row->id); ?>"></td>
                                            <td class="title "><?php echo e($row->firstname); ?> <?php echo e($row->lastname); ?></td>
                                            
                                            <td class="title firstx<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->firstname); ?></td>
                                            <td class="title lastxx<?php echo e($row->id); ?>" style="display:none;"> <?php echo e($row->lastname); ?></td>
                                            <td class="title emailx<?php echo e($row->id); ?>"><?php echo e($row->email); ?></td>
                                            <td class="title contactx<?php echo e($row->id); ?>"><?php echo e($row->contact_no); ?></td>
                                            <td class="title passportx<?php echo e($row->id); ?>"><?php echo e($row->passport_no); ?></td>
                                             <td class="title passportexX<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->passport_expiry); ?></td>
                                            <?php
                                              
                                              $get = DB::table('visa_entry_details')->where('id',$row->entry_detail_id)->get();
                                            
                                            ?>
                                            
                                            <?php $__currentLoopData = $get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <td class="title"><?php echo e($gg->days); ?></td>
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <td class="title Xnationalityx<?php echo e($row->id); ?>"><?php echo e($row->nationality); ?></td>
                                            <td class="title paystatusX<?php echo e($row->id); ?>"><?php echo e($row->payment_status); ?></td>
                                            <td class="title alternateno<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->alternate_number); ?></td>
                                            <td class="title visaStats<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->visa_status); ?></td>
                                            <td class="title Dobbzzz<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->dob); ?></td>
                                            <td class="title priceX<?php echo e($row->id); ?>" ><?php echo e($row->price); ?></td>
                                            <td class="title placeissues<?php echo e($row->id); ?>" style="display:none;"><?php echo e($row->place_issues); ?></td>
                                            <td><button type="button" attr="<?php echo e($row->id); ?>" class="btn btn-primary viewxbutton" data-toggle="modal" data-target="#editModalLong" style="width: 64px;"> view</button> &nbsp;&nbsp; <br><button class="btn btn-danger deleteXbutton" attr='<?php echo e($row->id); ?>' type="button" data-toggle="modal" data-target="#deleteModalLong"> delete</button></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4"><?php echo e(__("No data")); ?></td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                                <?php echo e($datas->appends(request()->query())->links()); ?>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<div class="modal fade" id="editModalLong" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form method ="post" action="<?php echo e(route('flight.admin.update')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visa Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
      <div class="modal-body">
    <input type="text" class="wxid" name="id" style="display:none;">
    <div class="row"> 
           <div class="col">  
          <label for="bannerImage">Passport Size Photo:</label>
  <img id="flah" class="d-block imagechange" src="https://www.pngarts.com/files/10/Default-Profile-Picture-PNG-Transparent-Image.png" alt="First slide" style="height:160px; width:280px;">
   <label for="bannerImage">Passport Photo:</label>

    <input type="file" style="width:40%;" name="passport_size_photo" class="form-control" onchange="document.getElementById('flah').src = window.URL.createObjectURL(this.files[0])" placeholder="select picture for slider" id="banner">
          </div>   
  </div>
  <br>
  
      <div class="row" style="left: 363px;
    position: relative;
    top: -277px;
"> 
    <div class="col">  
          <label for="bannerImage">Passport First Page Photo:</label>
      <img id="xflah" class="d-block ximagechange" src="https://www.pngarts.com/files/10/Default-Profile-Picture-PNG-Transparent-Image.png" alt="First slide" style="height:160px; width:280px;">
   
    <label for="bannerImage">Passport First Page Photo:</label>

    <input type="file" style="width:40%;" name="passport_first_page" class="form-control" onchange="document.getElementById('xflah').src = window.URL.createObjectURL(this.files[0])" placeholder="select picture for slider" id="banner">
    </div>   
    </div>
  <br>
  
  <div class="row" style="top: -292px;
    position: relative;margin-bottom: -316px;"> 
           <div class="col">  
          <label for="bannerImage">Passport Second Page Photo:</label>
  <img id="dflah" class="d-block dimagechange" src="https://www.pngarts.com/files/10/Default-Profile-Picture-PNG-Transparent-Image.png" alt="First slide" style="height:160px; width:280px;">
   <label for="bannerImage">Passport Second Page Photo:</label>

    <input type="file" style="width:40%;" name="passport_second_page" class="form-control" onchange="document.getElementById('dflah').src = window.URL.createObjectURL(this.files[0])" placeholder="select picture for slider" id="banner">
    </div>  </div>
 <br>   
<div class="row">
    <div class="col">
        <label>First Name</label>
      <input type="text" name="firstname" class="form-control" placeholder="" id="firstnamez">
    </div>
    <div class="col">
         <label>Last Name</label>
      <input type="text" name="lastname" class="form-control" id="lastnamez">
    </div>
  </div>
  
  <div class="row">
    <div class="col">
         <label>Email</label>
      <input type="text" name="email" class="form-control" id="emailz">
    </div>
    <div class="col">
         <label>Contact Number</label>
      <input type="text" name="contact_no" class="form-control" id="contactz">
    </div>
  </div>
  
  <div class="row">
    <div class="col">
         <label>Passport Number</label>
      <input type="text" name="passport_no" class="form-control" id="passportz">
    </div>
     <div class="col">
         <label>DOB</label>
      <input type="text" name="dob" class="form-control" id="DOBZZ">
    </div>
   
  </div>
  
  <div class="row">
       <div class="col">
         <label>Passport Expiry</label>
      <input type="text" name="passport_expiry" class="form-control" id="enquirypassz">
    </div>
    <div class="col">
         <label>Nationality</label>
      <input type="text" name="nationality" class="form-control" id="nationalityz">
    </div>
   </div>
  <div class="row">
    <div class="col">
         <label>Price</label>
      <input type="text" name="price" class="form-control" id="pricez">
    </div>
     <div class="col">
         <label>Alternate Number</label>
      <input type="text" name="alternate_number" class="form-control" id="alternatez">
    </div>
</div>
  <div class="row">
    <div class="col">
         <label>Visa Status</label>
         <select id="statusVisadata" class="form-control" name="visa_status">
             <option id="visastatusz"></option>
             <option value="rejected">rejected</option>
             <option value="approved">approved</option>
             <option value="pending">pending</option>
             <option value="processed">process</option>
         </select>
         </div>
<div class="col">
         <label>Payment Status</label>
         
          <select class="form-control" name="payment_status">
             <option id="paymentz"></option>
             <option value="unpaid">unpaid</option>
             <option value="paid">paid</option>
            </select>
        </div>
</div>


 <div class="row"> 
           <div class="col">  
        
          </div>   
  </div>


 <div class="row" id="extradiscriptiononconfirtion" >
    <div class="col">
         <label>Discription</label>
         <textarea name="discription" class="form-control">write something here</textarea>
        </div>
         
<div class="col">
     
     <label for="bannerImage">Upload Detail File:</label>

    <input type="file" style="width:100%;" name="discriptionImage" class="form-control" placeholder="select picture for slider" id="banner">
          
        </div>
</div>
   <div class="row">
    <div class="col">
         <label>Visa Issue Place</label>
               <input type="text" name="place_issues" class="form-control" id="placeissuesz">
          </div>
       </div>
       </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">update</button>
          </div>
       </div>
    </form>
   </div>
</div>

<div class="modal fade" id="deleteModalLong" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form method ="post" action="<?php echo e(route('flight.admin.Visadelete')); ?>">
          <?php echo csrf_field(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Visa Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
      <div class="modal-body">
        <h5>Are you sure want to delete visa data?</h5>
         <input type="text" class="wxid" name="id" style="display:none;">
      </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
           <button type="submit" class="btn btn-primary">Delete</button>
          </div>
       </div>
    </form>
   </div>
</div>





   
<?php $__env->stopSection(); ?>

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
    
        var image = $('.xfirstpage'+id).html();
        $('.ximagechange').attr('src',image); 
        
         var image = $('.xsecondpage'+id).html();
        $('.dimagechange').attr('src',image); 
        
         var image = $('.xpassportphoto'+id).html();
        $('.imagechange').attr('src',image); 
        
        var firstname = $('.firstx'+id).html();
        var lastname = $('.lastxx'+id).html();
        var email = $('.emailx'+id).html();
        var contact = $('.contactx'+id).html();
        var passportno = $('.passportx'+id).html();
        var passportexpiry = $('.passportexX'+id).html();
        var nationnality = $('.Xnationalityx'+id).html();
        var alternatno = $('.alternateno'+id).html();
        var price =  $('.priceX'+id).html();
        var paymentstatus = $('.paystatusX'+id).html();
        
        var visastatus = $('.visaStats'+id).html();
        var dob    = $('.Dobbzzz'+id).html();
        var placeissuesx = $('.placeissues'+id).html();
        
        $('#firstnamez').val(firstname);
        $('#lastnamez').val(lastname);
        $('#emailz').val(email);
        $('#contactz').val(contact);
        $('#passportz').val(passportno);
        $('#enquirypassz').val(passportexpiry);
        $('#nationalityz').val(nationnality);
        $('#alternatez').val(alternatno);
        $('#pricez').val(price);
        $('#visastatusz').html(visastatus);
        $('#paymentz').html(paymentstatus);
        $('#DOBZZ').val(dob);
        $('#placeissuesz').val(placeissuesx);
       
    
});
        
    
       
        
    });
    
    
</script>

<script>
    
    
   $('document').ready(function(){
        $('#extradiscriptiononconfirtion').hide();
       $('#statusVisadata').on('change' ,function(){
           
         var target = $('#statusVisadata option:selected').val();
         
           if(target == "rejected")
           {
               
              $('#extradiscriptiononconfirtion').show();
              
           }else if(target == "approved")
           {
               $('#extradiscriptiononconfirtion').show();
             
           }else{
              
              $('#extradiscriptiononconfirtion').hide(); 
               
           }
           
           
           
           
       });
     
       
      

       
   }); 
    
    
    
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(Session::get('visaUpdated')): ?>

<script>
$('document').ready(function(){
    
    swal.fire('Visa updated successfully!');

});
    
    
</script>

<?php endif; ?>

<?php if(Session::get('DataDeleted')): ?>

<script>
$('document').ready(function(){
    
    swal.fire('Visa Deleted Successfully!');

});
    
    
</script>

<?php endif; ?>






<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u533143048/domains/techdocklabs.com/public_html/roamiodeals/modules/Flight/Views/admin/seatType/index.blade.php ENDPATH**/ ?>