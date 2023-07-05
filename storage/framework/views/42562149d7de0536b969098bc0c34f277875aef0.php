
<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('dist/frontend/module/hotel/css/hotel.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css")); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/fotorama/fotorama.css")); ?>" />

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
    margin-top: -100px;
    height: 120%;
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

  .br-wizard[vertical] .wizard-progress .wizard-progress-btn::after {
    height: calc(100% - 34px);
    left: calc(100% - 33px);
    position: absolute;
    top: calc(-50% + 18px);
    width: 1px;
  }

  .br-wizard[vertical] .wizard-progress .wizard-progress-btn[active]::after {
    width: 1px;
  }

  .br-wizard[vertical][scroll] .wizard-progress {
    overflow-x: hidden;
    overflow-y: auto;
  }

  .br-wizard[vertical][scroll] .wizard-progress .wizard-progress-btn {
    min-height: 100px;
  }

  .br-wizard[vertical] .wizard-form {
    float: left;
    height: 100%;
    width: calc(100% - 260px);
  }

  .br-wizard[vertical] .wizard-form .wizard-panel .wizard-panel-content {
    border-top: 0;
  }

  @media (max-width: 991px) {
    .br-wizard .wizard-progress {
      max-height: 100px;
      min-height: 100px;
      overflow-y: hidden;
      padding-top: var(--spacing-scale-3x);
      position: relative;
      transition-delay: 0s;
      transition-duration: 0.25s;
      transition-property: all;
      transition-timing-function: linear;
    }

    .br-wizard .wizard-progress .wizard-progress-btn .info {
      font-size: var(--font-size-scale-down-02, 9.716px);
      line-height: 1em;
      text-align: center;
    }

    .br-wizard .wizard-progress::after {
      background-color: transparent;
      bottom: 2px;
      color: var(--interactive);
      content: "\f7a4";
      display: block;
      font-family: "Font Awesome 5 Free", sans-serif;
      font-size: var(--switch-icon-size);
      font-weight: var(--font-weight-black);
      height: 1em;
      left: 50%;
      margin-left: -0.5em;
      position: absolute;
      top: unset;
      transition-delay: 0s;
      transition-duration: 0.25s;
      transition-property: all;
      transition-timing-function: linear;
      width: auto;
    }

    .br-wizard .wizard-form {
      height: calc(100% - 100px);
    }

    .br-wizard .wizard-form .wizard-panel {
      border-top: 0;
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 0;
      max-height: 100%;
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-content {
      height: auto;
      max-height: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      padding: var(--spacing-scale-half) var(--spacing-scale-base);
      transition-delay: 0s;
      transition-duration: 0.25s;
      transition-property: all;
      transition-timing-function: linear;
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-content::-webkit-scrollbar {
      height: var(--spacing-scale-base);
      width: var(--spacing-scale-base);
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-content::-webkit-scrollbar-track {
      background: var(--gray-10);
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-content::-webkit-scrollbar-thumb {
      background: var(--gray-30);
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-btn {
      align-items: flex-end;
      background-color: var(--background-alternative);
      display: flex;
      flex-wrap: wrap;
      height: fit-content;
      justify-content: center;
      padding: 0 !important;
      position: absolute;
      width: calc(100% - var(--spacing-scale-half));
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-btn .br-button {
      float: none;
      /* margin: var(--spacing-scale-base) 5%; */
      width: 90%;
    }

    .br-wizard .wizard-form .wizard-panel .wizard-panel-btn .wizard-btn-next,
    .br-wizard .wizard-form .wizard-panel .wizard-panel-btn .wizard-btn {
      order: 1;
    }

    .br-wizard[collapsed] .wizard-progress {
      max-height: 64px;
      min-height: 64px;
      overflow-y: hidden;
      padding-bottom: var(--spacing-scale-3x);
      padding-top: var(--spacing-scale-3x);
    }

    .br-wizard[collapsed] .wizard-progress::after {
      margin-top: var(--spacing-scale-4xh);
    }

    .br-wizard[collapsed] .wizard-progress .wizard-progress-btn {
      padding-bottom: var(--spacing-scale-base);
    }

    .br-wizard[collapsed] .wizard-progress .wizard-progress-btn .info {
      display: none;
    }

    .br-wizard[collapsed] .wizard-form {
      height: calc(100% - 64px);
    }

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

    .br-wizard[vertical] .wizard-form {
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
    }

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
    min-height: 164px;
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
    color: var(--color);
    height: calc(100% - 164px);
    position: relative;
  }

  .br-wizard .wizard-form .wizard-panel {
    display: flex;
    flex-wrap: wrap;
    height: 100%;
    left: 1%;
    margin-bottom: var(--spacing-scale-4x);
    opacity: 0;
    position: absolute;
    top: 0;
    visibility: hidden;
    width: 100%;
  }

  .br-wizard .wizard-form .wizard-panel[active] {
    height: 100%;
    left: 0 !important;
    opacity: 1;
    transition-delay: 0s;
    transition-duration: 0.5s;
    transition-property: all;
    transition-timing-function: linear;
    visibility: visible;
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
    align-self: flex-end;
    background-color: var(--background-alternative);
    border-top: 1px solid var(--border-color);
    height: fit-content;
    margin-top: 1px;
    padding: var(--spacing-scale-2x) 1.5%;
    width: 100%;
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

  .br-wizard.inverted,
  .br-wizard.dark-mode {
    --color: var(--color-dark);
    --color-rgb: var(--color-dark-rgb);
    --text-color: var(--color);
    --interactive: var(--interactive-dark);
    --interactive-rgb: var(--interactive-dark-rgb);
    --visited: var(--visited-dark);
    --hover: var(--hover-dark);
    --pressed: var(--pressed-dark);
    --focus-color: var(--focus-color-dark);
    --focus: var(--focus-color);
  }

  .br-wizard.inverted .br-button.primary,
  .br-wizard.inverted .br-button[primary],
  .br-wizard.inverted .br-button.is-primary,
  .br-wizard.dark-mode .br-button.primary,
  .br-wizard.dark-mode .br-button[primary],
  .br-wizard.dark-mode .br-button.is-primary {
    --color: var(--color-light);
    --color-rgb: var(--color-light-rgb);
    --text-color: var(--color);
    --interactive: var(--interactive-light);
    --interactive-rgb: var(--interactive-light-rgb);
    --visited: var(--visited-light);
    --hover: var(--hover-light);
    --pressed: var(--pressed-light);
    --focus-color: var(--focus-color-light);
    --focus: var(--focus-color);
    --interactive-rgb: var(--background-dark-rgb);
    background-color: var(--interactive-dark);
    color: var(--background-dark);
  }

  .br-wizard.inverted .br-button.secondary,
  .br-wizard.inverted .br-button[secondary],
  .br-wizard.inverted .br-button.is-secondary,
  .br-wizard.dark-mode .br-button.secondary,
  .br-wizard.dark-mode .br-button[secondary],
  .br-wizard.dark-mode .br-button.is-secondary {
    background-color: var(--background-dark);
  }

  .br-wizard.inverted .wizard-progress,
  .br-wizard.dark-mode .wizard-progress {
    background-color: transparent;
  }

  .br-wizard.inverted .wizard-panel .wizard-panel-btn,
  .br-wizard.dark-mode .wizard-panel .wizard-panel-btn {
    background-color: transparent;
  }

  .br-wizard.inverted .wizard-progress-btn[active],
  .br-wizard.dark-mode .wizard-progress-btn[active] {
    color: var(--color);
  }

  .br-wizard.inverted .wizard-progress-btn[active]::before,
  .br-wizard.dark-mode .wizard-progress-btn[active]::before {
    --interactive-rgb: var(--active-rgb);
    background-color: var(--color);
    color: var(--active);
  }

 

  .br-button {
    padding: 10px;
    border-radius: 12px;

  }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>




<div class="container">

  <div class="row d-flex justify-content-center">
    <h4 class="text-center py-5">UAE Visa Application</h4>
  </div>
  <div class="row">
    <div class="wizard-sample-1 mt-5 pt-5">
      <div class="br-wizard" collapsed="collapsed" step="1">
        <div class="wizard-progress">
          <button class="wizard-progress-btn" type="button" title="Dados Pessoais"><span class="info">Visa Application</span></button>
          <button class="wizard-progress-btn" type="button" title="Validar Dados" active="active"><span class="info">Visa Type</span></button>
          <button class="wizard-progress-btn" type="button" title="Habilitar Cadastro" active="active"><span class="info">Upload Document</span></button>

        </div>
        <div class="wizard-form">
          <div class="wizard-panel" active="active">
            <div class="wizard-panel-content" style="margin-top:50px;">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nationality">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Travel Dates">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control">
                      <option>--Number of Traveller (Adults)--</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>

                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-group">
                      <select class="form-control">
                        <option>--Number of Traveller (Childs)--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="wizard-panel-btn" style="top: -90px; position:relative;">
              <button class="br-button wizard-btn-canc" type="button">Cancel
              </button>
              <button class="br-button primary wizard-btn-next" type="button" style="background:#FF3500;">Next
              </button>
            </div>
          </div>
          <div class="wizard-panel">
            <div class="wizard-panel-content">


              <?php $__currentLoopData = $visadata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <button class="accordion"><?php echo e($visa->entry); ?></button>
              <div class="panel" style="display: flex; flex-direction: column;">

                <div class="container" style="margin-top:10px; margin-bottom:10px;">
                  <div class="row">
                    <?php $__currentLoopData = $visa->visa_entry_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-4">
                      <div class="card" style="background: var(--light-orange, #FFF3E3); border-radius:10px;">
                      
                        <div style="padding:10px;">
                        <div style="display: flex; justify-content: flex-end;">
                    <input type="radio" class="form-check-input" style=" height: 20px; width: 20px; order: 1;" id="check<?php echo e($item->id); ?>" name="selected_option" value="<?php echo e($item->id); ?>">
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
            <div class="wizard-panel-content">
              <div class="h4">Traveler 1</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alternate Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Passport Number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Passport Expiry Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Place of Issue">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="br-upload">
                      <label class="upload-label" for="single-file"><span></span></label>
                      <input class="upload-input" id="single-file" type="file" accept=".pdf, .docx, image/jpeg" />
                      <div class="upload-list"></div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="br-upload">
                      <label class="upload-label" for="single-file"><span></span></label>
                      <input class="upload-input" id="single-file" type="file" accept=".pdf, .docx, image/jpeg" />
                      <div class="upload-list"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="br-upload">
                      <label class="upload-label" for="single-file"><span></span></label>
                      <input class="upload-input" id="single-file" type="file" accept=".pdf, .docx, image/jpeg" />
                      <div class="upload-list"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wizard-panel-btn">
              <button class="br-button wizard-btn-canc" type="button">Cancel
              </button>
              <button class="br-button primary wizard-btn-next" type="button" style="background:#FF3500;">Proceed to next traveller details
              </button>


         
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src=https://www.gov.br/ds/assets/govbr-ds-dev-core/dist/core-init.js></script>
<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\themes/BC/Flight/Views/frontend/visa-apply.blade.php ENDPATH**/ ?>