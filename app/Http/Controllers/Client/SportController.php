<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Medal;
use App\Models\Olympic_sport;
use App\Models\Sport;
use Illuminate\Http\Request;


class SportController extends Controller
{
    public function sport($name,$id) {
        $sport = Sport::where('id', $id)->where('status', 1)->first();
        $sport_child = Sport::select('id','name','parent_id')->where('parent_id', $id)->where('status', 1)->get();
       
        // $olympic_sport = Olympic_sport::with('sport')->select('id')->where('id_sport', $sport_child)->value('id');
        // dd($olympic_sport);
        
        // $sport_medal = Medal::with('sport','country','athlete')->where('id_olympic_sport', 'on', $olympic_sport ->id)->orderBY('posision', 'asc')->get();
        // dd($sport_medal);
        return view('client.sport_details',[
            'sport' => $sport,
            // 'sport_medals' => $sport_medal
            'sport_childs' => $sport_child,
            
        ]);
    }
}
