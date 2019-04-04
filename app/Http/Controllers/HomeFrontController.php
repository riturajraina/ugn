<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Content\ContentRepository;
use App\Models\User\UserRepository;
use App\Models\Tab\TabRepository;
use App\Models\Accordion\AccordionRepository;
use App\Models\Search\SearchLogRepository;
use App\Models\Search\SearchRepository;
use App\Models\Category\CategoryRepository;

use App\Models\Favourites\FavouritesRepository;

use App\Helpers\ContentHelper;

use App\Helpers\FrontHelper;


class HomeFrontController extends Controller {

	 
	protected $contentRepository;
    
    protected $userRepository;
    
    protected $tabRepository;
    
    protected $accordionRepository;
    
    protected $favouriteRepository;
    
    protected $contentHelper;
    
    protected $searchLogRepository;

    protected $categoryRepository;

      
    protected $searchRepository;

    protected $frontHelper;

    public function __construct() {
        parent::__construct();
       // $this->middleware('auth');
        
        $this->userRepository       =   new UserRepository();
        $this->tabRepository        =   new TabRepository();
        $this->accordionRepository  =   new AccordionRepository();
        $this->favouriteRepository  =   new FavouritesRepository();
        $this->contentHelper        =   new ContentHelper();
        $this->frontHelper          =   new FrontHelper();
        $this->searchLogRepository  =   new SearchLogRepository();
        $this->categoryRepository       =   new CategoryRepository();
        $this->searchRepository     =   new SearchRepository();
        $this->contentRepository        =   new ContentRepository();
    }

    public function home() {    	 

    	$categoryArray   =   $this->frontHelper->getCategoryListName();


    	  $app = app();
            
            $sessionId      =   null;
            
            if (!empty($_COOKIE[$app['config']['session.cookie']])) {
                $sessionId  =   $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]);
            }
            
            $userId     =   null;
            
            if (!empty(session('userDetails')))
            {
                $userDetails    =   session('userDetails');
                //echo '<br>UserDetails : <pre>' . print_r($userDetails, true) . '</pre>';exit;
                $userId         =   $userDetails['0']['pk_user_id'];
            }
            
            $deviceType         =   'Desktop';
        
            $isMobileDevice     =   $this->checkIfMobileDevice();

            if ($isMobileDevice) {
                $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                    : ($this->deviceDetector->isTablet() ? 'Tablet' : 'Unknown mobile device');
            }


//$frontData = array();

            
           /* $searchLogData  =   [
                'search_type'   =>  'Menu',
                'search_text'   =>  $pageLinkText,
                'fk_user_id'    =>  $userId,
                'session_id'    =>  $sessionId,
                'device_type'   =>  $deviceType,
            ];
            
            if (!$this->searchLogRepository->insertLog($searchLogData)) {
                return redirect($this->getErrorUrl($this->searchLogRepository->getError()));
            }*/
            
            $view   =   'display_front';
            
            if ($isMobileDevice) {
                $view = 'mobile_views/display_front_mob';
            }



          return view($view, ['content' => $categoryArray]);
    }


    public function showCategoryContent($categoryid) {         

        $contentArray   =   $this->frontHelper->getCategoryContentList($categoryid);

          $app = app();
            
            $sessionId      =   null;
            
            if (!empty($_COOKIE[$app['config']['session.cookie']])) {
                $sessionId  =   $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]);
            }
            
            $userId     =   null;
            
            if (!empty(session('userDetails')))
            {
                $userDetails    =   session('userDetails');
                //echo '<br>UserDetails : <pre>' . print_r($userDetails, true) . '</pre>';exit;
                $userId         =   $userDetails['0']['pk_user_id'];
            }
            
            $deviceType         =   'Desktop';
        
            $isMobileDevice     =   $this->checkIfMobileDevice();

            if ($isMobileDevice) {
                $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                    : ($this->deviceDetector->isTablet() ? 'Tablet' : 'Unknown mobile device');
            }


//$frontData = array();

            
           /* $searchLogData  =   [
                'search_type'   =>  'Menu',
                'search_text'   =>  $pageLinkText,
                'fk_user_id'    =>  $userId,
                'session_id'    =>  $sessionId,
                'device_type'   =>  $deviceType,
            ];
            
            if (!$this->searchLogRepository->insertLog($searchLogData)) {
                return redirect($this->getErrorUrl($this->searchLogRepository->getError()));
            }*/
            
            $view   =   'display_front';
            
            if ($isMobileDevice) {
                $view = 'mobile_views/contentlist_mob';
            }



          return view($view, ['content' => $contentArray]);
    }


     public function showAllCategory() { 


      $categorySearchArray    =   [
            'searchArray'       =>  [
                'status'        =>  'Enabled',
            ],
            'orderBy'           =>  ['column' => 'display_order', 'order' => 'ASC'],
            'api_call'          =>  1,
        ];
                       

        $categoryList   =   $this->categoryRepository->getCategoryList($categorySearchArray);

        if (!$categoryList) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }

        $categoryArray  =   [];

         if (count($categoryList)) {
            
            foreach ($categoryList as $row) {
                $categoryArray[$row['pk_page_category_id']]         =   $row['category_name'];
                $headerArray[$row['category_name']] []      =  $row['category_image'];
                $imageArray[$row['category_image']]  =   [];

                 $headerContentArray[$row['category_name']]  =   [];
                /*
                 * This is to retain the display order of categories
                 * otherwise the categories display order will have no effect
                 * and the page display order will decide which category is
                 * displayed first...Rituraj 10 Sep 2018
                 */
            }
        }


            $categoryListArray['category'] = $headerArray;
          

          
            $pageSearchArray    =   [
                'searchArray'   =>  ['categoryIds' => array_keys($categoryArray), 'status' => 'Enabled'],
                'orderBy'       =>  ['column' => 'display_order', 'order' => 'ASC'],
                'api_call'      =>  1,
            ];

            

            $pageList           =   $this->contentRepository->getPageList($pageSearchArray);

          //  print_r($pageList); die;
            
            if (!$pageList) {
                return redirect($this->getErrorUrl($this->contentRepository->getError()));
            }
            
            if (count($pageList)) {
                foreach ($pageList as $row) {
                    $headerArray[$categoryArray[$row['fk_page_category_id']]][]  =   $row['page_link_text'];

                    $paragraphArray[$categoryArray[$row['fk_page_category_id']]][]  =   (!empty($row['paragraph']) ? substr(strip_tags($row['paragraph']),0,'150') : 'Content not found');

                    $headerContentArray[$categoryArray[$row['fk_page_category_id']]][]  =   $row['page_link_text'];
                }
            }

            $categoryListArray['content_list'] = $headerContentArray;
            $categoryListArray['paragraph'] = $paragraphArray;

          $app = app();
            
            $sessionId      =   null;
            
            if (!empty($_COOKIE[$app['config']['session.cookie']])) {
                $sessionId  =   $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]);
            }
            
            $userId     =   null;
            
            if (!empty(session('userDetails')))
            {
                $userDetails    =   session('userDetails');
                //echo '<br>UserDetails : <pre>' . print_r($userDetails, true) . '</pre>';exit;
                $userId         =   $userDetails['0']['pk_user_id'];
            }
            
            $deviceType         =   'Desktop';
        
            $isMobileDevice     =   $this->checkIfMobileDevice();

            if ($isMobileDevice) {
                $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                    : ($this->deviceDetector->isTablet() ? 'Tablet' : 'Unknown mobile device');

             return redirect('/home');
            }

            
            $view   =   'display_all_category';

            $categoryArray = array();
            
            return view($view, ['content' => $categoryListArray]);
    }
}


