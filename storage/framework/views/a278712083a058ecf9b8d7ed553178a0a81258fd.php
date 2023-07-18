<div class="bravo_header">
    <div class="<?php echo e($container_class ?? 'container'); ?>" 
>
        <div class="content">
            <div class="header-left">
                <a href="<?php echo e(url(app_get_locale(false,'/'))); ?>" class="bravo-logo">
                    <?php
                        $logo_id = setting_item("logo_id");
                        if(!empty($row->custom_logo)){
                            $logo_id = $row->custom_logo;
                        }
                    ?>
                    <?php if($logo_id): ?>
                        <?php $logo = get_file_url($logo_id,'full') ?>
                        <img src="<?php echo e($logo); ?>" style=" height: 91px;
                      
                        position: relative;" alt="<?php echo e(setting_item("site_title")); ?>">
                    <?php endif; ?>
                </a>
             
   <div class="bravo_topbar" style="height: 94px;">
    <div class="container">
        <div class="content">
            <div class="topbar-left">
                 <ul class="topbar-items">
                    <div style="position: relative !important;
                         left: -327px !Important;
                     top: 41px; !important">
                    <?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
        <div class="col-md-12 mx-auto">
            <div class="input-group" style="left: -97%;
            width: 198%;
            top: 10px;">
                <input class="form-control border-end-0 border" type="search" id="example-search-input" placeholder="Search for destinations or activities" style="background:#F6F6F6;">
                <span class="input-group-append" style="margin-bottom: 0px;
              border-bottom: 1px solid #dae1e7;">
                    <button class="btn btn-outline-secondary border-start-0 border-bottom-0 border ms-n5" type="button" style="height: 39px;background:#F6F6F6;">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
                  
          <?php

 $user_id = null;

     if(auth()->check())
     {
    
       $user_id = auth()->user()->id;
     }

     
     $cartdata = DB::table('cart')->where('user_id',$user_id)->where('status',Null)->get();

          ?>

        <div class="col-md-12">
          <a href="<?php echo e(url('hotel-wish-list')); ?>"><p style="color:gray;left: 189px; position:relative; top:-17px;"><span><i class="fa fa-heart" aria-hidden="true"></i></span>  WishList</p></a>
         <a href="<?php echo e(url('event-cart')); ?>"> <p style="color: gray;
          left: 280px;
          position: relative;
          top: -74px;"><span>
             <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>&nbsp;cart</p></a>
        </div>


         
     <div style="float: right;
     right: -335px;
     position: relative;
     top: -98px;
 ">
                <?php if(!Auth::check()): ?>
                        <li class="login-item">
                            <a href="#login" data-toggle="modal" data-target="#login" class="login btn  btn-light" style="color:#FF3500;font-weight:900; background:white; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php if(is_enable_registration()): ?>
                            <li class="signup-item">
                                <a href="#register" class="btn btn-primary" style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);color:white; padding:10px;" data-toggle="modal" data-target="#register" class="signup"><?php echo e(__('Sign Up')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo $__env->make('Layout::parts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <li class="login-item dropdown">
                            <a href="#" data-toggle="dropdown"  class="login " style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);color:white; padding:10px;"><?php echo e(__("Hi, :name",['name'=>Auth::user()->getDisplayName()])); ?>

                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-user text-left" style="width:140px;">
                                <?php if(empty( setting_item('wallet_module_disable') )): ?>
                                    <li class="credit_amount">
                                        <a href="<?php echo e(route('user.wallet')); ?>"><i class="fa fa-money"></i> <?php echo e(__("Credit: :amount",['amount'=>auth()->user()->balance])); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(is_vendor()): ?>
                                <!--<li class="menu-hr"><a href="<?php echo e(route('vendor.dashboard')); ?>" class="menu-hr"><i class="icon ion-md-analytics"></i> <?php echo e(__("Vendor Dashboard")); ?></a></li>-->
                                <?php endif; ?>
                            <li class="<?php if(is_vendor()): ?> menu-hr <?php endif; ?>">
                                    <a href="<?php echo e(route('user.profile.index')); ?>"><i class="icon ion-md-construct"></i> <?php echo e(__("My profile")); ?></a>
                                </li> 
                                <?php if(setting_item('inbox_enable')): ?>
                                <li class="menu-hr">
                                    <a href="<?php echo e(route('user.chat')); ?>"><i class="fa fa-comments"></i> <?php echo e(__("Messages")); ?>

                                        <?php if($count = auth()->user()->unseen_message_count): ?>
                                            <span class="badge badge-danger"><?php echo e($count); ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                                    

                                

                                <?php if(is_admin()): ?>
                                    <li class="menu-hr"><a href="<?php echo e(route('admin.index')); ?>"><i class="icon ion-ios-ribbon"></i> <?php echo e(__("Admin Dashboard")); ?></a></li>
                                <?php endif; ?>
                                <li class="menu-hr">
                                    <a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form-topbar').submit();"><i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?></a>
                                </li>
                            </div>
                            </ul>
                            <form id="logout-form-topbar" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    <?php endif; ?>
                </ul> 
            </div>
        </div>
    </div>
