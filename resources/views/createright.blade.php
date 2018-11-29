@extends('layouts.app')
@section('content')
@include('errors.register')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Create New Admin Right</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createright') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('right_name') ? ' has-error' : '' }}">
                            <label for="right_name" class="col-md-4 control-label">Right Name</label>

                            <div class="col-md-6">
                                <input id="right_name" type="text" class="form-control" name="right_name" 
                                       value="<?php echo (!empty(Input::old('right_name')) ? Input::old('right_name') :'');?>"
                                       required autofocus maxlength="100">

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
                                                  : ''; 
                                        
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
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Right
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
