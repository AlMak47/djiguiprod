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

// Route::get('/mail',function () {
// 	return view('mail');
// });
Route::get('/','PageController@acceuil');
Route::get('/news','NewsController@newsHome')->name('newshome');
Route::get('/videos','VideoController@home');
Route::get('/artistes','ArtisteController@home');
Route::get('artistes/{id}','ArtisteController@artistDetails');
Route::get('/events','EventController@home');
Route::get('/about-us','PageController@aboutUs');
// Route::get('/about-us/{onglet}/{sousOnglet?}','PageController@aboutUsDetails');
Route::get('/news/{id}','NewsController@detailsNews');
Route::get('/videos/{id}','VideoController@detailsVideos');
Route::get('/about-us/{onglet}/{sousOnglet}','PageController@aboutUsGetDetails');
Route::get('search','PageController@findSearch');
Route::post('/contact-us','PageController@sendContact');

Route::get('/search','PageController@findSearch');
// admin routing
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    //
	Route::get('/admin', 'HomeController@index')->name('home');
	// Route::get('/logout','LoginController@logout')->name('logout');
	Route::get('/admin/news/getform','NewsController@getForm')->name('getnews');
	Route::post('/admin/news/postform','NewsController@postForm');
	Route::get('/admin/news/list','NewsController@listNews')->name('listnews');
	// supprimer une News
	Route::get('admin/news/confirm-delete/{id}','NewsController@confirmDelete')->name('confirmDelete');
	Route::post('/admin/news/confirm-delete/{id}','NewsController@deleteNews')->name('deletenews');
	// ajouter une videos
	Route::get('/admin/videos/getform','VideoController@getForm');
	Route::post('/admin/videos/postform','VideoController@postForm');
	// about us page details
	Route::get('/admin/about-us-settings/','HomeController@aboutUsSettings');
	Route::get('/admin/about-us-settings/add-onglet','HomeController@aboutUsOngletAdd');
	Route::post('/admin/about-us-settings/add-onglet','HomeController@postOnglet');
	Route::get('admin/about-us-settings/add-sous-onglet','HomeController@aboutUsSousOngletAdd');
	Route::post('admin/about-us-settings/add-sous-onglet','HomeController@postSousOngletAdd');
	// ajouter un artiste
	Route::get('admin/artist/add-artist','HomeController@artistGetForm');
	Route::post('admin/artist/add-artist','HomeController@addArtist');

	Route::get('admin/artist/list','HomeController@listArtist');
	Route::get('admin/artist/edit/{id}','HomeController@editArtist');
	Route::post('admin/artist/edit-artist','HomeController@postEdit');
    
});