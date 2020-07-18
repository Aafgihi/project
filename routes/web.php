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


Route::get('t1', function () {
    return 'welcome';
});
Route::group(['namespace' => 'Front'] ,function(){
Route::get('s','FirstController@show');

});
/*Route::get('login', function () {
    return 'welcome';
})-> name('login'); */

Route::get('v', function(){
	return view('v1');
});
Auth::routes(['verify' => True]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');;
