<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


//frontend
Route::get('/',[App\Http\Controllers\Frontend\BloginfoController::class,'blogIndex'])->name('blog.index');


//backend
Route::get('/login',[App\Http\Controllers\Admin\BloginfoController::class,'adminLogin'])->name('admin.login');
