<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Comment;
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
        $category = Category::select('id','parent_id','name')->get();

        return view('admin.modules.category.create',[
            'categories' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = new Category();

        
        $category->name = $request -> name;
        $category->status = $request -> status;
        $category ->parent_id = $request ->parent_id;     

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
        $categorys = Category::select('id','parent_id','name')->get();
        if($category == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.category.edit', [
            'id' => $id,
            'category' => $category,
            'categories' =>  $categorys,
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
        $category ->parent_id = $request ->parent_id;     

        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Update category successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::find($id);
        
       

        if($category == null) {
            return redirect()->route('admin.404');
        } 

       
        if($category -> parent_id == 0){
            $category_childs = Category::select('id')->where('parent_id', $category -> id)->get(); 
            
            foreach($category_childs as $category_child){
               $news = News::where('id_category', $category_child ->id)->get();
               foreach($news as $item){
                    $item -> status = 6;
                    $item -> save();

                    $comments = Comment::where('id_news', $item ->id)->get();
                    foreach( $comments as $comment){
                        $comment -> status = 6;
                        $comment ->save();
                    }
               }

               $category_child ->status = 6;
               $category_child ->save();
            }
        } else{

             $news = News::find($id);
             $comment = Comment::where('id_news', $news ->id)->get();
             if($comment){
                foreach($comment as $item){
                    $item -> status = 6;
                    $item ->save();
                }
             }
             $news -> status = 6;
             $news->save();

        }

        $category -> status = 6;
        
        $category->save();
        
 // $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Delete category success');
    }
}