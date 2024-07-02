<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/employee/', \App\Http\Controllers\Employee\StoreController::class);

Route::group(['prefix' => '/transaction'], function () {
    Route::post('/', \App\Http\Controllers\Transaction\StoreController::class);
    Route::get('/view', \App\Http\Controllers\Transaction\ShowController::class);
    Route::post('/pay', \App\Http\Controllers\Transaction\PayController::class);
});
