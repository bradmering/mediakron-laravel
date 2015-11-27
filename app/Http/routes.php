<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get(     '/',                         'HomeController@index');

// Protected Routes by auth and acl middleware
Route::group( [
    'namespace' => 'Authenticated',
    'middleware' => ['auth']],

    function() use ($router){
        # Dashboard Routes
        Route::get(     '/profile',                 'ProfileController@profile');
        Route::get(     '/profile/sites',           'ProfileController@sites');
        Route::get(     '/profile/edit',            'ProfileController@edit');
        Route::post(    '/profile/save',            'ProfileController@update');
    }
);



// Protected Routes by auth and acl middleware
Route::group( [
    'prefix'   => 'admin',
    'namespace'  => 'Admin',
    'middleware'  => ['auth', 'acl']],

    function() use ($router){
        # Dashboard Routes
        Route::resource(     '/site',                    'SiteController');
        Route::resource(     '/user',                    'UserController');
        Route::resource(     '/access',                  'AccessController');
        Route::resource(     '/institution',             'InstitutionController');
    }
);



Route::controllers([
    'auth'      => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController',
]);


// Protected Routes by auth and acl middleware
Route::group( [
    'namespace' => 'Site',
    'middleware' => ['mkaccess']],
    'prefix' => '{site}',

    function() use ($router){
        # Dashboard Routes
        
        Route::post(         '/upload',                 'ImageController@style');
        Route::resource(     '/user',                   'UserController');
        Route::resource(     '/item',                   'ItemController');
        Route::get(          '/cache',                  'CacheController@refresh');
        Route::resource(     '/search',                 'Site\SearchController');
    }
);

Route::get(                 '/files/{site}/{style}/{image}',      'ImageController@style');
