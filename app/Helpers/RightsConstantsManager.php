<?php

namespace App\Helpers;

class RightsConstantsManager extends ValidatorBase {

    const CAN_VIEW_USER_LIST = 1;
    const CAN_VIEW_USERS_DETAILS = 2;
    const CAN_EDIT_USERS = 3;
    const CAN_VIEW_ADMIN_ROLE_LIST = 4;
    const CAN_VIEW_ADMIN_ROLE_DETAILS = 5;
    const CAN_EDIT_ADMIN_ROLE = 6;
    const CAN_CREATE_NEW_ADMIN_ROLE = 7;
    const CAN_VIEW_ADMIN_ROLE_RIGHTS_LIST = 8;
    const CAN_VIEW_ADMIN_ROLE_RIGHTS_DETAILS = 9;
    const CAN_EDIT_ADMIN_ROLE_RIGHTS = 10;
    const CAN_CREATE_NEW_ADMIN_ROLE_RIGHT = 11;
    const CAN_CREATE_AND_EDIT_CONTENT = 12;
    const CAN_VIEW_OTHER_USERS_CONTENT = 13;
    const CAN_EDIT_OTHER_USERS_CONTENT = 14;
    const CAN_VIEW_CONTENT = 15;
    const CAN_CREATE_AND_EDIT_NEW_CATEGORY = 16;
    const CAN_VIEW_AND_SEARCH_CATEGORIES = 17;

    public function __construct() {
        parent::__construct();
    }
}
