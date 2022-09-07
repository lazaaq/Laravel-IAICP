<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('bidang/', function () {
    return view('bidang');
});

Route::get('profil/', function () {
    return view('profil');
});

Route::get('login/', function () {
    return view('login');
});

Route::get('signup/', function () {
    return view('signup');
});

Route::get('dummy/', function () {
    return view('dummy');
});