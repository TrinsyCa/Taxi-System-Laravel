<?php

use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('transfer');
});

Route::post('/calculate-distance', [TransferController::class, 'calculateDistance']);
