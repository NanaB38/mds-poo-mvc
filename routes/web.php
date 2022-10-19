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

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts');
});

// Route::get('posts/{name?}', function($name)
// {
//     $file_name = __DIR__ . '/../resources/posts/' . $name . '.html';
//     if (!file_exists($file_name)) {
//         return abort(404);
//     }
//     $post_content = file_get_contents($file_name);
//     return view('post', [
//       'post_content' => $post_content  
//     ]);
// });



Route::get('models/{name?}', function($name)
{
    return view('post', [
        'post_content' => Post::find($post_name)
    ]);
});