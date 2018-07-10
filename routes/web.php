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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//single blog
Route::get('article/{slug}', 'PageController@singleBlog')->name('article.show');

//single event
Route::get('event/{slug}', 'PageController@singleEvent')->name('event.show');

//single team
Route::get('team/{slug}', 'PageController@singleTeam')->name('team.show');

//send contact mail
Route::post('send', 'ContactController@send');

//membership posting
Route::post('members', 'MembershipController@store');

//membership check 
Route::post('check', 'MembershipController@check')->name('check');

//download
Route::get('download/{id}', 'PageController@download');
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
