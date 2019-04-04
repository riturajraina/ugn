@extends('layouts.app')

@section('content')

@include('errors.common')

<?php
    $numberOfcolumns = 9;
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
                            <h1>Page List</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                            <a href="/createpage" target="_blank" title="Click here to create new page">
                                <strong>Create New Page</strong>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color:white">
                        <td width="4%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        
                        <td width="13%">
                            <strong>Title</strong>
                        </td>
                        
                        <td width="12%">
                            <strong>Link Text</strong>
                        </td>
                        
                        <td width="8%" style="text-align: center;">
                            <strong>Display Order</strong>
                        </td>
                        
                        <td width="11%">
                            <strong>Created By</strong>
                        </td>
                        
                        <td width="11%">
                            <strong>Created At</strong>
                        </td>
                        <td width="11%">
                            <strong>Updated At</strong>
                        </td>
                        
                        <td width="3%">
                            <strong>Status</strong>
                        </td>
                        
                        <td width="27%">
                            &nbsp
                        </td>
                    </tr>
                    <?php
                        if (!count($pageList)) {
                    ?>
                            <tr>
                                <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                                    No Pages found
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            /*echo '<br>pageList : <pre>' . print_r($pageList, true) . '</pre>';
                            echo '<br>userList : <pre>' . print_r($userList, true) . '</pre>';
                            exit;*/
                            
                            foreach ($pageList as $row) {
                                
                                $row = $row->getAttributes();
                                
                                //echo '<br>Row : <pre>' . print_r($row, true) . '</pre>';exit;
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    <td>
                                        <a href="/editpage/<?php echo $row['pk_content_id'];?>" target="_blank"
                                         title="Click here to edit this page">
                                            <strong><?php echo $row['title'];?></strong>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $row['page_link_text'];?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['display_order'];?>
                                    </td>
                                    <?php
                                        $protocol = 'http://';
                                        
                                        if (stristr(env('APP_URL'), 'https')) {
                                            $protocol = 'https://';
                                        }
                                    ?>
                                    <td>
                                        <a href="<?php echo $protocol . env('MOBILEURL') . '/display/' . $row['page_link_text'];?>"
                                           target="_blank" title="Click here to view this page in mobile user view">
                                            <?php echo $userList[$row['fk_admin_user_id']];?>
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
                                    <td style="text-align: center;">
                                        <?php
                                            $row['title']   = urlencode(strip_tags($row['title']));
                                        ?>
                                        
                                        <a href="/createtab/<?php echo $row['pk_content_id'];?>/<?php echo $row['title'];?>" 
                                        title="Click here to create a new tab for this page" 
                                        target="_blank">
                                            <strong>Create Tab</strong>
                                        </a>&nbsp;
                                        <a href="/viewtabs/<?php echo $row['pk_content_id'];?>/<?php echo $row['title'];?>"
                                           title="Click here to view tabs & accordions of this page" target="_blank">
                                            <strong>View Tabs</strong>
                                        </a>&nbsp;
                                        <a href="/viewcontent/<?php echo $row['page_link_text'];?>" 
                                           title="Click here to view this page in front-end with disabled content" target="_blank">
                                            <strong>Admin View</strong>
                                        </a>
                                        &nbsp;
                                        <a href="/display/<?php echo $row['page_link_text'];?>" 
                                           title="Click here to view this page in front-end with only enabled content" 
                                           target="_blank">
                                            <strong>User View</strong>
                                        </a>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                    
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                            <?php
                                if (!empty($pageList)) {
                                    echo $pageList->appends($_REQUEST)->links();
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