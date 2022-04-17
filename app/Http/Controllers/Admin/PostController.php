<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use Auth;
use DB;
use Image;
class PostController extends Controller
{
    public function all()
    {
        $post=Post::latest()->get();
    	return view('admin.post.index',compact('post'));
    }

    public function add()
    {
    	return view('admin.post.add');
    }


    public function GetSubcat($division_id)
    {
    	$cat=DB::table('districs')->where("division_id",$division_id)->get();
    	return json_decode($cat);
    }

    public function GetCat($category_id)
    {
        $cat=DB::table('sub_categories')->where("category_id",$category_id)->get();
        return json_decode($cat);
    }

    public function GetDis($distric_id)
    {
      $cat=DB::table('upolizas')->where("distric_id",$distric_id)->get();
        return json_decode($cat);
    }

    public function store(Request $request)
    {
             $validatedData = $request->validate([
              'title' => 'required',
              'image' => 'required',
             
          ]);

        $post = new Post();
        $post->title=$request->title;
        $post->category_id =$request->category_id;
        $post->subcategory_id =$request->subcategory_id;
        $post->short_desc =$request->short_desc;
        $post->long_desc =$request->long_desc;
        $post->division_id =$request->division_id;
        $post->distric_id =$request->distric_id;
        $post->upzila_id =$request->upzila_id;
        $post->heding_news =$request->heding_news;
        $post->first_section =$request->first_section;
        $post->second_section =$request->second_section;
        $post->three_section =$request->three_section;
        $post->four_section =$request->four_section;
        $post->five_section =$request->five_section;
        $post->status =$request->status;
        $post->view_count =0;
        $post->slug =Str::slug($request->title);
 
        $current_user=Auth::guard('admin')->user();
        $user_id=$current_user->id;
        $post->admin_id=$user_id;
        //dd($post);

           if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('admin/post/', $filename);
             $post->image = $filename;
         }

         //return response()->json($ads);




        $post->save();
          if ($post) {           
          $notification=array(
            'messege'=>'Post Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
    }

    public function edit($id)
    {
        $edit_post=Post::find($id);
        return view('admin.post.edit',compact('edit_post'));
    }


    public function update(Request $request,$id)
    {
          $post =Post::find($id);
          $post->title=$request->title;
          $post->category_id =$request->category_id;
          $post->subcategory_id =$request->subcategory_id;
          $post->short_desc =$request->short_desc;
          $post->long_desc =$request->long_desc;
          $post->division_id =$request->division_id;
          $post->distric_id =$request->distric_id;
          $post->heding_news =$request->heding_news;
          $post->first_section =$request->first_section;
          $post->second_section =$request->second_section;
          $post->three_section =$request->three_section;
          $post->four_section =$request->four_section;
          $post->five_section =$request->five_section;
          $post->status =$request->status;
          $post->view_count =0;
          $post->slug =Str::slug($request->title);
       
          $current_user=Auth::guard('admin')->user();
          $user_id=$current_user->id;
          $post->admin_id=$user_id;
          //dd($post);

             if($request->hasfile('image'))
           {
               $file = $request->file('image');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('admin/post/', $filename);
               $post->image = $filename;
           }

           //return response()->json($ads);




          $post->save();
            if ($post) {           
            $notification=array(
              'messege'=>'Post Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.post')->with($notification);
       }
    }

     public function delete($id)
        {
          $delete = Post::find($id);
          $delete->delete();
           $notification=array(
                'messege'=>'Post Deleted Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
}
