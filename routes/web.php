<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenturoController;
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

// Venturo routes
// Route::get('/', [VenturoController::class, 'index']);

Route::get('/', function () {
  return view('home', [
    'title'   => 'Home',
    'active'  => 'home',
  ]);
});

Route::get('/about', function () {
  return view('about', [
    'title'     => 'About',
    'active'    => 'about',
    'name'      => 'Andi Paris Bachtiar',
    'telp'      => '081539473834',
    'email'     => 'andiparis02@gmail.com',
    'linkedin'  => 'https://www.linkedin.com/in/andi-paris-bachtiar',
  ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/authors', [UserController::class, 'index']);
