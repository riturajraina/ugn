@extends('layouts.mobile')

@section('content')

<script src="/js/jquery.min.js" type="text/javascript"></script>
<!--content part start-->
<div class="pdt54 ugn-wrapper ugn_home">
	
	<!--banner part start-->
	<div class="text-center">
		<img class="img-fluid " src="/mobile/images/ugn/will-banner.jpg" alt="About will">
	</div>

	<!--tab wrraper start-->
	<section class="cab-panel ugn-details-tab-new will" id="my-tabs">

	 <?php
       
       $headerTab   =   [
                            'title' => $content['header']['header_title'], 
                            'acc_1' => ['acc_para_text' => $content['header']['header_para']]
                        ];
       
       $headerTab   =   ['tab_0' => $headerTab];
       
       $tabArray   =   $content['Tabs'];
       
       $tabArray    =   $headerTab + $tabArray;
       
   ?>
	
		<!--tabs nav start-->
		<div class="scrollmenu_serve">
			<ul class="nav nav-pills p-0" role="tablist">
				<?php
               $i = 0;

               foreach ($tabArray as $tab) {
                       if (!empty($tab['title'])) {
                               echo	'<li class="nav-item et_pb_tab_' . $i .'">
                                           <a class="nav-link ' . ($i==0 ? 'active' : '') 
                                           . '" data-toggle="tab" href="#tab_' . $i . '" role="tab" aria-selected="' 
                                           . ($i==0 ? 'true' : 'false') . '">' . ($i==0 ? 'Introduction' : stripslashes($tab['title'])) . '</a>
                                        </li>';
                       }
                       $i++;
               }
           ?>



			</ul>

		</div>

		<!--tabs content start-->
		<div class="tab-content border-top-0">

			    <?php
               $htmlString = '';

               $j = 0;

               foreach ($tabArray as $accordion) {
                       //echo '<br><strong>J : </strong>' . $j++;
                       //continue;
                //echo '<pre>';
              //  print_r($tabArray);
                       $htmlString .= '<div class="tab-pane fade show ' . ($j==0 ? 'active' : '') 
                                   . '" id="tab_' . $j . '" role="tabpanel" aria-labelledby="tab_' . $j . '-tab">'
                                   . '<div id="accordion' . $j . '" class="ugnaccordion">';

                       $accordionCount		= count($accordion);

                       for ($k=1;$k < $accordionCount; $k++) {

                               if (!empty($accordion['acc_' . $k]['acc_title_text'])) {
                                       $htmlString .= '<div class="card mb-2">
                                                           <div class="card-header collapsed"  
                                                           id="heading' . $j . '_' . $k . '" role="tab" 
                                                           data-toggle="collapse" aria-expanded="false" 
                                                           aria-controls="collapse' . $j . '_' . $k . '"
                                                           href="#collapse' . $j . '_' . $k . '">
                                                              
                                                              <h5 class="mb-0 pointer font-weight-bold">
                                                                <a class="collapsed" data-toggle="collapse" 
                                                                data-target="#collapse' . $j . '_' . $k . '" 
                                                                aria-expanded="false" 
                                                                aria-controls="collapse' . $j . '_' . $k . '">'
                                                                    . stripslashes($accordion['acc_' . $k]['acc_title_text']) . ' 
                                                                </a>
                                                             </h5>
                                                                
                                                           </div>
                                                           <div id="collapse' . $j . '_' . $k . '" class="collapse"'
                                                         . ' aria-labelledby="heading' . $j . '_' . $k . '" '
                                                         . 'data-parent="#accordion' . $j . '">
                                                              <div class="card-body">
                                                                     <p>' 
                                                                        . (!empty($accordion['acc_' . $k]['acc_para_text']) ? 
                                                                        stripslashes($accordion['acc_' . $k]['acc_para_text']) : 
                                                                          (!empty($accordion['acc_' . $k]['acc_icon_1']) ? 
                                                                          '<img src="' . $accordion['acc_' . $k]['acc_icon_1'] 
                                                                          . '">' : '' )) . ' 
                                                                     </p>
                                                              </div>
                                                           </div>
                                                    </div>';

                               } elseif(!empty($accordion['acc_' . $k]['acc_para_text'])) {
                                       $htmlString .=   '<div class="card p-3">'.
                                                        
                                                            stripslashes($accordion['acc_' . $k]['acc_para_text']) 
                                                        . '</div>';
                               }
                       }

                       $htmlString .= '</div></div>';

                       $j++;
               }

               echo $htmlString;
       ?>
		
			

		</div>



	</section>


