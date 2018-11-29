@extends('layouts.app')

@section('content')

@include('errors.common')

<?php
    $numberOfcolumns = 7;
?>
<div class="container" style="width:100%;">
    <div class="row">
        <div class="col-md-30">
            <div class="alert alert-success">
                <table width="100%" align="center" border = "1" style="border-collapse:separate;border-spacing:2px;" 
                cellspacing="2" cellpadding="4" rules="1">
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center" 
                            style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                            <h1>Accordion List for Page : <span style="color: yellow;"><?php echo urldecode($pageTitle);?></span>
                            </h1>
                            <h1>Tab : <span style="color: yellow;"><?php echo urldecode($tabTitle);?></span></h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                            <a href="/createaccordion/<?php echo $tabId . '/' . $tabTitle . '/' . $pageId . '/' . $pageTitle;
                            ?>" 
                            target="_blank" title="Click here to create new accordion">
                                <strong>Create New Accordion</strong>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color:white">
                        <td width="4%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        
                        <td width="20%">
                            <strong>Title</strong>
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
                        
                        <td width="3%">
                            <strong>Status</strong>
                        </td>
                        
                        <td width="19%">
                            &nbsp
                        </td>
                    </tr>
                    <?php
                        if (!count($accordionList)) {
                    ?>
                            <tr>
                                <td colspan="<?php echo $numberOfcolumns;?>" width="100%" align="center">
                                    No Accordions found for this Tab
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            foreach ($accordionList as $row) {
                                
                                $row = $row->getAttributes();
                                
                                //echo '<br>Row : <pre>' . print_r($row, true) . '</pre>';exit;
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    
                                    <td>
                                        <a href="/editaccordion/<?php echo $row['pk_accordion_id'] . '/ ' .$tabId . '/' . 
                                        $tabTitle . '/' . $pageId . '/' . $pageTitle;?>" target="_blank"
                                         title="Click here to edit this accordion">
                                            <strong><?php echo !empty($row['title']) ? $row['title'] : 'Edit';?></strong>
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
                                            $status             =   'enabled';
                                            
                                            $linkTitle          =   'Mark as favourite';
                                            
                                            if (!empty($favoriteList[$row['pk_accordion_id']])) {
                                                
                                                $favArray       =   $favoriteList[$row['pk_accordion_id']];
                                                
                                                if (strtolower($favArray['2']) == 'enabled') {
                                                    
                                                    $status     =   'disabled';
                                                    
                                                    $linkTitle  =   'Unmark favourite';
                                                }
                                            }
                                        ?>
                                        <a href="/addtofavourite/<?php echo $pageId . '/' .$tabId . '/' 
                                                . $row['pk_accordion_id'] . '/' . $status;?>" target="_blank">
                                            <?php
                                                echo $linkTitle;
                                            ?>
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
                                if (!empty($accordionList)) {
                                    echo $accordionList->appends($_REQUEST)->links();
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