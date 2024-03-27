<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Sport;
use App\Models\Country;
use App\Http\Requests\Athlete\StoreRequest;
use App\Http\Requests\Athlete\UpdateRequest;
use App\Models\Medal;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $country = Country::get(); 

        $athlete = Athlete::with('sports','country')->where('status', '!=', 6)->orderBy('created_at','desc')->get();
        
        return view('admin.modules.athlete.index', ['athletes' => $athlete]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::get();
        $sport = Sport::get();

        return view('admin.modules.athlete.create',[
            'countrys' => $country,
            'sports' => $sport,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $athlete = new Athlete();

        $file = $request -> image;
        $fileName = time(). '-'.  $file->getClientOriginalName();


        $athlete->image = $fileName;
        $athlete->name = $request -> name;
        $athlete->id_country = $request -> id_country;
        $athlete->id_sport = $request -> id_sport;
        $athlete->brith_day = $request -> brith_day;
        $athlete->status = $request -> status; 


        $athlete->save();

        $file -> move(public_path('uploads/athletes'), $fileName);
        return redirect()->route('admin.athlete.create')->with('success', 'Create athlete successfully');
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

        $sport = Sport::get();
        $country = Country::get();

        $athlete = athlete::find($id);
        if($athlete == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.athlete.edit', [
            'id' => $id,
            'athlete' => $athlete,
            'countrys' => $country,
            'sports' => $sport,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $athlete = athlete::find($id);


        if($athlete == null) {
            return redirect()->route('admin.404');
        } 

        
        $file = $request ->image;
        if(!empty($file)){
            
            $validated = $request->validate([
                'image' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'image.mimes' => 'Image must jbg,jpeg,bmp,png', 
            ]);

            $old_image_path = public_path('uploads/athletes/'. $athlete->image);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
                
            }

            $fileName = time(). '-'.  $file->getClientOriginalName(); 

            $athlete->image = $fileName;
            $file -> move(public_path('uploads/athletes'), $fileName );
            
        }

        $athlete->name = $request -> name;
        $athlete->id_country = $request -> id_country;
        $athlete->id_sport = $request -> id_sport;
        $athlete->brith_day = $request -> brith_day;
        $athlete->status = $request -> status; 
        

        $athlete->save();

        return redirect()->route('admin.athlete.index')->with('success', 'Update athlete successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $athlete = Athlete::find($id);
        $medal = Medal::where('id_athlete',$id)->get();

        if($athlete == null) {
            return redirect()->route('admin.404');
        } 

    
        foreach($medal as $m){
            $m ->status = 6;
            $m ->save();
        }

        $athlete ->status = 6;
        $athlete ->save();
        // $athlete->delete();

        return redirect()->route('admin.athlete.index')->with('success', 'Delete athlete success');
    }

}

