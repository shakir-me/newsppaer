<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{

	public function all()
	{
		$category=Category::all();
		return view('admin.category.index',compact('category'));
	}
    public function add()
    {

    	$main_categories = Category::orderBy('name', 'desc')->where('parent_id', NULL)->get();
    	return view('admin.category.add',compact('main_categories'));
    }

    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
          'name' => 'required|unique:categories|max:255',
         
      ]);
          $category = new Category();
          $category->name=$request->name;
          $category->parent_id=$request->parent_id;
          $category->status =$request->status;
          $category->seo_title =$request->seo_title;
          $category->seo_desc =$request->seo_desc;
          $category->slug =Str::slug($request->name);




          $category->save();
            if ($category) {           
            $notification=array(
              'messege'=>'Category Added Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
       }
    }

    public function edit($id)
    {
    	$main_categories = Category::orderBy('name', 'desc')->where('parent_id', NULL)->get();
    	$category= Category::find($id);
    	 if (!is_null($category)) {
      return view('admin.category.edit', compact('category', 'main_categories'));
       }else {
      return resirect()->route('all.category');
       }
    }


    public function update(Request $request,$id)
    {
      $category = Category::find($id);
     $category->name=$request->name;
     $category->parent_id=$request->parent_id;
     $category->status =$request->status;
     $category->seo_title =$request->seo_title;
     $category->seo_desc =$request->seo_desc;
     $category->slug =Str::slug($request->name);
          $category->save();
            if ($category) {           
            $notification=array(
              'messege'=>'Category Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.category')->with($notification);
       }
    }

    public function delete($id)
    {
      $delete = Category::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Category Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
