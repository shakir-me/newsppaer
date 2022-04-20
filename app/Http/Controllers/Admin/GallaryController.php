<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallary;
use Illuminate\Support\Str;
use Image;
class GallaryController extends Controller
{
    	public function all()
    	{
    		$gallary=Gallary::all();
    		return view('admin.gallary.index',compact('gallary'));
    	}
        public function add()
        {

        	
        	return view('admin.gallary.add');
        }

        public function store(Request $request)
        {
        	 $validatedData = $request->validate([
              'name' => 'required',
             
          ]);
              $gallary = new Gallary();
              $gallary->name=$request->name;
              $gallary->status=$request->status;
              $gallary->desc=$request->desc;
              $gallary->first_section=$request->first_section;
              $gallary->second_section=$request->second_section;
              $gallary->slug =Str::slug($request->name);
              if ($request->image > 0) {
                       $image = $request->file('image');
                       $img = time() . '.'. $image->getClientOriginalExtension();
                       $location = public_path('admin/gallary/' .$img);
                       Image::make($image)->save($location);
                       $gallary->image = $img;
                      }

            //     if($request->hasfile('image'))
            //   {
            //       $file = $request->file('image');
            //       $extenstion = $file->getClientOriginalExtension();
            //       $filename = time().'.'.$extenstion;
            //       $file->move('admin/gallary/', $filename);
            //       $gallary->image = $filename;
            //   }




              $gallary->save();
                if ($gallary) {           
                $notification=array(
                  'messege'=>'Gallary Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
             $gallary= Gallary::find($id);
             return view('admin.gallary.edit',compact('gallary'));

        }


        public function update(Request $request,$id)
        {
         $gallary = Gallary::find($id);
         $gallary->name=$request->name;
         $gallary->status=$request->status;
         $gallary->desc=$request->desc;
         $gallary->slug =Str::slug($request->name);

        if ($request->image > 0) {
    	   $image = $request->file('image');
    	   $img = time() . '.'. $image->getClientOriginalExtension();
    	   $location = public_path('admin/gallary/' .$img);
    	   Image::make($image)->save($location);
    	   $gallary->image = $img;
    	  }



              $gallary->save();
                if ($gallary) {           
                $notification=array(
                  'messege'=>'Gallary Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.gallry')->with($notification);
           }
        }

        public function delete($id)
        {
          $delete = Gallary::find($id);
          $delete->delete();
           $notification=array(
                'messege'=>'Gallary Deleted Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
}
