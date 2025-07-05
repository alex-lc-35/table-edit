<?php
use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'index']);

Route::get('/table/{name}', [TestController::class, 'table']);
