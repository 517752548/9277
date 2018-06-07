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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/word/Fire', function () {
    return "wordcrossy";
});

Route::get('/Word/Firebase', 'Word\FirebaseController@GetFriends');
Route::get('/Word/add', 'Word\FirebaseController@add');
Route::get('/Word/Firebase2', 'Auth\AuthController@GetTestString');



Route::get('/Word/Show', 'Data\DataController@Show');//add item
Route::any('/Word/ShowBuy', 'Data\DataController@ShowBuy');
Route::any('/Word/Add', 'Data\DataController@Add');
Route::any('/Word/Buy', 'Data\DataController@ShowPay');//index
Route::any('/Word/Receive', 'Data\DataController@ReceiveAll');
Route::any('/Word/Update', 'Data\DataController@UpdateItem');
Route::any('/Word/UpdateSave', 'Data\DataController@UpdateSave');
Route::any('/Word/test', 'Data\DataController@test');
Route::any('/Word/head', 'Data\DataController@head');