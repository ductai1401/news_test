<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Models\User;
use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comment = Comment::with('user','news')->where('status', '!=', 6)->orderBy('created_at', 'desc')->get(); 

        return view('admin.modules.comment.index', ['comments' => $comment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comment = comment::get();
        $user = user::get();
        $news = News::get();

        return view('admin.modules.comment.create',[
            'comments' => $comment,
            'users' => $user,
            'news' => $news,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $comment = new Comment();

        $comment->content = $request ->content ;
        $comment->id_news = $request -> id_news;
        $comment->id_user = $request -> id_user;
        $comment->status = $request -> status;


        $comment->save();

        return redirect()->route('admin.comment.create')->with('success', 'Create comment successfully');
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

        $user = User::get();
        $news = News::get();

        $comment = Comment::find($id);
        if($comment == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.comment.edit', [
            'id' => $id,
            'news' => $news,
            'comment' => $comment,
            'users' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $comment = Comment::find($id);


        if($comment == null) {
            return redirect()->route('admin.404');
        } 

        $comment->content = $request -> content;
        $comment->id_news = $request -> id_news;
        $comment->id_user = $request -> id_user;
        $comment->status = $request -> status;
        
        dd($comment);

        $comment->save();

        return redirect()->route('admin.comment.index')->with('success', 'Update comment successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $comment = comment::find($id);

        if($comment == null) {
            return redirect()->route('admin.404');
        }

        $comment ->status = 6;
        $comment ->save();
        // $comment->delete();

        return redirect()->route('admin.comment.index')->with('success', 'Delete comment success');
    }

}
