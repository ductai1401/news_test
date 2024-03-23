<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sport\StoreRequest;
use App\Http\Requests\Sport\UpdateRequest;
use App\Models\Sport;


use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sport = Sport::orderBy('created_at', 'desc')->get();
        return view('admin.modules.sport.index', ['sports' => $sport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.sport.create');
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
        $sport = Sport::find($id);
        if($sport == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.sport.edit', [
            'id' => $id,
            'sport' => $sport,
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

        $old_image_path = public_path('uploads/sports/'. $sport->image);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
            }


        $sport->delete();

        return redirect()->route('admin.sport.index')->with('success', 'Delete sport success');
    }
}
