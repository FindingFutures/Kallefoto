<?php

use Spatie\Sitemap\SitemapGenerator;

SitemapGenerator::create('https://kallefoto.no')->writeToFile(public_path('sitemap.xml'));

Auth::routes();


Route::resource('/admin/om', 'AboutController');
Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@showIndex')->name('index');
Route::get('/om', 'PagesController@showAbout')->name('about');

Route::get('/kontakt', 'PagesController@showContact')->name('contact');
Route::post('/kontakt/send', 'ContactController@create')->name('contact.create');

Route::get('/{title}', 'SubpagesController@showSubpage');
Route::get('/admin/{title}', 'SubpagesController@editSubpage');
Route::put('/admin/subpage/{id}', 'SubpagesController@updateSubpage')->name('subpage.edit');
Route::put('/admin/subpage/image/{id}', 'ImagesController@destroy')->name('image.destroy');

Route::put('/upload/image', 'ImagesController@store')->name('image.store');
