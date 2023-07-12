<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Picture;
use App\Models\Category;
use App\Models\Promo;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DashboardPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.promo.posts', [
            'title' => 'My Posts',
            'promos' => Promo::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promo.form', [
            'title' => 'Form New Post',
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
            'image' => 'image|required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $Data['image'] = $request->file('image')->store('public/promo');
        }

        Promo::Create($Data);
        Artisan::call('storage:link');
        return redirect('/dashboard/promo')->with('success', 'New promo has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        return view('admin.promo.show', [
            'title' => 'promo || ',
            'promo' => $promo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('admin.promo.edit', [
            'title' => 'Form Edit || ',
            'promo' => $promo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
        ];

        if ($request->slug != $promo->slug) {
            $rules['slug'] = 'required|max:255|unique:promos';
        }

        $Data = $request->validate($rules);

        if ($request->file('image') != '') {
            Storage::delete($request->oldImage);
            $Data['image'] = $request->file('image')->store('public/promo');
            Artisan::call('storage:link');
        }


        Promo::where('id', $promo->id)->update($Data);
        return redirect('/dashboard/promo')->with('success', 'Promo has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo->image != 'public/promo/nopromo.png'){
            Storage::delete($promo->image);
        }
        Promo::destroy($promo->id);
        return redirect('/dashboard/promo')->with('success', 'Promo has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Promo::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
