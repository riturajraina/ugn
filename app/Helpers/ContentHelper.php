<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Content\ContentRepository;
use App\Models\User\UserRepository;
use App\Models\Tab\TabRepository;
use App\Models\Accordion\AccordionRepository;

use App\Models\Favourites\FavouritesRepository;

class ContentHelper extends ValidatorBase {
    
    protected $contentRepository;
    
    protected $userRepository;
    
    protected $tabRepository;
    
    protected $accordionRepository;
    
    protected $favouriteRepository;
    

    public function __construct() {
        parent::__construct();
        $this->contentRepository    =   new ContentRepository();
        $this->userRepository       =   new UserRepository();
        $this->tabRepository        =   new TabRepository();
        $this->accordionRepository  =   new AccordionRepository();
        $this->favouriteRepository  =   new FavouritesRepository();
    }
    
    public function createContentArray($pageLinkText, $status=null)
    {
        $status =   strtolower($status) == 'enabled' ? 'Enabled' : null;
        
        $searchArray        =   ['page_link_text' => $pageLinkText];
        
        if (!empty($status)) {
            $searchArray['status']  =   $status;
        }
        
        $pageSearchArray    =   [
            'searchArray'   =>  $searchArray,
            'api_call'      =>  1,
        ];
        
        $pageDetails        =   $this->contentRepository->getPageList($pageSearchArray);
        
        if (!$pageDetails || !is_array($pageDetails)) {
            $this->error    =   $this->contentRepository->getError();
            return false;
        }
        
        if (count($pageDetails)) {
            
            $pageDetails    =   $pageDetails['0'];
            
            $pageId         =   $pageDetails['pk_content_id'];
            
            $content        =   [];
            
            $favouriteCount =   1;
            
            $content["header"] ["header_title"] = str_ireplace('\"', '"', $pageDetails['title']);
            
            $content['header'] ['header_para']  = str_ireplace('\"', '"', $pageDetails['paragraph']);
            
            
            if (!empty($pageDetails['contentImages'])) {
                
                 $contentImages =  stristr($pageDetails['contentImages'], ',') ? explode(',', $pageDetails['contentImages']) 
                                   : [$pageDetails['contentImages']];
                 
                 if (count($contentImages)) {
                     $headerImages  =   [];
                     foreach ($contentImages as $image) {
                         $headerImages[] =  $image;
                     }
                     
                     $content['header'] ['header_images']= $headerImages;
                 }
            }
            
            if (!empty($pageDetails['contentImages_Mob'])) {
                $contentImages =  stristr($pageDetails['contentImages_Mob'], ',') ? explode(',', $pageDetails['contentImages_Mob']) 
                                   : [$pageDetails['contentImages_Mob']];
                 
                 if (count($contentImages)) {
                     $headerImages  =   [];
                     foreach ($contentImages as $image) {
                         $headerImages[] =  $image;
                     }
                     
                     $content['header'] ['header_images_mob']= $headerImages;
                 }
            }
            
            $searchArrayInner   =   ['fk_content_id' => $pageId];
        
            if (!empty($status)) {
                $searchArrayInner['status']  =   $status;
            }
            
            $searchArray        =   [
                'searchArray'   =>  $searchArrayInner,
                'api_call'      =>  1,
            ];
            
            $tabDetails     =   $this->tabRepository->getTabList($searchArray);
            
            if (!$tabDetails || !is_array($tabDetails)) {
                $this->error    =   $this->tabRepository->getError();
                return false;
            }
            
            if (count($tabDetails)) {
                $i = 1;
                foreach ($tabDetails as $row) {
                    $content['Tabs']['tab_' . $i ]['title']  = $row['title'];
                    
                    $searchArrayInner   =   ['fk_tab_id' => $row['pk_tab_id']];
        
                    if (!empty($status)) {
                        $searchArrayInner['status']  =   $status;
                    }
                    
                    $searchArray        =   [
                        'searchArray'   =>  $searchArrayInner,
                        'api_call'      =>  1,
                    ];
                    
                    $accordionDetails   =   $this->accordionRepository->getAccordionList($searchArray);
                    
                    /*if (!$accordionDetails || !is_array($accordionDetails)) {
                        $this->error    =   $this->accordionRepository->getError();
                        return false;
                    }*/
                    
                    if (count($accordionDetails) && is_array($accordionDetails)) {
                        
                        $j = 1;
                        
                        foreach ($accordionDetails as $accRow) {
                            $content['Tabs']['tab_' . $i]['acc_' . $j ]['acc_title_text'] = str_ireplace('\"', '"', 
                                    $accRow['title']);
                            
                            $content['Tabs']['tab_' . $i]['acc_' . $j]['acc_para_text'] = str_ireplace('\"', '"', 
                                    $accRow['paragraph']);
                            
                            $searchArrayInner   =   [
                                    'fk_tab_id'         =>  $accRow['fk_tab_id'], 
                                    'fk_accordion_id'   =>  $accRow['pk_accordion_id'],
                                    'fk_content_id'     =>  $pageId,
                                    'status'            =>  'Enabled'
                            ];
        
                            if (!empty($status)) {
                                $searchArrayInner['status']  =   $status;
                            }
                            
                            $searchArray        =   [
                                
                                'searchArray'   =>  $searchArrayInner,
                                
                                'api_call'      =>  1,
                            ];
                            
                            $favouriteDetails   =   $this->favouriteRepository->getFavouritesList($searchArray);
                            
                            if (count($favouriteDetails) && is_array($favouriteDetails)) {
                                
                                $favTextArray   =   explode(' ', str_ireplace('\"', '"', substr(strip_tags($accRow['title']),
                                                            0, 41)));
                                
                                $content['Favourites']['fav_' . $favouriteCount]['fav' . $favouriteCount . '_qn_1']  = 
                                        str_ireplace('\"', '"', substr(strip_tags($accRow['title']), 0, 41)) 
                                        . "...";
                                
                                $content['Favourites']['fav_' . $favouriteCount]['fav' . $favouriteCount . '_text_1'] = 
                                        str_ireplace('\"', '"', substr(strip_tags($accRow['paragraph']), 0, 65)) . "...";

                                $content['Favourites']['fav_' . $favouriteCount]['fav' . $favouriteCount . '_tab_acc_link'] = 
                                        'tab' . $i . ',acc_' . $j;
                                
                                $favouriteCount++;
                            }
                            
                            $j++;
                        }
                    }
                    
                    $i++;
                }
            }
        }
        
        if (count($content)) {
            return $content;
        }
        
        return false;
    }
    
