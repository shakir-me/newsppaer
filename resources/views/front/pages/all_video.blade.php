  @extends('layouts.app')
  @section ('main_content')






<div class="container custom-container">

  <ol class="breadcrumb details-page-breadcrumb video-breadcum">
    <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
    <li class="active"> ভিডিও গ্যালারি </li>
  </ol>

  <div class="row custom-row content_list" style="margin-bottom: 20px;">
    
    @foreach($videos as $video)
        <div class="col-lg-3 col-md-6 col-6 custom-padding">
          <div class="video-gallery-single">
            <a href="{{url('video',$video->slug)}}">
              <div class="images">
                <img class="img-fluid" src="{{asset('admin/video/'.$video->image) }}" alt="{{$video->title}}">
                <div class="videos-icon">
                  <i class="{{$video->icon}}"></i>              
                    </div>
              </div>
              <div class="videos-text">
                <h3> {{$video->title}} </h3>
              </div>
            </a>
          </div>
        </div>
@endforeach
      
    
      
     

      

     
      
      
    

      


      

      
      <div class="col-sm-12 text-center"  id="show_more_main138">
        <div class="category-content-btn col-md-3 m-auto">
          <div class="details-btn">
            <span id="138" class="show_more btn btn-more-details hvr-bounce-to-right" title="Load more posts">আরও ভিডিও</span>
            <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
          </div><!--/.details-btn-->
        </div>
      </div>
    
  </div><!--/.row-->


 </div><!--/.container-->



  @endsection