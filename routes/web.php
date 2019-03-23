<?php

Auth::routes();


Route::resource('/admin/om', 'AboutController');
Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@showIndex')->name('index');
Route::get('/om', 'PagesController@showAbout')->name('about');

Route::get('/kontakt', 'PagesController@showContact')->name('contact');
Route::post('/kontakt/send', 'ContactController@create')->name('contact.create');

Route::get('/balestrand', 'SubpagesController@showBalestrand');
Route::get('/sogndal', 'SubpagesController@showSogndal');
Route::get('/leikanger', 'SubpagesController@showLeikanger');
Route::get('/luster', 'SubpagesController@showLuster');
Route::get('/bilar', 'SubpagesController@showBilar');
