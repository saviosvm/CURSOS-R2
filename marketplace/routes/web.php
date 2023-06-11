<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function(){  });

Route::get('/stores', [\App\Http\Controllers\admin\StoreController::class, 'index']);
Route::get('/stores/create', [\App\Http\Controllers\admin\StoreController::class, 'create']);
Route::post('/stores/create', [\App\Http\Controllers\admin\StoreController::class, 'store'])->name('store.post');