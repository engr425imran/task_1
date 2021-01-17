<?php
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::resource('orders', OrderController::class);

Route:: get('/orders/{id}/edit', [OrderController::class, 'edit'])->middleware('auth');

Route:: get('orders.index', [OrderController::class, 'index'])->middleware('auth');

Route:: get('orders.create', [OrderController::class, 'create'])->middleware('auth');
Route:: put('orders/{id}', [OrderController::class, 'update'])->middleware('auth');

Route:: post('orders.store', [OrderController::class, 'store'])->middleware('auth');

Route:: delete('orders.destroy/{id}', [OrderController::class, 'destroy']);


// Route:: post('orders.create', [OrderController::class, 'create']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
