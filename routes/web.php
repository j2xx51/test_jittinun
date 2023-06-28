<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/seed-employees', [EmployeeController::class, 'seedEmployees']);

Route::get('/', function () {
    return view('welcome');
});




Route::get('/employees', [EmployeeController::class, 'index']);

