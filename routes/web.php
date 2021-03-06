<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Models\Post;


use Illuminate\Http\Request;
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

//test controller
Route::get('/testPage',[TestController::class,'infiniteScroll'])->name('infiniteScroll');

//page controller
Route::get('/', [PageController::class,'firstPage'])->name('firstPage');
Route::get('/secondPage',[PageController::class,'secondPage'])->name('secondPage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
