<?php

use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\authorController;

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
    return view('welcome');
});

Route::get('add', function () {
    return view('addbook',['authors' => Author::all()]);
});

// Route::get('index', function () {
//     return view('index');
// });

Route::get('update/{id}', [BooksController::class, 'update'])->name('up');

Route::get('view', function () {
    return view('viewbook');
});

Route::get('/index', [BooksController::class, 'index']);
Route::post('/req', [BooksController::class, 'store'])->name('req');
Route::get('/delete/{id}', [BooksController::class, 'destroy'])->name('delete');

Route::put('/put/{id}', [BooksController::class, 'updateBook'])->name('put');

Route::post('/findBook', [BooksController::class, 'findBook'])->name('Find');
Route::get('/trash', [BooksController::class, 'trash'])->name('trash');
Route::get('/restore/{id}', [BooksController::class, 'restore'])->name('restore');
Route::get('/fdelete/{id}', [BooksController::class, 'fdelete'])->name('fdelete');
Route::get('a/{id}', [authorController::class, 'index']);
// Route::get('/auth', [authorController::class, 'auth']);

Route::get('author/{id}', [authorController::class, 'index']);
// users ----------------------------------------------------------=-----------------------------
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form 
Route::get('/login', [UserController::class, 'login'])->name('login');

// Login User
Route::post('users/authenticate', [UserController::class, 'authenticate']);



// Route::post('/update_books', [BooksController::class, 'update'])->name('update_books');