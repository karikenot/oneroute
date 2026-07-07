<?php

use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\OnerouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnerouteController::class, 'index']);
Route::post('/oneroutes', [OnerouteController::class, 'store']);
Route::get('/oneroutes/{oneroute}/edit', [OnerouteController::class, 'edit']);
Route::put('/oneroutes/{oneroute}', [OnerouteController::class, 'update']);
Route::delete('/oneroutes/{oneroute}', [OnerouteController::class, 'destroy']);


//REGISTER STUFFUCK
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');
Route::post('/register', Register::class)
    ->middleware('guest');