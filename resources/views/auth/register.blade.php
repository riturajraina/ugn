@extends('layouts.app')
@section('content')
@include('errors.register')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Register</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" 
                                       value="{{ old('fname') }}" required autofocus maxlength="25">

                                @if ($errors->has('fname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" 
                                       value="{{ old('lname') }}" required autofocus maxlength="25">

                                @if ($errors->has('lname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="col-md-4 control-label">Mobile Number</label>
                            <div class="col-md-6">
                                <input id="mobile_number" type="mobile_number" class="form-control" 
                                       name="mobile_number" value="{{ old('mobile_number') }}" required maxlength="10">

                                @if ($errors->has('mobile_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" 
                                       name="email" value="{{ old('email') }}" required maxlength="100">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                                <select required name = 'role' id = 'role' class="form-control">
                                    <?php
                                        echo $selectOptionsManager->showSelectOptions($roleList, Input::old('role'));
                                    ?>
                                </select>

                                @if ($errors->has('role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('role') }}</strong>
                                </span>
                                @endif
                            </div>
                            
                           
                        </div>

                        
                        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                            <label for="captcha" class="col-md-4 control-label">
                                Please enter characters as shown
                            </label>
                            <div class="col-md-3">
                                <script language="javascript">
                                    function refreshCaptcha()
                                    {
                                        var cImg = document.getElementById('captchaImage');
                                        cImg.src = "<?php echo env('APP_URL') . '/captcha?i='; ?>" + 
                                                Math.floor((Math.random() * 100) + 1);
                                    }
                                </script>
                                <img id="captchaImage" src="<?php echo env('APP_URL') . '/captcha'; ?>">
                                <a href="javascript:void(0);" onclick="javascript:refreshCaptcha();">Refresh</a>
                                <input id="captcha" type="text" class="form-control" name="captcha" 
                                       value="{{ old('captcha') }}" required maxlength="5">

                                @if ($errors->has('captcha'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('captcha') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
