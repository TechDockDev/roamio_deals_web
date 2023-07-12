<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="<?php echo e($html_class ?? ''); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php event(new \Modules\Layout\Events\LayoutBeginHead()); ?>
    <?php
        $favicon = setting_item('site_favicon');
    ?>
    <?php if($favicon): ?>
        <?php
            $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
        ?>
        <?php if(!empty($file)): ?>
            <link rel="icon" type="<?php echo e($file['file_type']); ?>" href="<?php echo e(asset('uploads/'.$file['file_path'])); ?>" />
        <?php else: ?>
            <link rel="icon" type="image/png" href="<?php echo e(url('images/favicon.png')); ?>" />
        <?php endif; ?>
    <?php endif; ?>

    <?php echo $__env->make('Layout::parts.seo-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link href="<?php echo e(asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('libs/fotorama/fotorama.css')); ?>" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="<?php echo e(asset('libs/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/select2/css/select2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/frontend/css/notification.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/frontend/css/app.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/daterange/daterangepicker.css")); ?>" >
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600&display=swap' type='text/css' media='all' />
    <?php echo \App\Helpers\Assets::css(); ?>

    <?php echo \App\Helpers\Assets::js(); ?>

    <?php echo $__env->make('Layout::parts.global-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Styles -->
    <?php echo $__env->yieldPushContent('css'); ?>
    
    <link href="<?php echo e(route('core.style.customCss')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/carousel-2/owl.carousel.css')); ?>" rel="stylesheet">
    <?php if(setting_item_with_lang('enable_rtl')): ?>
        <link href="<?php echo e(asset('dist/frontend/css/rtl.css')); ?>" rel="stylesheet">
    <?php endif; ?>
    <?php if(!is_demo_mode()): ?>
        <?php echo setting_item('head_scripts'); ?>

        <?php echo setting_item_with_lang_raw('head_scripts'); ?>

    <?php endif; ?>
</head>
<body class="frontend-page <?php echo e(!empty($row->header_style) ? "header-".$row->header_style : "header-normal"); ?> <?php echo e($body_class ?? ''); ?> <?php if(setting_item_with_lang('enable_rtl')): ?> is-rtl <?php endif; ?> <?php if(is_api()): ?> is_api <?php endif; ?>">
    <?php if(!is_demo_mode()): ?>
        <?php echo setting_item('body_scripts'); ?>

        <?php echo setting_item_with_lang_raw('body_scripts'); ?>

    <?php endif; ?>
    <div class="bravo_wrap">
        <?php if(!is_api()): ?>
            <?php echo $__env->make('Layout::parts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('Layout::parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('Layout::parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php if(!is_demo_mode()): ?>
        <?php echo setting_item('footer_scripts'); ?>

        <?php echo setting_item_with_lang_raw('footer_scripts'); ?>

    <?php endif; ?>
    <?php echo $__env->yieldContent('script'); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>



  <script>

  var input = document.getElementById("travelDateInput");

  input.addEventListener("focus", function() {
  input.setAttribute("data-placeholder", input.getAttribute("placeholder"));
  input.removeAttribute("placeholder");
  });

  input.addEventListener("blur", function() {
  input.setAttribute("placeholder", input.getAttribute("data-placeholder"));
  input.removeAttribute("data-placeholder");
  });


  </script>

<script>

  var cards = document.querySelectorAll('.card');
  var radios = document.querySelectorAll('.form-check-input');

  cards.forEach(function(card, index) {
    card.addEventListener('click', function() {
      radios.forEach(function(radio) {
        radio.checked = false;
      });
      radios[index].checked = true;
    });
  });
</script>

<script>
   function validateForm() {
    var adultSelect = document.getElementById("rangeSelect");
    var adultCount = parseInt(adultSelect.value);

    var childSelect = document.getElementById("childSelect");
    var childCount = parseInt(childSelect.value);

    // var nextButton = document.querySelector('.wizard-btn-next');

    // if (adultCount > 0 || childCount > 0) {
    //   nextButton.style.display = 'block';
    // } else {
    //   nextButton.style.display = 'none';
    // }
  }

  // Call validateForm() whenever there is a change in any of the form fields
  document.getElementById("rangeSelect").addEventListener('change', validateForm);
  document.getElementById("childSelect").addEventListener('change', validateForm);

  // Call validateForm() initially to check the form fields on page load
  validateForm();
</script>


  <script>

function printDivs() {
  var select = document.getElementById("rangeSelect");
  var adultSelect = document.getElementById("rangeSelect");
  var adultCount = parseInt(adultSelect.value);

  var childSelect = document.getElementById("childSelect");
  var childCount = parseInt(childSelect.value);

  var totalCount = adultCount + childCount;

  var divContainer = document.getElementById("divContainer");
  divContainer.innerHTML = ""; // Clear the container before adding new divs

  for (var i = 1; i <= totalCount; i++) {
    var travelerType = i <= adultCount ? "Adult" : "Child"; // Determine the traveler type based on the count

    var div = document.createElement("div");
    div.innerHTML = `
      <div class="h4">${travelerType} traveller ${i}</div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" name="firstname[]" id="firstName${i}" aria-describedby="emailHelp" placeholder="First Name">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" name="lastname[]" id="lastName${i}" aria-describedby="emailHelp" placeholder="Last Name">
          </div>
        </div>
          

      </div>


      <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" name="dob[]" id="DOB${i}" aria-describedby="emailHelp" placeholder="Date of birth">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <input type="email" class="form-control" name="email[]" id="email${i}" aria-describedby="emailHelp" placeholder="Email">
          </div>
        </div>

      </div>


      <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <input type="number" class="form-control" name="contact[]" id="contact${i}" aria-describedby="emailHelp" placeholder="Contact Number">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <input type="number" class="form-control" name="alternate_number[]" id="alternate${i}" aria-describedby="emailHelp" placeholder="Alternate Number">
          </div>
        </div>

       </div>


      <div class="row">

       <div class="col-md-6">
          <div class="form-group">
            <input type="number" class="form-control" name="passportnumber[]" id="passportNumber${i}" aria-describedby="emailHelp" placeholder="Passport Number">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control passportExpiryDate" name="passport_expiry[]" id="passportExpiryDate${i}" aria-describedby="emailHelp" placeholder="Passport Expiry Date">
          </div>
        </div>
       
      </div>
          <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" name="place_issues[]" id="placeOfIssue${i}" aria-describedby="emailHelp" placeholder="Place of Issue">
          </div>
        </div>
       
       <div class="col-md-6">
          <div class="form-group">
            <input type="file" name="passport_first_page[]" class="custom-file-input" id="passportfirst${i}" onchange="handleFileInputChange(event, 'passportfirst${i}')" aria-describedby="emailHelp" placeholder="passport first page">
             <input type="text" class="form-control showFileInput" placeholder="Passport first page Photo" >
             <img src = <?php echo e(asset('/images/btn.svg')); ?> class="imageClass">
          </div>
         </div>
        </div>

   <div class="row">
     <div class="col-md-6">
      <div class="form-group">
      <input type="file" class="custom-file-input" name="passport_second_page[]" id="passportsecond${i}" aria-describedby="emailHelp" onchange="handleFileInputChange(event, 'passportsecond${i}')">
    <input type="text" class="form-control showFileInput" placeholder="Passport second page Photo" >
    <img src = <?php echo e(asset('/images/btn.svg')); ?> class="imageClass">
     
    </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
      <input type="file" class="custom-file-input" name="passport_size_photo[]" id="passportphoto${i}" aria-describedby="emailHelp" onchange="handleFileInputChange(event, 'passportphoto${i}')">
       <input type="text" class="form-control showFileInput" placeholder="Passport Size Photo" >
         <img src = <?php echo e(asset('/images/btn.svg')); ?> class="imageClass">
      
    </div>
    </div>
    </div>

    `;

    divContainer.appendChild(div);

    $('#passportExpiryDate' + i).datepicker({
      format: 'dd/mm/yyyy',
      todayHighlight: true,
      autoclose: true,
      placeholder: 'Date of Booking'
    });
   
 $('#DOB' + i).datepicker({
  format: 'dd/mm/yyyy',
  todayHighlight: true,
  autoclose: true,
  placeholder: 'Date of Booking',
  startDate: (travelerType === 'Child') ? '-17y' : '-100y',
  endDate: (travelerType === 'Adult') ? '-18y' : '-17y -1d'
});

  }
}

  </script>

  




<script>
// JavaScript/jQuery
// JavaScript/jQuery
// $(document).ready(function() {
//   // Listen for changes in the number of travelers (adults) dropdown
//   $('#number-of-travellers').change(function() {
//     var numberOfTravelers = parseInt($(this).val());

//     // Clear existing traveler forms
//     $('#traveller-details-container').empty();

//     // Generate traveler forms for each traveler
//     for (var i = 1; i <= numberOfTravelers; i++) {
//       // Clone the userRegisterForm
//       var userRegisterFormClone = $('#userRegisterForm').clone();

//       // Update the ID of the cloned form to avoid duplication
//       userRegisterFormClone.attr('id', 'userRegisterForm-' + i);

//       // Update the traveler number in the header
//       userRegisterFormClone.find('.h4').text('Traveler ' + i);

//       // Append the cloned form to the container
//       $('#traveller-details-container').append(userRegisterFormClone);
//     }
//   });
// });


</script>

    

</body>
</html>
<?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\modules/Layout/app.blade.php ENDPATH**/ ?>