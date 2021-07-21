<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
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
Route::POST('/task', [TaskController::class, 'takeRequest']);
Route::POST('edit/{id}', [TaskController::class, 'edit']);
Route::GET('edit/{id}', [TaskController::class, 'show']);
Route::GET('/', [TaskController::class, 'index']);


//Route::GET('list', [TaskController::class, 'list']);
//
//Route::get('/', function () {
//    return view('welcome');
//});
