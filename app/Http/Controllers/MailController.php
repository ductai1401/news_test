<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            
        ];

        Mail::to('luuductai12@gmail.com')->send(new DemoMail($mailData));

        dd('Success');
    }
}
