  @extends('layouts.app')
  @section ('main_content')

  <div class="container custom-container">
     <div class="row custom-row">
       <div class="left-content-area details-left-content-area">
         <div class="col-lg-12 custom-padding">

           <ol class="breadcrumb details-page-breadcrumb">
             <li><a href=""><i class="fa fa-home"></i></a></li>
             <li class="active"><a href=""></a></li>
           </ol><!--/.details-page-breadcrumb-->
                <div class="category-content">
                     @foreach($post_main as $row)
                    <div class="category-content-lead">
                      <a href="{{url('single',$row->slug)}}">
                        <div class="category-content-lead-left">
                          <img class="img-fluid" src="{{asset('admin/post/'.$row->image) }}" alt="{{$row->title}}">
                        </div>
                        <div class="category-content-lead-right">
                          <div class="category-content-lead-right-text">
                            <span></span>
                            <h1>{{$row->title}}</h1>
                            <p>{!!$row->short_desc!!}</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  @endforeach

                  </div>
                                  
               <div class="row custom-row content_list">

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
                </div>
                  
              <div class="row"  id="show_more_main343558">
                <div class="col-sm-12 text-center">
                  <div class="btn btn-more-details hvr-bounce-to-right">
                    <span id="343558" class="show_more" title="Load more posts">আরও খবর</span>
                    <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
                  </div>
                </div>
              </div>
         </div>
       </div>

       <div class="right-content-area details-right-content-area">
         <div class="col-lg-12 custom-padding">
           <div class="details-page-side-banner">
             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Category_Sidebar_responsive -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-5219299595808889"
                   data-ad-slot="2899736757"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
                   (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
           </div>

           <div class="details-right-news-heading">
             <h2>বিভাগের সর্বোচ্চ পঠিত </h2>
           </div>

           <div class="row custom-row">         
                    @foreach($post_count as $row)
                    <div class="col-6 custom-padding">
                      <div class="most-read-single">
                        <a href="{{url('single',$row->slug)}}">
                          <img src="{{asset('admin/post/'.$row->image) }}" class="img-fluid" alt="{{$row->title}}" />                        <div class="most-read-single-text">
                            <span></span>
                            <h3>{{$row->title}}</h3>
                           </div>
                         </a>
                       </div>
                    </div>
                @endforeach  
             </div>

           <div class="details-tab-container">
             <ul class="nav nav-pills side-tab-main" id="pills-tab" role="tablist">
               <li class="nav-item">
                 <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">সর্বশেষ</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">জনপ্রিয়</a>
               </li>
             </ul>

             <div class="tab-content alokitonews-tab-content" id="pills-tabContent">

               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div class="least-news">
                   <ul class="latest-news-ul detail-latest-news-ul">
                     
                   @foreach($letest_news as $row)
                     <li>
                          <a href="{{url('single',$row->slug)}}">
                            <div class="latest-news-left">
                              <span>১</span>
                              <img src="{{asset('admin/post/'.$row->image) }}" class="img-fluid" alt="{{$row->title}}" />
                            </div>
                            <div class="latest-news-right">
                              <h3>{{$row->title}}</h3>
                            </div>
                          </a>
                        </li>
                        @endforeach
                  </ul>
                 </div>
               </div>

               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <div class="least-news">
                   <ul class="latest-news-ul detail-latest-news-ul">
                     
                        @foreach($popular_news as $row)
                          <li>
                          <a href="{{url('single',$row->slug)}}">
                            <div class="latest-news-left">
                              <span>১</span>
                              <img src="{{asset('admin/post/'.$row->image) }}" class="img-fluid" alt="{{$row->title}} "/>
                            </div>
                            <div class="latest-news-right">
                              <h3>{{$row->title}} </h3>
                            </div>
                          </a>
                          </li>
                   @endforeach
                  </ul>
                 </div>
               </div>

             </div>
           </div>

         </div>
       </div>
     </div>
   </div>
  @endsection