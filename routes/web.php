<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MerkController;
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

Route::get('/', function () {
    return view('index');
});
// Route::get('merk', [MerkController::class, 'index'])->name('merk');
// Route::get('merk/{merk}', [MerkController::class, 'show']);

// Route::get('merk/create', [MerkController::class, 'create']);


// Route::get('car', [CarController::class, 'index'])->name("car");
// Route::get('car/{car}', [CarController::class, 'show']);

// Route::get('cars/create', [CarController::class, 'create']);

Route::resource('/merks', MerkController::class);
Route::resource('/cars', CarController::class);
