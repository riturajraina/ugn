@extends('layouts.app')

@section('content')
<div class="panel-body">
    <!-- Display Validation Errors -->

    <!-- New Task Form -->
    <form action="/viewimages" method="POST" name="searchForm" class="form-horizontal">
        {{ csrf_field() }}
        
        <div class="col-sm-6">
            <div class="form-group">
                
                <label for="task" class="col-sm-7 control-label">Image Name</label>

                <div class="col-sm-5">
                    <input type="text" name="imageName" id="imageName" class="form-control" 
                           value="<?php echo $imageName;?>">
                </div>
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="form-group">
                <label for="task" class="col-sm-2 control-label">Created By</label>
                <div class="col-sm-4">
                    
                    <select name='createdBy' id='createdBy' class="form-control">
                        <?php
                            echo $selectOptionsManager->showSelectOptions($userList, $createdBy);
                        ?>
                    </select>
                    @if ($errors->has('createdBy'))
                    <span class="help-block">
                        <strong>{{ $errors->first('createdBy') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-6">
                <button type="submit" class="btn btn-primary" style="width: 190px;">
                    <strong>Search Images</strong>
                </button>
                <button type="button" class="btn btn-primary" style="width: 190px;"
                        onclick="javascript:document.location.href='/viewimages';">
                    <i class="fa fa-plus"></i> <strong>Clear Search</strong>
                </button>
            </div>
        </div>
    </form>
</div>

@include('errors.register')

<?php
    $numberOfcolumns = 6;
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
                            <h1>Image List</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                            <form class="form-horizontal" role="form" method="POST" 
                                action="{{ url('/uploadimage') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <table width="100%" align="center" border = "1" 
                                style="border-collapse:separate;border-spacing:2px;" 
                                rules = "none" cellspacing="2" cellpadding="4" rules="1">
                                    <tr>
                                        <td width="50%" style="text-align: right;">
                                            <strong>Select Images to Upload : </strong>
                                        </td>
                                        <td width="50%" style="text-align: left;">
                                            <input type="file" name="pageImage[]" multiple="multiple">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: center">
                                            <button type="submit" class="btn btn-primary">
                                                <strong>Upload Image</strong>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                    <tr style="background-color:white">
                        <td width="4%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        
                        <td width="20%">
                            <strong>Image Name</strong>
                        </td>
                        
                        <td width="18%">
                            <strong>Created By</strong>
                        </td>
                        
                        <td width="10%">
                            <strong>Created At</strong>
                        </td>
                        <td width="10%">
                            <strong>Updated At</strong>
                        </td>
                        
                        <td width="22%">
                            <strong>Status</strong>
                        </td>
                        
                        
                    </tr>
                    <?php
                        if (!count($imageList)) {
                    ?>
                            <tr>
                                <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                                    No Images Found
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            foreach ($imageList as $row) {
                                
                                $row = $row->getAttributes();
                                
                                //echo '<br>Row : <pre>' . print_r($row, true) . '</pre>';exit;
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    
                                    <td>
                                        <a href="<?php echo env('UGNIMAGEURLPATH') . '/' . $row['image_name'];?>" 
                                           target="_blank" title="Click here to view this image">
                                            <strong><?php echo $row['image_name'];?></strong>
                                        </a>
                                    </td>
                                    
                                    <td>
                                        <?php echo $userList[$row['fk_admin_user_id']];?>
                                    </td>
                                    <td>
                                        <?php echo $row['created_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['updated_at'];?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    
                                </tr>
                    <?php
                            }
                        }
                    ?>
                    
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                            <?php
                                if (!empty($imageList)) {
                                    echo $imageList->appends($_REQUEST)->links();
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