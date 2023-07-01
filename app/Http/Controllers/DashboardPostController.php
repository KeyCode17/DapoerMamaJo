<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Picture;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.posts', [
            'title' => 'My Posts',
            'posts' => Post::with(['category'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.form', [
            'title' => 'Form New Post',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:posts',
            'category_id' => 'required|max:1',
            'image' => 'image|required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $Data['image'] = $request->file('image')->store('public/posts');
        }

        Post::Create($Data);
        Picture::Create($Data);
        Artisan::call('storage:link');
        return redirect('/dashboard/posts')->with('success', 'New post has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', [
            'title' => 'post || ',
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'title' => 'Form Edit || ',
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required|max:1',
            'body' => 'required',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|max:255|unique:posts';
        }

        $Data = $request->validate($rules);

        if ($request->file('image') != '') {
            Storage::delete($request->oldImage);
            $Data['image'] = $request->file('image')->store('public/posts');
            $imageData = ['image' => $request->file('image')->store('public/posts')];
            Picture::where('id', $post->id)->update($imageData);
            Artisan::call('storage:link');
        }


        Post::where('id', $post->id)->update($Data);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        Post::destroy($post->id);
        Picture::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
