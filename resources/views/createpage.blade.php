@extends('layouts.app')
@section('content')
@include('errors.register')

<?php
    require_once(env('VIEWSPATH') .  'rtecodeinclude.php');
?>

<!--<div class="container" style="width:150%;align-content:left;padding-left:0px;float:left;position: absolute;">-->
<div class="container" style="align-content:left;">
    <div class="row">
        <!--<div class="col-md-8 col-md-offset-2">-->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Create Content Page</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createpage') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('pageTitle') ? ' has-error' : '' }}">
                            <label for="pageTitle" class="col-md-3 control-label">Page Title</label>

                            <div class="col-md-6">
                                <input id="pageTitle" type="text" class="form-control" name="pageTitle" 
                                value="<?php echo (!empty(Input::old('pageTitle')) ? Input::old('pageTitle') : '');?>"
                                required autofocus maxlength="255" placeholder="Page Title (Required)">

                                @if ($errors->has('pageTitle'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pageTitle') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('categoryId') ? ' has-error' : '' }}">
                            <label for="categoryId" class="col-md-3 control-label">Select Page Category</label>

                            <div class="col-md-6">
                                <select required name = 'categoryId' id = 'categoryId' class="form-control">
                                    <?php
                                        
                                        $categoryId = !empty(Input::old('categoryId')) ? Input::old('categoryId') 
                                                  : ''; 
                                        
                                        echo $selectOptionsManager->showSelectOptions($categoryList, $categoryId, false);
                                    ?>
                                </select>
                                
                                @if ($errors->has('categoryId'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categoryId') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('pageLinkText') ? ' has-error' : '' }}">
                            <label for="pageLinkText" class="col-md-3 control-label">Page Link Text</label>

                            <div class="col-md-6">
                                <input id="pageLinkText" type="text" class="form-control" name="pageLinkText" 
                                value="<?php echo (!empty(Input::old('pageLinkText')) ? Input::old('pageLinkText') : '');?>"
                                required autofocus maxlength="50" placeholder="Page Link Text (Required)">

                                @if ($errors->has('pageLinkText'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pageLinkText') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('display_order') ? ' has-error' : '' }}">
                            <label for="display_order" class="col-md-3 control-label">Display Order</label>

                            <div class="col-md-6">
                                <select required name = 'display_order' id = 'display_order' class="form-control">
                                    <?php
                                        
                                        $display_order = !empty(Input::old('display_order')) ? Input::old('display_order') 
                                                  : $displayOrderList[count($displayOrderList)]; 
                                        
                                        echo $selectOptionsManager->showSelectOptions($displayOrderList, $display_order, 
                                                false);
                                    ?>
                                </select>
                                
                                @if ($errors->has('display_order'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('display_order') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <br><br>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-3 control-label">Upload Images (Desktop)</label>
                            
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
                            <label for="contentImages" class="col-md-3 control-label">Content Images (Desktop)</label>

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
                        
                        <br><br>
                        <div class="form-group{{ $errors->has('imageMobile') ? ' has-error' : '' }}">
                            <label for="imageMobile" class="col-md-3 control-label">Upload Images (Mobile)</label>
                            
                            <div class="col-md-6">
                                <input type="file" name="pageImageMobile[]" multiple="multiple">

                                @if ($errors->has('imageMobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('imageMobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('contentImagesMobile') ? ' has-error' : '' }}">
                            <label for="contentImagesMobile" class="col-md-3 control-label">Content Images (Mobile)</label>

                            <div class="col-md-6">
                                <input id="contentImagesMobile" type="text" class="form-control" name="contentImagesMobile" 
                                value="<?php echo (!empty(Input::old('contentImagesMobile')) ? Input::old('contentImagesMobile') 
                                        : '');?>"
                                autofocus maxlength="255" placeholder="Please enter names of already uploaded images separated by a comma ', ' here if required for this page" 
                                style="width:800px;">

                                @if ($errors->has('contentImagesMobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contentImagesMobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!--Will do this afterwards in new desktop design if required
                        <br><br>
                        <div class="form-group{{ $errors->has('favouriteMedia') ? ' has-error' : '' }}">
                            <label for="favouriteMedia" class="col-md-3 control-label">Upload Favourite Media/Image</label>
                            
                            <div class="col-md-6">
                                <input type="file" name="pageImageMobile[]" multiple="multiple">

                                @if ($errors->has('favouriteMedia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('favouriteMedia') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('contentMedia') ? ' has-error' : '' }}">
                            <label for="contentMedia" class="col-md-3 control-label">Content Media/Images</label>

                            <div class="col-md-6">
                                <input id="contentMedia" type="text" class="form-control" name="contentMedia" 
                                value="<?php echo (!empty(Input::old('contentMedia')) ? Input::old('contentMedia') 
                                        : '');?>"
                                autofocus maxlength="255" placeholder="Please enter names of already uploaded images separated by a comma ', ' here if required for this page" 
                                style="width:800px;">

                                @if ($errors->has('contentMedia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contentMedia') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>-->
                        <br><br>
                        <div class="form-group{{ $errors->has('paragraph') ? ' has-error' : '' }}">
                            <label for="paragraph" class="col-md-3 control-label">Paragraph</label>

                            <div class="col-md-6" style="width:75%">
                                
                                <textarea id="paragraph" class="<?php echo $textAreaClass;?>" name="paragraph"
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
                                        $statusList =   ['Disabled' => 'Disabled', 'Enabled' => 'Enabled'];
                                        
                                        $status     =   !empty(Input::old('status')) ? Input::old('status') 
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
