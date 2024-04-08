<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Medal;
use App\Models\Olympic;
use App\Models\Olympic_sport;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function athlete($id) {

        $athlete = Athlete::with('sports','country')->where('id', $id)->where('status', 1)->first();
        // $medal = Medal::with('athlete')->where('id_athlete', $id)->first();
        $medal_gold = Medal::with('athlete')->where('id_athlete', $id)->where('posision', 1)->where('status', 1)->count();
        $medal_silver = Medal::with('athlete')->where('id_athlete', $id)->where('posision', 2)->where('status', 1)->count();
        $medal_bronze = Medal::with('athlete')->where('id_athlete', $id)->where('posision', 3)->where('status', 1)->count();
        $Games_Participations = Medal::where('id_athlete', $id)->where('status', 1)->count();
        $olympics = Medal::with('olympic')->where('id_athlete', $id)->where('status', 1)->first();
        $medal = Medal::where('id_athlete', $id)->first();
        $olympic_medal = Medal::with('olympic','country','sport')->where('id_athlete', $id)->where('status', 1)->get();
            $dum = 2024;
            if( $dum > $olympics ->olympic ->year){
                $dum = $olympics ->olympic ->year;
            }
        return view('client.athlete', [
            'athlete' => $athlete,
            'gold' => $medal_gold,
            'silver' => $medal_silver,
            'bronze' => $medal_bronze,
            'Games_Participations' => $Games_Participations,
            'first_olympic_Games' => $dum,
            'medals' => $medal,
            'olympic_medals' => $olympic_medal
        ]);
    }
}
