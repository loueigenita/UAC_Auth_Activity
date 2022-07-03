<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

Route::get('/', function() {
    if(auth()->guest()) {
        return redirect('/login');
    }

    return view('pages.home');
});

Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/books/create',[BookController::class, 'create']);
    
    Route::post('/books',[BookController::class, 'store']);

  
    
    Route::get('/books/book',[BookController::class, 'bookList']);

    
  
    Route::get('/books/recent',[BookController::class, 'recentBook']);
   
    Route::get('/books/open/{book}',[BookController::class, 'open']);
    Route::get('/books/list/{book}',[BookController::class, 'list']);
    Route::get('/books/delete/{book}',[BookController::class, 'delete']);

    Route::get('/books/edit/{book}',[BookController::class, 'edit'])->middleware('edit');
    
    Route::get('/books/{book}',[BookController::class, 'show']);
    
    Route::put('/books/{book}',[BookController::class, 'update'])->middleware('edit');

    


    Route::get('/logout',[AuthController::class, 'logout']);
    

});