@extends('layouts.app')
@section('content')
@include('errors.register')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Edit Category</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/editcategory') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="categoryId" value="<?php echo $categoryId;?>">
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category Name</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" 
                                       value="<?php echo $categoryName;?>"
                                       required autofocus maxlength="100">

                                @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('displayOrder') ? ' has-error' : '' }}">
                            <label for="displayOrder" class="col-md-4 control-label">Display Order</label>

                            <div class="col-md-6">
                                <select required name = 'displayOrder' id = 'displayOrder' class="form-control">
                                    <?php
                                        echo $selectOptionsManager->showSelectOptions($displayOrderList, $displayOrder, false);
                                    ?>
                                </select>
                                
                                @if ($errors->has('displayOrder'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('displayOrder') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('categoryImage') ? ' has-error' : '' }}">
                            <label for="categoryImage" class="col-md-4 control-label">Upload Images </label>
                            
                            <div class="col-md-6">
                                <input type="file" name="categoryImage">

                                @if ($errors->has('categoryImage'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categoryImage') }}</strong>
                                </span>
                                @endif
                            </div> 
                        </div>

                     <div class="form-group{{ $errors->has('categoryImage') ? ' has-error' : '' }}">
                            <label for="categoryImage" class="col-md-4 control-label"> </label>

                              <div class="col-md-6">
                             <input id="category" type="text" class="form-control" name="category_pre_img" 
                                       value="<?php echo $categoryImage;?>"
                                        >
                            </div>

                        </div>
                        

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select required name = 'status' id = 'status' class="form-control">
                                    <?php
                                        $statusList = ['Disabled' => 'Disabled', 'Enabled' => 'Enabled'];
                                        
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
                                    Edit Category
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
