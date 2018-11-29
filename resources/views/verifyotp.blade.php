@extends('layouts.app')
@include('errors.common')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;background-color: #33ffff">
                    <strong>Verify OTP</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/verifyotp') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="icaoiu" value="<?php echo $userId;?>">
                        <input type="hidden" name="mobile_number" value="<?php echo $mobileNumber;?>">
                        <div class="form-group{{ $errors->has('otp') ? ' has-error' : '' }}">
                            <label for="otp" class="col-md-4 control-label">
                                Enter OTP sent to your mobile number</label>

                            <div class="col-md-6">
                                <input id="otp" type="otp" class="form-control" 
                                       name="otp" value="{{ old('otp') }}" required autofocus
                                       maxlength = 10>

                                @if ($errors->has('otp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('otp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Verify OTP
                                </button>

                                <a class="btn btn-link" 
                                   href="<?php echo env('APP_URL') . '/forgotpassword/' .  $mobileNumber;?>">
                                    
                                    Resend OTP
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
