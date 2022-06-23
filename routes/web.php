<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;


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

Route::get('/', [PostController::class, 'index']);

// The route we have created to show all blog posts.
// Routes for logged-in users
Route::group(['middleware' => ['auth']], function () {

    Route::get('/blog/create/post', [PostController::class, 'create']); //shows create post form
    Route::post('/blog/create/post', [PostController::class, 'store']); //saves the created post to the databse
    Route::get('/blog/{post}/edit', [PostController::class, 'edit']); //shows edit post form
    Route::put('/blog/{post}/edit', [PostController::class, 'update']); //commits edited post to the database 
    Route::delete('/blog/{post}', [PostController::class, 'destroy']); //deletes post from the database

});

Route::get('/blog/{post}', [PostController::class, 'show']);
Route::get('/blog', [PostController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');