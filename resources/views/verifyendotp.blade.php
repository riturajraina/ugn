@extends('layouts.surveyor')

@section('content')
@include('errors.createsurvey')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;background-color: #31b0d5">
                    <h1>Verify End Survey Otp</h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/verifyendotp') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="readerId" value="<?php echo $readerId;?>">
                        <input type="hidden" name="otpId" value="<?php echo $otpId;?>">
                        <input type="hidden" name="surveyId" value="<?php echo $surveyId;?>">
                        

                        <div class="form-group{{ $errors->has('otp') ? ' has-error' : '' }}">
                            <label for="otp" class="col-md-4 control-label">Enter OTP</label>

                            <div class="col-md-6">
                                <input id="otp" type="text" class="form-control" name="otp" value="{{ old('otp') }}" required autofocus maxlength="4">

                                @if ($errors->has('otp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('otp') }}</strong>
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
                                        //alert ("called");
                                        var cImg = document.getElementById('captchaImage');
                                        //alert ("cImg : " + cImg);
                                        cImg.src = "<?php echo env('APP_URL') . '/captcha?i='; ?>" + Math.floor((Math.random() * 100) + 1);
                                        //alert ("cImg src : " + cImg.src);
                                    }
                                </script>
                                <img id="captchaImage" src="<?php echo env('APP_URL') . '/captcha'; ?>">
                                <a href="javascript:void(0);" onclick="javascript:refreshCaptcha();">Refresh</a>
                                <input id="captcha" type="text" class="form-control" name="captcha" value="{{ old('captcha') }}" required maxlength="5">


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
                                    Verify Otp
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
