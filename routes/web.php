<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test', [
      'name' => request('name')
    ]);
});

/*
Route::get('/post/{post}', function ($post) {
    $posts = [
      'my-first-post' => 'Welcome. This is my first post',
      'my-second-post' => 'Hello again. This is my second post'
    ];
    if(!array_key_exists($post, $posts))
    {
      abort(404, 'Sorry that post does not exist');
    }
    return view('post', [
      'post' => $posts[$post]
    ]);
});
*/

Route::get('/post/{post}', [PostController::class, 'show']);
