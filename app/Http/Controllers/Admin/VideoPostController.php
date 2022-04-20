<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoPost;
use Illuminate\Support\Str;
use Image;
use Auth;
class VideoPostController extends Controller
{
    	public function all()
    	{
        $userid=Auth::guard('admin')->user()->id;

    		$postvideo=VideoPost::where('admin_id',$userid)->get();
    		return view('admin.postvideo.index',compact('postvideo'));
    	}
        public function add()
        {

        	
        	return view('admin.postvideo.add');
        }

        public function store(Request $request)
        {
        	 // $validatedData = $request->validate([
          //     'link' => 'required',
          //     'image' => 'required',
             
          // ]);

        	 $postvideo = new VideoPost();
              $postvideo->title=$request->title;
              $postvideo->postcategory_id =$request->postcategory_id;
              $postvideo->icon =$request->icon;
              $postvideo->short_desc =$request->short_desc;
              $postvideo->long_desc =$request->long_desc;
              $postvideo->status =$request->status;
              $postvideo->slug =Str::slug($request->title);
              $postvideo->first_section =$request->first_section;
              $postvideo->second_section =$request->second_section;
       
              $current_user=Auth::guard('admin')->user();
              $user_id=$current_user->id;
              $postvideo->admin_id=$user_id;
              
           if ($request->image > 0) {
               $image = $request->file('image');
               $img = time() . '.'. $image->getClientOriginalExtension();
               $location = public_path('admin/video/' .$img);
               Image::make($image)->save($location);
               $postvideo->image = $img;
              }


       


           
               //return response()->json($postvideo);




              $postvideo->save();
                if ($postvideo) {           
                $notification=array(
                  'messege'=>'VideoPost Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$postvideo= VideoPost::find($id);
        	 if (!is_null($postvideo)) {
          return view('admin.postvideo.edit', compact('postvideo'));
           }else {
          return Redirect()->route('all.video');
           }
        }


        public function update(Request $request,$id)
        {
        $postvideo =VideoPost::find($id);
       $postvideo->title=$request->title;
       $postvideo->postcategory_id =$request->postcategory_id;
       $postvideo->icon =$request->icon;
       $postvideo->short_desc =$request->short_desc;
       $postvideo->long_desc =$request->long_desc;
       $postvideo->status =$request->status;
       $postvideo->link =$request->link;
       $postvideo->slug =Str::slug($request->title);
       $postvideo->first_section =$request->first_section;
       $postvideo->second_section =$request->second_section;
              
       $current_user=Auth::guard('admin')->user();
       $user_id=$current_user->id;
       $postvideo->admin_id=$user_id;

         if ($request->image > 0) {
               $image = $request->file('image');
               $img = time() . '.'. $image->getClientOriginalExtension();
               $location = public_path('admin/video/' .$img);
               Image::make($image)->save($location);
               $postvideo->image = $img;
              }



       
              $postvideo->save();
                if ($postvideo) {           
                $notification=array(
                  'messege'=>'VideoPost Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.video')->with($notification);
           }
        }

        public function delete($id)
        {
        	$delete=VideoPost::find($id);
        	$delete->delete();
        	 $notification=array(
        	      'messege'=>'VideoPost Deleted Successfully',
        	      'alert-type'=>'success'
        	       );
        	     return Redirect()->back()->with($notification);
        }
}
