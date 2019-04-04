<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Content\ContentRepository;
use App\Models\User\UserRepository;
use App\Models\Reffurl\ReffurlRepository;
use App\Models\Tab\TabRepository;
use App\Models\Accordion\AccordionRepository;

use App\Models\Favourites\FavouritesRepository;

use App\Models\Category\CategoryRepository;

class FrontHelper extends ValidatorBase {
    
    protected $contentRepository;
    
    protected $userRepository;
    
    protected $tabRepository;
    
    protected $accordionRepository;
    
    protected $favouriteRepository;

    protected $reffurlRepository;

    protected $categoryRepository;
    

    public function __construct() {
        parent::__construct();
        $this->contentRepository    =   new ContentRepository();
        $this->userRepository       =   new UserRepository();
        $this->tabRepository        =   new TabRepository();
        $this->accordionRepository  =   new AccordionRepository();
        $this->favouriteRepository  =   new FavouritesRepository();
        $this->reffurlRepository    =   new ReffurlRepository();
        $this->categoryRepository   =   new CategoryRepository();
    }
    
    public function getCategoryListName()
    {
        $status = 'Enabled';
               
              
        if (!empty($status)) {
            $searchArray['status']  =   $status;
        }

              
        $pageSearchArray    =   [
            'searchArray'   =>  $searchArray,
            'orderBy'       =>  ['column' => 'display_order', 'order' => 'ASC'],
            'api_call'      =>  1,
        ];
        
        $categoryDetails        =   $this->categoryRepository->getCategoryList($pageSearchArray);
      
        if (!$categoryDetails || !is_array($categoryDetails)) {
            $this->error    =   $this->categoryRepository->getError();
            return false;
        }

        $category        =   [];

        $category['categoryName']= $categoryDetails;

   
          //for($k=0; $k < 2; $k++) { 
            $searchArray['categoryIds']  =  $categoryDetails[0]['pk_page_category_id'];
            $pageSearchArray    =   [
            'searchArray'   =>  $searchArray,
            'api_call'      =>  1,
        ];

    
        
        if (count($category)) {
            return $category;
        }
        
        return false;
    }



     public function getCategoryContentList($categoryid)
    {
        $status = 'Enabled';
               
              
        if (!empty($status)) {
            $searchArray['status']  =   $status;
        }

       

            $searchArray['categoryIds']  =  $categoryid;
            $pageSearchArray    =   [
            'searchArray'   =>  $searchArray,
            'api_call'      =>  1,
        ];

         $pageDetails        =   $this->contentRepository->getPageList($pageSearchArray);
        

    
        
        if (count($pageDetails)) {
            return $pageDetails;
        }
        
        return false;
    }
    
   
}
