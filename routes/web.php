<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[HomeController::class,'homepage']);

Route::get('/homepage',[HomeController::class,'homepage']);

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/welcomepage',[AdminController::class,'welcomepage']);


Route::get('/post_page',[AdminController::class,'post_page']);
Route::post('/add_house',[AdminController::class,'add_house']);

Route::get('/show_post',[AdminController::class,'show_post']);

Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);

Route::get('/edit_post/{id}',[AdminController::class,'edit_post']);

Route::post('/update_post/{id}',[AdminController::class,'update_post']);

Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::get('/house_search',[HomeController::class,'house_search']);

Route::get('/sellform',[HomeController::class,'sellform']);

Route::get('/house_details/{id}',[HomeController::class,'house_details']);

Route::get('/buyform/{id}',[HomeController::class,'buyform']);

Route::post('/add_comment',[HomeController::class,'add_comment']);

Route::post('/add_reply',[HomeController::class,'add_reply']);






