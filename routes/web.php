<?php

use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jops', [jobController::class , 'index']);
