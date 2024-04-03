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
        $sport = Sport::where('id', $id)->first();
        $olympic_sport = Olympic_sport::with('sport')->where('id_sport', $id)->first();
        
        $sport_medal = Medal::with('sport','country','athlete')->where('id_olympic_sport',$olympic_sport ->id)->orderBY('posision', 'asc')->get();
        // dd($sport_medal);
        return view('client.sport_details',[
            'sport' => $sport,
            'sport_medals' => $sport_medal
            
        ]);
    }
}
