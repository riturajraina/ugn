@extends('layouts.app')
@section('content')
@include('errors.register')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Create New Category</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createcategory') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Enter New Category</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" 
                                       value="<?php echo (!empty(Input::old('category')) ? Input::old('category') :'');?>"
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
                                        $displayOrder   =   !empty(Input::old('displayOrder')) ? Input::old('displayOrder')
                                                            : $displayOrderList[(count($displayOrderList))];
                                        
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
                        

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create New Category
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<form name="categorySearchForm" method="post" action="/createcategory/search">
{{ csrf_field() }}
<input type="hidden" name="categorySearch" value="1">
<table width="70%" align="center" border = "1" 
        style="border-collapse:separate;border-spacing:2px;padding-top: 10px;padding-bottom: 10px;" 
     rules = "none" cellspacing="2" cellpadding="4" rules="1">
     <tr>
         <td colspan="7" align="center" 
             style="background-color: #E46055;text-align: center;color:#E2FFFF;" class="panel-heading">
             <strong>Search Categories</strong>
         </td>
     </tr>
     <tr>
         <td colspan="7">
             &nbsp;
         </td>
     </tr>
     <tr>
         <td width="15%" align="right">
             <strong>Category Name : </strong>
         </td>
         <td width="15%" align="left">
             <input type="text" name="searchCategory" value="<?php echo $searchCategory;?>">
         </td>
         <td width="15%" align="right">
             <strong>Created By : </strong>
         </td>
         <td width="15%" align="left">
             <select name = 'createdBy' id = 'createdBy' class="form-control">
                <?php

                   //$createdBy   =   !empty(Input::old('createdBy')) ? Input::old('createdBy') : '';

                   echo $selectOptionsManager->showSelectOptions($userList, $createdBy);
               ?>
            </select>
         </td>
         <td width="15%" align="right">
             <strong>Status : </strong>
         </td>
         <td width="15%" align="left">
             <select name = 'searchStatus' id = 'searchStatus' class="form-control">
                <?php
                   //$statusList = ['Enabled' => 'Enabled', 'Disabled' => 'Disabled', ];

                   echo $selectOptionsManager->showSelectOptions($statusList, $searchStatus);
               ?>
            </select>
         </td>
         <td width="10%">
             &nbsp;
         </td>
     </tr>
     <tr>
         <td colspan="7">
             &nbsp;
         </td>
     </tr>
     <tr>
         <td colspan="7" align="center">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <!--<input type="submit" name="categorySearch" value="Search" style="width:140px;">-->
                <button type="submit" class="btn btn-primary" style="background-color: #E46055;width:140px;">
                    Search
                </button>
         </td>
     </tr>
 </table>
</form>    
<?php
    $numberOfcolumns = 7;
?>
<div class="container" style="width:100%;">
    <div class="row"><!--style="width: 1500px;"-->
        <div class="col-md-30">
            <div class="alert alert-success">
                <table width="100%" align="center" border = "1" style="border-collapse:separate;border-spacing:2px;" 
                rules = "none" cellspacing="2" cellpadding="4" rules="1">
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center" 
                            style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                            <h1>Category List</h1>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                            <a href="/generateugnheader" style="color: #E46055" 
                               title="Click here to re-generate UGN Header" target="_blank">
                                <strong>Generate UGN Header</strong>
                            </a>
                        </td>
                    </tr>
                    
                    <tr style="background-color:white">
                        <td width="2%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        <td width="14%">
                            <strong>Category Name</strong>
                        </td>
                        
                        <td width="14%">
                            <strong>Created At</strong>
                        </td>
                        <td width="14%">
                            <strong>Updated At</strong>
                        </td>
                        <td width="14%">
                            <strong>Created By</strong>
                        </td>
                        <td width="14%" style="text-align: center;">
                            <strong>Display Order</strong>
                        </td>
                        <td width="14%" style="text-align: center;">
                            <strong>Status</strong>
                        </td>
                    </tr>
                    <?php
                        if (!count($categoryList)) {
                    ?>
                            <tr>
                                <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                                    No Categories found
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            foreach ($categoryList as $row) {
                                
                                $row = $row->getAttributes();
                                
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    <td>
                                        <a href="/editcategory/<?php echo $row['pk_page_category_id'];?>" 
                                           title="Click here to edit this category" target="_blank">
                                            <?php echo $row['category_name'];?>
                                        </a>
                                    </td>
                                    
                                    <td>
                                        <?php echo $row['created_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['updated_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $userList[$row['fk_admin_user_id']];?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['display_order'];?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['status'];?>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                                
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                            <?php
                                if (!empty($categoryList)) {
                                    echo $categoryList->appends($_REQUEST)->links();
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
