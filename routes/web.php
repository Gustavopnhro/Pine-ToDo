<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TarefaController;
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
Route::middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');


    Route::get('/task', [TaskController::class, 'index'])->name('task.view');
    Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
    Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::get('/task/delete', [TaskController::class, 'delete'])->name('task.delete');
    
    Route::post('/task/createAction', [TaskController::class, 'createAction'])->name('task.createAction');
    Route::post('/task/editAction', [TaskController::class, 'editAction'])->name('task.editAction');    
       
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');


    Route::get('/category', [CategoryController::class, 'index'])->name('category.view');
    Route::get('/category/new', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

    Route::post('/category/createAction', [CategoryController::class, 'createAction'])->name('category.createAction');
    Route::post('/category/editAction', [CategoryController::class, 'editAction'])->name('category.editAction');


});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register/registerAction', [AuthController::class, 'registerAction'])->name('user.registerAction');
Route::post('/login/loginAction', [AuthController::class, 'loginAction'])->name('user.loginAction');
