<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php event(new \Modules\Layout\Events\LayoutBeginHead()); @endphp
    @php
        $favicon = setting_item('site_favicon');
    @endphp
    @if($favicon)
        @php
            $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
        @endphp
        @if(!empty($file))
            <link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/'.$file['file_path'])}}" />
        @else
            <link rel="icon" type="image/png" href="{{url('images/favicon.png')}}" />
        @endif
    @endif

    @include('Layout::parts.seo-meta')

    <link href="{{ asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('libs/fotorama/fotorama.css') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/frontend/css/notification.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/frontend/css/app.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/daterange/daterangepicker.css") }}" >
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600&display=swap' type='text/css' media='all' />
    {!! \App\Helpers\Assets::css() !!}
    {!! \App\Helpers\Assets::js() !!}
    @include('Layout::parts.global-script')
    <!-- Styles -->
    @stack('css')
    {{--Custom Style--}}
    <link href="{{ route('core.style.customCss') }}" rel="stylesheet">
    <link href="{{ asset('libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">
    @if(setting_item_with_lang('enable_rtl'))
        <link href="{{ asset('dist/frontend/css/rtl.css') }}" rel="stylesheet">
    @endif
    @if(!is_demo_mode())
        {!! setting_item('head_scripts') !!}
        {!! setting_item_with_lang_raw('head_scripts') !!}
    @endif
</head>

<style>
 .p{
 font-family: 'Poppins';
  }
  h1, h2, h3, h4, h5 {
  font-family: 'Poppins', sans-serif;
}
.main-footer{
  background-image: url('images/footer-img1.png');
}

.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color:#FFF5E9;
    /* background-color: rgba(255, 245, 233, 0.1); */
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    z-index: 999;
    border-radius: 10px;
}
button.close-btn {
    height: 21px;
    width: 21px;
  border:none;
  font-size: :14px;
  background-color:#FFF5E9;
}
</style>

{{-- <div class="popup" id="offerPopup" >
  <button class="close-btn" onclick="hidePopup()" style="float: right; font-size: 29px !important;">&times;</button>
  <div class="row">
    <div class="col-lg-8">
      <div class="cardbox mb-3">

        <div class="row g-0">
        
          <div class="col-md-4">
          <img src="{{ asset('images/home-screen(Approved).svg')}}" class="img-fluid rounded-start" alt="..." style="position: relative;
          top: -85px;">
          </div>
          <div class="col-md-8 mt-2 pt-3">
          <div class="card-body">
            <h4 class="card-title" style="font-weight:800;">Get 5% off your 1st app booking</h4>
            <p class="card-text mt-2">
            Booking’s better on the app. Use promo code“BetterOnApp” to save
            </p>
          </div>
          </div>
        </div>
        </div>

    </div>

    <div class="col-md-4 text-center mb-2 py-5">
               <p class="card-text" style="font-weight:700">Scan this QR</p>
        <img src="{{ asset('images/image_8.svg')}}" style="height: 96px;">
      
    </div>
  </div>
</div> --}}



<body class="frontend-page {{ !empty($row->header_style) ? "header-".$row->header_style : "header-normal" }} {{$body_class ?? ''}} @if(setting_item_with_lang('enable_rtl')) is-rtl @endif @if(is_api()) is_api @endif">
    @if(!is_demo_mode())
        {!! setting_item('body_scripts') !!}
        {!! setting_item_with_lang_raw('body_scripts') !!}
    @endif
    <div class="bravo_wrap">
        @if(!is_api())
            @include('Layout::parts.topbar')
            @include('Layout::parts.header')
        @endif

        @yield('content')

        @include('Layout::parts.footer')
    </div>
    @if(!is_demo_mode())
        {!! setting_item('footer_scripts') !!}
        {!! setting_item_with_lang_raw('footer_scripts') !!}
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

 
    <script>
      // Function to hide the popup
      function hidePopup() {
          const popup = document.getElementById("offerPopup");
          popup.style.display = "none";
      }

      // Show the popup immediately when the page loads
      document.addEventListener("DOMContentLoaded", function() {
          const popup = document.getElementById("offerPopup");
          popup.style.display = "block";

          // Show the popup immediately and then every 4 minutes
          setInterval(showPopup, 240000); // 4 minutes in milliseconds (2 * 60 * 1000)
      });

      // Function to show the popup every 4 minutes
      function showPopup() {
          const popup = document.getElementById("offerPopup");
          popup.style.display = "block";
      }
  </script>






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

    var nextButton = document.querySelector('.wizard-btn-next');

    if (adultCount > 0 || childCount > 0) {
      nextButton.style.display = 'block';
    } else {
      nextButton.style.display = 'none';
    }
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
      <div class="h5 py-3">${travelerType} traveller ${i}</div>
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
          <div class="form-group uploadinput">
            <input type="file" name="passport_first_page[]" class="custom-file-input" id="passportfirst${i}" onchange="handleFileInputChange(event, 'passportfirst${i}')" aria-describedby="emailHelp" placeholder="passport first page" style="top: 25px;
    position: relative;
">
             <input type="text" class="form-control showFileInput" placeholder="Passport first page Photo" >
             <img src ={{asset('images/btn.svg')}} class="imageClass">
          </div>
         </div>
        </div>

   <div class="row inputfolter">
     <div class="col-md-6">
      <div class="form-group">
      <input type="file" class="custom-file-input" name="passport_second_page[]" id="passportsecond${i}" aria-describedby="emailHelp" onchange="handleFileInputChange(event, 'passportsecond${i}')" style="top: 25px;
    position: relative;
">
    <input type="text" class="form-control showFileInput" placeholder="Passport second page Photo" >
    <img src = {{asset('images/btn.svg')}} class="imageClass">
     
    </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
      <input type="file" class="custom-file-input" name="passport_size_photo[]" id="passportphoto${i}" aria-describedby="emailHelp" onchange="handleFileInputChange(event, 'passportphoto${i}')" style="top: 25px;
    position: relative;
">
       <input type="text" class="form-control showFileInput" placeholder="Passport Size Photo" >
       <img src =  {{asset('images/btn.svg')}} class="imageClass">
      
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
  function handleFileInputChange(event, inputId) {
    var input = event.target;
    var fileName = input.files[0].name;

    var inputText = input.parentNode.querySelector('input[type="text"]');
    inputText.value = fileName;
  }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src=https://www.gov.br/ds/assets/govbr-ds-dev-core/dist/core-init.js></script>



<script>
// JavaScript/jQuery
// JavaScript/jQuery
$(document).ready(function() {
  // Listen for changes in the number of travelers (adults) dropdown
  $('#number-of-travellers').change(function() {
    var numberOfTravelers = parseInt($(this).val());

    // Clear existing traveler forms
    $('#traveller-details-container').empty();

    // Generate traveler forms for each traveler
    for (var i = 1; i <= numberOfTravelers; i++) {
      // Clone the userRegisterForm
      var userRegisterFormClone = $('#userRegisterForm').clone();

      // Update the ID of the cloned form to avoid duplication
      userRegisterFormClone.attr('id', 'userRegisterForm-' + i);

      // Update the traveler number in the header
      userRegisterFormClone.find('.h4').text('Traveler ' + i);

      // Append the cloned form to the container
      $('#traveller-details-container').append(userRegisterFormClone);
    }
  });
});


</script>

    <script>
        $(document).ready(function() {
            $('#travelDateInput').datepicker({
                format: 'dd/mm/yyyy',
                todayHighlight: true,
                autoclose: true,
                placeholder:'Date of Booking'
            });


        });




  




    </script>

</body>
</html>