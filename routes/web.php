<?php

Auth::routes();


Route::resource('/admin/om', 'AboutController');
Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@showIndex')->name('index');
Route::get('/om', 'PagesController@showAbout')->name('about');

Route::get('/kontakt', 'PagesController@showContact')->name('contact');
Route::post('/kontakt/send', 'ContactController@create')->name('contact.create');

Route::get('/{title}', 'SubpagesController@showSubpage');

Route::put('/upload/image', 'ImagesController@store')->name('image.store');
