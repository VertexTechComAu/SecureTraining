<?php
namespace App\Http\Controllers;

use App\Http\Controllers\BlogPostController;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('blog',BlogPostController::class);
Route::get('/blog',[BlogPostController::class,'index']);
Route::get('/blog/{blogPost}',[BlogPostController::class,'show']);
Route::get('/blog/create/post',[BlogPostController::class,'create']);
Route::post('/blog/create/post',[BlogPostController::class,'store']);
Route::get('/blog/{blogPost}/edit',[BlogPostController::class,'edit']);
Route::put('/blog/{blogPost}/edit',[BlogPostController::class,'update']);
Route::delete('/blog/{blogPost}',[BlogPostController::class,'delete']);

