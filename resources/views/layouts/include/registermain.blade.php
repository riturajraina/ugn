<form name="frontUserRegistrationFrom" method="post" action="{{ url('/fregister') }}" >
    {{ csrf_field() }}
    <h4>OSS Signup</h4>

    <div class="form-group">
        <label for="fname" 
               class="bmd-label-floating form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
            First Name
        </label>
        <input type="text" class="form-control" id="fname" name="fname" maxlength="15" required
         value="{{ Input::old('fname') }}">
        @if ($errors->has('fname'))
        <span class="help-block">
            <strong>{{ $errors->first('fname') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <label for="lname" 
               class="bmd-label-floating form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
            Last Name
        </label>
        <input type="text" class="form-control" id="lname" name="lname" maxlength="15" required  value="{{ Input::old('lname') }}">
        @if ($errors->has('lname'))
        <span class="help-block">
            <strong>{{ $errors->first('lname') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <label for="mobile_number" 
               class="bmd-label-floating form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
            Mobile Number
        </label>
        <input type="text" class="form-control" id="mobile_number" name="mobile_number" maxlength="10"
               required  value="{{ Input::old('mobile_number') }}">
        @if ($errors->has('mobile_number'))
        <span class="help-block">
            <strong>{{ $errors->first('mobile_number') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <label for="email" 
               class="bmd-label-floating form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            Email
        </label>
        <input type="text" class="form-control" id="email" name="email" maxlength="50"
               required value="{{ Input::old('email') }}">
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <script language="javascript" type="text/javascript">
        function refreshCaptcha()
        {
            var cImg = document.getElementById('captchaImage');
            //alert("cImg Src = " + cImg.src);
            cImg.src = "<?php echo env('APP_URL') . '/captcha/'; ?>" + Math.floor((Math.random() * 100) + 1);
            //alert("cImg Src after change = " + cImg.src);
        }
    </script>
    <div class="form-group is-focused mt-5">
        <label for="captcha" style="margin-top: -20px;"
               class="bmd-label-floating form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
            Please enter characters as shown in image :
        </label>
        <div>
        <img id="captchaImage" src="<?php echo env('APP_URL') . '/captcha'; ?>">
        <!--<a href="javascript:void(0);" onclick="javascript:refreshCaptcha();">fffRefresh</a>-->
        <input type="text" class="form-control" id="captcha" name="captcha" maxlength="7"
               value="{{ Input::old('captcha') }}">
        @if ($errors->has('captcha'))
        <span class="help-block">
            <strong>{{ $errors->first('captcha') }}</strong>
        </span>
        @endif
        </div>
    </div>
    

    <div class="pb-4">
        <div class="row">
            <div class="col pr-0">
                <button type="submit" class="btn btn-primary btn-block">Signup</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-primary  btn-block" data-dismiss="modal" 
                        onclick="javascript:history.go(-1);">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</form>
                        