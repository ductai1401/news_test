<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Olympic_sport\StoreRequest;
use App\Http\Requests\Olympic_sport\UpdateRequest;
use App\Models\Athlete;
use App\Models\Country;
use App\Models\Medal;
use App\Models\Olympic;
use App\Models\Olympic_sport;
use App\Models\Sport;
use Illuminate\Http\Request;

class Olympic_sportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $olympic_sport = olympic_sport::with('sport','olympic')->where('status', '!=' , '6')->orderBy('created_at', 'desc')->get();
        return view('admin.modules.olympic_sport.index', ['olympic_sports' => $olympic_sport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $olympic = Olympic::get();
        
        $sport = Sport::get();
        

        return view('admin.modules.olympic_sport.create',[
            'olympics' => $olympic,
            'sports' => $sport,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $olympic_sport = new Olympic_sport();

        
        $olympic_sport->id_sport = $request -> id_sport;
        $olympic_sport->status = $request -> status;
        $olympic_sport ->id_olympic = $request ->id_olympic;     

        $olympic_sport->save();

        return redirect()->route('admin.olympic_sport.create')->with('success', 'Create olympic_sport successfully');
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
        $olympic_sport = olympic_sport::where('id',$id)->first();
        $olympic = Olympic::get();
        $sport = Sport::get();
        

        if($olympic_sport == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.olympic_sport.edit', [
            'id' => $id,
            'olympic_sport' => $olympic_sport,
            'olympics' => $olympic,
            'sports' => $sport,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        
        $olympic_sport = olympic_sport::find($id);

        $olympic_sport->id_sport = $request -> id_sport;
        $olympic_sport->status = $request -> status;
        $olympic_sport ->id_olympic = $request ->id_olympic;    

        $olympic_sport->save();

        return redirect()->route('admin.olympic_sport.index')->with('success', 'Update olympic_sport successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {


        $olympic_sport = olympic_sport::find($id);

         if($olympic_sport == null) {
            return redirect()->route('admin.404');
        } 


        $sport = Sport::where('id', $olympic_sport -> id_sport)->first();
        if($sport -> parent_id == 0){
            $sport_childs = Sport::where('parent_id', $sport -> id)->get();
            foreach($sport_childs as $sport_child){
                
                $olympic_sport_child = olympic_sport::where('id_sport', $sport_child ->id)->where('id_olympic', $olympic_sport ->id_olympic)->first();
                if($olympic_sport_child){
                    $medals = Medal::where('id_olympic_sport', $olympic_sport_child ->id)->first();
                    $medals ->status = 6;
                    $medals ->save(); 
                    $olympic_sport_child ->status = 6;
                    $olympic_sport_child ->save();
                }
                
                
            }
        }else {
            $medals = Medal::where('id_olympic_sport', $id)->first(); 
            $medals ->status = 6;
            $medals ->save();

            
        }


       $olympic_sport -> status = 6;
            $olympic_sport->save();

        // $olympic_sport->delete();


        return redirect()->route('admin.olympic_sport.index')->with('success', 'Delete olympic_sport success');
    }
}
