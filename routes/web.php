<?php

use App\Http\Controllers\formPerbaikan;
use App\Http\Controllers\formPerhapusan;
use App\Http\Controllers\formPermintaan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('formPermintaan', formPermintaan::class);

Route::resource('formPerbaikan', formPerbaikan::class);

Route::resource('formPerhapusan', formPerhapusan::class);
