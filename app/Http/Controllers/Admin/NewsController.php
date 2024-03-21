<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\News\StoreRequest;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use App\Models\Category;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();

        $news = News::with('category')->orderBy('created_at','DESC')->get();

        return view('admin.modules.news.index',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.modules.news.create', [
            'categories' => $categories,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $file = $request->image;
        $fileName = time() . '_' . $file->getClientOriginalName();

        $news = new News();
        $news->title = $request->title;
        $news->intro = $request->intro;
        $news->content = $request->content;
        $news->image = $fileName;
        $news->status = $request->status;
        $news->id_category = $request->id_category;

        $news->save();

        $file->move(public_path('uploads/'), $fileName);

        return redirect()->route('admin.news.index')->with('success', ['Create news successful']);
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
        $categories = Category::get();

        $news= News::find($id);
        if ($news == null){
            abort(404);
        }

        return view('admin.modules.news.edit', [
            'id'=> $id,
            'categories'=>$categories,
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,$id)
    {
        $news = News::find($id);
        if ($news == null){
            abort(404);
        }

        // dd($request);

        $file = $request->image;        

        if(!empty($file)){
            $old_image_path = public_path('uploads/'. $news->image);
            if (file_exists($old_image_path)){
                unlink($old_image_path);
            }

            $request -> validated([
                'title'=> 'required|mimes:jpg,bmp,png,jpeg'
            ],[
                'image.required'=>'Plese enter news image',
                'image.mimes' => 'Image must jpg, bmp, png, jpeg'
            ]);

            $fileName = time() . '_' . $file->getClientOriginalName();
            $news->image = $fileName;

            $file->move(public_path('uploads/'), $fileName);
        }

        $news->title = $request->title;
        $news->intro = $request->intro;
        $news->content = $request->content;
        $news->status = $request->status;
        
        $news->save();

        dd($news);

        return redirect()->route('admin.news.index')->with('success', ['Update news successful']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $news = news::find($id);

        if ($news == null){
            abort(404);
        }

        $news -> delete();

        return redirect()->route('admin.news.index')->with('success', ['Create news news successful']);
    }
}
