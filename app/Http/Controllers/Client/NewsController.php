<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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
}
