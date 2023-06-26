<div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title">{{__('')}}</h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close" style="border-radius: 20px;
                border: 3px solid black;
                padding: 5px 8px;">
                    <i class="input-icon field-icon fa">
                        <img src="{{url('images/ico_close.svg')}}" alt="close" style="height:17px;">
                    </i>
                </span>
            </div>
            <div class="modal-body relative">

                <h2 style="width: fit-content;
                margin: auto;">
                    <img src="http://127.0.0.1:8000/uploads/0000/1/2023/05/11/logo.png" style="height: 90px">
                     <p class="pt-3 text-center" style="font-size: 20px;">Login or Sign up</p>
                </h2>
                @include('Layout::auth/login-form')
            </div>
        </div>
    </div>
</div>
<div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title">{{__('')}}</h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close" style="border-radius: 20px;
                border: 3px solid black;
                padding: 5px 8px;">
                    <i class="input-icon field-icon fa">
                        <img src="{{url('images/ico_close.svg')}}" alt="close" style="height:17px;">
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <h2 style="width: fit-content;
                margin: auto;">
                    <img src="http://127.0.0.1:8000/uploads/0000/1/2023/05/11/logo.png" style="height: 90px">
                     <p class="pt-3 text-center" style="font-size: 20px;">Login or Sign up</p>
                </h2>
                @include('Layout::auth/register-form')
            </div>
        </div>
    </div>
</div>