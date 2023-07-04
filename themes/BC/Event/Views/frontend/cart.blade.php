@extends('layouts.app')

@push('css')
    <link href="{{ asset('dist/frontend/module/event/css/event.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .rounded-start {
            padding: 10px;
            height: 200px;
            border-radius: 20px;
        }
        .totl {
            background: #FFF3E3;
        }
        .fa {
            color: #FF3500;
        }
        .price {
            float: right;
            color: #FF3500;
        }
        .text {
            color: black;
            font-size: 12px;
        }

        .input-container {
    display: flex;
    align-items: center;
  }

  .input-container img {
    width: 15px;
    height: 15px;
    margin-right: 10px;
    position: relative;
    left:10px;
  }

  .input-container input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
    </style>
@endpush

@section('content')
<div class="container mt-3">
    <div class="row">
        <h4 class="title py-3 mx-3">Cart</h4>
    </div>
</div>
<div class="container mt-3 card">
    <div class="card mb-3 totl mt-3">
        <div class="row">
            <div class="col-md-4 text-end">
                <img src="https://media.cntraveller.com/photos/62f51fb12148309d8a68838b/4:3/w_2664,h_1998,c_limit/25hours%20dubai-aug22-pr-%20global-Ingrid%20Rasmussen1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <span>Weekday Stay for 2 adults & 2 children below 12 years</span>
                        <span class="text-end" style="float:right;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                    </h5>
                    <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i> <span>12 May, 13 May, 14 May (3 nights)</span></p>
                    <p class="card-text"><small><i class="fa fa-users" aria-hidden="true"></i> <span>1 x Adult</span></small></p>
                    <h5 class="card-text price">230.00 <span class="text">AED</span></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 totl mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-end">
                <img src="https://media.cntraveller.com/photos/62f51fb12148309d8a68838b/4:3/w_2664,h_1998,c_limit/25hours%20dubai-aug22-pr-%20global-Ingrid%20Rasmussen1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <span>Weekday Stay for 2 adults & 2 children below 12 years</span>
                        <span class="text-end" style="float:right;"><i class="fa fa-trash" aria-hidden="true"></i></span>
                    </h5>
                    <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i> <span>12 May, 13 May, 14 May (3 nights)</span></p>
                    <p class="card-text"><small><i class="fa fa-clock-o" aria-hidden="true"></i> <span>11 AM to 10 PM</span></small></p>
                    <p class="card-text"><small><i class="fa fa-users" aria-hidden="true"></i> <span>1 x Adult</span></small></p>
                    <h5 class="card-text price">230.00 <span class="text">AED</span></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3  mb-3">
      <div class="row d-flex justify-content-center">
          <div class="col-md-5">
            <p class="py-2 mx-3">Apply Promocode</p>
            <div class="form p-3">
              <div class="input-container" style="border:1px solid gray; border-radius:10px;">
                <img src="{{asset(url('images/Group.png'))}}" alt="Image">
                <input type="text" placeholder="Apply" style="border:none">
              </div> 
            </div>
            
          </div>
          <div class="col-md-7 ">
              <div class="card-body totl">
                <div class="row ">
                  <div class="col-md-6">
                    <p class="text-start">Total</p>
                    <p class="text-start">Promo Code</p>
                    <p class="text-start">Roamio Credits</p>
                    <p class="text-start">Total Saving</p>
                    <p class="text-start">TAX</p>
                  </div>
                  <div class="col-md-6">
                    <p class="text-start">AED 747.00</p>
                    <p class="text-end" style="color:#FF3500">AED 747.00</p>
                    <p class="text-end" style="color:#FF3500">-AED 5.00</p>
                    <p class="text-end" style="color:#FF3500">-AED 125.00</p>
                    <p class="text-end">AED 7.00</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p class="text-end">Sab Total</p>
                  </div>
                  <div class="col-md-6">
                    <p class="text-end">AED 522.30</p>
                  </div>
                </div>

              </div>
          </div>
      </div>
  </div>
  
</div>

@endsection
