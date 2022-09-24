<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'frontend.'], static function () {
    Route::get('/', HomeController::class)->name('home');
});

Auth::routes();
