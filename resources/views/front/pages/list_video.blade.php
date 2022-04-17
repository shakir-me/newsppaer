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