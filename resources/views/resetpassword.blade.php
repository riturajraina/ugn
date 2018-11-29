@extends('layouts.app')
@include('errors.common')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/resetpassword') }}">
                        {{ csrf_field() }}
                        <input type ="hidden" name="icaoiu" value="<?php echo $userId;?>">

                        <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                            <label for="new_password" class="col-md-4 control-label">Enter New Password</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" 
                                       name="new_password" value="{{ old('new_password') }}" required autofocus
                                       maxlength = 15>

                                @if ($errors->has('new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('confirm_new_password') ? ' has-error' : '' }}">
                            <label for="confirm_new_password" class="col-md-4 control-label">
                                Re-enter New Password</label>

                            <div class="col-md-6">
                                <input id="confirm_new_password" type="password" class="form-control" 
                                       name="confirm_new_password" value="{{ old('confirm_new_password') }}" 
                                       required 
                                       maxlength = 15>

                                @if ($errors->has('confirm_new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirm_new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
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
