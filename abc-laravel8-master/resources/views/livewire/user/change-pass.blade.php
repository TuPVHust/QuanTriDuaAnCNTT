<div>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>ChangePass</span></li>
                </ul>
            </div>
            @if (Session::has('sucess'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>


            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger" role="alert">
              {{Session::get('fail')}}
            </div>


            @endif
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <form name="frm-login" wire:submit.prevent='ChangePass'>
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Change Password</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Enter Current Password</label>
                                        <input wire:model='current_password' type="password" id="frm-login-uname" name="current_password"
                                            placeholder="Type your password address">
                                        @error('curPass')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Enter New Password</label>
                                        <input wire:model='password' type="password" id="frm-login-pass" name="password" wire:model='password'
                                            placeholder="************">
                                        @error('newPass')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Confirm New Password</label>
                                        <input wire:model='cofPass' type="password" id="frm-login-pass" name="cspassword"
                                            placeholder="************">
                                        @error('newPass')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>
                                    <button type="submit" class="btn btn-submit"> Change </button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
</div>
