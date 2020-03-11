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

Route::get('/', 'HomepageController@index');
Route::get('/datasets', 'DatasetController@index');
Route::get('/dataset/create', 'DatasetController@create');
Route::post('/datasets', 'DatasetController@store');
Route::get('/download/{file}', 'DatasetController@download');
Route::get('/questions', 'QuestionController@index');
Route::get('/question/create', 'QuestionController@create');
Route::post('/question/store', 'QuestionController@store');
Route::get('/question/{question}', 'QuestionController@show');
Route::get('/question/{question}', 'QuestionController@show');
Route::get('/location', 'LocationController@show');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/edit/{user}/create', 'EditController@create');
Route::post('/edit/store', 'EditController@store');
//Route::get('/profile/{user}/updated', 'ProfileController@index');


// Route::get('/user/{user}',  ['as' => 'user.edit', 'uses' => 'UserController@edit']);
// Route::patch('/profile/{user}/update',  ['as' => 'user.update', 'uses' => 'UserController@update']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});
