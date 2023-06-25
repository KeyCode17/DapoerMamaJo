<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{slug}', [PostController::class, 'show']);

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
        'flex' => '',
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register',
        'flex' => 'flex-row-reverse',
    ]);
});

Route::get('/tes', function () {
    return view('tes', [
        'title' => 'tes',
    ]);
});

Route::get('/resetpass', function () {
    return view('forgot', [
        'title' => 'Forgot Password',
    ]);
});

// !Start Not Used
// Route::get('post/{slug}', function ($slug) {
//     return view('post', [
//         'title' => 'Post || ',
//         'post' => Post::find($slug),
//     ]);
    
    // $posts = [
    //     [
    //         'title' => 'Welcome post pertama',
    //         'slug' => 'welcome-post-pertama',
    //         'author' => 'Daffa',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque hic nesciunt quae illo dolores repudiandae, cumque commodi laudantium dignissimos eum, temporibus eos veritatis quaerat vero accusantium minus atque perferendis voluptatum? Cum animi dolore non quibusdam laboriosam culpa nihil, perspiciatis magni veritatis amet debitis quia! Voluptate laboriosam cum cumque, expedita numquam obcaecati ipsa magni dicta aspernatur. Nesciunt exercitationem doloribus praesentium ullam rerum ad explicabo corrupti reiciendis et vel tenetur id iste perferendis eius dignissimos, consequatur quae voluptas incidunt! Voluptate, blanditiis.',
    //     ],
    //     [
    //         'title' => 'Welcome post kedua',
    //         'slug' => 'welcome-post-kedua',
    //         'author' => 'Dapol',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eaque hic nesciunt quae illo dolores repudiandae, cumque commodi laudantium dignissimos eum, temporibus eos veritatis quaerat vero accusantium minus atque perferendis voluptatum? Cum animi dolore non quibusdam laboriosam culpa nihil, perspiciatis magni veritatis amet debitis quia! Voluptate laboriosam cum cumque, expedita numquam obcaecati ipsa magni dicta aspernatur. Nesciunt exercitationem doloribus praesentium ullam rerum ad explicabo corrupti reiciendis et vel tenetur id iste perferendis eius dignissimos, consequatur quae voluptas incidunt! Voluptate, blanditiis.',
    //     ],
    // ];

    // $post = [];
    // foreach ($posts as $p) {
    //     if ($p['slug'] === $slug) {
    //         $post = $p;
    //     }
    // }

    // return view('post', [
    //     'title' => 'Post || ',
    //     'post' => Post::find($slug),
    // ]);
    
// });
// !End Not Used