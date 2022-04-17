<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Post;
use App\Models\VideoCategory;
use App\Models\Gallary;
use App\Models\VideoPost;
use App\Models\Division;
use DB;
use Session;
class MainController extends Controller
{
    public function main()
    {
        $data['heding_news']=Post::where('heding_news','1')->latest()->limit(5)->get();
        $data['first_section']=Post::where('first_section','1')->latest()->limit(6)->get();
        $data['lead_section']=Post::where('second_section','1')->latest()->limit(2)->get();
        $data['lead_one']=Post::where('three_section','1')->latest()->limit(3)->get();
        $data['lead_two']=Post::where('four_section','1')->latest()->limit(3)->get();
        $data['lead_three']=Post::where('five_section','1')->latest()->limit(3)->get();
        $data['letest_news']=Post::where('status','1')->latest()->limit(20)->get();
        $data['popular_news']=Post::orderBy('view_count','DESC')->limit(20)->get();

        $data['gallary_one']=Gallary::where('status','1')->where('first_section','1')->latest()->limit(5)->get();
        $data['gallary_two']=Gallary::where('status','1')->where('second_section','1')->latest()->limit(4)->get();

         $data['video_category']=VideoCategory::all();
        
    	return view('front.pages.index',$data);
    }

    public function categorywish(Request $request, $slug)
    {
    	$category=Category::where('slug',$slug)->where('status',1)->first();
         $post_main=Post::where('category_id',$category->id)->where('status',1)->where('second_section','1')->limit(1)->latest()->get();
         $post_second=Post::where('category_id',$category->id)->where('status',1)->where('three_section','1')->latest()->paginate(10);

         $post_count=Post::where('category_id',$category->id)->where('status',1)->latest()->paginate(6);

        $letest_news=Post::where('status','1')->latest()->limit(20)->get();
        $popular_news=Post::where('status','1')->orderBy('view_count','DESC')->limit(20)->get();

        if ($request->ajax()) {
          $grid_view = view('front.pages.list_view',compact('post_second'))->render();
          return response()->json(['grid_view' => $grid_view]);
      }


         return view('front.pages.category',compact('category','post_main','post_second','post_count','letest_news','popular_news'));
         //return response()->json($post);


        
    }


    public function subcategory(Request $request,$slug)
    {
        $subcategory=SubCategory::where('slug',$slug)->first();
         $post_main=Post::where('subcategory_id',$subcategory->id)->where('status',1)->where('second_section','1')->limit(1)->latest()->get();
         $post_second=Post::where('subcategory_id',$subcategory->id)->where('status',1)->where('three_section','1')->latest()->paginate(10);
         $post_count=Post::where('subcategory_id',$subcategory->id)->where('status',1)->latest()->paginate(6);

        $letest_news=Post::where('status','1')->latest()->limit(20)->get();
        $popular_news=Post::where('status','1')->orderBy('view_count','DESC')->latest()->limit(20)->get();

        if ($request->ajax()) {
          $grid_view_subcategory = view('front.pages.list_subcategory',compact('post_second'))->render();
          return response()->json(['grid_view_subcategory' => $grid_view_subcategory]);
      }

         return view('front.pages.subcategory',compact('subcategory','post_main','post_second','post_count','letest_news','popular_news'));
    }


    public function contactUS()
    {
      $data['conatct']=DB::table('settings')->first();
      return view('front.pages.contact',$data);
    }


    public function PrivacyPolicy()
    {
        return view('front.pages.privacy-policy');
    }

     public function TermCondition()
    {
        return view('front.pages.terms-and-condition');
    }

    public function Single($slug)
    {
        $single_post= Post::where('slug', $slug)->first();

         $blogKey='blog_'.$single_post->id;
         if (!Session::has($blogKey)) {
          $single_post->increment('view_count');
           Session::put($blogKey,1);
         }




        $relatedpost=Post::where('posts.category_id',$single_post->category_id)->orderBy('posts.id','DESC')->limit(6)->get();
        $most_view=Post::where('posts.category_id',$single_post->category_id)->orderBy('view_count','DESC')->limit(10)->get();
        $letest_news=Post::where('status','1')->latest()->limit(4)->get();
        $popular_news=Post::where('status','1')->orderBy('view_count','DESC')->latest()->limit(4)->get();
        //dd($single_post);
        return view('front.pages.single',compact('single_post','relatedpost','letest_news','popular_news','most_view'));
    }


    public function AllVideo(Request $request)
    {
      $videos=VideoPost::latest()->paginate(6);

         if ($request->ajax()) {
          $grid_view_video = view('front.pages.list_video',compact('videos'))->render();
          return response()->json(['grid_view_video' => $grid_view_video]);
      }




      return view('front.pages.all_video',compact('videos'));
    }


    public function VideoSingle($slug)
    {
      $single_video= VideoPost::where('slug', $slug)->first();

      //return response()->json($single_video);
      $all_video= VideoPost::latest()->limit(6)->get();
      return view('front.pages.video_single',compact('single_video','all_video'));
    }

   public function GetDivision($division_id)
   {
    $cat=DB::table('districs')->where("division_id",$division_id)->get();
    return json_decode($cat);
   }

  public function GetDIstric($distric_id)
  {
    $cat=DB::table('upolizas')->where("distric_id",$distric_id)->get();
      return json_decode($cat);
  }

  public function PostDevision(Request $request)
  {
        $division_id = $request->division_id;
        $distric_id = $request->distric_id;
        $upzila_id = $request->upzila_id;


        $post_main = Post::where('division_id',$division_id)->where('distric_id',$distric_id)->where('upzila_id',$upzila_id)->where('second_section','1')->limit(1)->latest()->get();

        $post_second = Post::where('division_id',$division_id)->where('distric_id',$distric_id)->where('upzila_id',$upzila_id)->where('three_section','1')->limit(6)->latest()->get();

        $post_count = Post::where('division_id',$division_id)->where('distric_id',$distric_id)->where('upzila_id',$upzila_id)->limit(6)->latest()->get();

        $letest_news = Post::where('division_id',$division_id)->where('distric_id',$distric_id)->where('upzila_id',$upzila_id)->limit(20)->latest()->get();
        $popular_news = Post::where('division_id',$division_id)->where('distric_id',$distric_id)->where('upzila_id',$upzila_id)->orderBy('view_count','DESC')->latest()->limit(20)->get();

       // return response()->json($getpost);
        return view('front.pages.getpost',compact('post_main','post_second','post_count','letest_news','popular_news','division_id'));

  }



    
}
