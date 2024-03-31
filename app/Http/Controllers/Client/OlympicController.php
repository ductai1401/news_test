<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Olympic;
use App\Models\Sport;
use Illuminate\Http\Request;

class OlympicController extends Controller
{
    public function olympic_games() {

        return view('client.olympic_games');
    }

    public function olympic_seasion($name,$id){
        $olympic = Olympic::where('id', $id)->first();
        $sport = Olympic::with('sport')->where('id', $id)->first();
        

        return view('client.olympic_seasion', [
            'olympic' => $olympic,
            'sports' => $sport,
        ]);
    }
}
