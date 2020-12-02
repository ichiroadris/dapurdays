<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [CustomerController::class, 'landingIndex']);

Route::get('/dashboard', function () {
    return redirect('user/profile');
});

Route::get('/admin', function () {
    return redirect('/admin/dashboard');
})->middleware('admin');


Route::get('/admin/dashboard', function () {
    return Inertia::render('Admin/Index');
})->name('dashboard')->middleware('admin');

Route::get('/menu/{menu}', [MenuController::class, 'show']);
Route::get('/menu/{menu}/purchase', [MenuController::class, 'purchase']);
Route::post('/menu/{menu}/checkout', [MenuController::class, 'checkout']);
Route::post('/user/checkout/create', [MenuController::class, 'confirmed']);
Route::get('/user/history', [MenuController::class, 'history']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/menus', [MenuController::class, 'index'])->name('menus');
    Route::post('/admin/create/menu', [MenuController::class, 'create']);
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/admin/customers', [CustomerController::class, 'index'])->name('customers');
    Route::post('/admin/order/status/completedelivering', [OrderController::class, 'completeDelivering']);
    Route::post('/admin/order/status/completecake', [OrderController::class, 'completeCake']);
    Route::post('/admin/product/delete', [MenuController::class, 'destroy']);
});
