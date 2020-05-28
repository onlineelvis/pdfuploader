<?php

use Illuminate\Support\Facades\Route;




Route::get('/','PdfController@index')->name('pdf.index');


Route::post('/','PdfController@store')->name('pdf.store');
