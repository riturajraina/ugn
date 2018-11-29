<?php
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


use App\Models\Favourites\FavouritesRepository;

use App\Helpers\ContentHelper;

class FrontcontentController extends Controller {

    protected $contentRepository;
    
    protected $userRepository;
    
    protected $tabRepository;
    
    protected $accordionRepository;
    
    protected $favouriteRepository;
    
    protected $contentHelper;
    
    protected $searchLogRepository;
    
    protected $searchRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
        parent::__construct();
        $this->contentRepository    =   new ContentRepository();
        $this->userRepository       =   new UserRepository();
        $this->tabRepository        =   new TabRepository();
        $this->accordionRepository  =   new AccordionRepository();
        $this->favouriteRepository  =   new FavouritesRepository();
        $this->contentHelper        =   new ContentHelper();
        $this->searchLogRepository  =   new SearchLogRepository();
        $this->searchRepository     =   new SearchRepository();
        
    }
    
    public function showPageContent($pageLinkText)
    {
        $pageLinkText   = str_ireplace('_', ' ', $pageLinkText);
        
        $contentArray   =   $this->contentHelper->createContentArray($pageLinkText, 'Enabled');
        
        if (is_array($contentArray) && count($contentArray)) {
            
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
            
            $searchLogData  =   [
                'search_type'   =>  'Menu',
                'search_text'   =>  $pageLinkText,
                'fk_user_id'    =>  $userId,
                'session_id'    =>  $sessionId,
                'device_type'   =>  $deviceType,
            ];
            
            if (!$this->searchLogRepository->insertLog($searchLogData)) {
                return redirect($this->getErrorUrl($this->searchLogRepository->getError()));
            }
            
            $view   =   'display';
            
            if ($isMobileDevice) {
                $view = 'display_mob';
            }
            
            return view($view, ['content' => $contentArray]);
        }
        
        return redirect($this->getFrontErrorUrl($this->contentHelper->getError()));
    }
    
    public function search(Request $request)
    {
        $data       =   $request->all();
        
        $searchData =   [
            'status'                =>  'Enabled',
        ];
        
        if (!empty($data['searchText'])) {
            $searchData['searchText']   =   $data['searchText'];
        }
        
        if (!empty($data['ugnCategory'])) {
            $searchData['fk_page_category_id']   =   $data['ugnCategory'];
        }
        
        $searchResult   =   $this->searchRepository->search($searchData);
        
        if (!$searchResult) {
            //return redirect($this->getFrontErrorUrl($this->searchRepository->getError()));
            return redirect('/ugnsearcherror')->withInput()->withErrors([$this->searchRepository->getError()]);
        }
        
        $app = app();
            
        $sessionId  = $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]);

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
        
        $searchLogData                  =   [
                'search_type'           =>  'Free Text',
                'search_text'           =>  $data['searchText'],
                'fk_user_id'            =>  $userId,
                'session_id'            =>  $sessionId,
                'device_type'           =>  $deviceType,
                'fk_page_category_id'   =>  !empty($data['ugnCategory']) ? $data['ugnCategory'] : null,
        ];
        
        //echo '<br>SearchLogData : <pre>' . print_r($searchLogData, true) . '</pre>';exit;

        if (!$this->searchRepository->insertLog($searchLogData)) {
            return redirect('/ugnsearcherror')->withInput()->withErrors([$this->searchRepository->getError()]);
        }
        
        $viewArray  =   [
            'searchResult'  => $searchResult,
            
            'searchText'    =>  !empty($data['searchText']) ? $data['searchText'] 
                                : (!empty(Input::old('searchText')) ? Input::old('searchText') : null),
            
            'ugnCategory'   =>  !empty($data['ugnCategory']) ? $data['ugnCategory'] 
                                : (!empty(Input::old('ugnCategory')) ? Input::old('ugnCategory') : null),
        ];
        
        $view       =   'searchresult';
        
        if ($isMobileDevice) {
            
            require_once(env('UGNCATEGORYARRAYPATH'));
            
            $viewArray['categoryArray']         =  $categoryArray;
            
            $viewArray['selectOptionsManager']  =  $this->selectOptionsManager;
            
            $view                               =   'mobsearchform';
        }
        
        return view($view, $viewArray);
    }
    
    public function searchErrorForm()
    {
        $view       =   'searchresult';
        
        $viewArray  =   [
            'searchText'    =>  (!empty(Input::old('searchText')) ? Input::old('searchText') : null),
            
            'ugnCategory'   =>  (!empty(Input::old('ugnCategory')) ? Input::old('ugnCategory') : null),
        ];
        
        if ($this->checkIfMobileDevice()) {
            require_once(env('UGNCATEGORYARRAYPATH'));
            
            $viewArray['categoryArray']         =  $categoryArray;
            
            $viewArray['selectOptionsManager']  =  $this->selectOptionsManager;
            
            $view                               =   'mobsearchform';
        }
        
        return view($view, $viewArray);
    }
    
    public function mobileSearchForm()
    {
        //$selectOptionsManager   =   new SelectOptionsManager();

        require_once(env('UGNCATEGORYARRAYPATH'));

        $ugnCategory    =   !empty($ugnCategory) ? $ugnCategory 
                            : (!empty($_REQUEST['ugnCategory']) 
                                ? $_REQUEST['ugnCategory'] : null);



        $searchText     =   !empty($searchText) ? $searchText 
                            : (!empty($_REQUEST['searchText']) 
                                ? $_REQUEST['searchText'] : null);

        
        
        $viewArray  =   [
                            'categoryArray'         =>  $categoryArray, 
                            'searchText'            =>  $searchText,
                            'ugnCategory'           =>  $ugnCategory,
                            'selectOptionsManager'  =>  $this->selectOptionsManager,
                        ];
        
        return view('mobsearchform', $viewArray);
    }
}

