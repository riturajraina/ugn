@extends('layouts.app')

@section('content')

@include('errors.common')
<div class="container" style="width:100%;">
    <div class="row"><!--style="width: 1500px;"-->
        <div class="col-md-30">
            <div class="alert alert-success">
                <table width="100%" align="center" border = "1" style="border-collapse:separate;border-spacing:2px;" 
                rules = "none" cellspacing="2" cellpadding="4" rules="1">
                    <tr>
                        <td colspan="8" align="center" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                            <h1>Role List</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" width="100%" align="center">
                            <a href="/createrole" target="_blank" title="Click here to create new role">
                                <strong>Create new role</strong>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color:white">
                        <td width="4%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        <td width="24%">
                            <strong>Role Name</strong>
                        </td>
                        
                        <td width="24%">
                            <strong>Created At</strong>
                        </td>
                        <td width="24%">
                            <strong>Updated At</strong>
                        </td>
                        
                        <td width="24%">
                            <strong>Status</strong>
                        </td>
                    </tr>
                    <?php
                        if (!count($roleList)) {
                    ?>
                            <tr>
                                <td colspan="5" width="100%" align="center">
                                    No Roles found
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            //echo '<br>roleList : <pre>' . print_r($roleList, true) . '</pre>';exit;
                            
                            foreach ($roleList as $row) {
                                
                                $row = $row->getAttributes();
                                
                                //echo '<br>Row : <pre>' . print_r($row, true) . '</pre>';
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    <td>
                                        <a href="/editrole/<?php echo $row['pk_admin_role_id'];?>" target="_blank"
                                         title="Click here to edit this role">
                                            <strong><?php echo $row['admin_role'];?></strong>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $row['created_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['updated_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['status'];?>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                    
                    <tr>
                        <td colspan="5" align="center">
                            <?php
                                if (!empty($roleList)) {
                                    echo $roleList->appends($_REQUEST)->links();
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