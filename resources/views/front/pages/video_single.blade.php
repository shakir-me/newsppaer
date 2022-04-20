  @extends('layouts.app')
  @section ('main_content')

<div class="container custom-container">
   <div class="row custom-row">
     <div class="left-content-area details-left-content-area">
       <div class="col-lg-12 custom-padding">
         <ol class="breadcrumb details-page-breadcrumb">
           <li><a href=""><i class="fa fa-home"></i></a></li>
           <li class="active"><a href="video"> ভিডিও </a></li>
         </ol>
         <div class="details-content">
           <h1> {{$single_video->title}} </h1>
           <hr>
           <small class="small">
             <i class="fa fa-pencil"></i> একুশে সংবাদ           
               <i class="fa fa-clock-o"></i>  {{$single_video->created_at}}</small>
           <div class="embed-responsive embed-responsive-16by9">
           				   @if ($single_video->link)
           				{!! Embed::make($single_video->link)->parseUrl()->getIframe() !!}
           	       @endif
              </div>
            <p></p>
            <div class="video-social-icon">
            
              <div class="addthis_inline_share_toolbox"></div>
            </div>
         </div>
       </div>
     </div>

     <div class="right-content-area details-right-content-area">
       <div class="col-lg-12 custom-padding">

         <!-- <div class="details-page-side-banner">
           <img class="img-fluid" src="https://www.ekusheysangbad.com/media/common/left-banner-2.gif" alt="Side banner">
         </div> -->

         <div class="details-right-news-heading more-video" style="margin-top:0;">
             <h2> আরো ভিডিও </h2>
          </div>

         <div class="row custom-row">
                   @foreach($all_video as $row)
                     <div class="col-md-6 col-6 custom-padding">
                       <div class="video-gallery-category">
                          <a href="{{url('video',$row->slug)}}">
                            <div class="video-category-img">
                              <i class="fa fa-play"></i>
                              <img src="{{url('/front/default_image.png')}}" data-original="{{asset('admin/video/'.$row->image) }}" class="img-fluid" alt="{{$row->title}}" title="{{$row->title}}" />                            </div>
                            <div class="video-heading">
                              <h2> {{$row->title}} </h2>
                            </div>
                          </a>
                        </div>
                     </div>
                    @endforeach
           <div class="details-btn">
             <a href="{{url('videos')}}" class="btn btn-more-details hvr-bounce-to-right"> সব ভিডিও দেখুন </a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection