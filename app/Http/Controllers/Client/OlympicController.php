<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Olympic;
use App\Models\Olympic_sport;
use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OlympicController extends Controller
{
    public function olympic_games() {

        return view('client.olympic_games');
    }

    public function olympic_seasion($name,$id){
        $olympic = Olympic::where('id', $id)->first();
        $sport = Olympic::with('sport')->where('id', $id)->first();
        $country = DB::table('countrys')
        ->join('medals', 'countrys.id', '=', 'medals.id_athlete')
        ->join('olympic_sports','medals.id_olympic_sport', '=', 'olympic_sports.id')
        ->where('countrys.status', 1)
        ->where('olympic_sports.id_olympic', '=', $olympic ->id)
        ->distinct()
        ->count("medals.id_country");

        $athlete = DB::table('athletes')
        ->join('medals', 'athletes.id', '=', 'medals.id_athlete')
        ->join('olympic_sports','medals.id_olympic_sport', '=', 'olympic_sports.id')
        ->where('athletes.status', 1)
        ->where('olympic_sports.id_olympic', '=', $olympic ->id)
        ->distinct()
        ->count('athletes.id');
        
        $sport_count = DB::table('sports')
        ->join('olympic_sports','sports.id', '=', 'olympic_sports.id_sport')
        ->where('sports.status', 1)
        ->where('olympic_sports.id_olympic', '=', $olympic ->id)
        ->distinct()
        ->count('sports.id');

        return view('client.olympic_seasion', [
            'olympic' => $olympic,
            'sports' => $sport,
            'country' => $country,
            'athlete' => $athlete,
            'sport_count' => $sport_count,
        ]);
    }
}
