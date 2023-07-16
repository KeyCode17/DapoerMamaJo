<?php

use App\Models\Promo;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\About;
use App\Models\Contacts;
use App\Models\Category;
use App\Models\Picture;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardPromoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/home1', [PostController::class, 'index']);

Route::post('/home1', [PostController::class, 'order']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/pictures', [FileController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts()->orderBy('id', 'desc')->paginate(6),
        'category' => $category->name,
        'categories' => Category::all(),
        'pictures' => $category->posts()->orderBy('id', 'desc')->paginate(6)->pluck('image')
    ]);
});


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/promos/{promo:slug}', function (Promo $promo) {
    return view('promo', [
        'title' => $promo->title,
        'body' => $promo->body,
        'categories' => Category::all(),
        'image' => $promo->image
    ]);
});

Route::get('/promos', function () {
    return view('promos', [
        'title' => 'promos',
        'promos' => Promo::orderBy('id', 'desc')->paginate(5),
        'categories' => Category::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'categories' => Category::all(),
        'about' => About::all()->first(),
    ]);
});

Route::get('/', function () {
    Artisan::call('storage:link');
    return view('home',[
        'title' => 'Home',
        'posts' => Post::with('category')->orderBy('id', 'desc')->take(3)->get(),
        'pictures' => Picture::all(),
        'categories' => Category::all()
    ]);
});

Route::post('/', function (Request $request) {
    $Data = $request->validate([
        'nama' => 'required|max:255',
        'kontak' => 'required|max:20'
    ]);

    Contacts::Create($Data);
    return redirect('/')->with('success', 'Terima kasih telah memesan, Mohon tunggu informasi dari kami');
});

Route::get('/dashboard', function () {
    return redirect('/dashboard/about/about');
})->middleware('auth');

Route::get('/dashboard/contacts', function () {
    return view('admin.contacts.contacts', [
        'title' => 'My Posts',
        'contacts' => Contacts::paginate(10),
    ]);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('auth');

Route::resource('/dashboard/about', DashboardAboutController::class)->middleware('auth');

Route::resource('/dashboard/promo', DashboardPromoController::class)->middleware('auth');

Route::get('/dashboard/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/cat/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/pro/checkSlug', [DashboardPromoController::class, 'checkSlug'])->middleware('auth');

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
