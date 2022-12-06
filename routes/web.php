<?php

use App\Http\Controllers\Admin\AdminStudyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\StudyController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
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

Route::get('/' , [HomeController::class, 'index'])->name('home');

Route::get('study', [StudyController::class, 'index'])->name('study');

Route::get('expert', function (){
    return Inertia::render('Client/Expert/Index');
})->name('expert');

Route::group(['prefix' => 'admin', 'name' => 'Admin', 'middleware' => 'auth:sanctum'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' =>'study', 'name' => 'Study'], function (){
        Route::get('/', [AdminStudyController::class, 'index'])->name('admin.study');
        Route::get('addstudy', [AdminStudyController::class, 'addStudy'])->name('study.addstudy');
    });
    Route::group(['prefix' => 'category', 'name' => 'Category'], function (){
       Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
       Route::get('addcategory', [CategoryController::class, 'addCategory'])->name('category.addcategory');
    });
});
