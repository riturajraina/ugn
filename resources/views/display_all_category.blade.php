@extends('layouts.front')

@section('content')
<!--main container-->
<!--top-banner-container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
        <img class="img-fluid w-100" alt="ugn-banner" src="images/ugn-banner-01.jpg" />
    </div>
    

  </div>
</div>
<!--top-banner-container-end-->
<!--main container-->

<div class="container pt-5 goscm-banner">

  <!--latest-gov-container-->
  <div class="latest-gov-schemes">
    <h5 class="mb-3">Latest Government Schemes</h5>
    <div id="carouselGovernmentSchemes" class="carousel slide w-100" data-ride="carousel">
  <div class="carousel-inner pb-5">
    <div class="carousel-item active">
     <div class="row">
      <div class="col-4"> <div class="card box-effect"><img class="d-block w-100" src="images/scm-banner-01.jpg" alt="First slide"></div></div>
       <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/scm-banner-02.jpg" alt="First slide"></div></div>
        <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/scm-banner-03.jpg" alt="First slide"></div></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-4"> <div class="card box-effect"><img class="d-block w-100" src="images/scm-banner-01.jpg" alt="First slide"></div></div>
       <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/scm-banner-02.jpg" alt="First slide"></div></div>
        <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/scm-banner-03.jpg" alt="First slide"></div></div>
      </div>
    </div>
    <div class="carousel-item">
     <div class="row">
      <div class="col-4"> <div class="card box-effect"><img class="d-block w-100" src="images/scm-banner-01.jpg" alt="First slide"></div></div>
       <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/scm-banner-02.jpg" alt="First slide"></div></div>
        <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/scm-banner-03.jpg" alt="First slide"></div></div>
      </div>
    </div>
    
 
  </div>
     <a class="carousel-control-prev box-effect position-absolute" href="#carouselGovernmentSchemes" role="button" data-slide="prev">
   <i class="fa fa-angle-left fa-2x text-dark" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next box-effect position-absolute" href="#carouselGovernmentSchemes" role="button" data-slide="next">
    <i class="fa fa-angle-right fa-2x text-dark" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  <!--latest-gov-container-->
</div>
  
  <div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
        <img class="img-fluid w-100" alt="ugn-banner" src="images/ugn-banner-02.jpg" />
    </div>
    

  </div>
</div>
  <div class="container pt-5 goscm-banner">
 
  
  <!--know-govt-utilites&Procedures-->  
  
  <div class="gov-procedures-tab">
    <h5 class="mb-3">Know Govt Utilities & Procedures</h5>
    <div class="col bg-white border box-shadow">
    <div class="row">
  <div class="col-3 pl-0">
    <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
       <?php  $rowCount =1;
       $category = $content['category']; 

       foreach ($category as $categoryName=>$categoryArrayRow) {

       ?>
  <li class="nav-item">
    <a class="p-0 nav-link <?php echo ($rowCount==3 ? 'active' : '');?>" id="<?php echo $rowCount;?>_tab" data-toggle="tab" href="#tab_<?php echo $rowCount;?>" role="tab" aria-controls="certificate" aria-selected="true"><i class=""><img src="/images/ugn/category_img/<?php echo $categoryArrayRow[0];?>" alt="certificate"></i><?php echo $categoryName;?></a>
  </li>
<?php $rowCount++; }  ?>

</ul>
  </div>
  <div class="col-9 pr-0">
    <div class="tab-content p-3" id="myTabContent">

<?php 
  $contentList = $content['content_list'];
  $rowCountSecond = 1;
 // print_r($contentList);
 foreach ($contentList as $categoryName=>$categoryArrayRow1) {

  ?>

  <div class="tab-pane fade <?php echo ($rowCountSecond==3 ? 'show active' : '');?>" id="tab_<?php echo $rowCountSecond;?>" role="tabpanel" aria-labelledby="certificate_tab">
    <h5 class="text-primary text-center text-uppercase mb-3"><?php echo $categoryName;?></h5>
    
    <ul class="list-unstyled">

        <?php  $listShow = 1;
        $paraList = 0;
       // $categoryName = 'Certificates';Certificates
   // echo $cat_name =  "'$categoryName'"; die;
   //  $cat_name = 'Certificates';
       
//echo '<br>content : <pre>' . print_r($content, true) . '</pre>';exit;

        $paragraph = $content['paragraph'];
        if(isset($paragraph[$categoryName])) {

          $paragraph_content = $paragraph[$categoryName];
        }
//echo '<pre/>';

        

//$paragraph["'$categoryName'"];
//print_r($paragraph["'$categoryName'"]);
foreach ($categoryArrayRow1 as $pageLinkText) { 
if($listShow == 1 || $listShow%4 == 0) {
  ?>
    <li class="row mb-3">

    <?php } ?>

      <div class="col-4">
        <div class="card box-effect">
          <div class="card-body">
          <div class="card-title m-0">
            
            <h6><?php echo $pageLinkText;?> </h6>
            <p><?php echo $paragraph_content[$paraList];?> ...</p>
            
            
            
          </div>
        </div>
        <div class="card-footer">
              <a class="card-link justify-content-between" href="/display/<?php echo $pageLinkText;?>">Read more <i class="fa fa-angle-right fa-2x align-middle float-right"></i></a>
            </div>
        </div>
      </div>
    <?php   $listShow++;
            $paraList++; } 

    if($listShow%3 == 0) {

    ?>     
   
    </li>
  <?php } ?>
    
    
  </ul>
  <p>* Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
  
  <p class="gov-utl-banner">
        <img class="img-fluid w-100" src="images/id-card-banner.jpg" alt="Id Card">
      </p>
  </div>

<?php $rowCountSecond++; } ?>

  </div></div>

  
  <!--know-govt-utilites&Procedures end-->  
    
      
