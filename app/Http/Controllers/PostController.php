<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\About;
use App\Models\Picture;
use App\Models\Category;
use App\Models\Contacts;
use Illuminate\Support\Facades\Artisan;


class PostController extends Controller
{
    public function index()
    {   
        Artisan::call('storage:link');
        return view('home1', [
            'title' => 'Home',
            'posts' => Post::with('category')->orderBy('id', 'desc')->take(3)->get(),
            'pictures' => Picture::all(),
            'categories' => Category::all(),
            'about' => About::all()->first()
        ]);
    }

    public function show(Post $post)
    {   
        return view('post', [
            'title' => 'Post || ',
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function order(Request $request)
    {
        $Data = $request->validate([
            'nama' => 'required|max:255',
            'kontak' => 'required|max:20'
        ]);

        Contacts::Create($Data);
        return redirect('/')->with('success', 'Terima kasih telah memesan, Mohon tunggu informasi dari kami');
    }
}
