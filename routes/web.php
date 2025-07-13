<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\myViewController;
use App\Http\Controllers\adminController;
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

// Route::get('/students', [studentController::class, 'showView'])->name('students.list');
// Route::get('/students/details', [studentController::class, 'detailsView'])->name('students.details');
Route::get('/', [myViewController::class, 'showhome'])->name('home');
//Route::get('/home', [myViewController::class, 'showhome'])->name('home');
Route::get('/department', [DepartmentController::class, 'fetchdept'])->name('department');
Route::get('/circular', [myViewController::class, 'showcircular'])->name('circular');
Route::get('/policy', [myViewController::class, 'showpolicy'])->name('policy');
Route::get('/gallery', [myViewController::class, 'showgallery'])->name('gallery');
Route::get('/training', [myViewController::class, 'showTraining'])->name('training');
Route::get('/union', [myViewController::class, 'showUnion'])->name('union');
Route::get('/employee/{departmentId}', [DepartmentController::class, 'showByDepartment'])->name('showByDepartment');
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function(){
Route::get('/dashboard',[adminController::class,'index'])->name('dashboard');   
});
Route::get('/login', function () {
    return 'Dummy login page for testing admin panel';
})->name('login');