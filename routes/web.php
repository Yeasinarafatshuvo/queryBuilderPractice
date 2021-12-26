<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\MergeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;


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

Route::get('/', [RetriveController::class, 'selectSpeceficData']);
Route::get('/merge', [MergeController::class, 'mergeData']);
Route::get('/join', [JoinController::class, 'rightJoinData']);
Route::get('/insert', [InsertController::class, 'insertData']);
Route::get('/insertmult', [InsertController::class, 'insertMultiRow']);
Route::get('/delete', [DeleteController::class, 'oneRowsDelete']);
Route::get('/update', [UpdateController::class, 'updateData']);
