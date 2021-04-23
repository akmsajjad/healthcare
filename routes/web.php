<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commentController;
use App\Http\Controllers\testController;

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
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/coronatest', function () {
    return view('coronatest');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/hometreatment', function () {
    return view('hometreatment');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/medicalhelp', function () {
    return view('medicalhelp');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/tips', function () {
    return view('tips');
});

// Route::get('/report', function () {
//     return view('report');
// });



Route::post('comment', [commentController::class, 'comment']);
Route::get('report', [commentController::class, 'problem']);

Route::post('test', [testController::class, 'test']);


