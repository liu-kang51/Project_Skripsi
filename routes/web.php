<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formPerbaikan;
use App\Http\Controllers\formPerhapusan;
use App\Http\Controllers\formPermintaan;
use App\Http\Controllers\reportPerbaikan;
use App\Http\Controllers\reportPerhapusan;
use App\Http\Controllers\reportPermintaan;

Route::get('/', function () {
    return view('index');
});

Route::resource('formPermintaan', formPermintaan::class);

Route::resource('formPerbaikan', formPerbaikan::class);

Route::resource('formPerhapusan', formPerhapusan::class);

Route::resource('reportPermintaan', reportPermintaan::class);

Route::resource('reportPerbaikan', reportPerbaikan::class);

Route::resource('reportPerhapusan', reportPerhapusan::class);