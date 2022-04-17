<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distric;
use Illuminate\Support\Str;
class DistricController extends Controller
{
    	public function all()
    	{
    		$distric=Distric::all();
    		return view('admin.distric.index',compact('distric'));
    	}
        public function add()
        {

        	
        	return view('admin.distric.add');
        }

        public function store(Request $request)
        {
        	
              $distric = new Distric();
              $distric->name=$request->name;
              $distric->status =$request->status;
              $distric->division_id =$request->division_id;
              $distric->slug =Str::slug($request->name);
              $distric->seo_title =$request->seo_title;
              $distric->seo_desc =$request->seo_desc;




              $distric->save();
                if ($distric) {           
                $notification=array(
                  'messege'=>'Distric Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$distric= Distric::find($id);
        	 if (!is_null($distric)) {
          return view('admin.distric.edit', compact('distric'));
           }else {
          return resirect()->route('all.distric');
           }
        }


        public function update(Request $request,$id)
        {
         $distric = Distric::find($id);
        $distric->name=$request->name;
        $distric->status =$request->status;
        $distric->division_id =$request->division_id;
        $distric->slug =Str::slug($request->name);
        $distric->seo_title =$request->seo_title;
        $distric->seo_desc =$request->seo_desc;
              $distric->save();
                if ($distric) {           
                $notification=array(
                  'messege'=>'Distric Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.distric')->with($notification);
           }
        }
}
