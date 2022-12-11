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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//gest
Route::get('/', 'GuestController@home');
Route::get('/register', 'GuestController@register');
Route::get('/produit/cat/{id}', 'GuestController@listprod');
Route::get('/guest/qsn', 'GuestController@qsn');
Route::get('/guest/contact', 'GuestController@contact');
Route::get('/produit/detaille/{id}', 'GuestController@produit_detaille');
Route::Post('/produit/search', 'GuestController@search');
Route::Post('/add_user', 'GuestController@adduser');

//client
Route::get('/client/dashboard', 'ClientController@dashboard')->middleware('auth');;
Route::get('/client/profil', 'ClientController@profil')->middleware('auth');
Route::Post('/client/profil/update', 'ClientController@profilupdate')->middleware('auth');
Route::Post('/client/order/addcommande', 'CommandeController@addcommande')->middleware('auth');
Route::get('/client/order/supplignecommande/{id}', 'CommandeController@supplignecommande')->middleware('auth');
Route::get('/client/cart', 'ClientController@cart')->middleware('auth');


//admin
Route::get('/admin/dashboard', 'AdminController@dashboard')->middleware('auth','admin');
Route::get('/admin/profil', 'AdminController@profil')->middleware('auth','admin');
Route::get('/admin/list', 'AdminController@list')->middleware('auth','admin');
Route::get('/admin/Ajout_user', 'AdminController@Ajout_user')->middleware('auth','admin');
Route::get('/admin/mod_user/{id}', 'AdminController@mod_user')->middleware('auth','admin');
Route::get('/admin/delete_user/{id}', 'AdminController@delete_user')->middleware('auth','admin');
Route::Post('/user/Add', 'AdminController@userAdd')->middleware('auth','admin');
Route::Post('/user/update', 'AdminController@userupdate')->middleware('auth','admin');
Route::Post('/admin/profil/update', 'AdminController@profilupdate')->middleware('auth','admin');
Route::get('/admin/categories/liste', 'CategoryController@listcat')->middleware('auth','admin');
Route::get('/admin/categories/Ajouter', 'CategoryController@Ajoutcat')->middleware('auth','admin');
Route::Post('/catégorie/Add', 'CategoryController@Addcat')->middleware('auth','admin');
Route::get('/admin/categories/delete/{id}', 'CategoryController@deletecat')->middleware('auth','admin');
Route::get('/admin/categories/modifier/{id}', 'CategoryController@modifierecat')->middleware('auth','admin');
Route::Post('/catégorie/update', 'CategoryController@updatecat')->middleware('auth','admin');
Route::get('/admin/produits/liste', 'ProduitController@listprod')->middleware('auth','admin');
Route::get('/admin/produits/Ajoutprod', 'ProduitController@Ajoutprod')->middleware('auth','admin');
Route::Post('/produit/Add', 'ProduitController@Addprod')->middleware('auth','admin');
Route::get('/admin/produits/delete/{id}', 'ProduitController@deleteprod')->middleware('auth','admin');
Route::get('/admin/produits/modifier/{id}', 'ProduitController@modifierprod')->middleware('auth','admin');
Route::Post('/produit/update', 'ProduitController@updateprod')->middleware('auth','admin');



