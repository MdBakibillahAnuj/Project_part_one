<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new-category');
Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');


Route::get('/add-food',[FoodMenuController::class,'addFood'])->name('add-food');
Route::post('/new-food',[FoodMenuController::class,'newFood'])->name('new-food');
Route::post('/update-food',[FoodMenuController::class,'updateFood'])->name('update-food');
Route::get('/manage-food',[FoodMenuController::class,'manageFood'])->name('manage-food');
Route::get('/delete-food/{id}',[FoodMenuController::class,'deleteFood'])->name('delete-food');
Route::get('/status-food/{id}',[FoodMenuController::class,'statusFood'])->name('status-food');
Route::get('/edit-food/{id}',[FoodMenuController::class,'editFood'])->name('edit-food');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});
