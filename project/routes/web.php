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

Route::get('/', function () {
    return view('welcome');
});
/* 
delivery tracking
*/
Route::get('listdelivery','DeliveryController@index');
//Route::post('file','Filecontroller@doUpload');
/* 
background javascript
*/
Route::get('backgroungjs', function () {
    return view('backgroung_Js');
});
/* 
test send file
*/
Route::get('file','FileController@index');
Route::post('file','Filecontroller@doUpload');
/* 
test db dhtmlx
*/
Route::get('account','AccountController@index');
Route::post('account','AccountController@doAdd');
/* 
/* 
test submit form
*/
Route::get('submitform','SubmitformController@index');
/*
test middleware
*/
// Route::get(‘role’,[

//     "middleware" => 
//     "Role:editor",
 
//     "uses" => "TestMiddlewareController@index",
 
//  ]);
/* 
test middleware
*/