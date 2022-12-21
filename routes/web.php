<?php

use App\Http\Controllers\admin\DoctorController as AdminDoctorController;
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

Route::get('/', function(){
    return view('user.home');
});

Route::group(["middleware" => ["auth","isAdmin"]], function () {
    Route::get('/home', [HomeController::class, 'index']);
});

Route::group(["middleware" => ["auth"]], function () {
    Route::resource('/dashboard/doctor', AdminDoctorController::class);
});



 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
