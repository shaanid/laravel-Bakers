<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// category


Route::post('cakestore','categorycontroller@cakestore')->name('cakestore');
Route::post('pastrystore','categorycontroller@pastrystore')->name('pastrystore');





// authcontrol

Route::get('signup','authcontroller@signup')->name('signup');
Route::get('/','authcontroller@login')->name('login');
Route::post('authstore','authcontroller@authstore')->name('authstore');
Route::post('dologin','authcontroller@dologin')->name('dologin');

Route::get('logout','authcontroller@logout')->name('logout');

Route::post('message','usercontroller@message')->name('message');



Route::group(['middleware'=>'role'], function(){

// usercontrol

Route::get('home','usercontroller@home')->name('home');


// admincontrol

Route::get('dashboard','admincontroller@dashboard')->name('dashboard');
Route::get('msg','admincontroller@msg')->name('msg');


//category

Route::get('catcake','categorycontroller@catcake')->name('catcake');
Route::get('catpastry','categorycontroller@catpastry')->name('catpastry');
Route::get('cake','categorycontroller@cake')->name('cake');
Route::get('pastry','categorycontroller@pastry')->name('pastry');


//cart

Route::get('cart','cartcontroller@cart')->name('cart');
Route::post('cakecart/{cakeid}','cartcontroller@cakecart')->name('cakecart');
Route::post('pastrycart/{pastryid}','cartcontroller@pastrycart')->name('pastrycart');


Route::get('checkout','cartcontroller@checkout')->name('checkout');
Route::get('orders', 'cartcontroller@orders')->name('orders');

Route::get('success','cartcontroller@success')->name('success');

Route::get('customers','admincontroller@customers')->name('customers');

});


Route::get('remove/{removecart}','cartcontroller@removecart')->name('removecart');

Route::post('placeorder','cartcontroller@placeorder')->name('placeorder');

Route::get('showorder','admincontroller@showorder')->name('showorder');

