@extends('layouts.app')
@section('content')
@include('errors.register')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Edit Admin User</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/editadmin') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="userId" id="userId" value="<?php echo $userDetails['pk_admin_user_id'];?>">
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" 
                                       value="<?php echo (!empty(Input::old('fname')) ? Input::old('fname') : 
                                           $userDetails['fname']);?>" required autofocus maxlength="25">

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
                                       value="<?php echo (!empty(Input::old('lname')) ? Input::old('lname') : 
                                           $userDetails['lname']);?>" required autofocus maxlength="25">

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
                                <!--<input id="mobile_number" type="mobile_number" class="form-control" name="mobile_number" 
                                 value="<?php echo (!empty(Input::old('mobile_number')) ? Input::old('mobile_number') : 
                                           $userDetails['mobile_number']);?>" required maxlength="10" READONLY>-->
                                
                                <?php
                                    echo $userDetails['mobile_number'];
                                ?>

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
                                <!--<input id="email" type="email" class="form-control" name="email" 
                                 value="<?php echo (!empty(Input::old('email')) ? Input::old('email') : 
                                           $userDetails['email']);?>" required maxlength="100" READONLY>-->
                                <?php
                                    echo $userDetails['email'];
                                ?>

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
                                        $role = !empty(Input::old('role')) ? Input::old('role') : 
                                            $userDetails['fk_admin_role_id'];
                                        
                                        echo $selectOptionsManager->showSelectOptions($roleList, $role);
                                    ?>
                                </select>

                                @if ($errors->has('role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('role') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <select required name = 'status' id = 'status' class="form-control">
                                    <?php
                                        $status = !empty(Input::old('status')) ? Input::old('status') : 
                                            $userDetails['status'];
                                        
                                        $statusList = ['Enabled' => 'Enabled', 'Disabled' => 'Disabled'];
                                        
                                        echo $selectOptionsManager->showSelectOptions($statusList, $status);
                                    ?>
                                </select>

                                @if ($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
