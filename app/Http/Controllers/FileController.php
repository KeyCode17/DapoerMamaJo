<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Models\Picture;
use App\Models\Post;
use Illuminate\Support\Facades\Artisan;

use Cviebrock\EloquentSluggable\Services\SlugService;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'hello world';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $Data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255,uniqe:slug',
            'category_id' => 'required|max:1',
        ]);

        Post::Create($Data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Artisan::call('storage:link');
        $Data = $request->validate([
            'image'=> 'image'
        ]);

        if($request->file('image')){
            $Data['image'] = $request->file('image')->store('public');
        }


        Picture::Create($Data);
        return view('Posts/create', [
            'title' => 'Create',
        ]);

        // $filePath = Storage::disk('public')->path('eit6SmJ5WejTbBWtIVROA6Zza9jO6Rkhz8VNlmGs.jpg');

        // if (Storage::disk('public')->exists('eit6SmJ5WejTbBWtIVROA6Zza9jO6Rkhz8VNlmGs.jpg')) {
        //     return response()->file($filePath);
        // }

        // abort(404, 'File not found');

        // print("post images");
        // return $request->file('file')->store();
        // return file_put_contents(
        //     `../public/storage/image0.jpg`,
        //     "/"+$request->file('file')
        // );
        // foreach($request->file as $file){
        //     Storage::disk('public')->put($request->file);
        //     return $file;
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('displaypict', [
            'title' => 'Pictures',
            'pictures' => Picture::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
