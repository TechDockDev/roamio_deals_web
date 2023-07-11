
<?php $__env->startPush('css'); ?>


<style>
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
    background-color: #ccc;
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

  .wizard-sample-1 {
    height: 520px;
    width: 100%;
  }

  .br-wizard {
  
    max-width: 100%;
    overflow-x: hidden;
    overflow-y: hidden;
  }

  .br-wizard[vertical] .wizard-progress {
    float: left;
    grid-template-columns: 1fr;
    height: 100%;
    max-width: 260px;
    overflow-x: hidden;
    padding-top: 0;
    position: relative;
    text-align: right;
  }

  .br-wizard[vertical] .wizard-progress .wizard-progress-btn {
    height: 100%;
    line-height: 100%;
    max-height: 100%;
    padding-bottom: 0;
    padding-right: 70px;
    padding-top: 0;
    text-align: right;
  }

  .br-wizard[vertical] .wizard-progress .wizard-progress-btn::before {
    left: calc(100% - 32px);
    line-height: 26px;
    margin-top: calc(var(--spacing-scale-2x) * -1);
    position: absolute;
    text-align: center;
    top: 50%;
  }

  @media (max-width: 991px) {
 
/*
    .br-wizard .wizard-form {
      height: calc(100% - 100px);
    }*/

  
    .br-wizard[collapsed] .wizard-progress::after {
      margin-top: var(--spacing-scale-4xh);
    }

    .br-wizard[collapsed] .wizard-progress .wizard-progress-btn {
      padding-bottom: var(--spacing-scale-base);
    }

    .br-wizard[collapsed] .wizard-progress .wizard-progress-btn .info {
      display: none;
    }

   /* .br-wizard[collapsed] .wizard-form {
      height: calc(100% - 64px);
    }*/

    .br-wizard[collapsed] .wizard-form .wizard-panel .wizard-panel-content {
      overflow-x: hidden;
      overflow-y: auto;
    }

    .br-wizard[vertical] .wizard-progress {
      max-height: 100%;
      max-width: 110px;
    }

    .br-wizard[vertical] .wizard-progress::after {
      height: 1em;
      left: unset;
      margin-top: -0.5em;
      right: 2px;
      top: 50%;
      transform: rotate(-90deg);
      width: 1em;
    }

    .br-wizard[vertical] .wizard-progress .wizard-progress-btn {
      line-height: 18px;
      padding-right: var(--spacing-scale-7x);
    }

    .br-wizard[vertical] .wizard-progress .wizard-progress-btn .info {
      line-height: 1.6em;
      margin-top: -0.5em;
      position: absolute;
      right: 54px;
    }

   /* .br-wizard[vertical] .wizard-form {
      height: 100%;
      max-width: calc(100% - 110px);
      min-width: calc(100% - 110px);
      transition-delay: 0s;
      transition-duration: 0.25s;
      transition-property: all;
      transition-timing-function: linear;
    }

    .br-wizard[vertical] .wizard-form .wizard-panel {
      height: 100%;
      max-height: 100%;
    }*/

    .br-wizard[vertical][collapsed] .wizard-progress {
      max-width: 60px;
      padding-bottom: 0;
      padding-top: 0;
    }

    .br-wizard[vertical][collapsed] .wizard-progress .wizard-progress-btn {
      padding-right: 0;
    }

    .br-wizard[vertical][collapsed] .wizard-progress .wizard-progress-btn .info {
      display: none;
    }

    .br-wizard[vertical][collapsed] .wizard-form {
      max-width: calc(100% - 60px);
      min-width: calc(100% - 60px);
    }
  }

  .br-wizard .wizard-progress {
    background-color: var(--background-alternative);
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
    grid-template-rows: none;
    min-height: 100px;
    position: relative;
    top: 25px;
    padding-top: var(--spacing-scale-7x);
    width: 100%;
  }

  .br-wizard .wizard-progress .wizard-progress-btn {
    background-color: transparent;
    border: 0;
    box-shadow: none !important;
    color: var(--interactive);
    font-size: var(--font-size-scale-up-01, 16.8px);
    line-height: 19px;
    max-height: 90px;
    padding-bottom: 0;
    padding-top: var(--spacing-scale-2x);
    position: relative;
    text-indent: 0;
    transition-delay: 0s;
    transition-duration: 0.15s;
    transition-property: all;
    transition-timing-function: linear;
  }

  .br-wizard .wizard-progress .wizard-progress-btn[disabled] {
    color: rgba(var(--interactive-rgb), var(--disabled));
    opacity: 1;
  }

  .br-wizard .wizard-progress .wizard-progress-btn[disabled]::before {
    opacity: var(--disabled);
  }

  .br-wizard .wizard-progress .wizard-progress-btn:focus {
    outline: none;
  }

  .br-wizard .wizard-progress .wizard-progress-btn.focus-visible:not([disabled]):not(.disabled)::before,
  .br-wizard .wizard-progress .wizard-progress-btn:focus-visible:not([disabled]):not(.disabled)::before {
    outline-color: var(--focus-color);
    outline-offset: var(--focus-offset);
    outline-style: var(--focus-style);
    outline-width: var(--focus-width);
  }

  .br-wizard .wizard-progress .wizard-progress-btn:hover:not([disabled])::before {
    background-image: linear-gradient(rgba(var(--interactive-rgb), var(--hover)), rgba(var(--interactive-rgb), var(--hover)));
  }

  .br-wizard .wizard-progress .wizard-progress-btn:active:not([disabled])::before {
    background-image: linear-gradient(rgba(var(--interactive-rgb), var(--pressed)), rgba(var(--interactive-rgb), var(--pressed)));
  }

  .br-wizard .wizard-progress .wizard-progress-btn::before {
    background-color: var(--background-light);
    border: 2px solid #FF3500;
    border-radius: 50%;
    box-sizing: border-box;
    color: #FF3500;
    content: attr(step) !important;
    display: block;
    font-size: var(--font-size-scale-up-02, 20.16px);
    font-weight: var(--font-weight-semi-bold, 600);
    height: 36px;
    left: 50%;
    line-height: 29px;
    margin-top: -13px;
    position: absolute;
    top: 0;
    transform: translateX(-50%);
    transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    width: 36px;
    z-index: 3;
  }


















