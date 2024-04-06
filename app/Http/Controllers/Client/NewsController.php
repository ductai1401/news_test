<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function singleNews($id){
        $news = News::where('id', $id)->first();

        return view('client.single_news',[
            'news' => $news,
        ]);
    }

    public function searchNews(Request $request){
        $data = $request ->search;
        $hot_news = News::where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();
        $news = News::where('status', 1)
        ->where('title', 'like', "%$data%")
        ->orWhere('key_word', 'like', "%$data%")
        ->orWhere('intro', 'like', "%$data%")
        ->take(8)->get();

        $news_category = News::select('id_category')
        ->where('status', 1)
        ->where('title', 'like', "%$data%")
        ->orWhere('key_word', 'like', "%$data%")
        ->orWhere('intro', 'like', "%$data%")
        ->groupBy('id_category')->get();



        
    
        return view('client.search_news', [
            'news' => $news,
            'search' => $data,
            'news_categories' => $news_category,
            'hot_news' => $hot_news,
        ]);
    }

   
}
