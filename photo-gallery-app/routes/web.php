<?php

use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Middleware\OnlyAdmin;

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


//dashboard
Route::get('/dashboard', [ImageController::class, 'Dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
//manage users
Route::prefix('users')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

//manage photo gallery
Route::prefix('images')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/view', [ImageController::class, 'ImageView'])->name('image.view');
    Route::get('/fetch', [ImageController::class, 'fetch'])->name('image.fetch');
    Route::get('/add', [ImageController::class, 'ImageAdd'])->name('image.add');
    Route::post('/store', [ImageController::class, 'ImageStore'])->name('image.store');
    Route::get('/edit/{id}', [ImageController::class, 'ImageEdit'])->name('image.edit');
    Route::post('/update/{id}', [ImageController::class, 'ImageUpdate'])->name('image.update');
    Route::get('/delete/{id}', [ImageController::class, 'ImageDelete'])->name('image.delete');
    Route::get('/sort/{id}', [ImageController::class, 'SortData'])->name('sort.data');
});
//frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/single_page/{id}', [HomeController::class, 'MoreImage'])->name('more.image')->middleware(['auth:sanctum', 'verified']);
Route::get('/service_page', [HomeController::class, 'ServiceDetails'])->name('service.details')->middleware(['auth:sanctum', 'verified']);
Route::get('/contact_page', [HomeController::class, 'ContactDetails'])->name('contact.details')->middleware(['auth:sanctum', 'verified']);
//admin logout
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');
