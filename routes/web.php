<?php

use App\Http\Controllers\OnerouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnerouteController::class, 'index']);
Route::post('/oneroutes', [OnerouteController::class, 'store']);
Route::get('/oneroutes/{oneroute}/edit', [OnerouteController::class, 'edit']);
Route::put('/oneroutes/{oneroute}', [OnerouteController::class, 'update']);
Route::delete('/oneroutes/{oneroute}', [OnerouteController::class, 'destroy']);