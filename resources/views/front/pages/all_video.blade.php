  @extends('layouts.app')
  @section ('main_content')






<div class="container custom-container">

  <ol class="breadcrumb details-page-breadcrumb video-breadcum">
    <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
    <li class="active"> ভিডিও গ্যালারি </li>
  </ol>


<div>
  <div class="row custom-row content_list" style="margin-bottom: 20px;" id='all_video_lists'>
    
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
      </div>

      <div class="details-btn">
            <span id="ajax-loadmore-post" class="show_more btn btn-more-details hvr-bounce-to-right" title="Load more posts">আরও ভিডিও</span>
            <span id="loading_post" class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
          </div>
    </div>
   </div>

   <br><br>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
 $( document ).ready(function() {
            function loadmoreProduct(page) {
                $.ajax({
                        type: "get",
                        url: "?page=" + page,
                        beforeSend: function(response) {
                            $('#ajax-loadmore-post').hide();
                            $('#loading_post').show();
                        }
                    })
                    .done(function(data) {
                      $('#loading_post').hide();
                      $('#ajax-loadmore-post').show();
                      
                        if (data.grid_view_video == "") {
                        
                           
                            $('#ajax-loadmore-post').html('No More Video Found');

                            $('#ajax-loadmore-post').unbind("click");
                            return;
                        }
                       
                        $('.ajax-loadmore-post').hide();
                        $('#all_video_lists').append(data.grid_view_video);

                        
                    })
                    .fail(function(e) {
                       $('#loading_post').hide();
                      $('#ajax-loadmore-post').show();
                       console.log(e)
                    });
            }
           
            var page = 1;
            $("#ajax-loadmore-post").on("click",function() {
              page++;
             loadmoreProduct(page)
    });
});



           

   
            // $(window).scroll(function() {
            //     if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            //         page++;
            //         loadmoreProduct(page);
            //     }
            // });
           
        </script>
  @endsection