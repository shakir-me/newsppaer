<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upoliza;
use App\Models\Distric;
use Illuminate\Support\Str;
class UpozilaController extends Controller
{
    	public function all()
    	{
    		$upoliza=Upoliza::all();
    		return view('admin.upoliza.index',compact('upoliza'));
    	}
        public function add()
        {
            $distric=Distric::all();
        	return view('admin.upoliza.add',compact('distric'));
        }

        public function store(Request $request)
        {
        	 $validatedData = $request->validate([
              'name' => 'required',
             
          ]);
              $upoliza = new Upoliza();
              $upoliza->name=$request->name;
              $upoliza->distric_id=$request->distric_id;
              $upoliza->status =$request->status;
              $upoliza->seo_title =$request->seo_title;
              $upoliza->seo_desc =$request->seo_desc;
              $upoliza->slug =Str::slug($request->name);




              $upoliza->save();
                if ($upoliza) {           
                $notification=array(
                  'messege'=>'Upoliza Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
           $distric=Distric::all();
        	$upliza= Upoliza::find($id);
        	 if (!is_null($upliza)) {
          return view('admin.upoliza.edit', compact('upliza', 'distric'));
           }else {
          return resirect()->route('all.upoliza');
           }
        }


        public function update(Request $request,$id)
        {
         $upoliza = Upoliza::find($id);
         $upoliza->name=$request->name;
         $upoliza->distric_id=$request->distric_id;
         $upoliza->status =$request->status;
         $upoliza->seo_title =$request->seo_title;
         $upoliza->seo_desc =$request->seo_desc;
         $upoliza->slug =Str::slug($request->name);

              $upoliza->save();
                if ($upoliza) {           
                $notification=array(
                  'messege'=>'Upoliza Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.upzila')->with($notification);
           }
        }

        public function delete($id)
        {
          $delete = Upoliza::find($id);
          $delete->delete();
           $notification=array(
                'messege'=>'Upoliza Deleted Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
}
