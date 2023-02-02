<?php

use App\Http\Controllers\Front\AboutUsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), 'namespace' => 'Front',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {


        #### Home ####
        Route::get('/', 'HomeController@index')->name('home');

        #### About Us ####
        Route::get('/about_us', 'AboutUsController@index')->name('about_us');

        #### Contact ####
        Route::get('/contact', 'ContactController@index')->name('contact');
        Route::post('/contactStore', 'ContactController@contactStore')->name('contactStore');

        #### Service ####
        Route::get('/service', 'ServiceController@index')->name('service');
        Route::get('/serviceProject/{id}', 'ServiceController@serviceProject')->name('serviceProject');

        #### Product ####
        Route::get('/products', 'ProductController@index')->name('product');
        Route::get('/search', 'ProductController@search')->name('product-search');
        Route::get('/filter', 'ProductController@filter')->name('product-filter');
        Route::get('/categorySort', 'ProductController@categorySort')->name('categorySort');


        #### Project ####
        Route::get('/projects', 'ProjectController@index')->name('projects');
        Route::get('/project/{id}', 'ProjectController@oneProject')->name('project');
        Route::get('/categoryProject', 'ProjectController@categorySort')->name('category_Sort');
        Route::get('/loadMore', 'ProjectController@loadMore')->name('loadMore');

        #### Single ####
        Route::get('/product/{id}', 'SingleController@getProduct')->name('get.product');

        #### Quote ####
        Route::get('quote', 'QuoteController@index')->name('quoteIndex');
        Route::post('quote/store', 'QuoteController@store')->name('quoteStore');
        Route::get('/quote/search', 'QuoteController@search')->name('quoteSearch');
//        Route::get('quote/{id}', 'QuoteController@getProduct')->name('get.quote');

        #### Faqs ####
        Route::get('/faqs', 'QuestionController@index')->name('faqs');



    }
);
