<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
class UserController extends Controller
{
    	public function all()
    	{
    		$user=Admin::all();
    		return view('admin.user.index',compact('user'));
    	}
        public function add()
        {

        	
        	return view('admin.user.add');
        }

        public function store(Request $request)
        {
        	 $validatedData = $request->validate([
              'name' => 'required',
              'image' => 'required',
              'email' =>'required|unique:admins|max:255',
              'password' => 'required',
             
             
          ]);
              $user = new Admin();
              $user->name=$request->name;
              $user->type =$request->type;
              $user->email =$request->email;
              $user->number =$request->number;
              $user->password =Hash::make($request->password);
              $user->category =$request->category;
              $user->division =$request->division;
              $user->post =$request->post;
              $user->video_post =$request->video_post;
              $user->user =$request->user;
              $user->website =$request->website;


                 if($request->hasfile('image'))
               {
                   $file = $request->file('image');
                   $extenstion = $file->getClientOriginalExtension();
                   $filename = time().'.'.$extenstion;
                   $file->move('admin/user/', $filename);
                   $user->image = $filename;
               }

               //return response()->json($user);




              $user->save();
                if ($user) {           
                $notification=array(
                  'messege'=>'User Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$user= Admin::find($id);
        	 if (!is_null($user)) {
          return view('admin.user.edit', compact('user'));
           }else {
          return resirect()->route('all.user');
           }
        }


        public function update(Request $request,$id)
        {
        $user = Admin::find($id);
        $user->name=$request->name;
        $user->type =$request->type;
        $user->email =$request->email;
        $user->number =$request->number;
        $user->password =Hash::make($request->password);
        $user->category =$request->category;
        $user->division =$request->division;
        $user->post =$request->post;
        $user->video_post =$request->video_post;
        $user->user =$request->user;
        $user->website =$request->website;

          if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('admin/user/', $filename);
            $user->image = $filename;
        }

        
              $user->save();
                if ($user) {           
                $notification=array(
                  'messege'=>'User Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.user')->with($notification);
           }
        }

        public function delete($id)
        {
        	$delete = Admin::find($id);
        	$delete->delete();
        	 $notification=array(
        	      'messege'=>'User Deleted Successfully',
        	      'alert-type'=>'success'
        	       );
        	     return Redirect()->back()->with($notification);
        }
}
