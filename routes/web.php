<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SampleController;

Route::get('/', function () {
    return view('index');
});

Route::resource('students', StudentController::class);
Route::resource('students', SampleController::class);
