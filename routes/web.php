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

// message

Route::post('message','usercontroller@message')->name('message');

// middleware for admin starts

Route::group(['middleware'=>'role'], function(){

// admincontrol

Route::get('dashboard','admincontroller@dashboard')->name('dashboard');
Route::get('msg','admincontroller@msg')->name('msg');


//category

Route::get('catcake','categorycontroller@catcake')->name('catcake');
Route::get('catpastry','categorycontroller@catpastry')->name('catpastry');


// show products in admin panel

Route::get('product1','admincontroller@product1')->name('product1');

Route::get('product2','admincontroller@product2')->name('product2');

// show orders

Route::get('showorder','admincontroller@showorder')->name('showorder');





Route::get('customers','admincontroller@customers')->name('customers');

});

// middleware for admin ends





// middleware for user starts

Route::group(['middleware'=>'user'], function(){

// usercontrol

Route::get('home','usercontroller@home')->name('home');

// category for users cake and pastry

Route::get('cake','categorycontroller@cake')->name('cake');
Route::get('pastry','categorycontroller@pastry')->name('pastry');


//cart

Route::get('cart','cartcontroller@cart')->name('cart');
Route::post('cakecart/{cakeid}','cartcontroller@cakecart')->name('cakecart');
Route::post('pastrycart/{pastryid}','cartcontroller@pastrycart')->name('pastrycart');
Route::get('checkout','cartcontroller@checkout')->name('checkout');
Route::get('orders', 'cartcontroller@orders')->name('orders');

Route::get('success','cartcontroller@success')->name('success');


});


// remove from cart
Route::get('removecart/{id}','cartcontroller@removecart')->name('removecart');

// orders

Route::post('placeorder','cartcontroller@placeorder')->name('placeorder');


// remove products for admin

Route::get('removepastry/{pastryid}','admincontroller@removepastry')->name('removepastry');
Route::get('removecake/{cakeid}','admincontroller@removecake')->name('removecake');



