<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    	public function all()
    	{
    		$subcategory=SubCategory::all();
    		return view('admin.subcategory.index',compact('subcategory'));
    	}
        public function add()
        {

        	$category = Category::all();
        	return view('admin.subcategory.add',compact('category'));
        }

        public function store(Request $request)
        {
        	 // $validatedData = $request->validate([
          //     'name' => 'required|unique:categories|max:255',
             
          // ]);
              $category = new SubCategory();
              $category->name=$request->name;
              $category->category_id=$request->category_id;
              $category->slug =Str::slug($request->name);
              $category->seo_title =$request->seo_title;
              $category->seo_desc =$request->seo_desc;




              $category->save();
                if ($category) {           
                $notification=array(
                  'messege'=>'SubCategory Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
        }

        public function edit($id)
        {
        	
        	$subcategory= SubCategory::find($id);
        	
          return view('admin.subcategory.edit', compact('subcategory'));
           
        }


        public function update(Request $request,$id)
        {
        $category = SubCategory::find($id);
        $category->name=$request->name;
        $category->category_id=$request->category_id;
        $category->slug =Str::slug($request->name);

        $category->seo_title =$request->seo_title;
        $category->seo_desc =$request->seo_desc;
              $category->save();
                if ($category) {           
                $notification=array(
                  'messege'=>'Category Update Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('all.subcategory')->with($notification);
           }
        }

        public function delete($id)
        {
          $delete = SubCategory::find($id);
          $delete->delete();
           $notification=array(
                'messege'=>'SubCategory Deleted Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
}