.br-wizard .wizard-progress .wizard-progress-btn::after {
    background-color: #FF3500 !important;
    content: "";
    display: block;
    height: 4px;
    left: calc(-50% + 17px);
    position: absolute;
    top: 5px;
    transition-delay: 0s;
    transition-duration: 0.15s;
    transition-property: all;
    transition-timing-function: linear;
    width: calc(100% - 34px);
    z-index: 1;
  }

  .br-wizard .wizard-progress .wizard-progress-btn:first-child::after {
    display: none;
  }

  .br-wizard .wizard-progress .wizard-progress-btn[active] {
    color: var(--active);
    font-weight: var(--font-weight-semi-bold, 600);
  }

  .br-wizard .wizard-progress .wizard-progress-btn[active]::after {
    background-color: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    height: 4px;
  }

  .br-wizard .wizard-progress .wizard-progress-btn[active]::before {
    background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);
    border: 2px solid #FF3500;
    color: var(--background-light);
    font-weight: var(--font-weight-bold, 700);
  }

  .br-wizard .wizard-form {
    /*color: var(--color);
    height: calc(100% - 164px);*/
    position: relative;
  }

  .br-wizard .wizard-form .wizard-panel {
   /* display: flex;
    flex-wrap: wrap;*/
/*    height: 100%;*/
/*    left: 0%;*/
/*    margin-bottom: var(--spacing-scale-4x);*/
    opacity: 0;
   /* position: relative;
    top: 0;
    bottom :20%;*/
    visibility: hidden;
    width: 100%;
  }

  .br-wizard .wizard-form .wizard-panel[active] {

/*    height: 60%;*/


/*    left: 0 !important;*/
    opacity: 1;
   /* transition-delay: 0s;
    transition-duration: 0.5s;
    transition-property: all;
    transition-timing-function: linear; */
    visibility: visible;
  }

 #userRegisterForm{

  margin-top: -500px;
 }















  .br-wizard .wizard-form .wizard-panel .wizard-panel-content {
    border-top: 1px solid var(--border-color);
    flex-grow: 1;
    height: auto;
    max-height: calc(100% - 74px);
    overflow-x: hidden;
    overflow-y: auto;
    padding: var(--spacing-scale-base) var(--spacing-scale-2x);
  }

  .br-wizard .wizard-form .wizard-panel .wizard-panel-content> :last-child {
    margin-bottom: 220px;
  }

  .br-wizard .wizard-form .wizard-panel .wizard-panel-btn {
   top: -13px;
    align-self: flex-end;
    background-color: var(--background-alternative);
    border-top: 1px solid var(--border-color);
    height: fit-content;
    margin-top: 29px;
    padding: var(--spacing-scale-2x) 1.5%;
    width: 100%;
    position: relative;
  }

  .br-wizard .wizard-form .wizard-panel .wizard-btn-next,
  .br-wizard .wizard-form .wizard-panel .wizard-btn,
  .br-wizard .wizard-form .wizard-panel .wizard-btn-prev {
    float: right;
    margin-left: var(--spacing-scale-2x);
  }

  .br-wizard .wizard-form .wizard-panel .wizard-btn-canc {
    float: left;
  }

  
  .br-button {
    padding: 10px;
    border-radius: 12px;

  }


</style>

<style>
  .custom-file-input-placeholder {
    position: relative;
    overflow: hidden;
  }

 .custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    margin: 0;
    opacity: 0;
    bottom: -11px;
}

  .custom-file-input-placeholder input[type="file"] {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    font-size: 100px;
    width: 100%;
    height: 100%;
    cursor: pointer;
  }

  .custom-file-input-placeholder input[type="text"] {
    width: 100%;
  }

  .showFileInput {
    margin-top: -33px;
}

