<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Olympic_sport;
use Illuminate\Http\Request;

class Olympic_sportController extends Controller
{
    public function getSport($idOlympic) {

        $olympic_sport = Olympic_sport::with('sport')->where('id_olympic', $idOlympic)->get();
        foreach($olympic_sport as $o_s){
            dd($o_s);
            echo "<option value='". $o_s->sport->id."'>" .$o_s->sport->name."</option> "; 
        };
    }
}
