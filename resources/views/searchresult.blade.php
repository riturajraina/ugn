@extends('layouts.front')

<?php $numberOfcolumns=3;?>
@section('content')
<!--main container-->
<div class="container product product-detail">
   <div class="row ml-0">
      <div class="col-12 card p-0">
         <section>
            <div class="ugn-upper-content">
                @include('errors.common')
                <table width="100%" align="center" border = "1" style="border-collapse:separate;border-spacing:2px;" 
                rules = "none" cellspacing="2" cellpadding="4" rules="1">
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center" 
                            style="background-color: #4150B5;text-align: center;color:#E2FFFF">
                            <h1 class="heading-font">Search Result(s)</h1>
                        </td>
                    </tr>
                    <tr style="background-color: #ea1e63; color: #fff;">
                        <td width="4%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        
                        <td width="30%">
                            <strong>Title</strong>
                        </td>
                        
                        <td width="66%">
                            <strong>Paragraph</strong>
                        </td>
                    </tr>
                    <?php
                        $i = 1;
                            
                        if (!empty($_REQUEST['page'])) {
                            $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                        }
                        
                        if (!empty($searchResult)) {
                            $queryString    =   null;
                            
                            foreach ($_REQUEST as $key => $value) {
                                $queryString    .=  !empty($queryString) ? '&' . $key . '=' . $value : $key . '=' . $value; 
                            } 
                            
                            foreach ($searchResult as $row) {
                                
                                $row = $row->getAttributes();
                        ?>
                                <tr>
                                    <td style="text-align: center;" valign="top">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    <td valign="top">
                                        <a href="/display/<?php echo $row['page_link_text'] . '?' . $queryString;?>"
                                         target="_blank" title="Click here to view this page">
                                            <strong><?php echo stripslashes($row['title']);?></strong>
                                        </a>
                                    </td>
                                    <td valign="top">
                                        <a href="/display/<?php echo $row['page_link_text'] . '?' . $queryString;?>" target="_blank"
                                         title="Click here to view this page">
                                            <?php echo substr(stripslashes(strip_tags($row['paragraph'])), 0, 255) . '...';?>
                                        </a>
                                    </td>
                                </tr>
                        <?php      
                            }
                        }
                    ?>
                    <tr>
                        <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                            
                            <div class="pagination justify-content-center page-item">
                                <?php
                                    if (!empty($searchResult)) {
                                        echo $searchResult->appends($_REQUEST)->links();
                                    }
                                ?>
                            </div>
                            
                        </td>
                    </tr>
                </table>
            </div>
         </section>
      </div>
   </div>
</div>    
         
@endsection