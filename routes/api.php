<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\MaintenanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/logistics',[LogisticController::class,'index'])->name('logistic.api');
Route::get('/logisticui',[LogisticController::class,'indexui'])->name('logistic.index');
Route::get('/logistic',[LogisticController::class,'create'])->name('logistic.create');
Route::get('/logistic/{Logistic:id}',[LogisticController::class,'edit'])->name('logistic.edit');
Route::post('/logistic',[LogisticController::class,'store'])->name('logistic.store');
Route::put('/logistic/{Logistic:id}',[LogisticController::class,'update'])->name('logistic.update');
Route::delete('/logistic/{Logistic:id}',[LogisticController::class,'destroy'])->name('logistic.delete');

//route mt
Route::get('/mts',[MaintenanceController::class,'index'])->name('mt.api');
Route::get('/mtui',[MaintenanceController::class,'indexui'])->name('mt.index');
Route::get('/mt',[MaintenanceController::class,'create'])->name('mt.create');
Route::get('/mt/{Maintenance:id}',[MaintenanceController::class,'edit'])->name('mt.edit');
Route::post('/mt',[MaintenanceController::class,'store'])->name('mt.store');
Route::put('/mt/{Maintenance:id}',[MaintenanceController::class,'update'])->name('mt.update');
Route::delete('/mt/{Maintenance:id}',[MaintenanceController::class,'destroy'])->name('mt.delete');

//route material
Route::get('/materials',[MaterialController::class,'index'])->name('material.api');
Route::get('/materialui',[MaterialController::class,'indexui'])->name('material.index');
Route::get('/material',[MaterialController::class,'create'])->name('material.create');
Route::get('/material/{Material:id}',[MaterialController::class,'edit'])->name('material.edit');
Route::post('/material',[MaterialController::class,'store'])->name('material.store');
Route::put('/material/{Material:id}',[MaterialController::class,'update'])->name('material.update');
Route::delete('/material/{Material:id}',[MaterialController::class,'destroy'])->name('material.delete');

//route order
Route::get('/orders',[OrderController::class,'index'])->name('order.api');
Route::get('/orderui',[OrderController::class,'indexui'])->name('order.index');
Route::get('/order',[OrderController::class,'create'])->name('order.create');
Route::get('/order/{Order:id}',[OrderController::class,'edit'])->name('order.edit');
Route::post('/order',[OrderController::class,'store'])->name('order.store');
Route::put('/order/{Order:id}',[OrderController::class,'update'])->name('order.update');
Route::delete('/order/{Order:id}',[OrderController::class,'destroy'])->name('order.delete');

//route production
Route::get('/prods',[ProductionController::class,'index'])->name('prod.api');
Route::get('/produi',[ProductionController::class,'indexui'])->name('prod.index');
Route::get('/prod',[ProductionController::class,'create'])->name('prod.create');
Route::get('/prod/{Production:id}',[ProductionController::class,'edit'])->name('prod.edit');
Route::post('/prod',[ProductionController::class,'store'])->name('prod.store');
Route::put('/prod/{Production:id}',[ProductionController::class,'update'])->name('prod.update');
Route::delete('/prod/{Production:id}',[ProductionController::class,'destroy'])->name('prod.delete');