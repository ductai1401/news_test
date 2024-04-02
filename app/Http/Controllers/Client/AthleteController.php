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
        $athlete = Athlete::with('sports','country')->where('id', $id)->first();
        // $medal = Medal::with('athlete')->where('id_athlete', $id)->first();
        $medal_gold = Medal::with('athlete')->where('id_athlete', $id)->where('posision', 1)->count();
        $medal_silver = Medal::with('athlete')->where('id_athlete', $id)->where('posision', 2)->count();
        $medal_bronze = Medal::with('athlete')->where('id_athlete', $id)->where('posision', 3)->count();
        $Games_Participations = Medal::where('id_athlete', $id)->count();
        $olympics = Medal::with('olympic')->where('id_athlete', $id)->first();
        $medal = Medal::where('id_athlete', $id)->get();
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
        ]);
    }
}
