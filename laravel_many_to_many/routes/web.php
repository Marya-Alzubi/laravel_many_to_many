<?php

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

// 1. user creating form
Route::get('/', function (){
    return view('createUsers');
});
// 2. creating user in database
Route::post('/createusers', 'UserController@store');


// 3. role creating form && showing roles outputs
Route::get('/index', 'RoleController@index');
// 4. creating role in database & make a many to many relation with user who has id=1
Route::post('/createroles', 'RoleController@store');




