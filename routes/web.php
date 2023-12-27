<?php

use App\Http\Controllers\{
    RolePermissionController,
};
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
Auth::routes();
Route::get('/index', [RolePermissionController::class, 'index']);

Route::group(['middleware' => ['auth', 'is_user']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

    Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'is_admin'], 'controller' => App\Http\Controllers\Admin\UserController::class], function () {
        Route::get('/', 'index')->name('index');
    });
});
