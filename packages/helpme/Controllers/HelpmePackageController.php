<?php

namespace Helpme\Controllers;

use Helpme\Config\HelpmeConfig;
use App\Http\Controllers\Controller;
use Helpme\Models\City\CityRepository;
use Helpme\Models\Address\AddressRepository;
use Helpme\Models\Category\CategoryRepository;
use Helpme\Models\Country\CountryRepository;
use Helpme\Models\Mobile\MobileRepository;
use Helpme\Models\State\StateRepository;
use Helpme\Models\Task\TaskRepository;
use Helpme\Models\Bank\BankRepository;
use Helpme\Models\User\UserRepository;

class HelpmePackageController extends Controller {

    protected $cityRepository;
    protected $addressRepository;
    protected $categoryRepository;
    //protected $countryRepository;
    protected $mobileRepository;
    protected $stateRepository;
    protected $taskRepository;
    protected $separator;
    protected $error;

    public function __construct() {
        $this->cityRepository = new CityRepository();
        $this->stateRepository = new StateRepository();
        $this->categoryRepository = new CategoryRepository();
        $this->addressRepository = new AddressRepository();
        $this->mobileRepository = new MobileRepository();
		$this->userRepository	=	new UserRepository();

        $this->bankRepository = new BankRepository();

        /* $this->separator            = env('_SEPARATOR_');

          echo '<br>separator : ' . env('_SEPARATOR_'); */

        $this->separator = HelpmeConfig::get('SEPARATOR');
        $this->error = '';
    }

    public function getSeparator() {
        return $this->separator;
    }

    public function getError() {
        return $this->error;
    }

    /**
     * 
     *
     * @return Response
     */
    public function getData($data) {
        $returnData = array();

        if (empty($data['idOrValue'])) {
            $data['idOrValue'] = null;
        }

        try {
            switch (strtolower($data['type'])) {
                case 'city':
                    $returnData = $this->cityRepository->getCityList($data['idOrValue']);
                    break;

                case 'cityid':
                    $returnData = $this->cityRepository->getCityId($data['idOrValue']);
                    break;

                case 'state':
                    $returnData = $this->stateRepository->getStateList($data['idOrValue']);
                    break;

                case 'stateid':
                    $returnData = $this->stateRepository->getStateId($data['idOrValue']);
                    break;

                case 'bank':
                    $returnData = $this->bankRepository->getbankList($data['idOrValue']);
                    break;

                /* case 'category':
                  $returnData = $this->categoryRepository->getCategoryList($data['idOrValue']);
                  break;

                  case 'categoryid':
                  $returnData = $this->categoryRepository->getCategoryId($data['idOrValue']);
                  break;

                  case 'mobile':
                  $returnData = $this->mobileRepository->getMobileList($data['idOrValue']);
                  break;
                  TBD if required */

                case 'mobileid':
                    $returnData = $this->mobileRepository->getMobileId(array('mobile_number' => $data['idOrValue']));
                    break;
                
                case 'mobile':
                    $returnData = $this->mobileRepository->getMobileNumber($data['idOrValue']);
                    break;

                case 'address':
                    $returnData = $this->addressRepository->getAddress($data['idOrValue']);
                    break;

                case 'addressid':
                    $addressArray = explode($this->separator, $data['idOrValue']);
                    $returnData = $this->addressRepository->getAddressId(array('address_line_1' => $addressArray['0']
                            , 'address_line_2' => $addressArray['1']));
                    break;

                case 'user':
                    $returnData = $this->userRepository->getUserList($data['idOrValue']);
                    break;
            }
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
        }

        return $returnData;
    }
}
