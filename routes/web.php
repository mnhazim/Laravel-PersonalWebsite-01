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

//FOR DUMMY
Route::get('/dummy', function(){
	return view('dummy');
});

// FOR PUBLIC
Route::get('/', 'ContentController@index');

//--------- Category ---------
//Route::get('/category', 'ContentController@mstCategory'); for display all category
Route::get('/category/{code}', 'ContentController@category');
Route::get('/category/{code}/{id}', 'ContentController@postCategory');

//--------- Activity ---------
Route::get('/activity/', 'ContentController@activity');
Route::get('/activity/{id}', 'ContentController@postActivity');

//--------- Sharing ---------
Route::get('/sharing/', 'ContentController@sharing');
Route::get('/sharing/{id}', 'ContentController@postsharing');

// END FOR PUBLIC

//FOR AUTH
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//END FOR AUTH

// FOR PRIVATE
Route::get('/admin/', 'PrivateController@index');
Route::get('/admin/activity', 'PrivateController@activity');
Route::get('/admin/category', 'PrivateController@category');
Route::get('/admin/form', 'PrivateController@form');
Route::get('/admin/link', 'PrivateController@link');
Route::get('/admin/sharing', 'PrivateController@sharing');


//--------- Manage Post ---------
Route::get('/admin/post/view/{mnh_post}', 'PrivateController@viewPost' );
Route::get('/admin/post/add', 'PrivateController@addPost' );
Route::post('/admin/post/add', 'PrivateController@addPostSubmit' );
Route::get('/admin/post/edit/{mnh_post}', 'PrivateController@editPost');
Route::post('/admin/post/edit/{mnh_post}', 'PrivateController@editPostSubmit');
Route::post('/admin/post/delete/{mnh_post}', 'PrivateController@deletePost');

//--------- Manage Quote ---------
Route::get('/admin/quote', 'PrivateController@quote');
Route::post('/admin/quote/add', 'PrivateController@addQuoteSubmit');
Route::get('/admin/quote/edit/{mnh_quote}', 'PrivateController@editQuote');
Route::post('/admin/quote/edit/{mnh_quote}', 'PrivateController@editQuoteSubmit');
Route::post('/admin/quote/delete/{mnh_quote}', 'PrivateController@deleteQuote');

//--------- Manage Lookup Master ---------
Route::get('/admin/lookup', 'PrivateController@lookup');
Route::post('/admin/lookup/add', 'PrivateController@addLookup');
Route::get('/admin/lookup/edit/{mnh_lookup_mst}', 'PrivateController@editLookup');
Route::post('/admin/lookup/edit/{mnh_lookup_mst}', 'PrivateController@editLookupSubmit');
Route::post('/admin/lookup/delete/{mnh_lookup_mst}', 'PrivateController@deleteLookup');

//--------- Manage Lookup Var(child) ---------
Route::get('/admin/lookupvar/{mnh_lookup_mst}', 'PrivateController@lookupvar');
Route::post('/admin/lookupvar/add', 'PrivateController@addLookupvar');
Route::get('/admin/lookupvar/edit/{mnh_lookup_mst}', 'PrivateController@editLookupvar');
Route::post('/admin/lookupvar/edit/{mnh_lookup_var}', 'PrivateController@editLookupvarSubmit');
Route::post('/admin/lookupvar/delete/{mnh_lookup_var}', 'PrivateController@deleteLookupvar');




// END FOR PRIVATE

