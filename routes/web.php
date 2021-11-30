<?php

use App\Http\Controllers\AppController;
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
//default route
Route::get('/',[AppController::class, 'viewHome']);

//route home
Route::get('/home', [AppController::class, 'viewHome']);

//route ke contact
Route::get('/contact', [AppController::class, 'viewContact']);

//route menampilkan book sesuai kategori
Route::get('/category/{id}', [AppController::class, 'viewCategory']);

//route menampilkan detail buku
Route::get('/detail-book/{id}', [AppController::class, 'viewDetailBook']);

