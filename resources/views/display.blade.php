@extends('layouts.front')

@section('content')
<!--main container-->
<div class="container product product-detail">
   <div class="row ml-0">
      <div class="col-9 card p-0">
         <!--bread crumb-->
         <div class="card-header">
            <div class="row">
               <div class="col">
                  <nav aria-label="breadcrumb" role="navigation">
                     <ol class="breadcrumb m-0 p-0">
                        <?php

                                /*$breadCrumpCount = count($content['breadcrump']);

                                if (!empty($content['breadcrump']) && is_array($content['breadcrump']) && $breadCrumpCount) {

                                        $breadCrump = '';

                                        $i = 0;

                                        foreach ($content['breadcrump'] as $text) {
                                                $i++;

                                                $class		=	$i >= $breadCrumpCount ? 'breadcrumb-item active' : 'breadcrumb-item';

                                                $area		=	$i >= $breadCrumpCount ? 'aria-current="page"' : '';

                                                $breadCrump .=	'<li class="breadcrumb-item" ' . $area . '>
                                                                                        <a href="#">' . $text . '</a>
                                                                                </li>';

                                        }

                                        echo $breadCrump;
                                }*/

                        ?>
                        
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
         <!--bread crumb-->
         
         <section>
            <div class="ugn-upper-content">
               <div class="row p-3">
                    <div class="col-3 pr-2">
                            <?php
                                    if (!empty($content['header']['header_images']) 
                                            && is_array($content['header']['header_images']) 
                                            && count($content['header']['header_images'])) {

                                            foreach ($content['header']['header_images'] as $imageSource) {
                                                    echo '<img class="img-fluid" '
                                                    . 'src="\images\ugn\\' 
                                                    . $imageSource . '">';
                                            }

                                    } elseif(!empty($content['header']['header_img_1'])) {
                            ?>		<img class="img-fluid" 
                                            src="<?php echo $content['header']['header_img_1'];?>">
                            <?php
                                    }
                            ?>

                    </div>
                    <div class="col-9 pl-2">
                            <h4 class="pb-3 text-center">
                                    <?php echo stripslashes($content['header'] ['header_title']);?>
                            </h4>
                        <p><?php echo stripslashes($content['header'] ['header_para']);?></p>
                    </div>
               </div>
            </div>
         </section>
         <?php
            $tabArray		= $content['Tabs'];
            
            $tabTitleArray	= [];
            
            $i				= 1;
            
            foreach ($tabArray as $tabNumber => $tab) {
            	//$tabTitleArray[] = $tab['tab_' . $i]['title'];
            	$tabTitleArray[$tabNumber] = $tab['title'];
            	$i++;
            }
            ?>
         <section class="p-3 cab-panel ugn-details-tab will" id="my-tabs">
            <ul class="nav nav-pills" role="tablist">
               <?php 
                $i = 1;

                    foreach ($tabArray as $tab) {
                            if (!empty($tab['title'])) {
                                    echo	'<li class="nav-item et_pb_tab_' . $i .'">
                                                            <a class="nav-link ' . ($i==1 ? 'active' : '') . '" data-toggle="tab"'
                                                            . ' href="#tab_' . $i . '" role="tab" aria-selected="' 
                                                            . ($i==1 ? 'true' : 'false') . '">' 
                                                            . stripslashes($tab['title']) 
                                                            . '</a>
                                                    </li>';
                            }
                            $i++;
                    }
                    ?>
            </ul>
			
            <div class="tab-content border border-top-0 p-3">
                <?php
                        $htmlString = '';

                        $j = 1;

                        foreach ($tabArray as $accordion) {
                                //echo '<br><strong>J : </strong>' . $j++;
                                //continue;
                                $htmlString			.= '<div class="tab-pane p-3 fade show ' . ($j==1 ? 'active' : '') . '" id="tab_' . $j . '" role="tabpanel" aria-labelledby="tab_' . $j . '-tab">
                                        <div id="accordion' . $j . '" class="ugn-accordion">';

                                $accordionCount		= count($accordion);

                                for ($k=1;$k < $accordionCount; $k++) {

                                        if (!empty($accordion['acc_' . $k]['acc_title_text'])) {
                                                $htmlString .= '<div class="card mb-3">
                                                                    <div class="card-header box-effect"  id="heading' . $j . '_' . $k . '">
                                                                       <h5 class="mb-0 pointer">
                                                                              <a data-toggle="collapse" data-target="#collapse' . $j . '_' . $k . '" aria-expanded="false" aria-controls="collapse' . $j . '_' . $k . '">							
                                                                              ' . 
                                                                       stripslashes($accordion['acc_' . $k]['acc_title_text']) . '  
                                                                              </a>
                                                                       </h5>
                                                                    </div>
                                                                    <div id="collapse' . $j . '_' . $k . '" class="collapse" aria-labelledby="heading' . $j . '_' . $k . '" data-parent="#accordion' . $j . '">
                                                                       <div class="card-body">
                                                                              <p>' . (!empty($accordion['acc_' . $k]['acc_para_text']) ? stripslashes($accordion['acc_' . $k]['acc_para_text'])  : (!empty($accordion['acc_' . $k]['acc_icon_1']) ? '<img src="' . $accordion['acc_' . $k]['acc_icon_1'] . '">' : '' )) . ' </p>
                                                                       </div>
                                                                    </div>
                                                             </div>';

                                        } elseif(!empty($accordion['acc_' . $k]['acc_para_text'])) {
                                                $htmlString .= '<p>' . stripslashes($accordion['acc_' . $k]['acc_para_text']) 
                                                            . '</p>';
                                        }
                                }

                                $htmlString .= '</div></div>';

                                $j++;
                        }

                        echo $htmlString;
                ?>
            </div>
         </section>
      </div>
      <div class="col-3 right-col-ugn">
         <p id="ldesk">
            <?php
                    //echo '<br>side image : <pre> ' . print_r($content['sideImage'], true) . '</pre>';

                    if (!empty($content['sideImage'])) {

                            list($type, $source, $externalLink, $caption) = $content['sideImage'];

                            if (strtolower($type) == 'image') {
                                    //echo '<br>inside if';exit;
                                    echo	'<a href="' . (!empty($externalLink) ? $externalLink : 'javascript:void(0);') . '">
                                                            <img src="' . $source . '" class="img-fluid">
                                                    </a>';
                            } 

                            if (strtolower($type) == 'video')
                            {

                                    //list($type, $source, $externalLink, $caption) = $content['sideImage'];

                                    echo '<div class="card mb-3">

                                                    <div class="card-header bg-primary text-white p-2 pl-3">
                                                            ' . $caption . '
                                                    </div>
                                                    <div class="card-body p-2">
                                                            <iframe width="100%" height="auto" src="' . $source . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    </div>

                                            </div>';
                            }
                    }
            ?>
            
         </p>
         <h6 class="text-uppercase mb-2">MOST POPULAR</h6>
            <?php
                    if (!empty($content['Favourites'])) {
                        $favouriteCount = count($content['Favourites']);

                        $favouriteArray = [];

                        if ($favouriteCount) {

                                $favouriteHtml	= '';

                                $i = 1;

                                foreach ($content['Favourites'] as $favourite) {

                                        //echo '<br>Favourite : <pre>' . print_r($favourite, true) . '</pre>';exit;

                                        $tabAccArray			=	explode(',', $favourite['fav' . $i . '_tab_acc_link']);

                                        if (count($tabAccArray)) {

                                                $tabCount               =	str_ireplace('tab', '', $tabAccArray['0']);

                                                $headingCount		=	str_ireplace('acc_', '', $tabAccArray['1']);

                                                $favouriteArray[]	=	[$tabCount => $headingCount];

                                                $favouriteHtml		.=	'<div class="card mb-3">
                                                                                        <div class="card-header bg-primary 
                                                                                        text-white p-2 pl-3">
                                                                                           ' . stripslashes($favourite['fav' . $i . '_qn_1' ]) . '
                                                                                        </div>
                                                                                        <div class="card-body p-2">
                                                                                           ' . stripslashes($favourite['fav' . $i . '_text_1']) 
                                                                                             . '
                                                                                        </div>
                                                                                        <div class="card-footer p-2 pl-3 bg-light
                                                                                        ugn-read-more" 
                                                                                        id="qs-' . $tabCount . '_' 
                                                                                        . $headingCount . '">
                                                                                           <a href="#">Read more 
                                                                                           <i class="fa fa-arrow-circle-right 
                                                                                           float-right"></i>
                                                                                           </a>
                                                                                        </div>
                                                                                </div>';
                                        }

                                        $i++;
                                }

                                echo $favouriteHtml;
                        }
                    }


            ?>
      </div>
   </div>
</div>
<!--main container end-->
<?php  

	if (!empty($favouriteCount)) {
		
		$i = 1;

		$jScript = '<script language="javascript" type="text/javascript">
					$(document).ready(function () {
						$("#fly-show").click(function () {
							$(".hide").slideToggle();
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

			}

		}

		echo $jScript . '});</script>';	
	}
?>
@endsection