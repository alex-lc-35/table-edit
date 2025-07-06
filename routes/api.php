<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableEditController;
use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'index']);
Route::get('/table-edit', [TableEditController::class, 'show']);

Route::prefix('product')->group(function () {
    Route::get('/table-edit', [ProductController::class, 'tableShow']);
    Route::post('/table-edit', [ProductController::class, 'tableEdit']);
});
