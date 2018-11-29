@extends('layouts.app')

@section('content')

@include('errors.common')

<?php
    $numberOfcolumns = 7;
    //$pageTitle  =   urldecode($pageTitle);
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
                            <h1>Tab List for page : <?php echo urldecode($pageTitle);?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                            <a href="/createtab/<?php echo $pageId;?>/<?php echo $pageTitle;?>" 
                            target="_blank" title="Click here to create new page">
                                <strong>Create New Tab</strong>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color:white">
                        <td width="4%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        
                        <td width="16%">
                            <strong>Title</strong>
                        </td>
                        
                        
                        <td width="16%">
                            <strong>Created By</strong>
                        </td>
                        
                        <td width="12%">
                            <strong>Created At</strong>
                        </td>
                        <td width="12%">
                            <strong>Updated At</strong>
                        </td>
                        
                        <td width="5%">
                            <strong>Status</strong>
                        </td>
                        
                        <td width="19%">
                            &nbsp
                        </td>
                    </tr>
                    <?php
                        if (!count($tablist)) {
                    ?>
                            <tr>
                                <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                                    No Tabs found
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            /*echo '<br>tablist : <pre>' . print_r($tablist, true) . '</pre>';
                            echo '<br>userList : <pre>' . print_r($userList, true) . '</pre>';
                            exit;*/
                            
                            foreach ($tablist as $row) {
                                
                                $row = $row->getAttributes();
                                
                                //echo '<br>Row : <pre>' . print_r($row, true) . '</pre>';exit;
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    <td>
                                        <a href="/edittab/<?php echo $pageId;?>/<?php echo $pageTitle;?>/<?php 
                                        echo $row['pk_tab_id'];?>" target="_blank"
                                         title="Click here to edit this tab">
                                            <strong><?php echo $row['title'];?></strong>
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
                                        <?php echo $row['status'];?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php
                                            $row['title'] = urlencode($row['title']);
                                        ?>
                                        <a href="/createaccordion/<?php echo $row['pk_tab_id'] . '/' . $row['title'] . '/' . 
                                                $pageId . '/' . $pageTitle;?>" 
                                        title="Click here to create a new accordion for this tab" 
                                        target="_blank">
                                            <strong>Create Accordion</strong>
                                        </a>&nbsp;
                                        <a href="/viewaccordions/<?php echo $row['pk_tab_id'] . '/' . $row['title'] . '/' . 
                                                $pageId . '/' . $pageTitle;?>"
                                           title="Click here to view accordions of this tab" target="_blank">
                                            <strong>View Accordions</strong>
                                        </a>&nbsp;
                                        
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                    
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                            <?php
                                if (!empty($tablist)) {
                                    echo $tablist->appends($_REQUEST)->links();
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