</div> 
 </div>

           <div class="header-right">
                <?php if(!empty($header_right_menu)): ?>
                    <ul class="topbar-items">
                        <?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        <?php if(!Auth::check()): ?>
                            <li class="login-item">
                                <a href="#login" data-toggle="modal" data-target="#login" class="login"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(is_enable_registration()): ?>
                                <li class="signup-item">
                                    <a href="#register" data-toggle="modal" data-target="#register" class="signup"><?php echo e(__('Sign Up')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="login-item dropdown">
                                <a href="#" data-toggle="dropdown" class="is_login">
                                    <?php if($avatar_url = Auth::user()->getAvatarUrl()): ?>
                                        <img class="avatar" src="<?php echo e($avatar_url); ?>" alt="<?php echo e(Auth::user()->getDisplayName()); ?>">
                                    <?php else: ?>
                                        <span class="avatar-text"><?php echo e(ucfirst( Auth::user()->getDisplayName()[0])); ?></span>
                                    <?php endif; ?>
                                    <?php echo e(__("Hi, :Name",['name'=>Auth::user()->getDisplayName()])); ?>

                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu text-left">

                                   
                                    <li class="<?php if(Auth::user()->hasPermission('dashboard_vendor_access')): ?> menu-hr <?php endif; ?>">
                                        <a href="<?php echo e(route('user.profile.index')); ?>"><i class="icon ion-md-construct"></i> <?php echo e(__("My profile")); ?></a>
                                    </li>
                                    <?php if(setting_item('inbox_enable')): ?>
                                    <li class="menu-hr"><a href="<?php echo e(route('user.chat')); ?>"><i class="fa fa-comments"></i> <?php echo e(__("Messages")); ?></a></li>
                                    <?php endif; ?>
                                    <li class="menu-hr"><a href="<?php echo e(route('user.booking_history')); ?>"><i class="fa fa-clock-o"></i> <?php echo e(__("Booking History")); ?></a></li>
                                    <li class="menu-hr"><a href="<?php echo e(route('user.change_password')); ?>"><i class="fa fa-lock"></i> <?php echo e(__("Change password")); ?></a></li>
                                    <?php if(Auth::user()->hasPermission('dashboard_access')): ?>
                                        <li class="menu-hr"><a href="<?php echo e(route('admin.index')); ?>"><i class="icon ion-ios-ribbon"></i> <?php echo e(__("Admin Dashboard")); ?></a></li>
                                    <?php endif; ?>
                                      <a href="<?php echo e(route('user.profile.index')); ?>">
                            <i class="icon ion-md-construct"></i> <?php echo e(__("My profile")); ?>

                                </a>
                                    <li class="menu-hr">
                                        <a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?></a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
                <button class="bravo-more-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div> 
        </div>
    </div>


    <div class="bravo-menu-mobile" style="display:none;">
        <div class="user-profile">
            <div class="b-close"><i class="icofont-scroll-left"></i></div>
            <div class="avatar"></div>
            
            


            <ul style="width:100%;">
                <?php if(!Auth::check()): ?>
                    <li>
                        <a href="#login" data-toggle="modal" data-target="#login" class="login"><?php echo e(__('Login')); ?></a>
                    </li>
                    <?php if(is_enable_registration()): ?>
                        <li>
                            <a href="#register" data-toggle="modal" data-target="#register" class="signup"><?php echo e(__('Sign Up')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li>
                        <a href="<?php echo e(route('user.profile.index')); ?>" class="btn btn-light" style="background: linear-gradient(180deg, #FE9000 0%, #FF3500 100%);color:white;">
                            <i class="icofont-user-suited"></i> <?php echo e(__("Hi, :Name",['name'=>Auth::user()->getDisplayName()])); ?>

                        </a>
                    </li>
                  
                    <?php if(Auth::user()->hasPermission('dashboard_access')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.index')); ?>"><i class="icon ion-ios-ribbon"></i> <?php echo e(__("Admin Dashboard")); ?></a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(route('user.profile.index')); ?>">
                            <i class="icon ion-md-construct"></i> <?php echo e(__("My profile")); ?>

                        </a>
                    </li>
                    <li>
                        <a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                            <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form-mobile" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>

                <?php endif; ?>
            </ul>

             <a href="<?php echo e(url('hotel-wish-list')); ?>"><p style="color:gray;left: 20px; position:relative; "><span><i class="fa fa-heart" aria-hidden="true"></i></span>WishList</p></a>
         <a href="<?php echo e(url('user-cart')); ?>"> <p style="color: gray;
          left: 20px;
          position: relative;
          ;"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>  cart </p></a>



            <ul class="multi-lang">
                <?php echo $__env->make('Core::frontend.currency-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
            <ul class="multi-lang">
                <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>   
        </div>
        <div class="g-menu">
            <?php generate_menu('primary') ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\modules/Layout/parts/header.blade.php ENDPATH**/ ?>