<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Requests\Country\StoreRequest;
use App\Http\Requests\Country\UpdateRequest;
use App\Models\Athlete;
use App\Models\Medal;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::where('status', '!=', 6)->orderBy('created_at', 'desc')->get();
        return view('admin.modules.country.index',[
            'countrys' => $country,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $country = new country();

        $file = $request -> flag;
        $fileName = time(). '-'.  $file->getClientOriginalName();


        $country->flag = $fileName;
        $country->name = $request -> name; 
        $country->status = $request -> status; 

        $country->save();

        $file -> move(public_path('uploads/countrys'), $fileName);
        return redirect()->route('admin.country.create')->with('success', 'Create country successfully');
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
        $country = country::find($id);
        if($country == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.country.edit', [
            'id' => $id,
            'country' => $country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $country = country::find($id);


        if($country == null) {
            return redirect()->route('admin.404');
        } 

        
        $file = $request ->flag;
        if(!empty($file)){
            
            $validated = $request->validate([
                'flag' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'flag.mimes' => 'Image must jbg,jpeg,bmp,png', 
            ]);

            $old_image_path = public_path('uploads/countrys/'. $country->flag);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
            }

            $fileName = time(). '-'.  $file->getClientOriginalName(); 

            $country ->flag = $fileName;
            $file -> move(public_path('uploads/countrys'), $fileName );
            
        }

        $country ->name = $request ->name;
        $country ->status = $request ->status; 
       
        $country->save();

        return redirect()->route('admin.country.index')->with('success', 'Update country successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);
        $athlete = Athlete::where('id_country',$id)->get();
        
        if($country == null) {
            return redirect()->route('admin.404');
        } 

        // $country->delete();
        $country ->status = 6;
        foreach($athlete as $a){
            $id = $a ->id;
            $medal = Medal::where('id_athlete',$id)->get();
            foreach($medal as $m){
                $m ->status = 6;
                $m ->save();
            };
            
            $a->status = 6;
            $a->save();
        }

        $country->save();
        

        return redirect()->route('admin.country.index')->with('success', 'Delete country success');
    }
}
