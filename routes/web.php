<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// using query parameter ?fn&ln..etc
Route::get('/name', function () {
    $name= request("name");
    return view('name', ["name" => $name ]);
});

// using route parameter(path parameter)
Route::get('/name/{username}', function ($username) {
    return view('name', ["name" => $username ]);
});

Route::get('/employees',[EmployeeController::class, 'index']);

Route::get('/employees/{id}',[EmployeeController::class, 'show']);