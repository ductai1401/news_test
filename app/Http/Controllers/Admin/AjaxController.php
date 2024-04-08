<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Country;
use App\Models\Olympic_sport;
use App\Models\Sport;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getSport($id) {
        $sports = Sport::where('status', '!=', 6)->get();
        $olympic_sport = Olympic_sport::with('sport')->where('status', '!=', 6)->where('id_olympic', $id)->get();
        
        echo "<option value='0'>-------Sport-------</option>";
        echo recursiveSport_olympic($olympic_sport, old('id_sport', 0) );   
    }

    public function getPosision(){
        echo "<option value=''>-------Posision-------</option>";
        for($i = 1 ; $i <= 10; $i++){
            echo "<option value='". $i ."'>" . $i . "</option>";
        }
    }

    public function getCountry() {

        $countrys = Country::where('status', '!=', 6)->orderBy('name', 'asc')->get();
        echo "<option value=''>-------country-------</option>";
        foreach($countrys as $country){
            echo "<option value='". $country->id."'>" .$country->name."</option> "; 
        };
    }

    public function getAthlete_sport($id) {

        $athletes = Athlete::where('status', '!=', 6)->where('id_sport', $id)->orderBy('name', 'asc')->get();
        echo "<option value=''>-------Athlete-------</option>";
        foreach($athletes as $athlete){
            echo "<option value='". $athlete->id."'>" .$athlete->name."</option> "; 
        };
    }

    public function getAthlete_country($id) {

        $athletes = Athlete::where('status', '!=', 6)->where('id_country', $id)->orderBy('name', 'asc')->get();
        echo "<option value=''>-------Athlete-------</option>";
        foreach($athletes as $athlete){
            echo "<option value='". $athlete->id."'>" .$athlete->name."</option> "; 
        };
    }
    // public function getOlympic_Sport($idOlympic , $idSport) {

    //     $olympic_sport = Olympic_sport::where('id_olympic', '=' ,$idOlympic)->where('id_sport', '=' ,$idSport )->first();
    //         echo "<input type='text' name='id_olympic_sport' value='".$olympic_sport->id."'>"; 
    // }

    public function getOlympic_sport() {

        $sports = Sport::where('status', '!=', 6)->get();
        echo "<option value='0'>-------Sport-------</option>";
        echo recursiveSport($sports, old('id_sport', 0) );
    }
}
