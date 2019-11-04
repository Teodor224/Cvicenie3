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

Route::get('/show/{id}',[
    'as'=>'show','uses'=>'CRUDController@showAction'
]);

Route::post('/insert',[
    'as'=>'insert','uses'=>'CRUDController@insertAction'
]);

Route::post('/update/{id}',[
    'as'=>'update','uses'=>'CRUDController@updateAction'
]);

Route::post('/delete/{id}',[
    'as'=>'delete','uses'=>'CRUDController@deleteAction'
]);

Route::get('/showAll',[
    'as'=>'showAll','uses'=>'CRUDController@showAllAction'
]);


Route::get('/getAddUserForm',[
    'as' => 'getAddUserForm','uses' => 'CRUDController@getAddUserForm'
]);

Route::get('/showDeleteAction/{id}',[
    'as'=>'showDeleteAction','uses'=>'CRUDController@showDeleteAction'
]);

