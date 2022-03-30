<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoCategory;
use Illuminate\Support\Str;
class VideoCategoryController extends Controller
{
    	public function all()
    	{
    		$videocategory=VideoCategory::all();
    		return view('admin.videocategory.index',compact('videocategory'));
    	}
        public function add()
        {

        	
        	return view('admin.videocategory.add');
        }

        public function store(Request $request)
        {
        	 $validatedData = $request->validate([
              'name' => 'required',
             
          ]);
              $videocategory = new VideoCategory();
              $videocategory->name=$request->name;
              $videocategory->slug =Str::slug($request->name);




              $videocategory->save();
                if ($videocategory) {           
                $notification=array(
                  'messege'=>'VideoCategory Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$videocategory= VideoCategory::find($id);
        	 if (!is_null($videocategory)) {
          return view('admin.videocategory.edit', compact('videocategory'));
           }else {
          return resirect()->route('all.videocategory');
           }
        }


        public function update(Request $request,$id)
        {
          $videocategory = VideoCategory::find($id);
          $videocategory->name=$request->name;
          $videocategory->slug =Str::slug($request->name);
              $videocategory->save();
                if ($videocategory) {           
                $notification=array(
                  'messege'=>'videocategory Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.videocategory')->with($notification);
           }
        }

        public function delete($id)
        {
          $delete = VideoCategory::find($id);
          $delete->delete();
           $notification=array(
                'messege'=>'VideoCategory Deleted Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
}
