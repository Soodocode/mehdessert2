<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\Admin;
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
    return view('homepage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [ProductController::class, 'homepage']); 
 

Route::middleware([CheckRole::class])->group(function(){
    Route::get('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
    Route::post('/edits', [App\Http\Controllers\UserController::class, 'edits'])->name('edits');
    Route::get('/shop/{id}', [ProductController::class, 'shop']);

 });
 Route::middleware([Admin::class])->group(function(){
    Route::post('/edits', [App\Http\Controllers\UserController::class, 'edits'])->name('edits');
    Route::get('/list', [App\Http\Controllers\UserController::class, 'show'])->name('list');
    Route::resource('products', 'App\Http\Controllers\ProductController');   
    Route::resource('products.create', ProductController::class); 
    Route::resource('products.updateproduct', ProductController::class); 
    Route::get('/products/updates/{id}', [ProductController::class, 'updates']);
    Route::get('/products/edit_product/{id}', [ProductController::class, 'edit']); 
    Route::get('memberupdate/{id}', [App\Http\Controllers\UserController::class, 'memberupdate'])->name('memberupdate');
    Route::get('delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
    Route::get('listed', [App\Http\Controllers\MemberController::class, 'listed'])->name('listed'); 
    Route::post('/updateproduct', [App\Http\Controllers\UserController::class, 'updateproduct'])->name('updateproduct'); 
    Route::get('/dashboard', function () {return view('dashboard/index');}); 
    
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'show'])->name('dashboard');

});