</div>
<!--main container end-->
<div class="container pt-5 searched-category-crz">
<!--most-searched-categories-->
  <div class="most-searched-category">
    <h5 class="mb-3">Most Searched Categories </h5>
    <div id="carouselSearchedCategory" class="carousel slide w-100" data-ride="carousel">
  <div class="most-searched-category-action">
    <a class="carousel-control-next box-effect position-absolute" href="#carouselSearchedCategory" role="button" data-slide="next">
    <i class="fa fa-angle-right fa-2x text-dark" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
    </a>
    <a class="carousel-control-prev box-effect position-absolute" href="#carouselSearchedCategory" role="button" data-slide="prev">
     <i class="fa fa-angle-left fa-2x text-dark" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
    </a>
  </div>  
  <div class="carousel-inner pb-5">
    <div class="carousel-item active">
     <div class="row">
      <div class="col-4"> 
      <div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-01.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div> 
      </div>
       <div class="col-4"><div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-02.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div></div>
        <div class="col-4"><div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-03.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div></div>
      </div>
    </div>
    <div class="carousel-item">
     <div class="row">
      <div class="col-4"> 
      <div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-01.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div> 
      </div>
       <div class="col-4"><div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-02.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div></div>
        <div class="col-4"><div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-03.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-4"> 
      <div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-01.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div> 
      </div>
       <div class="col-4"><div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-02.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div></div>
        <div class="col-4"><div class="card box-effect">
      <img class="card-img-top" src="images/searched-category-crz-03.jpg" alt="First slide">
    <div class="card-body">
    <h5 class="card-title">DigiLocker | Free, Secure, Flexible and ea..</h5>
    <h6 class="card-subtitle mb-2 text-muted">DBPost.com | 3 hours ago</h6>
    <p class="card-text">DigiLocker is the national Digital Locker System launched by Govt. of India. 1GB of free space in the locker to securely store resident documents and store..</p>
    <a href="#" class="btn btn-primary btn-block">Know More</a>
    </div>
    </div></div>
      </div>
    </div>
  </div>
  
</div>
  </div>
  <!--most-searched-categories end-->
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
        <img class="img-fluid w-100" alt="ugn-banner" src="images/ugn-banner-03.jpg" />
    </div>
    

  </div>
</div>


<div class="container pt-5  bottom-crz-banner">
<!--latest-gov-container-->
  <div class="latest-gov-schemes">
    <h5 class="mb-3">Latest Government Schemes</h5>
    <div id="carouselUgnbottom" class="carousel slide w-100" data-ride="carousel">
  <div class="carousel-inner pb-5">
    <div class="carousel-item active">
     <div class="row">
      <div class="col-4"> <div class="card box-effect"><img class="d-block w-100" src="images/bottom-crz-01.jpg" alt="First slide"></div></div>
       <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/bottom-crz-02.jpg" alt="First slide"></div></div>
        <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/bottom-crz-03.jpg" alt="First slide"></div></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
      <div class="col-4"> <div class="card box-effect"><img class="d-block w-100" src="images/bottom-crz-01.jpg" alt="First slide"></div></div>
       <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/bottom-crz-02.jpg" alt="First slide"></div></div>
        <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/bottom-crz-03.jpg" alt="First slide"></div></div>
      </div>
    </div>
    <div class="carousel-item">
     <div class="row">
      <div class="col-4"> <div class="card box-effect"><img class="d-block w-100" src="images/bottom-crz-01.jpg" alt="First slide"></div></div>
       <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/bottom-crz-02.jpg" alt="First slide"></div></div>
        <div class="col-4"><div class="card box-effect"> <img class="d-block w-100" src="images/bottom-crz-03.jpg" alt="First slide"></div></div>
      </div>
    </div>
    
 
  </div>
     <a class="carousel-control-prev box-effect position-absolute" href="#carouselUgnbottom" role="button" data-slide="prev">
   <i class="fa fa-angle-left fa-2x text-dark" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next box-effect position-absolute" href="#carouselUgnbottom" role="button" data-slide="next">
    <i class="fa fa-angle-right fa-2x text-dark" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  <!--latest-gov-container-->
</div>

@endsection