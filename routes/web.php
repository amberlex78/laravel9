<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['as' => 'backend.', 'prefix' => 'backend'], static function () {
    require_once __DIR__ . '/backend.php';
});

Route::group(['as' => 'frontend.'], static function () {
    require_once __DIR__ . '/frontend.php';
});
