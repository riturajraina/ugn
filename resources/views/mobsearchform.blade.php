@extends('layouts.mobile')

@section('content')
<div class="h_tab1">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Shopping</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Services</a>
            <a class="nav-item nav-link <?php echo stristr($_SERVER['REQUEST_URI'], 'ugnsearch') 
                                    || stristr($_SERVER['REQUEST_URI'], 'display')
                                    || stristr($_SERVER['REQUEST_URI'], 'msearch') ? 'active' : '';?>" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Important Info</a>
        </div>
    </nav>
</div>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 

        <div class=""> 
            <div class="card p-3 mb-3 service-form">
                <form class="mb-1">
                    <div class="bg-whit">

                        <select class="custom-select">
                            <option selected>Men's Fashion</option>
                            <option value="1">Tablets</option>
                            <option value="2">Laptops</option>
                            <option value="3">TVs</option>
                            <option value="4">Home Appliances</option>
                            <option value="5">Cameras</option>
                            <option value="6">Women's Fashion</option>
                            <option value="7">Personal Care</option>
                            <option value="8">Health Care</option>
                        </select>
                    </div> 
                </form>

                <from class="mb-0"> 
                    <div class="bg-white d_border clearfix">
                        <span class="bmd-form-group"><input type="search" class="search-top-latest" placeholder="Search..."></span>
                        <a class="btn btn-secondry btn-search mb-0 mr-auto float-right"><i class="fa fa-search" aria-hidden="true"> </i></a>
                    </div> 
                </from>

            </div> 	 
        </div> 

    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

        <div class=""> 
            <div class="card p-3 mb-3 service-form">   
                <form class="mb-1">
                    <div class="bg-whit"> 
                        <select class="custom-select">
                            <option selected>Flights Booking</option>
                            <option value="1">Cabs Booking</option>
                            <option value="2">Flights Booking</option>
                            <option value="3">Bus Booking</option>
                            <option value="4">Trains Booking</option>
                            <option value="5">Hotels Booking</option>
                            <option value="6">Holidays Booking</option>
                            <option value="7">Movies Booking</option>
                            <option value="8">Food Booking</option>
                        </select>
                    </div> 
                </form>  

                <div class="mt-2">

                    <div class="input-group mb-3 mb-sm-0 form-group bmd-form-group">
                        <label for="exampleInputName2" class="bmd-label-floating">Flying From</label>
                        <input type="text" class="form-control" id="exampleInputName2">
                        <div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-primary bmd-btn-icon ml-2 mr-2">
                            <i class="fa fa-random replace rotate" aria-hidden="true"></i>
                        </button>
                    </div>

                    <div class="input-group mb-3 mb-sm-0 form-group bmd-form-group">
                        <label for="exampleInputName2" class="bmd-label-floating">Flying To</label>
                        <input type="text" class="form-control" id="exampleInputName2">
                        <div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="input-group mb-3 mb-sm-0 form-group bmd-form-group">
                        <label for="exampleInputName2" class="bmd-label-floating">Onward Date</label>
                        <div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="528d959f-c6c1-cb9f-bed7-e6b5f8bc51aa" data-datepicker="true" role="input" month="9" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
                    </div>

                    <div class="input-group mb-3 mb-sm-0 form-group bmd-form-group">
                        <label for="exampleInputName2" class="bmd-label-floating">Return Date</label>
                        <div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker1" class="form-control gj-textbox-md" data-type="datepicker" data-guid="a98e5b55-f6a0-7a4c-78bf-20eff705b85e" data-datepicker="true" role="input" month="9" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
                    </div>

                    <div class="mb-3">
                        <fieldset class="form-group bmd-form-group is-filled" data-toggle="modal" data-target="#Traveller">
                            <label for="exampleInputEmail1" class="bmd-label-static">Traveller &amp; Class</label>
                            <input type="text" class="form-control pt-2" id="exampleInputEmail1" value="2 Traveller(s) , Economy">
                        </fieldset>

                        <div class="modal fade" id="Traveller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header p-3">
                                        <h5 class="modal-title" id="exampleModalLabel">Select Travellers</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">�</span>
                                        </button>
                                    </div>
                                    <div class="modal-body pl-3 pr-3 pt-0 pb-0">
                                        <div class="m-1">ADULTS <small>(+12 yrs)</small></div>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                            </ul>
                                        </nav>
                                        <div class="m-1">CHILDREN <small>(2-12 yrs)</small></div>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                            </ul>
                                        </nav>
                                        <div class="m-1">INFANTS <small>(0-2 yrs)</small></div>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                            </ul>
                                        </nav>
                                        <div class="dropdown-divider mb-3"></div>
                                        <div class="ml-2">
                                            <span class="bmd-form-group is-filled"><div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span> Economy
                                                    </label>
                                                </div></span>
                                            <span class="bmd-form-group is-filled"><div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Premium Economy
                                                    </label>
                                                </div></span>
                                            <span class="bmd-form-group is-filled"><div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Business
                                                    </label>
                                                </div></span>
                                            <span class="bmd-form-group is-filled"><div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> First Class
                                                    </label>
                                                </div></span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="flight-list-inner.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 btn-block">Submit</a>

                </div>
            </div> 		 


        </div>


    </div>
    
    <div class="tab-pane <?php echo stristr($_SERVER['REQUEST_URI'], 'ugnsearch') 
                                    || stristr($_SERVER['REQUEST_URI'], 'display')
                                    || stristr($_SERVER['REQUEST_URI'], 'msearch') ? 'fade show active' : 'fade';?>" 
         id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class=""> 
            <div class="card p-3 mb-3">

                <form class="mb-1" name="mobileSearchForm" method="post" action="/ugnsearch">
                     
                    {{ csrf_field() }}
                    
                    <div class="bg-whit">
                        <select class="custom-select" name="ugnCategory" id="ugnCategory">
                            <?php
                                echo $selectOptionsManager->showSelectOptions($categoryArray, $ugnCategory, true);
                            ?>
                        </select>
                    </div> 
                
                    <div class="bg-white d_border clearfix">
                        <span class="bmd-form-group">
                            <input type="text" name="searchText" id= "searchText" value = "<?php echo $searchText;?>" 
                            class="search-top-latest" placeholder="Search...">
                        </span>
                        <a class="btn btn-secondry btn-search mb-0 float-right" 
                           onclick="javascript:document.mobileSearchForm.submit();">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </a>
                    </div>
                </from>

                <div>
                    @include('errors.common')
                    <?php
                        $numberOfcolumns = 3;
                    ?>
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
                                            <a href="/display/<?php echo $row['page_link_text'] . '?' . $queryString;?>" 
                                               target="_blank" title="Click here to view this page">
                                                <?php echo substr(stripslashes(strip_tags($row['paragraph'])), 0, 255) . '...';?>
                                            </a>
                                        </td>
                                    </tr>
                            <?php      
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
                            <?php
                            } elseif(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
                            ?>
                                <tr>
                                    <td colspan="<?php echo $numberOfcolumns;?>" align="center">
                                        Sorry!! No results found
                                    </td>
                                </tr>
                            <?php
                            }
                        ?>
                        
                    </table>
                </div>

            </div>   		 
        </div>
    </div>
</div>

@endsection