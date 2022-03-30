<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use Illuminate\Support\Str;
class DivisionController extends Controller
{
    	public function all()
    	{
    		$division=Division::all();
    		return view('admin.division.index',compact('division'));
    	}
        public function add()
        {

        	
        	return view('admin.division.add');
        }

        public function store(Request $request)
        {
        	 $validatedData = $request->validate([
              'name' => 'required|unique:divisions|max:255',
             
          ]);
              $division = new Division();
              $division->name=$request->name;
              $division->status =$request->status;
              $division->slug =Str::slug($request->name);
              $division->seo_title =$request->seo_title;
              $division->seo_desc =$request->seo_desc;




              $division->save();
                if ($division) {           
                $notification=array(
                  'messege'=>'Division Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$division= Division::find($id);
        	 if (!is_null($division)) {
          return view('admin.division.edit', compact('division'));
           }else {
          return resirect()->route('all.division');
           }
        }


        public function update(Request $request,$id)
        {
         $division = Division::find($id);
         $division->name=$request->name;
         $division->status =$request->status;
         $division->slug =Str::slug($request->name);
         $division->seo_title =$request->seo_title;
         $division->seo_desc =$request->seo_desc;
         
              $division->save();
                if ($division) {           
                $notification=array(
                  'messege'=>'Division Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.division')->with($notification);
           }
        }
}
