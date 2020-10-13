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
Route::post('set-status','backend\SliderController@setStatus')->name('setStatus');
Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Site\SiteController@index')->name('index');
Route::get('/portfolio', 'Site\SiteController@portfolio')->name('portfolio');
Route::get('/gallery', 'Site\SiteController@gallery')->name('gallery');
Route::get('/faq', 'Site\SiteController@faq')->name('faq');
Route::get('/blog', 'Site\SiteController@blog')->name('blog');
Route::get('/contact', 'Site\SiteController@contact')->name('contact');
Route::get('/about', 'Site\SiteController@about')->name('about');
Route::get('/blogsingle{id}', 'Site\SiteController@blogsingle')->name('blogsingle');
Route::get('/service{id}', 'Site\SiteController@service')->name('service');
Route::get('/chesshistory{id}', 'Site\SiteController@chesshistory')->name('chesshistory');
Route::get('/portsingle{id}', 'Site\SiteController@portsingle')->name('portsingle');


//Route::get('/contact', function () {
//    return view('contact');
//});
//
//Route::get('/about', function () {
//    return view('about');
//});



Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){

    Route::delete('/sliderimga{image}','Admin\PortfolioController@sliderimga')->name('sliderimga');
    Route::post('/slideruploada','Admin\PortfolioController@slideruploada')->name('slideruploada');
    Route::delete('/sliderimg{image}','Admin\CheesController@sliderimg')->name('sliderimg');
    Route::post('/sliderupload','Admin\CheesController@sliderupload')->name('sliderupload');

    Route::resources([
        'blog' => 'Admin\BlogController',
        'slider' => 'Admin\SliderController',
        'portfolio' => 'Admin\PortfolioController',
        'gallery' => 'Admin\GalleryController',
        'faq' => 'Admin\FaqController',
        'chees' => 'Admin\CheesController',
        'category' => 'Admin\CategoryController',
        'type' => 'Admin\TypeController',
        'service' => 'Admin\ServiceController',
        'about' => 'Admin\AboutController',
        'team' => 'Admin\TeamController',
    ]);
});
