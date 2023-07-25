@extends('layouts.app')
@push('css')
    <link href="{{ asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/fotorama/fotorama.css') }}"/>
  

    <!-- Latest compiled and minified CSS -->

     <style>
       
        .img{
            width: 100%;
        }
        .background{
        background:#FFF5E9;   
        }
      .UAE-Img{
            margin-top:30px;
            height: 48px;
            width: 15%;
        }
        .card-item{
        background:white;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
       

    margin-top: -46px;
    width: 100%;
    text-align: center;
    border-radius: 10px;
        }
    </style>
 @endpush
 @section('content')
 
   <div class="container mt-4 pt-4">
    <div class="row">
        <div class="container mt-3">
            <div class="row">
               <img src="{{ asset('images\divitem-bg.png')}}" style="height: 400px;"> 
         </div> 
     </div>
    </div>
    <div class="container">
        <div class="col-md-10 w-100 card-item justify-content-center offset-md-1">
            <div class="row  text-center">
                <div class="col-md-4 py-4">
                    <a href="" style="text-decoration: none;"><img src="{{ asset('images\list-check_2.svg')}}" alt="" srcset="">
                    <div class="card-body" 
                    >
                        Check Visa Status
                    </div> </a>
                </div>
                @if(auth()->user())
                <div class="col-md-4 py-4">
                   <a href="{{ url('apply-visa-page')}}" style="text-decoration: none;"><img src="{{ asset('images\info-circle_1.svg')}}" alt="">
                    <div class="card-body">
                        Apply UAE Visa
                    </div>
                </a>
                </div>
                @else
              
                <div class="col-md-4 py-4">
                   <a href="#" data-toggle="modal" data-target="#login" style="text-decoration: none;"><img src="{{ asset('images\info-circle_1.svg')}}" alt="">
                    <div class="card-body">
                        Apply UAE Visa
                    </div>
                </a>
                </div>



                @endif
                <div class="col-md-4 py-4">
                    <a href="{{ url('visa-status')}}" style="text-decoration: none;"><img src="{{ asset('images\hand-index-thumb_3.svg')}}" alt="">
                    <div class="card-body">
                        Important Terms & Conditions
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
    

   <div class="container">
    <div class="row d-flex justify-content-center">
        <h4 class="text-center py-5">How to apply Visa for UAE</h4>
    </div>

    <div class="row">
        <div class="col-md-4">
         <p>Select your nationality, travel date and number of passengers</p>
          <img src="{{ asset('images/Complete_3.png')}}"  class="img">
        </div>
       <div class="col-md-4">
        <img src="{{ asset('images/Vector _134.png')}}"  class="img">
       </div>
       <div class="col-md-4">
        <p>Select visa type </p>
        <img src="{{ asset('images/Complete_4.png')}}"  class="img">
       </div>
    </div>

    <div class="row pt-2">
        <div class="col-md-4">
         <p>finish payment and there you go</p>
          <img src="{{ asset('images/Complete_1.png')}}"  class="img">
        </div>
       <div class="col-md-4">
        <img src="{{ asset('images/Vector_132.png')}}"  class="img">
       </div>
       <div class="col-md-4">
        <p>enter your personal details and upload travel documents </p>
        <img src="{{ asset('images/Complete_4.png')}}"  class="img">
       </div>
    </div>
</div>
<div class="background"> 
    <div class="container">
        <div class="row d-flex justify-content-start">
            <h4 class="text-center py-5">Why get UAE Visa from us!</h4>
        </div>
        <div class="row  d-flex justify-content-center">
            <div class="col-md-4 text-center">
                <div class="card1">
                    <img class="card-img-top UAE-Img" src="{{asset('images/Complete_6.svg')}}" alt="Card image cap">
                    <div class="card-body py-2">
                      <h5 class="card-title">Simple & hassle free process</h5>
                      <p class="card-text">Our visa application process is designed to be easy and straightforward. You can complete the application form in just a few minutes</p>

                    </div>
                  </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card1 ">
                    <img class="card-img-top UAE-Img" src="{{asset('images/Complete_7.png')}}" alt="Card image cap">
                    <div class="card-body py-2">
                      <h5 class="card-title">Best Price Guaranteed</h5>
                      <p class="card-text">We offer competitive pricing for our visa services, and we are committed to providing the best value for our customers.</p>
                      
                    </div>
                  </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="card1">
                    <img class="card-img-top UAE-Img" src="{{asset('images/Complete_8.png')}}" alt="Card image cap">
                    <div class="card-body py-2">
                      <h5 class="card-title">Check Visa Status</h5>
                      <p class="card-text">You can easily check the status of your visa application at any time. Simply enter your visa reference number, and you will be able to see the progress of your application.</p>
                  
                    </div>
                  </div>
            </div>
           
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <h4 class="text-left py-3">Frequently Asked Questions</h4>
    </div>
    <div class="row">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Why should I use this system to apply online for UAE visa?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>It is easy and convenient to apply for your visa online. Simply provide the required information, documents and pay the visa fee online without having to send documents by email or visiting the office in person. Once your visa application is approved, you will receive an approved e-Visa copy via email.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     
                        How far in advance I should apply for UAE visa?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>You can apply at least 20 to 28 days prior to your arrival.</>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        When my entry permit will be valid for entry after approval?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <p>Your entry permit is valid from the date of issue.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="fourThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        What is the reason of the application refusal?
                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="fourThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <p>The UAE immigration do not reveal reason of the refusal / rejection.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="fiveThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How long the visa processing takes?
                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="fiveThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>The visa processing takes 24 to 74 hours however, depending on your nationality the Immigration may take longer time.</p>
                    </div>
                </div>
            </div>

            
            <div class="accordion-item">
                <h2 class="accordion-header" id="sixThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsefive">
                        Is this site being safe to make the payment?
                    </button>
                </h2>
                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="sixThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>Yes, this site is safe to make the payments and encrypted with SSL security.</p>
                    </div>
                </div>
            </div>


            
            <div class="accordion-item">
                <h2 class="accordion-header" id="sevenThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        what is the procedure if I am eligible to get visa on arrival or I exempt from the visa.
                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="sevenThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>If your nationality appears on our visa on arrival section, you can simply disembark from your flight and get simply your passport stamps free of charge on Immigration counter (note for nationality who can get visa on arrival they can buy their visas on Immigration counter)</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="EightThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseeight">
                        Do Indian citizen are eligible to apply visa on arrival?
                    </button>
                </h2>
                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="EightThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>If you are Indian passport holder with US Green / Residence card, you can apply for visa on arrival into UAE or to avoid ques you can also apply visa on arrival in advance with us.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 @endsection