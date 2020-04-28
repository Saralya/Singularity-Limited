<?php

use Illuminate\Support\Facades\Route;

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


Route::get('contact/page','ContactController@contact')->name('write.contact');

Route::get('contact/form','ContactController@addcontact')->name('add.contact');

Route::post('store/contact','ContactController@storecontact')->name('store.contact');

Route::get('all/contact','ContactController@allcontact')->name('all.contact');

Route::get('delete/contact/{id}','ContactController@deletecontact');
Route::get('edit/contact/{id}','ContactController@editcontact');
Route::post('update/contact/{id}','ContactController@updatecontact');
Route::get('address/list/{id}','ContactController@addresslist');
Route::get('phone/list/{id}','ContactController@phonelist');