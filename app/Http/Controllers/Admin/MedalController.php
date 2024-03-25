<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Medal\StoreRequest;
use App\Http\Requests\Medal\UpdateRequest;
use App\Models\Athlete;
use App\Models\Country;
use App\Models\Medal;
use App\Models\Olympic_sport;
use Illuminate\Http\Request;

class MedalController extends Controller
{   
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    { 

        

        $medal = Medal::with('athlete')->get();
        dd($medal);
       
        return view('admin.modules.medal.index', ['medals' => $medal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::get();
        $athlete = Athlete::get();

        $sport_olympic = Olympic_sport::with('sport')->get();
        
        
        return view('admin.modules.medal.create',[
            'countrys' => $country,
            'athletes' => $athlete,
            'sport_olympics' => $sport_olympic,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $medal = new Medal();

        
        $medal->id_olympic_sport = $request -> id_olympic_sport;
        $medal->id_country = $request -> id_country;
        $medal->id_athlete = $request -> id_athlete;
        $medal->brith_day = $request -> brith_day;


        $medal->save();

        return redirect()->route('admin.medal.create')->with('success', 'Create medal successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        $athlete = Athlete::get();
        $country = Country::get();

        $medal = medal::find($id);
        if($medal == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.medal.edit', [
            'id' => $id,
            'medal' => $medal,
            'countrys' => $country,
            'athletes' => $athlete,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $medal = medal::find($id);


        if($medal == null) {
            return redirect()->route('admin.404');
        } 

        
        $file = $request ->image;
        if(!empty($file)){
            
            $validated = $request->validate([
                'image' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'image.mimes' => 'Image must jbg,jpeg,bmp,png', 
            ]);

            $old_image_path = public_path('uploads/medals/'. $medal->image);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
                
            }

            $fileName = time(). '-'.  $file->getClientOriginalName(); 

            $medal->image = $fileName;
            $file -> move(public_path('uploads/medals'), $fileName );
            
        }

        $medal->name = $request -> name;
        $medal->id_country = $request -> id_country;
        $medal->id_sport = $request -> id_sport;
        $medal->brith_day = $request -> brith_day;
        

        $medal->save();

        return redirect()->route('admin.medal.index')->with('success', 'Update medal successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $medal = medal::find($id);

        if($medal == null) {
            return redirect()->route('admin.404');
        } 

        $old_image_path = public_path('uploads/medals/'. $medal->image);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
            }


        $medal->delete();

        return redirect()->route('admin.medal.index')->with('success', 'Delete medal success');
    }

}
