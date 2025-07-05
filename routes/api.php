<?php

use App\Http\Controllers\TableEditController;
use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'index']);

Route::prefix('table-edit')->group(function () {
    Route::get('{name}', [TableEditController::class, 'show']);
});
