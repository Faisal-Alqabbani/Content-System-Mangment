<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\PermissinController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\PostController as PostAdminController;
use App\Http\Controllers\admin\RoleController;
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

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->middleware('verified');

Route::resource('comment', CommentController::class);
Route::get('{id}/{slug}', [PostController::class, 'getByCategory'])->name('category')->where('id','[0-9]+');
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search', [PostController::class, 'search'])->name('search');
Route::get('user/{id}',[ProfileController::class, 'getByUser'])->name('profile');
Route::get('user/{id}/comments',[ProfileController::class, 'getCommentsByUser'])->name('profile');
Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');
Route::post('/settings', [ProfileController::class, 'updateProfile'])->name('settings');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('Admin');


Route::group(['prefix' => 'admin'], function(){
    Route::resource('post', PostAdminController::class);
    Route::resource('permissions', PermissinController::class);
    Route::post('permissions', [RoleController::class, 'store'])->name('permissions');
});

Route::post('permission/byRole', [RoleController::class, 'getByRole'])->name('permission_byRole');
Route::resource('page', PageController::class); 

