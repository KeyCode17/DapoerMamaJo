<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Picture;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.categories', [
            'title' => 'My Category',
            'categories' => Category::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.form', [
            'title' => 'Form New Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255'
        ]);

        Category::Create($Data);
        return redirect('/dashboard/category')->with('success', 'New category has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'title' => 'Category Edit || ',
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255'
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|max:255|unique:posts';
        }

        $Data = $request->validate($rules);
        
        Category::where('id', $category->id)->update($Data);
        return redirect('/dashboard/category')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/category')->with('success', 'Category has been deleted!');
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
