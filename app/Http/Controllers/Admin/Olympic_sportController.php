<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Country;
use App\Models\Olympic_sport;
use Illuminate\Http\Request;

class Olympic_sportController extends Controller
{
    public function getSport($id) {

        $olympic_sport = Olympic_sport::with('sport')->where('id_olympic', $id)->orderBy('name', 'asc')->get();
        echo "<option value=''>-------Sport-------</option>";
        foreach($olympic_sport as $o_s){
            echo "<option value='". $o_s->sport->id."'>" .$o_s->sport->name."</option> "; 
        };
    }

    public function getCountry() {

        $countrys = Country::orderBy('name', 'asc')->get();
        echo "<option value=''>-------country-------</option>";
        foreach($countrys as $country){
            echo "<option value='". $country->id."'>" .$country->name."</option> "; 
        };
    }

    public function getAthlete_sport($id) {

        $athletes = Athlete::where('id_sport', $id)->orderBy('name', 'asc')->get();
        echo "<option value=''>-------Athlete-------</option>";
        foreach($athletes as $athlete){
            echo "<option value='". $athlete->id."'>" .$athlete->name."</option> "; 
        };
    }

    public function getAthlete_country($id) {

        $athletes = Athlete::where('id_country', $id)->orderBy('name', 'asc')->get();
        echo "<option value=''>-------Athlete-------</option>";
        foreach($athletes as $athlete){
            echo "<option value='". $athlete->id."'>" .$athlete->name."</option> "; 
        };
    }
    // public function getOlympic_Sport($idOlympic , $idSport) {

    //     $olympic_sport = Olympic_sport::where('id_olympic', '=' ,$idOlympic)->where('id_sport', '=' ,$idSport )->first();
    //         echo "<input type='text' name='id_olympic_sport' value='".$olympic_sport->id."'>"; 
    // }
}
