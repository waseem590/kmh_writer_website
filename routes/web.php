<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontsiteController;
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
// Route::group(['middleware' => ['guest']], function () {
// });
Route::get('/login',[AdminController::class, 'login'])->name('signin');
Route::post('/login',[AdminController::class, 'signIn'])->name('login');

// client routes
Route::get('/',[FrontsiteController::class, 'index'])->name('/');
Route::get('/all_books',[FrontsiteController::class, 'allBooks']);
Route::get('/all_articles',[FrontsiteController::class, 'allArticles']);
Route::get('/contact_us',[FrontsiteController::class, 'contactUs']);
Route::get('/about_us',[FrontsiteController::class, 'aboutUs']);
Route::get('/my_family',[FrontsiteController::class, 'myFamily']);
Route::get('/more-details/{id}',[FrontsiteController::class, 'morDetail']);
Route::get('/article-more-details/{id}',[FrontsiteController::class, 'articleMorDetail']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home',[HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/new_book',[HomeController::class, 'newBooks'])->name('new.books');
    Route::post('/save_book',[HomeController::class, 'saveBook'])->name('save.book');
    Route::post('/update_book',[HomeController::class, 'updateBook'])->name('update.book');
    Route::get('/edit_book/{id}',[HomeController::class, 'editBook']);
    Route::get('/delete_book/{id}',[HomeController::class, 'deleteBook'])->name('delete.book');
    Route::get('/books',[HomeController::class, 'booksList'])->name('books.lists');
    Route::get('/new_article',[HomeController::class, 'newArticles'])->name('new.articles');
    Route::post('/save_article',[HomeController::class, 'saveArticle'])->name('save.article');
    Route::post('/update_article',[HomeController::class, 'updateArticle'])->name('update.article');
    Route::get('/edit_article/{id}',[HomeController::class, 'editArticle']);
    Route::get('/delete_article/{id}',[HomeController::class, 'deleteArticle'])->name('delete.article');
    Route::get('/articles',[HomeController::class, 'articlesList'])->name('articles.lists');
    
});  
Route::get('/linkstorage', function () {
    $artisan = \Artisan::call('storage:link');
    dd($artisan);
});