.imageClass{

  position: relative;
    float: right;
    top: -37px;
    left: -10px;
}
</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


<div class="container" >

  <div class="row d-flex justify-content-center">
    <h4 class="text-center py-5">UAE Visa Application</h4>
  </div>


  <div class="row">
    <div class="">
      <div class="br-wizard" collapsed="collapsed" step="1">
        <div class="wizard-progress">
          <button class="wizard-progress-btn"  title="Dados Pessoais"><span class="info">Visa Application</span></button>
          <button class="wizard-progress-btn"  title="Validar Dados" active="active"><span class="info">Visa Type</span></button>
          <button class="wizard-progress-btn"  title="Habilitar Cadastro" active="active"><span class="info">Upload Document</span></button>
        </div>
         
        <form action="<?php echo e(url('visa_booking')); ?>" enctype="multipart/form-data" method="post">
             <?php echo csrf_field(); ?>

        <div class="wizard-form">
          <div class="wizard-panel" active="active">
            <div >
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
                      <option>--Number of Traveller (Adults)--</option>
                       <option value="0">0</option>
                      <option value="1">1 </option>
                      <option value="2">2 </option>
                      <option value="3">3 </option>
                      <option value="4">4 </option>
                      <option value="5">5 </option>
                      <option value="6">6 </option>
                      <option value="7">7 </option>
                      <option value="8">8 </option>
                      <option value="9">9 </option>
                      <option value="10">10 </option>

                    </select>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-group">
                      <select id="childSelect" name="child" class="form-control" required>
                        <option>--Number of Traveller (Childs)--</option>
                        <option value="0">0</option>
                        <option value="1">1 </option>
                        <option value="2">2 </option>
                        <option value="3">3 </option>
                        <option value="4">4 </option>
                        <option value="5">5 </option>
                        <option value="6">6 </option>
                        <option value="7">7 </option>
                        <option value="8">8 </option>
                        <option value="9">9 </option>
                        <option value="10">10 </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="wizard-panel-btn" >
              <button class="br-button wizard-btn-canc" type="button">Cancel
              </button>
          <button class="br-button primary nextButtonform wizard-btn-next" onclick="printDivs()" type="button" style="background:#FF3500;display:none;">Next</button>

            </div>
          </div>



          <div class="wizard-panel">
            <div class="">


              <?php $__currentLoopData = $visadata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <input type="hidden" style="height: 20px; width: 20px; order: 1;" id="check<?php echo e($visa->id); ?>" name="entry_id" value="<?php echo e($visa->id); ?>">


              <button type="button" class="accordion"><?php echo e($visa->entry); ?></button>
              <div class="panel" style="display: flex; flex-direction: column;">

                <div class="container" style="margin-top:10px; margin-bottom:10px;">
                  <div class="row">
                  <?php $__currentLoopData = $visa->visa_entry_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-4">
  <div class="card" style="background: var(--light-orange, #FFF3E3); border-radius:10px;">
    <div style="padding:10px;">
      <div style="display: flex; justify-content: flex-end;">
        <input type="radio" class="form-check-input" style="height: 20px; width: 20px; order: 1;" id="check<?php echo e($item->id); ?>" name="entry_detail_id" value="<?php echo e($item->id); ?>">
      </div>
      <h5><?php echo e($item->days); ?></h5>
      <h6><?php echo e($item->title); ?></h6>
      <p><?php echo $item->discription; ?></p>
      <h4><?php echo e($item->price); ?></h4>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>

              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="wizard-panel-btn">
              <button class="br-button wizard-btn-canc" type="button">Cancel
              </button>

              <button class="br-button primary wizard-btn-next" type="button" style="background:#FF3500;">Next
              </button>

              <button style="left: -8px;
                 position: relative;" class="br-button secondary wizard-btn-prev" type="button">previous
              </button>
            </div>
          </div>

         <div class="wizard-panel">

          <div class="" id="userRegisterForm">

              <div id="divContainer"></div>
           
           </div>
                
             <div class="wizard-panel-btn">
              <a href="<?php echo e(url('visa-page')); ?>" class="btn btn-danger br-button wizard-btn-canc" type="button">Cancel
              </a>

               <?php if(auth()->user()): ?>


               <button class="br-button primary wizard-btn-next" type="submit" style="background:#FF3500;">Proceed 
               </button>

               <?php else: ?>
          
            <button data-toggle="modal" data-target="#login" class="br-button primary wizard-btn" type="button" style="background:#FF3500;">Proceed to Booking
              </button>

              <?php endif; ?>

            </div>
          </div>

        </div>

        </form>


      </div>
    </div>
  </div>
</div>


<br><br><br><br>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roamio_deals_web\themes/BC/Flight/Views/frontend/visa-apply.blade.php ENDPATH**/ ?>