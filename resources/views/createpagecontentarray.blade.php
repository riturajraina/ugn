@extends('layouts.app')
@section('content')
@include('errors.register')

<div class="container" style="align-content:left;">
    <div class="row">
        <!--<div class="col-md-8 col-md-offset-2">-->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Create Content Page from Content Array</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/insertcontentarray') }}"
                     enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        
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
                        
                        <div class="form-group{{ $errors->has('contentArray') ? ' has-error' : '' }}">
                            <label for="contentArray" class="col-md-3 control-label">Enter Content Array</label>

                            <div class="col-md-6" style="width:75%">
                                
                                <textarea id="contentArray"  name="contentArray"
                                autofocus rows="18" cols="120" placeholder="Content Array (Required)"><?php 
                                    echo (!empty(Input::old('contentArray')) ? Input::old('contentArray') : '');
                                ?></textarea>
                                
                                @if ($errors->has('contentArray'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contentArray') }}</strong>
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
