           @foreach($post_second as $row)
                  <div class="col-md-6 custom-padding">
                    <div class="category-content-single">
                      <a href="{{url('single',$row->slug)}}">
                        <div class="category-content-single-left">
                          <img class="img-fluid" src="{{asset('admin/post/'.$row->image) }}" alt="{{$row->title}}">
                        </div>
                        <div class="category-content-single-right">
                          <span></span>
                          <h2>{{$row->title}}</h2>
                        </div>
                      </a>
                    </div>
                  </div>
                  @endforeach