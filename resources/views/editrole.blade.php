@extends('layouts.app')
@section('content')
@include('errors.register')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Edit Admin Role</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/editrole') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="roleId" id="roleId" value="<?php echo $roleId;?>">
                        <input type="hidden" name="adminRightsList" id="adminRightsList" 
                               value="<?php echo implode(',', $adminRightsList);?>">
                        <div class="form-group{{ $errors->has('admin_role') ? ' has-error' : '' }}">
                            <label for="admin_role" class="col-md-4 control-label">Role Name</label>

                            <div class="col-md-6">
                                <input id="admin_role" type="text" class="form-control" name="admin_role" 
                                       value="<?php echo (!empty(Input::old('admin_role')) ? Input::old('admin_role') : 
                                           $roleDetails['admin_role']);?>" required autofocus maxlength="25">

                                @if ($errors->has('admin_role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('admin_role') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select required name = 'status' id = 'status' class="form-control">
                                    <?php
                                        $statusList = ['Enabled' => 'Enabled', 'Disabled' => 'Disabled'];
                                        
                                        $status = !empty(Input::old('status')) ? Input::old('status') 
                                                  : $roleDetails['status']; 
                                        
                                        echo $selectOptionsManager->showSelectOptions($statusList, $status, false);
                                    ?>
                                </select>
                                
                                @if ($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('created_by') ? ' has-error' : '' }}">
                            <label for="created_by" class="col-md-4 control-label">Created By</label>
                            <div class="col-md-6">
                                
                                <?php
                                    echo $createdBy;
                                ?>

                                @if ($errors->has('created_by'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('created_by') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                            <label for="created_at" class="col-md-4 control-label">Created At</label>
                            <div class="col-md-6">
                                
                                <?php
                                    echo $roleDetails['created_at'];
                                ?>

                                @if ($errors->has('created_at'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('created_at') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('updated_at') ? ' has-error' : '' }}">
                            <label for="updated_at" class="col-md-4 control-label">Updated At</label>
                            <div class="col-md-6">
                                
                                <?php
                                    echo $roleDetails['updated_at']
                                ?>

                                @if ($errors->has('updated_at'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('updated_at') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('rights') ? ' has-error' : '' }}">
                            <label for="rights" class="col-md-4 control-label">Rights</label>
                            <div class="col-md-6">
                                
                                <?php
                                    echo $checkBoxManager->showCheckBox('rights', $allRightsList, $adminRightsList);
                                ?>

                                @if ($errors->has('rights'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rights') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Role
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