<?php

use App\Http\Controllers\TableEditController;
use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'index']);
Route::get('/table-edit', [TableEditController::class, 'show']);
