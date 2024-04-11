<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Comment\StoreRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\News;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class NewsController extends Controller
{
    public function singleNews($id){
        $news = News::where('id', $id)->first();

        $comment = Comment::with('user')
        ->where('status', 1)->where('id_news', $id)->get();

       
       

        $quantity = Comment::select('id')->where('status', 1)->where('id_news', $id) ->count('id');
       

        

        return view('client.single_news',[
            'news' => $news,
            'comments' => $comment,
            'quantity' => $quantity
        ]);
    }

    public function searchNews(Request $request){
        
        $data = $request ->input('search', session::get('data', ''));
        Session::put('data', $data);
        
        
        $hot_news = News::where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();
        $news = News::where('status', 1)
        ->where('title', 'like', "%$data%")
        ->orWhere('intro', 'like', "%$data%")
        ->paginate('10');
        $news_page = News::paginate('10');

        $news_category = News::select('id_category')
        ->where('status', 1)
        ->where('title', 'like', "%$data%")
        ->orWhere('intro', 'like', "%$data%")
        ->groupBy('id_category')->get();
       
        return view('client.search_news', [
            'news' => compact('news'),
            'search' => $data,
            'news_categories' => $news_category,
            'hot_news' => $hot_news,
        ]);
    }

    public function storeComment(StoreRequest $request, $id)
   
    {
        // $request -> validated([
        //     'email' => 'required',
        //     'content' => 'required',
        //     'fullname' => 'required'
        // ],[
        //     'fullname.required' => 'The fullname cannot be left blank !!!',
        //     'email.unique' => 'The email cannot be left blank !!!',
        //     'content.unique' => 'The comment cannot be left blank !!!'
        // ]);

        $id_news = News::select()->where('id', $id)->first();

        $comment = new Comment();

        $comment -> id_news = $id_news ->id;
        $comment -> id_user = Auth::user()->id;
        $comment -> content = $request -> content;
      
        $comment ->save();



        return redirect()->back()->with('msg','Bình luận đã được lưu thành công!');
    }

    public function checkLogin(){
        $isLoggedIn = auth()->check();

        return response()->json(['isLoggedIn' => $isLoggedIn]);
    }


    
}
