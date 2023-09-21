<?php

use App\Http\Controllers\DataController;
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


Route::post('/save-data',[DataController::class,'store'])->name('data.store');
Route::get('/create-pdf',[DataController::class,'createpdf'])->name('data.createpdf');
Route::get('/formdata',[DataController::class,'formdata'])->name('data.formdata');