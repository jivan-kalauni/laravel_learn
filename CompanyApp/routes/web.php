<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;

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
// Route::get('/catagories', function () {
//     return view('catagories.list');
// });

Route::get('/',[CatagoryController::class,'index']);

Route::get('/catagory-create',[CatagoryController::class,'create']);

Route::post('/catagory-store',[CatagoryController::class,'store']);

Route::get('/catagory-update/{id}',[CatagoryController::class,'update']);

Route::put('/catagory-edit/{id}',[CatagoryController::class,'edit']);
