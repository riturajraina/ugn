@extends('layouts.app')
@section('content')
@include('errors.register')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Edit Right</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/editright') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="rightId" id="rightId" value="<?php echo $rightId;?>">
                        
                        <div class="form-group{{ $errors->has('right_name') ? ' has-error' : '' }}">
                            <label for="right_name" class="col-md-4 control-label">Right Name</label>

                            <div class="col-md-6">
                                <input id="right_name" type="text" class="form-control" name="right_name" 
                                       value="<?php echo (!empty(Input::old('right_name')) ? Input::old('right_name') : 
                                           $rightDetails['admin_rights']);?>" required autofocus maxlength="100">

                                @if ($errors->has('right_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('right_name') }}</strong>
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
                                                  : $rightDetails['status']; 
                                        
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
                                    echo $rightDetails['created_at'];
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
                                    echo $rightDetails['updated_at']
                                ?>

                                @if ($errors->has('updated_at'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('updated_at') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Right
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
