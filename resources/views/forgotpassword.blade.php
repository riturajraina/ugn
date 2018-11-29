@extends('layouts.app')
@include('errors.common')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forgot Password</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/sendotp') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="col-md-4 control-label">Enter Your Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="mobile_number" class="form-control" 
                                       name="mobile_number" value="<?php echo $mobileNumber;?>" required autofocus
                                       maxlength = 10>

                                @if ($errors->has('mobile_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
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
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send OTP
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
