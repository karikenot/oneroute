<?php

use App\Http\Controllers\OnerouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnerouteController::class, 'index']);
