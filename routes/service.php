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

Route::post ('/cabsearch', 'CabsController@searchCabsParallelly');

Route::get ('/savecabaddress/{address}/{lat}/{long}', 'CabsController@saveAddress');

//Route::post ('/savecabaddress', 'CabsController@saveAddress');

Route::get ('/addresslist/{searchText}/{elementId}/{ajaxContainerId}/{latitudefieldid}/{longitudefieldid}',
            'CabsController@addressListAjax');

Route::get ('/cabsearch', 'CabsController@cabSearchForm');

Route::get ('/citylist/{searchText}/{elementId}/{ajaxContainerId}', 'HotelsController@cityListAjax');

Route::post ('/hotelsearch', 'HotelsController@searchHotelsParallelly');

Route::get ('/hotelsearch', 'HotelsController@hotelSearchForm');

Route::post ('/booknow', 'FlightsController@bookNow');

Route::get ('/flightsearch', 'FlightsController@flightSearchForm');

//Route::post ('/flightsearch', 'FlightsController@searchFlights');

Route::post ('/flightsearch', 'FlightsController@searchFlightsParallelly');

Route::get ('/airportcodelistajax/{searchText}/{elementId}/{ajaxContainerId}', 
            'FlightsController@createAirportListAjaxHtml');


