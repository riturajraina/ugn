@extends('layouts.front')

@section('content')
<!--main container-->
<div>
  <img class="img-fluid" src="/images/ugn/will-top-banner.jpg">
</div>
<!--main container-->
<div class="container product product-detail">


  <div class="row ml-0">

    <div class="col-12 card p-0">
      <!--bread crumb-->
      <div class="card-header">
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb m-0 p-0">
                <li class="breadcrumb-item"><a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item">Utilities & Important Info
                </li>
                <li class="breadcrumb-item"><?php echo $content['catName'];?>  </li>
                <li class="breadcrumb-item active" aria-current="page"><a  href=""> <?php echo strip_tags($content["header"] ["header_title"]);?>  </a></li>
              </ol>
            </nav>
          </div>

        </div>
      </div>
      <!--bread crumb-->
      
      
      <?php
            $tabArray   = $content['Tabs'];
            
            $tabTitleArray  = [];
            
            $i        = 1;
            
            foreach ($tabArray as $tabNumber => $tab) {
              //$tabTitleArray[] = $tab['tab_' . $i]['title'];
              $tabTitleArray[$tabNumber] = $tab['title'];
              $i++;
            }
            ?>
      <section class="p-3 cab-panel ugn-details-tab-new will" id="my-tabs">
      <div class="row">
      <div class="col-3">

      <h5 class="text-uppercase mb-2"><a  href=""><?php echo $content["header"] ["header_title"];?></a></h5>
        <ul class="nav flex-column nav-pills mb-3" role="tablist">
          <?php 
                $i = 1;

                    foreach ($tabArray as $tab) {
                            if (!empty($tab['title'])) {
                                   /* echo  '<li class="nav-item et_pb_tab_' . $i .'">
                                                            <a class="nav-link ' . ($i==1 ? 'active' : '') . '" data-toggle="tab"'
                                                            . ' href="#tab_' . $i . '" role="tab" aria-selected="' 
                                                            . ($i==1 ? 'true' : 'false') . '">' 
                                                            . stripslashes($tab['title']) 
                                                            . '</a>
                                                    </li>';*/

                                    echo  '<li class="nav-item et_pb_tab_' . $i .'">
                                            <a class="nav-link" data-toggle="tab"'
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
        
        <div class="mb-3">
            
        <?php  if (!empty($content['letfImage'])  && !empty($content['letfImageUrl'])) {  ?>
            
        
        <a href="<?php echo $content['letfImageUrl'];?>" target="_blank">
        <img src="/images/ugn/<?php echo $content['letfImage'];?>" class="img-fluid w-100">
        </a>
            
        <?php } elseif(empty($content['letfImage'])  && !empty($content['letfImageUrl']))  {  
            
            if (strpos($content['letfImageUrl'], 'youtube') !== false) {  
            $youtubeUrl = explode('?v=',$content['letfImageUrl']);
            ?>
           <iframe width="300" height="280" src="https://www.youtube.com/embed/<?php echo $youtubeUrl[1];?>?rel=0;&autoplay=1" frameborder="0" allow="autoplay"  allowfullscreen></iframe>
            
            
            <?php } else { ?>
            
            <video width="300" height="280" controls autoplay>
            <source src="<?php echo $content['letfImageUrl'];?>" type="video/mp4">
            <source src="<?php echo $content['letfImageUrl'];?>" type="video/ogg">
            Your browser does not support the video tag.
            </video>
            
        <?php } } ?>
            
        </div>
        
        <div class="most-popular" >
      
      <h5 class="text-uppercase my-2">MOST POPULAR</h5>

       <?php
                    if (!empty($content['Favourites'])) {
                        $favouriteCount = count($content['Favourites']);

                        $favouriteArray = [];

                        if ($favouriteCount) {

                                $favouriteHtml  = '';

                                $i = 1;

                                foreach ($content['Favourites'] as $favourite) {

                                        //echo '<br>Favourite : <pre>' . print_r($favourite, true) . '</pre>';exit;

                                        $tabAccArray      = explode(',', $favourite['fav' . $i . '_tab_acc_link']);

                                        if (count($tabAccArray)) {

                                                $tabCount               = str_ireplace('tab', '', $tabAccArray['0']);

                                                $headingCount   = str_ireplace('acc_', '', $tabAccArray['1']);

                                                $favouriteArray[] = [$tabCount => $headingCount];
                                                $favouriteHtml    .=  '<div class="card mb-3">
                      <div class="card-header bg-light p-0" id="qs-' . $tabCount . '_' 
                      . $headingCount . '">
                     <a href="#" class="p-2 pl-3">
             ' . stripslashes($favourite['fav' . $i . '_qn_1' ]) . ' 
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
      
      <div class="col-9">
      
    <div class="tab-content border-top-0">

      <div class="tab-pane p-3 fade show active" id="tab_intro" role="tabpanel" aria-labelledby="tab_intro-tab"> 
      <div id="accordionintro" class="ugn-accordion">
        <p><?php echo $content['intro'];?></p>
      </div></div>

         <?php  //echo '<pre/>';print_r($tabArray);
                        $htmlString = '';

                        $j = 1;

                        foreach ($tabArray as $accordion) {
                        	//echo '<pre/>';print_r($tabArray);
                                //echo '<br><strong>J : </strong>' . $j++;
                                //continue;
                              //  $htmlString     .= '<div class="tab-pane p-3 fade show ' . ($j==1 ? 'active' : '') . '" id="tab_' . $j . '" role="tabpanel" aria-labelledby="tab_' . $j . '-tab"> 
                                     //   <div id="accordion' . $j . '" class="ugn-accordion">';

                                        $htmlString     .= '<div class="tab-pane p-3 fade show" id="tab_' . $j . '" role="tabpanel" aria-labelledby="tab_' . $j . '-tab"> 
                                        <div id="accordion' . $j . '" class="ugn-accordion">';

                                $accordionCount   = count($accordion);

                                for ($k=1;$k < $accordionCount; $k++) {

                                        if (!empty($accordion['acc_' . $k]['acc_title_text']) && $accordion['acc_' . $k]['show_type'] != 1) {
                                                $htmlString .= '<div class="card mb-3">
                                                                    <div class="card-header"  id="heading' . $j . '_' . $k . '">
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

                                        }  elseif(!empty($accordion['acc_' . $k]['acc_para_text']) && $accordion['acc_' . $k]['show_type'] == 1) {

                                        	$htmlString .= '<p>' . stripslashes($accordion['acc_' . $k]['acc_para_text']) 
                                                            . '</p>';


                                        }	elseif(!empty($accordion['acc_' . $k]['acc_para_text']) && $accordion['acc_' . $k]['show_type'] != 1) { 
                                                $htmlString .= '<p>' . stripslashes($accordion['acc_' . $k]['acc_para_text']) 
                                                            . '</p>';

                                               if (!empty($content['header']['header_images']) 
                                            && is_array($content['header']['header_images']) 
                                            && count($content['header']['header_images'])) {

                                            foreach ($content['header']['header_images'] as $imageSource) {
                                                   //$htmlString .= '<img class="img-fluid" '
                                                   // . 'src="\images\ugn\\' 
                                                   // . $imageSource . '">';
                                                     $htmlString .= '<div class="mb-3"><img class="img-fluid" '
                                                    . 'src="\images\ugn-banner-pan.jpg"></div>';
                                            }

                                    } elseif(!empty($content['header']['header_img_1'])) {
                                      $path = $content['header']['header_img_1'];
                                        $htmlString .= '<div class="mb-3"><img class="img-fluid" 
                                            src="'.$path.'"></div>';
                                          }



                                        }
                                }

                                $htmlString .= '</div></div>';

                                $j++;
                        }

                        echo $htmlString;
                ?>
                <div class="col-9">

                <?php  if (!empty($content['refUrls'])) { 

                  ?>

                <div class=""><h4>References</h4></div>
                <div class="p-3">
             <ul class="p-3" style="list-style-type:none;">
    

    <?php 
             $refurlCount   = count($content['refUrls']);
             $refurlValue   = $content['refUrls'];             

              for ($k=0;$k < $refurlCount; $k++) { 
         /*     $pos = strpos('[', $refurlValue[$k]['ref_url']);
              if ($pos === false) {
                $openUrl[1]        = $refurlValue[$k]['ref_url'];
              }else{*/
              $openUrl        = explode(']',$refurlValue[$k]['ref_url']);
            //  }
              ?>
      <li class="mb-3"><a href="<?php echo trim($openUrl[1]);?>" target=__blank>
        <?php echo $refurlValue[$k]['ref_url'];?></a></li>

    <?php } ?>
      <!-- <li>dolr.nic.in/dolr/downloads/pdfs/Regi</li> -->
    </ul>
  </div>
<?php } ?>
</div>
        
            </div>

          

          </div>
              
             </div>
      
        
        </div> 

      </div>
        
    </div>
  </div>
      </section>

      





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
				}, 100);
				});";

			}

		}

		echo $jScript . '});</script>';	
	}
?>
@endsection