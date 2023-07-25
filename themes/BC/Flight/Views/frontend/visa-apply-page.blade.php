



 @extends('layouts.app')

@push('css')
<style>


.imageClass{
position: relative;
    float: right;
    top: -38px;
    left: -3px;
    background: #FFF3E3;
    padding: 1px 5px;
    border-radius: 10px;
}

.uploadinput{
    position: relative;
    top: -31px;
 } 

 .inputfolter{
    position: relative;
    top: -84px;
 }
     .accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-radius:12px;
  }

  .form-control[type=file]:not(:disabled):not([readonly]) {
    cursor: pointer;
    padding: 8px;
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);


   }
.card{

  cursor: pointer;
}

  .active,
  .accordion:hover {
    /* background-color: #ccc; */
  }

  .accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

  .panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }

 .card {
	
	 border-radius: 10px;
	 box-shadow: 0 0 5px rgba(255, 255, 255, .04588);
}
 .card-header {
	 padding: 40px;
	 border-bottom: 1px solid #d5d0d0;
}
 .card-header .steps {
    position: relative;
    left: 137px;
	 display: flex;
	 column-count: 3;
	 justify-content: center;
	 align-items: center;
}
 .card-header .steps .step {
	 width: 100%;
	 text-align: center;
	 border-bottom: 3px solid #FF3500;
	 line-height: 0.1em;
	 margin: 10px 0 20px;
}
 .card-header .steps .step span {
	padding: 10px 16px;
    border: 3px solid #FF3500;
    border-radius: 25px;
    background: #fff;
    position: relative;
    left: -89px;
}
	 /* box-shadow: 0px 3px 0px 0px #FF3500; */

 .card-header .steps .step.active span {
	 background: #FF3500;
	 color: white;
	 border: 1px solid #FF3500;
}
 .card-body {
	 padding: 16px;
	 min-height: 250px;
	 display: flex;
	 justify-items: center;
	 align-items: center;
}
 .card-body .tabs {
	 width: 100%;
	 height: 100%;
	 justify-content: center;
	 /* display: flex; */
	 align-items: center;
}
 .card-body .tabs .tab {
	 display: none;
}
 .card-body .tabs .tab.active {
	 display: block !important;
}
 .card-footer {
	 padding: 16px;
	 border-top: 1px solid #d5d0d0;
}

.Next{
    float: right;
    padding: 9px 32px;
    width: 150px;
    margin: 10px auto;
    border: none;
    border-radius: 0.085rem;
    font-weight: 800;
    font-size: 18px;
    color: white;
    background: #FF3500;
    left: 10px;
    position: relative;
    /* background: #FF3500;     */
}
.Cancel{
    float: right;
    padding: 9px 32px;
    width: 150px;
    margin: 10px auto;
    border: none;
    border-radius: 0.085rem;
    font-weight: 800;
    font-size: 18px;
    color: #FF3500;
    background:#FFF5E9; 
    
}
 .card-footer button:active {
	 outline: none;
	 transform: translate(0px, 5px);
	 -webkit-transform: translate(0px, 5px);
	 box-shadow: 0px 1px 0px 0px;
}
 @media only screen and (max-width: 420px) {
	 .card-footer button {
		 width: 100%;
	}
}
 
.heading-step{
    top: 37px;
    position: relative;
    font-size: 15px;
    left: -158px;
}
/* Your CSS styles */
@media (max-width: 576px) {
    .card-header .steps {
        left: 0;
    }

    .card-header .steps .step span {
        left: -45px;
    }
    .card-header{
    display:none;
}
}

.mailchimp{
 display:none;   
}
</style>
@endpush

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row">
        <h4 class="text-center pt-5">
            <span><img src="{{ asset('images/Flag_of_the_United_Arab_Emirates_1.png')}}"></span> UAE Visa Application
        </h4>
    </div>
</div>

