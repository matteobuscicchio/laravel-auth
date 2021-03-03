<?php

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

Route::get('/', 'Guest\PageController@home')->name('home');
Route::get('blog', 'Guest\PageController@blog')->name('blog');
Route::get('about', 'Guest\PageController@about')->name('about');

Auth::routes(['register' => false]);

Route::get('admin', 'Admin\PageController@index')->name('admin');
Route::get('admin/articles', 'Admin\ArticleController@index')->name('articles');