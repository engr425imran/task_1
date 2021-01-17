<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
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
Route::get('ch', function () {
    return view('imran.auth.register');
});
// Route::post('inde' , function (Request $request) {
    
// })->name('inde');

Route::get('/', function(){
    return view('order');
})->middleware('auth');

// Route::get('{any}', function () {
//     return view('order')->middleware('auth');
// })->where('any', '.*');

Route::get('/check', function () {
    return view('check');
});

// Route::get('/', function () {
//     return view('order');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
