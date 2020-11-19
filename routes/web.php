<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;   
use App\Http\Controllers\PostsController; 
use App\Http\Controllers\UsersController;  
use App\Http\Controllers\PermissionsController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('about', [PagesController::class, 'about']);

Route::get('services', [PagesController::class, 'services']);

//Auth::routes();
Auth::routes();

Route::get('home', [PagesController::class, 'home']);

//Posts controller
Route::resource('posts', PostsController::class);

//Users controller
Route::resource('users', UsersController::class);

//Roles controller
Route::resource('roles', RoleController::class);

//Permissions controller
Route::resource('permissions', PermissionsController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
