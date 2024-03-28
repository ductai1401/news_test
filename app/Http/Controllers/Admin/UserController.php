<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\UpdateRequests;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->get();
        return view('admin.modules.user.index',[
            'users' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $user = new User();
        

        $file = $request ->image;
        if(!empty($file)){
            
            $validated = $request->validate([
                'image' => 'mimes:mimes:jbg,jpeg,bmp,png',
                
            ],[
                'image.mimes' => 'Image must jbg,jpeg,bmp,jpg', 
            ]);

            $fileName = time(). '-'.  $file->getClientOriginalName(); 

            $user->image = $fileName;
            $file -> move(public_path('uploads/users'), $fileName );
            
        }

        $user->fullname = $request -> fullname; 
        $user->email = $request -> email; 
        $user->phone = $request -> phone; 
        $user->status = $request -> status; 
        $user->level = $request -> level; 
        $user->address = $request -> address; 
        $user -> password= bcrypt($request -> password);

        
        $user->save();

        return redirect()->route('admin.user.create')->with('success', 'Create user successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $user = User::find($id);
        return view('admin.modules.user.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $user = User::find($id);
        if($user == null) {
            return redirect()->route('admin.404');
        } 

        return view('admin.modules.user.edit', [
            'id' => $id,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,$id)
    {
        $user = User::find($id);


        if($user == null) {
            return redirect()->route('admin.404');
        } 

        
        $file = $request ->image;
        if(!empty($file)){
            
            $validated = $request->validate([
                'image' => 'mimes:jbg,jpeg,bmp,png',
                
            ],[
                'image.mimes' => 'Image must jbg,jpeg,bmp,png', 
            ]);

            $old_image_path = public_path('uploads/users/'. $user->image);
            if(file_exists($old_image_path)){
                unlink($old_image_path);
            }

            $fileName = time(). '-'.  $file->getClientOriginalName(); 

            $user->image = $fileName;
            $file -> move(public_path('uploads/users'), $fileName );
            
        }

        if(!empty($request->password)){
            $validated = $request -> validate(
                [
                    'password' => 'comfirmed',
                ],
                [
                    'password.comfirmed' => 'mật khẩu xác nhận không trùng khớp',
                ]
            );
            $user->password = bcrypt($request -> password);
        }

        $user->fullname = $request -> fullname; 
        $user->email = $request -> email; 
        $user->phone = $request -> phone; 
        $user->status = $request -> status; 
        $user->level = $request -> level; 
        $user->address = $request -> address;

       
        $user->save(); 

        return redirect()->route('admin.user.index')->with('success', 'Update user successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $user = User::find($id);

        if($user == null) {
            return redirect()->route('admin.404');
        } 

        // $user->delete();
        $user ->status = 6;
        $user ->save();


        return redirect()->route('admin.user.index')->with('success', 'Delete user success');
    }
}
