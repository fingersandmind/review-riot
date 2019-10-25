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

// Route::get('/', function () {
//     return view('pages.frontend.homepage.index');
// })->name('homepage');

// Route::get('about-us', function () {
//     return view('pages.frontend.about');
// })->name('about-us');

Route::get('contact', function () {
    return view('pages.frontend.contact-us');
})->name('contact');

Route::get('listing', function () {
    return view('pages.frontend.listing.index');
})->name('listing');




// Route::get('listing', function() {
// 	return view('pages.listing');
// });

Route::post('subscribe', 'SubscribeController@store')->name('subscribe');

// Frontend

Route::get('article/{article}', 'Frontend\Article\ArticlesController@show')->name('article.show');
Route::get('/', 'Frontend\Pages\PageController@index')->name('homepage');
Route::resource('lists', 'Frontend\Listing\ListingsController');

//Show Category Articles
Route::get('/category/{category}', 'Frontend\Article\ArticlesController@show_category_articles')->name('article.show-category');
// Article Query
Route::get('/search', 'Frontend\Article\ArticlesController@search')->name('search');



// BACKEND

Route::group(['prefix' => 'admin', 'middleware' =>  ['auth','admin']], function(){
    Route::get('/index', function(){
        return view('pages.backend.dashboard.index');
    })->name('admin');

    Route::resource('articles','Backend\Article\ArticlesController');
    Route::resource('articlecategory', 'Backend\ArticleCategory\ArticleCategoriesController');
    Route::resource('listings', 'Backend\Listing\ListingsController');
    Route::resource('categories', 'Backend\Category\CategoriesController');
    Route::resource('reviews', 'Backend\Review\ReviewsController');
    Route::resource('pages', 'Backend\Pages\PageController');
});

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{slug}','Frontend\Pages\PageController@show')->name('page.show');