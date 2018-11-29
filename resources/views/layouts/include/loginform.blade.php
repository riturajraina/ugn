<form name="loginform" method="post" action="{{ url('/flogin') }}">
    {{ csrf_field() }}
    <h4>OSS LOGIN</h4>
    <div class="form-group">
        <label for="" class="bmd-label-floating {{ $errors->has('mobile_number') ? ' has-error' : '' }}">
            Mobile Number / Email address
        </label>
        <input type="text" class="form-control" id="mobile_number" name="mobile_number" maxlength="50" required
         value="{{ Input::old('mobile_number') }}">
        
        @if ($errors->has('mobile_number'))
        <span class="help-block">
            <strong>{{ $errors->first('mobile_number') }}</strong>
        </span>
        @endif

    </div>
    <div class="form-group">
        <label for="" class="bmd-label-floating {{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="pb-4">
        <div class="row">
            <div class="col pr-0">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
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