<p class="mb-3">
					<img src="images/ugn/will-legaldesk.jpg" alt="" class="img-fluid">
				</p>

	<!--most popular start-->
	
	<?php
if (!empty($content['Favourites'])) {
    
    $favouriteCount = count($content['Favourites']);

    $favouriteArray = [];

    if ($favouriteCount) {

            $favouriteHtml	= '<div class="most-popular pt-3">
                                        <h5 class="text-uppercase my-2 ml-3">MOST POPULAR</h5>
                                        <!--most popular question start-->';

            $i = 1;

            foreach ($content['Favourites'] as $favourite) {

                    //echo '<br>Favourite : <pre>' . print_r($favourite, true) . '</pre>';exit;

                    $tabAccArray			=	explode(',', $favourite['fav' . $i . '_tab_acc_link']);

                    if (count($tabAccArray)) {

                            $tabCount                   =	str_ireplace('tab', '', $tabAccArray['0']);

                            $headingCount               =	str_ireplace('acc_', '', $tabAccArray['1']);

                            $favouriteArray[]           =	[$tabCount => $headingCount];

                            $favouriteHtml		.=	'<div class="card ">
                                                                    <div class="card-header p-2 pl-3" 
                                                                    id="qs-' . $tabCount . '_' . $headingCount . '">
                                                                        <a href="#">
                                                                            ' . stripslashes($favourite['fav' . $i . '_qn_1' ]) . '
                                                                        </a>
                                                                    </div>
                                                                </div>';
                    }

                    $i++;
            }

            echo $favouriteHtml . '</div>';
    }
}

?>



	<!--references start-->
	<a class="d-flex justify-content-between alert alert-info mb-0 more-product-add-bar fixed-bottom" href="ugn-will-references.php" role="alert">
		<div>
			<h6>References</h6>
		</div>
		<div class="btn-group-sm">
			<button type="button" class="btn btn-primary bmd-btn-icon">
 <i class="fa fa-angle-right"></i>
	  </button>
		
		</div>
	</a>


</div>



<?php

if (!empty($favouriteCount)) {
		
    $i = 1;

    $jScript = '<script language="javascript" type="text/javascript">
                            $(document).ready(function () {
                                    $("#fly-show").click(function () {
                                            $(".hide").slideToggle();
                                    });
                            $(\'.most-popular a\').on(\'click\', function(){
                            $(\'a.text-red\').removeClass(\'text-red\');
                            $(this).addClass(\'text-red\');
                            });';

    $i		=	1;

    foreach ($favouriteArray as $favourite) {

        foreach ($favourite as $tabCount => $headingCount) {

                $jScript .= "$('#qs-" . $tabCount . '_' . $headingCount . " a').on('click', function (event) {
                $('#my-tabs .et_pb_tab_" . $tabCount . " a').click();";

                $jScript .= "$('#accordion" . $tabCount . " #heading" . $tabCount . "_" . $headingCount . " a').click();";

                $jScript .= "$(\"html, body\").animate({
                        scrollTop: $('#my-tabs').offset().top
                }, 1000);
                });";
                
                /*$jScript .= "$(\"html, body\").animate({
                        scrollTop: $('#my-tabs').offset().top
                });
                });";*/

        }
    }

    echo $jScript . '});</script>';	
}
?>
      

@endsection