<div class="container pt-3">
    <div class="card">
        <div class="card-header">
            <div class="steps">
                <div class="step active">
                    <span>1</span>
                    <small class="heading-step">Visa Application</small>
                </div>
                <div class="step">
                    <span>2</span>
                    <small class="heading-step">Visa Type</small>
                </div>
                <div class="step" style="border: none;">
                    <span>3</span>
                    <small class="heading-step">Upload Document</small>
                </div>
            </div>
        </div>
       
        <form action="{{ url('visa-booking') }}" enctype="multipart/form-data" id="bookingvisha" method="post">
            @csrf
            <div id="cardBody" class="card-body">
                <div class="tabs w-100">
                    <div id="first" class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="nationalitySelect" name="nationality" class="form-control" required>
                                        <option>--Nationality--</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                        <option>Sri Lanka</option>
                                        <option>Malaysia</option>
                                        <option>Singapore</option>
                                        <option>Uzbekistan</option>
                                        <option>Afghanistan</option>
                                        <option>Phillipines</option>
                                        <option>Bankok</option>
                                        <option>Britain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="traveldate" class="form-control" id="travelDateInput" aria-describedby="emailHelp" placeholder="Travel Dates" pattern="\d{2}/\d{2}/\d{4}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="rangeSelect" name="adult" class="form-control" required>
                                        <option>--Number of Travelers (Adults)--</option>
                                      
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="childSelect" name="child" class="form-control" required>
                                        <option>--Number of Travelers (Children)--</option>
                                       
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="second" class="tab">
                        @foreach($visadata as $visa)
                          <input type="hidden" style="height: 20px; width: 20px; order: 1;" id="check{{$visa->id}}" name="entry_id" value="{{$visa->id}}">
                          <button type="button" class="accordion">{{$visa->entry}}</button>
                          <div class="panel" style="display: flex; flex-direction: column;">
                            <div class="container" style="margin-top:10px; margin-bottom:10px;">
                              <div class="row">
                                @if ($visa->visa_entry_details && count($visa->visa_entry_details) > 0)
                                  @foreach ($visa->visa_entry_details as $item)
                                    <div class="col-4">
                                      <div class="card" style="background: var(--light-orange, #FFF3E3); border-radius:10px;">
                                        <div style="padding:10px;">
                                          <div style="display: flex; justify-content: flex-end;">
                                            <input type="hidden" name="entry_id" value="{{$item->entry_id}}">
                                            <input type="radio" class="form-check-input" style="height: 20px; width: 20px; order: 1; " id="check{{$item->id}}" name="entry_detail_id" value="{{$item->id}}">
                                          </div>
                                          <h5>{{$item->days}}</h5>
                                          <h6>{{$item->title}}</h6>
                                          <p>{!! $item->discription !!}</p>
                                          <h4>{{$item->price}}</h4>
                                        </div>
                                      </div>
                                    </div>
                                  @endforeach
                                @else
                                  <p>No visa entry details available for this visa.</p>
                                @endif
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    <div id="third" class="tab">
                        <div class="row" id="userRegisterForm">
                            <div id="divContainer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button id="nextBtn" type="button" class="Next nextButtonform wizard-btn-next" onclick="next(1); printDivs()">Proceed to next traveler details</button>
                <button id="prevBtn" type="button"  class="Cancel" onclick="next(-1)">Cancel</button>
            </div>
        </form>
        

    </div>
</div>




<script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";

        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }

        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementById("nextBtn").setAttribute("type", "button"); // Change button type to button
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
            document.getElementById("nextBtn").setAttribute("type", "button"); // Change button type to button
        }

        fixStepIndicator(n);
    }

    function next(n) {
        var x = document.getElementsByClassName("tab");

        x[currentTab].style.display = "none";
        currentTab = currentTab + n;

        if (currentTab >= x.length) {
            submitForm(); // Call function to submit the form
            return false;
        }

        showTab(currentTab);
    }

    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");

        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }

        x[n].className += " active";
    }

    function submitForm() {
        // Submit the form using JavaScript or jQuery AJAX
        var form = document.getElementById("bookingvisha");
        var formData = new FormData(form);

        // Perform AJAX request to submit the form
        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action);
        xhr.onreadystatechange = function () {

         
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Form submitted successfully
                sendSMS("Form data saved successfully!");

                window.location.href = '/confirm-visa';
            } else {
                // Handle form submission error
                console.log("Form submission failed");
            }
        };
        xhr.send(formData);
    }

    function sendSMS(message) {
        // Display an alert with the successful save message
        alert("SMS: " + message);
    }
</script>


<script>
    var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");

      // Find the corresponding radio button and toggle its checked state
      var radioBtn = this.nextElementSibling.querySelector("input[type='radio']");
      radioBtn.checked = !radioBtn.checked;

      // Change the background color of the radio button when it is active
      if (radioBtn.checked) {
        radioBtn.style.backgroundColor = "blue";
      } else {
        radioBtn.style.backgroundColor = ""; // Reset to default background color
      }

      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>



@endsection
