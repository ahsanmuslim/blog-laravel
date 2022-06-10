<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', function(){
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

//Route dashboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug/', [DashboardController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

//Route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Route Posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Ahmad Susanto",
        "email" => "ahsancoding@gmail.com",
        "usia" => "33 tahun",
        "foto" => "Santo.jpg",
        "active" => "about"
    ]);
});

//Category
Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth')->middleware('admin');
Route::get('/categories', function(){
    return view('categories', [
        "title" => 'Posts Category',
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::fallback(function(){
    return 'Page not found';
});

// Route::get('/category/{category:slug}', function(Category $category){
//     return view('posts', [
//         "title" => "Posts By Category : $category->name",
//         // "posts" => $category->posts
//         "posts" => $category->posts->load(['category','author'])
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         "title" => "Posts By Author : $author->name",
//         // "posts" => $author->post
//         //lazy eager loading
//         "posts" => $author->post->load(['category','author'])
//     ]);
// });
