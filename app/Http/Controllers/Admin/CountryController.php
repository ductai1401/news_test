<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Requests\Country\StoreRequest;
use App\Http\Requests\Country\UpdateRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::orderBy('created_at', 'desc')->get();
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

            $country->flag = $fileName;
            $file -> move(public_path('uploads/countrys'), $fileName );
            
        }

        $country -> name = $request ->name;
       
        $country->save();

        return redirect()->route('admin.country.index')->with('success', 'Update country successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);

        if($country == null) {
            return redirect()->route('admin.404');
        } 

        $old_image_path = public_path('uploads/countrys/'. $country->flag);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
            }


        $country->delete();

        return redirect()->route('admin.country.index')->with('success', 'Delete country success');
    }
}
