@extends('layouts.app')
@section('content')
@include('errors.register')

<!--<div class="container" style="width:150%;align-content:left;padding-left:0px;float:left;position: absolute;">-->
<div class="container" style="align-content:left;">
    <div class="row">
        <!--<div class="col-md-8 col-md-offset-2">-->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Upload Image</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/uploadimage') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-3 control-label">Upload Images</label>
                            
                            <div class="col-md-6">
                                <input type="file" name="pageImage[]" multiple="multiple">

                                @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('contentImages') ? ' has-error' : '' }}">
                            <label for="contentImages" class="col-md-3 control-label">Content Images</label>

                            <div class="col-md-6">
                                <input id="contentImages" type="text" class="form-control" name="contentImages" 
                                value="<?php echo (!empty(Input::old('contentImages')) ? Input::old('contentImages') : '');?>"
                                autofocus maxlength="255" 
                                placeholder="Please enter names of already uploaded images separated by a comma ', ' here if required for this page" style="width:800px;">

                                @if ($errors->has('contentImages'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contentImages') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('paragraph') ? ' has-error' : '' }}">
                            <label for="paragraph" class="col-md-3 control-label">Paragraph</label>

                            <div class="col-md-6" style="width:75%">
                                
                                <textarea id="paragraph" type="text" class="form-control" name="paragraph"
                                autofocus maxlength="255" rows="30" placeholder="Paragraph (Required)"><?php 
                                    echo (!empty(Input::old('paragraph')) ? Input::old('paragraph') : '');
                                ?></textarea>

                                @if ($errors->has('paragraph'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('paragraph') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-3 control-label">Status</label>

                            <div class="col-md-6">
                                <select required name = 'status' id = 'status' class="form-control">
                                    <?php
                                        $statusList = ['Disabled' => 'Disabled', 'Enabled' => 'Enabled'];
                                        
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
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Create Page
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
