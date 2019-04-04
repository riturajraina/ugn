<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/msearch', 'FrontcontentController@mobileSearchForm');

Route::post('/insertcontentarray', 'ContentController@insertContentArray');

Route::get('/insertcontentarray', 'ContentController@insertContentArrayForm');

Route::post('/ugnsearch', 'FrontcontentController@search');

Route::get('/ugnsearch', 'FrontcontentController@search');

Route::get('/ugnsearcherror', 'FrontcontentController@searchErrorForm');

Route::get('/fsuccess/{message}', 'FrontMessageController@showMessage');

Route::get('/ferror/{message}', 'FrontMessageController@showMessage');

Route::get('/msg/{message}', 'FrontMessageController@showMessage');

Route::get('/uwelcome', 'FrontController@showUgnWelcome');

Route::get('/flogout', 'FrontController@logout');

Route::post('/flogin', 'FrontUserController@login');

Route::get('/flogin', 'FrontUserController@showLoginForm');

Route::post('/fregister', 'FrontUserController@register');

Route::get('/fregister', 'FrontUserController@showFrontUserRegisterForm');

Route::get('/display/{pagelinktext}', 'FrontcontentController@showPageContent');

//Route::get('/display/{pagelinktext}', 'ContentController@createContentArrayFromPageLinkText');

Route::get('/generateugnheader', 'ContentController@createUgnDynamicHeader');

Route::get('/createUgnDynamicCategory', 'ContentController@createUgnDynamicCategory');

Route::post('/editcategory', 'CategoryController@editCategory');

Route::get('/editcategory/{categoryid}', 'CategoryController@editCategoryForm');

Route::post('/createcategory', 'CategoryController@createCategory');

Route::get('/createcategory/search', 'CategoryController@showCreateCategoryForm');

Route::post('/createcategory/search', 'CategoryController@showCreateCategoryForm');

Route::get('/createcategory', 'CategoryController@showCreateCategoryForm');

Route::get('/viewcontent/{pagelinktext}', 'ContentController@showContent');

Route::get('/viewcontentarray/{pageid}', 'ContentController@createContentArray');

Route::post('/viewimages', 'ImageController@showImages');

Route::post('/uploadimage', 'ImageController@uploadImages');

Route::get('/viewimages', 'ImageController@showImages');

Route::get('/addtofavourite/{pageid}/{tabid}/{accordionid}/{status}', 'ContentController@addToFavourite');

Route::post('/editaccordion', 'ContentController@editAccordion');

Route::get('/editaccordion/{accordionid}/{tabid}/{tabtitle}/{pageid}/{pagetitle}', 'ContentController@editAccordionForm');

Route::get('/viewaccordions/{tabid}/{tabtitle}/{pageid}/{pagetitle}', 'ContentController@accordionList');

Route::post('/createaccordion', 'ContentController@createAccordion');

Route::get('/createaccordion/{tabid}/{tabtitle}/{pageid}/{pagetitle}', 'ContentController@createAccordionForm');

Route::post('/edittab', 'ContentController@editTab');

Route::get('/edittab/{pageid}/{pagetitle}/{tabid}', 'ContentController@editTabForm');

Route::get('/viewtabs/{pageid}/{pagetitle}', 'ContentController@listTabs');

Route::post('/createtab', 'ContentController@createTab');

Route::get('/createtab/{pageid}/{title}', 'ContentController@createTabForm');

Route::post('/editpage', 'ContentController@editPage');

Route::get('/editpage/{pageid}', 'ContentController@editPageForm');

Route::get('/pagelist', 'ContentController@showPageList');

Route::post('/createpage', 'ContentController@savePageContent');

Route::get('/createpage', 'ContentController@showCreatePageForm');

Route::post('/createright', 'RightsController@createRight');

Route::get('/createright', 'RightsController@showCreateRightForm');

Route::post('/editright', 'RightsController@editRight');

Route::get('/editright/{rightid}', 'RightsController@showEditRightForm');

Route::get('/viewrights', 'RightsController@showRightsList');

Route::post('/createrole', 'RoleController@createRole');

Route::get('/createrole', 'RoleController@createRoleForm');

Route::post('/editrole', 'RoleController@editRole');

Route::get('/editrole/{roldid}', 'RoleController@editRoleForm');

Route::get('/viewroles', 'RoleController@viewRoles');

Route::post('/editadmin', 'UserController@editAdmin');

Route::get('/edituser/{userid}', 'UserController@editUser');

Route::post('/viewusers', 'UserController@showUsers');

Route::get('/viewusers', 'UserController@showUsers');

//Route::get('/home', 'HomeFrontController@home'); Previous

Route::get('/home', 'HomeFrontController@home'); // Changed by ANil

Route::get('/', 'HomeController@home');

Route::get('/dashboard', 'HomeController@home');

Route::get('/executecron', 'CronController@executeCron');

Route::post('/resetpassword', 'ForgotPasswordController@resetPassword');

Route::get('/resetpassword/{userid}', 'ForgotPasswordController@showResetPasswordForm');

Route::post('verifyotp', 'ForgotPasswordController@verifyOtp');

Route::get('/verifyotp/{userid}/{mobilenumber}', 'ForgotPasswordController@showVerifyotpForm');

Route::post('/sendotp', 'ForgotPasswordController@sendForgotPasswordOtp');

Route::get('/forgotpassword', 'ForgotPasswordController@showForgotPasswordForm');

Route::get('/forgotpassword/{mobile_number}', 'ForgotPasswordController@showForgotPasswordForm');

Route::get('/resetpasswords', 'UserController@resetPasswordAllUsers');

Route::post('/api/sendsms/', 'SmsController@SendSmsPost');

Route::get('/api/sendsms/{mobile_number}/{message}', 'SmsController@SendSms');

Route::get('/success/{message}', 'ErrorController@showError');

Route::get('/goterror/{message}', 'ErrorController@showError');

Route::get('/api/state', 'ApiController@getStateList');

Route::get('/api/city/{stateid}', 'ApiController@getCityList');

Route::get('/api/city', 'ApiController@getCityList');

Route::get('/api/location/unit/{unitId}', 'ApiController@getLocationListByUnit');

Route::get('/api/location/{cityid}', 'ApiController@getLocationList');

Route::get('/api/location', 'ApiController@getLocationList');

Route::get('/captcha/{random}', 'CaptchaController@index');

Route::get('/captcha', 'CaptchaController@index');

Route::get('/categorycontent/{categoryid}', 'HomeFrontController@showCategoryContent');
Route::get('/All-Category', 'HomeFrontController@showAllCategory');

/*Route::group(
        ['middleware' => ['web']], function () {
            Route::get('login', 'UserLoginController@getUserLogin');
            Route::post('login', ['as'=>'user.auth','uses'=>'UserLoginController@userAuth']);
            Route::get('admin/login', 'AdminLoginController@getAdminLogin');
            Route::post('admin/login', ['as'=>'admin.auth','uses'=>'AdminLoginController@adminAuth']);
            Route::group(['middleware' => ['admin']], function () {
                Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
            });
        }
);*/

