  @extends('layouts.app')
  @section('main_content')
      <div class="container custom-container">
          <div class="row custom-row">
              <div class="left-content-area details-left-content-area">
                  <div class="col-lg-12 custom-padding">
                      <ol class="breadcrumb details-page-breadcrumb">
                          <li><a href=""><i class="fa fa-home"></i>অনুসন্ধান</a></li>
                          <li class="active"><a href=""></a></li>
                      </ol>
                      <!--/.details-page-breadcrumb-->
                      <div class="category-content">
                          @foreach ($PostSearch as $row)
                              <div class="category-content-lead">
                                  <a href="{{ url('single', $row->slug) }}">
                                      <div class="category-content-lead-left">
                                          <img class="img-fluid" src="{{ asset('admin/post/' . $row->image) }}"
                                              alt="{{ $row->title }}">
                                      </div>
                                      <div class="category-content-lead-right">
                                          <div class="category-content-lead-right-text">
                                              <span></span>
                                              <h1>{{ $row->title }}</h1>
                                              <p>{!! $row->short_desc !!}</p>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                          @endforeach

                      </div>

                      {{-- <div class="row custom-row content_list" id="grid_view_all_data">

                          @foreach ($PostSearch as $row)
                              <div class="col-md-6 custom-padding">
                                  <div class="category-content-single">
                                      <a href="{{ url('single', $row->slug) }}">
                                          <div class="category-content-single-left">
                                              <img class="img-fluid" src="{{ asset('admin/post/' . $row->image) }}"
                                                  alt="{{ $row->title }}">
                                          </div>
                                          <div class="category-content-single-right">
                                              <span></span>
                                              <h2>{{ $row->title }}</h2>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          @endforeach
                      </div> --}}

                      <div class="row" id="show_more_main343558">
                          <div class="col-sm-12 text-center">
                              <div class="btn btn-more-details hvr-bounce-to-right">
                                  <span id="ajax-loadmore-product" class="show_more" title="Load more posts">আরও
                                      খবর</span>
                                  <span class="loding" id="loading_post" style="display: none;"><span
                                          class="loding_txt">Loading...</span></span>
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
                          <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5219299595808889"
                              data-ad-slot="2899736757" data-ad-format="auto" data-full-width-responsive="true"></ins>
                          <script>
                              (adsbygoogle = window.adsbygoogle || []).push({});
                          </script>
                      </div>
                      @php
                          
                          $post_count = App\Models\Post::where('status', '1')
                              ->orderBy('view_count', 'DESC')
                              ->latest()
                              ->limit(20)
                              ->get();
                      @endphp
                      <div class="details-right-news-heading">
                          <h2>অনুসন্ধান সর্বোচ্চ পঠিত </h2>
                      </div>

                      <div class="row custom-row">


                          @foreach ($post_count as $row)
                              <div class="col-6 custom-padding">
                                  <div class="most-read-single">
                                      <a href="{{ url('single', $row->slug) }}">
                                          <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}" class="img-fluid"
                                              alt="{{ $row->title }}" />
                                          <div class="most-read-single-text">
                                              <span></span>
                                              <h3>{{ $row->title }}</h3>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          @endforeach
                      </div>

                      <div class="details-tab-container">
                          <ul class="nav nav-pills side-tab-main" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                      role="tab" aria-controls="pills-home" aria-selected="true">সর্বশেষ</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                      role="tab" aria-controls="pills-profile" aria-selected="false">জনপ্রিয়</a>
                              </li>
                          </ul>
                          @php
                              $letest_news = App\Models\Post::where('status', '1')
                                  ->latest()
                                  ->limit(20)
                                  ->get();
                          @endphp
                          <div class="tab-content alokitonews-tab-content" id="pills-tabContent">

                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                  aria-labelledby="pills-home-tab">
                                  <div class="least-news">
                                      <ul class="latest-news-ul detail-latest-news-ul">

                                          @foreach ($letest_news as $row)
                                              <li>
                                                  <a href="{{ url('single', $row->slug) }}">
                                                      <div class="latest-news-left">
                                                          <span>১</span>
                                                          <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}"
                                                              class="img-fluid" alt="{{ $row->title }}" />
                                                      </div>
                                                      <div class="latest-news-right">
                                                          <h3>{{ $row->title }}</h3>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script>
          $(document).ready(function() {
              var category_id = $('#category_id').val()

              function loadmoreProduct(page) {
                  $.ajax({
                          type: "get",
                          url: "?page=" + page,
                          beforeSend: function(response) {
                              $('#ajax-loadmore-product' + category_id).hide();
                              $('#loading_post').show();
                          }
                      })
                      .done(function(data) {
                          $('#loading_post').hide();
                          $('#ajax-loadmore-product' + category_id).show();

                          if (data.grid_view == "") {


                              $('#ajax-loadmore-product' + category_id).html('No More Post Found');

                              $('#ajax-loadmore-product' + category_id).unbind("click");
                              return;
                          }

                          $('.ajax-loadmore-product' + category_id).hide();
                          $('#grid_view_all_data' + category_id).append(data.grid_view);


                      })
                      .fail(function() {
                          $('#ajax-loadmore-product' + category_id).show();
                          alert('something went wrong')
                      });
              }

              var page = 1;
              $("#ajax-loadmore-product" + category_id).on("click", function() {
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
