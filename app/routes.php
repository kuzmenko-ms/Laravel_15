<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('/directory','DirController@addTypes');
Route::get('/','HomeController@index');
Route::get('/plot','HomeController@showPlot');
Route::get('/directory','DirController@indexd');
Route::get('/post/{id}','PostController@getPost');
Route::get('/dir/{id}','DirController@getTypes');
Route::post('/','PostController@addPost');
Route::controller('users', 'UsersController');
Route::controller('password', 'RemindersController');
Route::get('del2/{id}', [
    'as' => 'post.destroy',
    'uses' => 'PostController@destroy'
]);
Route::get('del/{id}', [
    'as' => 'dir.destroy',
    'uses' => 'DirController@destroy'
]);

Route::get('delcomp/{id}', [
    'as' => 'dir2.destroy',
    'uses' => 'ComponentController@destroy'
]);

Route::get('delcp/{id}', [
    'as' => 'dir3.destroy',
    'uses' => 'CondprobController@destroy'
]);


Route::get('delcv/{id}', [
    'as' => 'dir4.destroy',
    'uses' => 'CompvariantController@destroy'
]);

Route::get('delv/{id}', [
    'as' => 'dir5.destroy',
    'uses' => 'VariantController@destroy'
]);

Route::post('/post/update/{id}', array('as'=>'post_update', 'uses'=>'PostController@update'));
Route::get('/post/{id}/edit', array('as'=>'post_edit', 'uses'=>'PostController@edit'))->where('id', '[0-9]+');

Route::post('/dir/update/{id}', array('as'=>'dir_update', 'uses'=>'DirController@update'));
Route::get('/dir/{id}/edit', array('as'=>'dir_edit', 'uses'=>'DirController@edit'))->where('id', '[0-9]+');

Route::post('/comp/update/{id}', array('as'=>'dir_update', 'uses'=>'ComponentController@update'));
Route::get('/comp/{id}/edit', array('as'=>'dir_edit', 'uses'=>'ComponentController@edit'))->where('id', '[0-9]+');

Route::post('more', array('before'=>'csrf-ajax', 'as'=>'more', 'uses'=>'DirController@entropyForVariant'));



