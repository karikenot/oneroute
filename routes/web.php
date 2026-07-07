<?php

use App\Http\Controllers\OnerouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnerouteController::class, 'index']);
Route::post('/oneroutes', [OnerouteController::class, 'store']);
Route::get('/oneroutes/{oneroute}/edit');
Route::put('/oneroute/{oneroute}');
Route::delete('/oneroute/{oneroute}');