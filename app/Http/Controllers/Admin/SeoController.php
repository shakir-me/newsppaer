<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Seo;
use Image;
class SeoController extends Controller
{
        public function Seo()
        {
    	$seo=DB::table('seos')->first();
    	return view('admin.website.seo',compact('seo'));

        	
        }

        public function SeoUpdate(Request $request,$id)
        {
        	 $seo =Seo::find($id);
        	 $seo->seo_title=$request->seo_title;
        	 $seo->seo_desc =$request->seo_desc;
        	 $seo->sec_keywords =$request->sec_keywords;
        	 $seo->fbpage_link =$request->fbpage_link;
        	 $seo->fbapp_id =$request->fbapp_id;
        	 if($request->hasfile('image'))
        	       // {
        	       //     $file = $request->file('image');
        	       //     $extenstion = $file->getClientOriginalExtension();
        	       //     $filename = time().'.'.$extenstion;
        	       //     $file->move('admin/setting/', $filename);
        	       //     $setting->image = $filename;
        	       // }

        	  if ($request->image > 0) {
        	   $image = $request->file('image');
        	   $img = time() . '.'. $image->getClientOriginalExtension();
        	   $location = public_path('admin/seo/' .$img);
        	   Image::make($image)->save($location);
        	   $seo->image = $img;
        	  }

        	 $seo->save();
        	     if ($seo) {           
        	     $notification=array(
        	       'messege'=>'Seo Updated Successfully',
        	       'alert-type'=>'success'
        	        );
        	      return Redirect()->back()->with($notification);
        	}

        }
}
