<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function athlete($id) {
        
        return view('client.athlete');
    }
}
