<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    // USER DASHBOARD
Route::get('/dashboard', function () {
    return view('user-dashboard.userdashboard');
})->middleware(['auth', 'verified', 'user'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'admin', 'admin'])->name('admin_dashboard');


// Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//     Route::get('/', 'HomeController@index')->name('user_dashboard');
//     Route::get('/list', 'UserController@list')->name('user_list');
// });

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin_dashboard');
    Route::get('/users', 'AdminUserController@list')->name('admin_users');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

        //admin menu route
// Route::resource('/menu', menuController::class);
// Route::get('application', [menuController::class, 'showing'])->name('menu.showing');
Route::post('/create-menu', [MenuController::class, 'store'])->name('menu.create');
Route::get('admin/menulist', [MenuController::class, 'index'])->name('menu.show');
Route::get('/menu', [MenuController::class, 'edit'])->name('menu.edit');
Route::patch('/menu', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menu', [MenuController::class, 'destroy'])->name('menu.destroy');

    // order menu route

    Route::get('/order/list', [OrderController::class, 'index'])->name('order.list');
    Route::get('/order/make_order', [OrderController::class, 'orderindex'])->name('order');




require __DIR__.'/auth.php';
