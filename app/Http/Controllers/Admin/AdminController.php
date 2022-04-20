<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Admin;
use Image;
use File;
class AdminController extends Controller
{
    public function login()
    {
    	return view('admin.auth.login');
    }

    public function store(Request $request)
    {
    	$check=$request->all();
    	if (Auth::guard('admin')->attempt([
           'email'=>$check['email'],'password'=>$check['password']
    	])) 
    	{
    		return redirect()->route('admin.dashboard');
    	}else{
    		return back()->with('error','Plase Provide Valid Email Or Password');
    	}
    }


    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function profile()
    {
      
        $id=Auth::guard('admin')->user()->id;
         $editData =Admin::find($id);
        return view('admin.auth.profile',compact('editData'));
    }


    public function update(Request $request)
    {
        $data = Admin::find(Auth::guard('admin')->user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->number = $request->number;

        if($request->hasfile('image'))
               {
                   $file = $request->file('image');
                   $extenstion = $file->getClientOriginalExtension();
                   $filename = time().'.'.$extenstion;
                   $file->move('admin/user/', $filename);
                   $data->image = $filename;
               }

          

          // if ($request->image > 0) {
          //  $image = $request->file('image');
          //  $img = time() . '.'. $image->getClientOriginalExtension();
          //  $location = public_path('admin/user/' .$img);
          //  Image::make($image)->save($location);
          //   $data->image = $img;
          // }

           $data->save();
             if ($data) {           
             $notification=array(
               'messege'=>'Profile Update  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);
        }

    }

    public function changePassord(){
        $id=Auth::guard('admin')->user()->id;
         $changepassword =Admin::find($id);
        return view('admin.auth.changepassword',compact('changepassword'));
    }

    public function UpdatePassword(Request $request)
    {
      //$password = Admin::find(Auth::guard('admin')->user()->password);
      $password = Auth::guard('admin')->user()->password;;
      //$password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::guard('admin')->id());
                      //$user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.login')->with($notification); 
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }
}
