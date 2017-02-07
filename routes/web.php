<?php

use SIPCOFIP\Municipality;
use SIPCOFIP\Parish;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function() {

    Route::resource('admin/project-tab', 'Admin\\ProjectTabController');
    Route::resource('admin/role', 'Admin\\RoleController');
    Route::resource('admin/community-council', 'Admin\\CommunityCouncilController');

    Route::resource('admin/person', 'Admin\\PersonController');
    Route::resource('admin/country', 'Admin\\CountryController');
    Route::resource('admin/state', 'Admin\\StateController');

    Route::resource('admin/municipality', 'Admin\\MunicipalityController');
    Route::resource('admin/sector', 'Admin\\SectorController');
    Route::resource('admin/parish', 'Admin\\ParishController');

    Route::get('municipalities/{state_id}', function ($state_id) {
        $municipalities = Municipality::where('state_id', $state_id)
            ->select('id as value', 'municipality as text')
            ->orderBy('municipality', 'ASC')
            ->get();
        return $municipalities;
    });

    Route::get('parish/{municipality_id}', function ($municipality_id) {
        $parish = Parish::where('municipality_id', $municipality_id)
            ->select('id as value', 'parish as text')
            ->orderBy('parish', 'ASC')
            ->get();
        return $parish;
    });

});




