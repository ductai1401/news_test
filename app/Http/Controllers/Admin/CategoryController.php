<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();

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
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('admin.category.index')->with('success', ['Create news category successful']);
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $category= Category::find($id);
        if ($category == null){
            abort(404);
        }

        return view('admin.modules.category.edit', [
            'id'=> $id,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,$id)
    {
        $category = Category::find($id);
        if ($category == null){
            abort(404);
        }
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('admin.category.index')->with('success', ['Update news category successful']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::find($id);

        if ($category == null){
            abort(404);
        }

        $category -> delete();

        return redirect()->route('admin.category.index')->with('success', ['Create news category successful']);
    }
}
