<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('status', '!=' , '6')->orderBy('created_at', 'desc')->get();
        return view('admin.modules.category.index', ['categories' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = new Category();

        
        $category->name = $request -> name;
        $category->status = $request -> status;
        $category ->parent_id = 0;     

        $category->save();

        return redirect()->route('admin.category.create')->with('success', 'Create category successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $category = Category::find($id);
        if($category == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.category.edit', [
            'id' => $id,
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $category = Category::find($id);

        $category -> name = $request ->name;
        $category -> status = $request ->status;

        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Update category successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::find($id);
        
        $news = News::find($id);

        if($category == null) {
            return redirect()->route('admin.404');
        } 

        // $category->delete();

        $category -> status = 6;
        $news -> status = 6;
        $category->save();
        $news->save();

        return redirect()->route('admin.category.index')->with('success', 'Delete category success');
    }
}