<?php

use App\Http\Controllers\DashboardController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Putri Tari Lestari',
        'image' => 'tata.jpg',
        'active' => 'about'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/data_pengguna',[DashboardController::class,'showDataPengguna'])->name('dashboard.showDataPengguna');
Route::get('/data_post', [DashboardController::class, 'showPost'])->name('dashboard.showPost');
Route::get('/tambahPost', [DashboardController::class, 'create'])->name('dashboard.create');
Route::get('/editPost', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::get('/data_post', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
});

Route::group(['middleware' => ['admin']], function(){
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/data_pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
Route::get('/data_post', [DashboardController::class, 'showPost'])->name('dashboard.showPost');
});


// Route::resource('posts', PostController::class) ->name('index', 'posts');
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);


// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

