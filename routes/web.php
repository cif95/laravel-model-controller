<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "PageController@index" )->name('movies');

Route::get('/{id}', "PageController@show" )->name('movies-detail');
