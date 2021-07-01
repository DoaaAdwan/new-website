<?php

use App\Http\Controllers\WebPageController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/index',[WebPageController::class,'index'])->name('index');
Route::get('/about',[WebPageController::class,'about'])->name('about');
Route::get('/services',[WebPageController::class,'services'])->name('services');
Route::get('/portfolio',[WebPageController::class,'portfolio'])->name('portfolio');
Route::get('/',[WebPageController::class,'contact'])->name('contact');