    public function insertDataFromContentArray($contentData)
    {
        try {
            
            $contentData['content'] =   str_ireplace('<?php', '', $contentData['content']);
        
            $contentData['content'] =   str_ireplace('?>', '', $contentData['content']);

            eval($contentData['content']);

            $adminUserId =   Auth::user()->pk_admin_user_id;

            $data['fk_page_category_id']        =   $contentData['categoryId'];

            $data['display_order']              =   $contentData['display_order'];

            $data['page_link_text']             =   $contentData['pageLinkText'];

            $data['title']                      =   $content["header"] ["header_title"];

            $data['paragraph']                  =   $content['header'] ['header_para'];

            $data['contentImages']              =   !empty($content['header'] ['header_images']) ? 
                                                    $content['header'] ['header_images'] : 
                                                    (
                                                        !empty($content['header']['header_img_1']) ? 
                                                        $content['header']['header_img_1'] : null
                                                    );

            $data['status']                     =   'Disabled';

            $data['fk_admin_user_id']           =   $adminUserId;

            $pageId                             =   $this->contentRepository->savePageData($data);

            if (!$pageId) {
                $this->error                    =   $this->contentRepository->getError();
                return false;
            }


            unset($data);

            $tabArray                           =   $content['Tabs'];

            $favourites                         =   !empty($content['Favourites']) ? $content['Favourites'] : [];

            $favouritesArray                    =   [];


            $favCounter                         =   1;

            foreach ($favourites as $fav) {
                $favouriteString                =   str_ireplace('tab', '', str_ireplace('acc_', '', 
                                                    $fav['fav' . $favCounter . '_tab_acc_link']));

                $favStringArray                 =   explode(',', $favouriteString);

                $favouritesArray[$favStringArray['0']][]    =   $favStringArray['1'];

                $favCounter++;
            }

            $tabCounter =   1;

            foreach ($tabArray as $tab) {

                $accordionCounter = 1;

                if (!empty($tab['title'])) {

                    $data                       =   ['fk_content_id' => $pageId];

                    $data['title']              =   $tab['title'];

                    $data['fk_admin_user_id']   =   $adminUserId;

                    $data['status']             =   'Enabled';

                    $data['paragraph']          =   null;

                    $this->tabRepository        =   new TabRepository();
                    /**
                     * As running inside a loop, hence need to create a new object
                     * inside loop to avoid data permeability...Rituraj 12 Oct 2018
                     */

                    $tabId  =   $this->tabRepository->saveTabData($data);

                    if (!$tabId) {
                        $this->error    =   $this->tabRepository->getError();
                        return false;
                    }

                    $tabCount   =   count($tab);

                    for ($i=1;$i<=$tabCount;$i++) {
                        $data                       =  ['fk_tab_id' => $tabId];

                        $data['title']              =   !empty($tab['acc_' . $i]['acc_title_text']) ? 
                                                        $tab['acc_' . $i]['acc_title_text'] : null;

                        $data['paragraph']          =   !empty($tab['acc_' . $i]['acc_para_text']) ? 
                                                        $tab['acc_' . $i]['acc_para_text'] : null;

                        $data['fk_admin_user_id']   =   $adminUserId;

                        $data['status']             =   'Enabled';

                        if (!empty($data['title']) || !empty($data['paragraph'])) {
                            $this->accordionRepository  =   new AccordionRepository();

                            $accordionId                =   $this->accordionRepository->saveAccordion($data);

                            if (!$accordionId) {
                                $this->error            =   $this->accordionRepository->getError();
                                return false;
                            }

                            if (!empty($favouritesArray)) {
                                if (in_array($tabCounter, array_keys($favouritesArray))) {
                                    if (in_array($accordionCounter, $favouritesArray[$tabCounter])) {

                                        $this->favouriteRepository          =   new FavouritesRepository();

                                        $favDataToSave                      =   [];

                                        $favDataToSave['fk_tab_id']         =   $tabId;

                                        $favDataToSave['fk_accordion_id']   =   $accordionId;

                                        $favDataToSave['fk_content_id']     =   $pageId;

                                        $favDataToSave['fk_admin_user_id']  =   $adminUserId;

                                        $favDataToSave['status']            =   'Enabled';

                                        if (!$this->favouriteRepository->setFavourite($favDataToSave)) {
                                            $this->error    =   $this->favouriteRepository->getError();
                                            return false;
                                        }
                                    }
                                }
                            }
                        }

                        $accordionCounter++;
                    }

                }

                $tabCounter++;
            }

            return true;
            
        } catch (\Exception $ex) {
            $this->error    =   $ex->getMessage();
            return false;
        }
        
    }
}
