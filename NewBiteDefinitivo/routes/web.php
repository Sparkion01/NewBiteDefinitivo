<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NewBiteDefinitivoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/NewBiteDefinitivo', [NewBiteDefinitivoController::class, 'calculateNewBiteDefinitivo']);