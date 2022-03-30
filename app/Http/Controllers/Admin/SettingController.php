<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Image;
use DB;
class SettingController extends Controller
{
    public function setting()
    {
    	$setting=DB::table('settings')->first();
    	return view('admin.website.setting',compact('setting'));
    }

    public function update(Request $request,$id)
    {
    	 $setting =Setting::find($id);
    	 $setting->title=$request->title;
    	 $setting->email_one =$request->email_one;
    	 $setting->email_two =$request->email_two;
    	 $setting->telephone =$request->telephone;
    	 $setting->number_one =$request->number_one;
    	 $setting->number_two =$request->number_two;
    	 $setting->phone =$request->phone;
    	 $setting->address =$request->address;
    	 $setting->editor_name =$request->editor_name;
    	 $setting->facebook_link =$request->facebook_link;
    	 $setting->youtube_link =$request->youtube_link;

    	 if($request->hasfile('image'))
    	        {
    	            $file = $request->file('image');
    	            $extenstion = $file->getClientOriginalExtension();
    	            $filename = time().'.'.$extenstion;
    	            $file->move('admin/setting/', $filename);
    	            $setting->image = $filename;
    	        }

    	 // if ($request->image > 0) {
    	 //  $image = $request->file('image');
    	 //  $img = time() . '.'. $image->getClientOriginalExtension();
    	 //  $location = public_path('admin/setting/' .$img);
    	 //  Image::make($image)->save($location);
    	 //  $setting->image = $img;
    	 // }

    	 $setting->save();
    	     if ($setting) {           
    	     $notification=array(
    	       'messege'=>'Setting Updated Successfully',
    	       'alert-type'=>'success'
    	        );
    	      return Redirect()->back()->with($notification);
    	}

    }
}
