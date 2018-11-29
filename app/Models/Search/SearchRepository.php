<?php

namespace App\Models\Search;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use App\Models\Content\ContentRepository;
use App\Models\Tab\TabRepository;
use App\Models\Accordion\AccordionRepository;
//use Illuminate\Support\Facades\Auth;

class SearchRepository extends SearchLogRepository {

    protected $contentRepository;
    
    protected $tabRepository;
    
    protected $accordionRepository;
    
    public function __construct() {
        parent::__construct();
        
        $this->contentRepository    =   new ContentRepository();
        
        $this->tabRepository        =   new TabRepository();
        
        $this->accordionRepository  =   new AccordionRepository();
        
    }

    public function search($data)
    {   
        try {
            if (strtolower(env('SEARCHFROM')) == 'db') {
                
                $searchData =   $this->getSearchDataFromDatabase($data);
                
                if (!$searchData) {
                    return false;
                }
                
                return $searchData;
            }
        } catch (\Exception $ex) {
            $this->setError('perform search', $ex);
            return false;
        }
    }
    
    public function getSearchDataFromDatabase($data)
    {
        try {
            $status         =   !empty($data['status']) ? (strtolower($data['status']) == 'enabled' ? 'Enabled' : 'Disabled')
                                : null;
            
            
            $searchArray    =   [
                /*'searchArray'   =>  [
                    'categoryIds'   =>  $data['fk_page_category_id'],
                    //'searchText'    =>  $data['searchText'],
                ],*/
                'api_call'      =>  1,
            ];
            
            if (!empty($data['fk_page_category_id'])) {
                $searchArray['searchArray']['categoryIds']   =   $data['fk_page_category_id'];
            }
            
            if (!empty($status)) {
                $searchArray['searchArray']['status']   =   $status;
            }
            
            $result =   $this->contentRepository->getPageList($searchArray);
            
            if (!$result) {
                $this->error    =   $this->contentRepository->getError();
                return false;
            }
            
            $pageIds    =   [];
            
            foreach ($result as $row) {
                $pageIds[]  =   $row['pk_content_id'];
            }
            
            $searchArray    =   [
                'searchArray'   =>  [
                    'contentIds'    =>  $pageIds,
                    'searchText'    =>  $data['searchText'],
                ],
                'api_call'      =>  1,
            ];
            
            $searchPageResult   =   $this->contentRepository->getPageList($searchArray);
            
            if (!$searchPageResult) {
                if (!$this->contentRepository->checkIfNoResult()) {
                    $this->error    =   $this->contentRepository->getError();
                    return false;
                }
                $searchPageResult   =   [];
            }
            
            $searchArray    =   [
                'searchArray'   =>  [
                    'contentIds'    =>  $pageIds,
                    //'searchText'    =>  $data['searchText'],
                ],
                'api_call'      =>  1,
            ];
            
            if (!empty($status)) {
                $searchArray['searchArray']['status']   =   $status;
            }
            
            $tabSearchResult    =   $this->tabRepository->getTabList($searchArray);
            
            if (!$tabSearchResult) {
                if (!$this->tabRepository->checkIfNoResult()) {
                    $this->error    =   $this->tabRepository->getError();
                    return false;
                }
                
                $tabSearchResult    =   [];
            }
            
            $tabIds                 =   [];
            
            if (count($tabSearchResult)) {
                foreach ($tabSearchResult as $row) {
                    $tabIds[]       =   $row['pk_tab_id'];
                }
            }
            
            $searchArray            =   [
                'searchArray'       =>  [
                    'tabIds'        =>  $tabIds,
                    'searchText'    =>  $data['searchText'],
                ],
                'api_call'          =>  1,
            ];
            
            if (!empty($status)) {
                $searchArray['searchArray']['status']   =   $status;
            }
            
            $tabSearchResult        =   $this->tabRepository->getTabList($searchArray);
            
            if (!$tabSearchResult) {
                
                if (!$this->tabRepository->checkIfNoResult()) {
                    $this->error    =   $this->tabRepository->getError();
                    return false;
                }
                
                $tabSearchResult    =   [];
            }
            
            $accordionSearchResult  =   $this->accordionRepository->getAccordionList($searchArray);
            
            if (!$accordionSearchResult) {
                if (!$this->accordionRepository->checkIfNoResult()) {
                    $this->error    =   $this->accordionRepository->getError();
                    return false;
                }
                
                $accordionSearchResult  =   [];
            }
            
            $searchResult               =   [];
            
            $pageIdSearched             =   [];
            
            $pageIdsToFetch             =   [];
            
            if (count($searchPageResult)) {
                
                foreach ($searchPageResult as $row) {
                    $searchResult[$row['pk_content_id']] =      [
                                                                    'page_link_text'    =>  $row['page_link_text'], 
                                                                    'title'             =>  $row['title'],
                                                                    'paragraph'         =>  $row['paragraph'], 
                                                                ];
                }
                
                $pageIdSearched             =   array_keys($searchResult);
            }
            
            $tabIdsFetched  =   [];
            
            $tabIdsToFetch  =   [];
            
            if (count($tabSearchResult)) {
                foreach ($tabSearchResult as $row) {
                    
                    if (!in_array($row['fk_content_id'], $pageIdSearched)) {
                        $pageIdsToFetch[]   =   $row['fk_content_id'];
                    }
                    
                    $tabIdsFetched[]        =   $row['pk_tab_id'];
                }
            }
            
            if (count($accordionSearchResult)) {
                foreach ($accordionSearchResult as $row) {
                    if (!in_array($row['fk_tab_id'], $tabIdsFetched)) {
                        $tabIdsToFetch[]    =   $row['fk_tab_id'];
                    }
                }
            }
            
            if (count($tabIdsToFetch)) {
                $searchArray            =   [
                    'searchArray'       =>  [
                        'tabIds'        =>  $tabIdsToFetch,
                    ],
                    'api_call'          =>  1,
                ];

                $tabSearchResult        =   $this->tabRepository->getTabList($searchArray);
                
                foreach ($tabSearchResult as $row) {
                    if (!in_array($row['fk_content_id'], $pageIdSearched)) {
                        $pageIdsToFetch[]   =   $row['fk_content_id'];
                    }
                }
            }
            
            if (count($pageIdsToFetch)) {
                $searchArray    =   [
                    'searchArray'   =>  [
                        'contentIds'    =>  $pageIdsToFetch,
                    ],
                    'api_call'      =>  1,
                ];

                $remainingSearchPageResult   =   $this->contentRepository->getPageList($searchArray);

                if (!$remainingSearchPageResult) {
                    if (!$this->contentRepository->checkIfNoResult()) {
                        $this->error    =   $this->contentRepository->getError();
                        return false;
                    }
                    $remainingSearchPageResult   =   [];
                } else {
                    foreach ($remainingSearchPageResult as $row) {
                        $searchResult[$row['pk_content_id']] =      [
                                                                        'page_link_text'    =>  $row['page_link_text'], 
                                                                        'title'             =>  $row['title'],
                                                                        'paragraph'         =>  $row['paragraph'], 
                                                                    ];
                    }
                }
            }
            
            
            if (count($searchResult)) {
                //return $searchResult;
                /*
                 * The above will be used if we want to pass result without pagination
                 * ...Rituraj 10 Oct 2018
                 */
                
                $searchArray    =   [
                    'searchArray'   =>  [
                        'contentIds'    =>  array_keys($searchResult),
                    ],
                ];
                
                $result   =   $this->contentRepository->getPageList($searchArray);
                
                return $result;
            }
            
            $this->error    =   'No results found';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch search data from database', $ex);
            return false;
        }
    }
    
    public function getSearchDataFromSolr($data)
    {
        
    }
}

