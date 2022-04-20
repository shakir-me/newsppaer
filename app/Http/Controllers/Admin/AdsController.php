<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ads;
use Image;
class AdsController extends Controller
{
    	public function all()
    	{
    		$ads=Ads::all();
    		return view('admin.ads.index',compact('ads'));
    	}
        public function add()
        {

        	
        	return view('admin.ads.add');
        }

        public function store(Request $request)
        {
        	 $validatedData = $request->validate([
              'link' => 'required',
              // 'image' => 'required',
             
          ]);
              $ads = new Ads();
              $ads->link=$request->link;
              $ads->ads_one =$request->ads_one;
              $ads->ads_two =$request->ads_two;
              $ads->ads_three =$request->ads_three;
              $ads->ads_four =$request->ads_four;
              $ads->ads_five =$request->ads_five;
              $ads->ads_six =$request->ads_six;
              $ads->ads_seven =$request->ads_seven;
              $ads->ads_eight =$request->ads_eight;
              $ads->ads_nine =$request->ads_nine;
              $ads->ads_ten =$request->ads_ten;
              
            if ($request->image > 0) {
           $image = $request->file('image');
           $img = time() . '.'. $image->getClientOriginalExtension();
           $location = public_path('admin/ads/' .$img);
           Image::make($image)->save($location);
           $ads->image = $img;
          }


            //      if($request->hasfile('image'))
            //   {
            //       $file = $request->file('image');
            //       $extenstion = $file->getClientOriginalExtension();
            //       $filename = time().'.'.$extenstion;
            //       $file->move('admin/ads/', $filename);
            //       $ads->image = $filename;
            //   }

               //return response()->json($ads);




              $ads->save();
                if ($ads) {           
                $notification=array(
                  'messege'=>'Ads Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$ads= Ads::find($id);
        	 if (!is_null($ads)) {
          return view('admin.ads.edit', compact('ads'));
           }else {
          return resirect()->route('all.ads');
           }
        }


        public function update(Request $request,$id)
        {
        $ads = Ads::find($id);
        $ads->link=$request->link;
        $ads->ads_one =$request->ads_one;
        $ads->ads_two =$request->ads_two;
        $ads->ads_three =$request->ads_three;
        $ads->ads_four =$request->ads_four;
        $ads->ads_five =$request->ads_five;
        $ads->ads_six =$request->ads_six;
        $ads->ads_seven =$request->ads_seven;
        $ads->ads_eight =$request->ads_eight;
        $ads->ads_nine =$request->ads_nine;
        $ads->ads_ten =$request->ads_ten;
        
          if ($request->image > 0) {
           $image = $request->file('image');
           $img = time() . '.'. $image->getClientOriginalExtension();
           $location = public_path('admin/ads/' .$img);
           Image::make($image)->save($location);
           $ads->image = $img;
          }


        //   if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extenstion;
        //     $file->move('admin/ads/', $filename);
        //     $ads->image = $filename;
        // }

        
              $ads->save();
                if ($ads) {           
                $notification=array(
                  'messege'=>'Ads Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.ads')->with($notification);
           }
        }

        public function delete($id)
        {
        	$delete = Ads::find($id);
        	$delete->delete();
        	 $notification=array(
        	      'messege'=>'Ads Deleted Successfully',
        	      'alert-type'=>'success'
        	       );
        	     return Redirect()->back()->with($notification);
        }
}
