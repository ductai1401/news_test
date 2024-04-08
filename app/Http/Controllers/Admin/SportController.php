<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sport\StoreRequest;
use App\Http\Requests\Sport\UpdateRequest;
use App\Models\Medal;
use App\Models\Olympic_sport;
use App\Models\Sport;


use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sport = Sport::where('status','!=', 6)->orderBy('created_at', 'desc')->get();
        return view('admin.modules.sport.index', ['sports' => $sport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sport = Sport::select('id','parent_id','name')->get();
        return view('admin.modules.sport.create', [
            'sports' => $sport,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $sport = new Sport();

        $file = $request -> image;
        $fileName = time(). '-'.  $file->getClientOriginalName();


        $sport->image = $fileName;
        $sport->name = $request -> name;
        $sport->details = $request -> details;     
        $sport -> parent_id = $request -> parent_id;

        $sport->save();

        $file -> move(public_path('uploads/sports'), $fileName);
        return redirect()->route('admin.sport.create')->with('success', 'Create sport successfully');
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

        $sports = Sport::select('id','parent_id','name')->get();
        $sport = Sport::find($id);
        if($sport == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.sport.edit', [
            'id' => $id,
            'sport' => $sport,
            'sports' => $sports,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $sport = Sport::find($id);


        if($sport == null) {
            return redirect()->route('admin.404');
        } 

        
        $file = $request ->image;
        if(!empty($file)){
            
            $validated = $request->validate([
                'image' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'image.mimes' => 'Image must jbg,jpeg,bmp,png', 
            ]);

            $old_image_path = public_path('uploads/sports/'. $sport->image);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
                
            }

            $fileName = time(). '-'.  $file->getClientOriginalName(); 

            $sport->image = $fileName;
           
            $file -> move(public_path('uploads/sports'), $fileName );
        }

        $sport -> name = $request ->name;
        $sport -> details = $request ->details;
        $sport -> parent_id = $request -> parent_id;

        $sport->save();

        

        
        return redirect()->route('admin.sport.index')->with('success', 'Update sport successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $sport = Sport::find($id);


        if($sport == null) {
            return redirect()->route('admin.404');
        } 
        
       
        if($sport -> parent_id == 0){
            $sport_childs = Sport::select('id')->where('parent_id', $sport -> id)->get(); 
            
            
            $olympic_sport_parent = Olympic_sport::find($id);
            foreach($sport_childs as $sport_child){
               $olympic_sport = Olympic_sport::where('id_sport' ,$sport_child ->id)->first();
               if($olympic_sport){
                $olympic_sport_child = olympic_sport::where('id_sport', $sport_child ->id)->where('id_olympic', $olympic_sport ->id_olympic)->first();
                $medals = Medal::where('id_olympic_sport', $olympic_sport_child ->id)->first();

                $medals ->status = 6;
                $medals ->save(); 

                $olympic_sport_child ->status = 6;
                
                $olympic_sport_child ->save();
                               
               }
                $sport_child ->status = 6;
                $sport_child ->save();
               $olympic_sport_parent ->status = 6;
                $olympic_sport_parent ->save();
            }
        }else {
             $olympic_sports = Olympic_sport::where('id_sport', $id)->first();
            $medals = Medal::where('id_olympic_sport', $olympic_sports ->id)->first(); 
            $medals ->status = 6;
            $medals ->save();
            $olympic_sports ->status = 6;
        
            $olympic_sports ->save();
            
        }
        $sport ->status = 6;
        $sport ->save();
        // $sport->delete();

        return redirect()->route('admin.sport.index')->with('success', 'Delete sport success');
    }
}
