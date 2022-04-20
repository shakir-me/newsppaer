  @extends('layouts.app')
  @section('main_content')

  
  @section('title', $single_post->title)
  @section('image', asset('admin/post/' . $single_post->image))
  @section('url', url('single', $single_post->slug))
  @section('desc',  $single_post->title)
 


  <div class="container custom-container">
      <div class="row custom-row">
          <div class="left-content-area details-left-content-area">
              <div class="col-lg-12 custom-padding">
                  <ol class="breadcrumb details-page-breadcrumb">
                      <li><a href=""><i class="fa fa-home"></i></a></li>
                      <li class="active"><a href="">{{ $single_post->category->name }}</a></li>
                  </ol>
                  <div class="details-content">
                      <h1>{{ $single_post->title }}</h1>
                      <hr>

                      <div class="row details-social-icon-row">
                          <div class="col-md-5 col-12">
                              <div class="media">
                                  <div class="media-left">
                                      <img alt="" src="{{ asset('admin/user/' . $single_post->admin->image) }}"
                                          class="media-object img-fluid">
                                  </div>
                                  <div class="media-body">
                                      <small class="small">
                                          <i class="fa fa-pencil"></i> <a
                                              href="{{ url('profile', $single_post->admin->slug) }}">{{ $single_post->admin->name }}</a>
                                          <br />
                                          <i class="fa fa-clock-o"></i>


                                          @php
                                              
                                              $currentDate = date('G:i - l, F j, Y', strtotime($single_post->created_at));
                                              $engDATE = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
                                              $bangDATE = [
                                                  '১',
                                                  '২',
                                                  '৩',
                                                  '৪',
                                                  '৫',
                                                  '৬',
                                                  '৭',
                                                  '৮',
                                                  '৯',
                                                  '০',
                                                  'জানুয়ারী',
                                                  'ফেব্রুয়ারী',
                                                  'মার্চ',
                                                  'এপ্রিল',
                                                  'মে',
                                                  'জুন',
                                                  'জুলাই',
                                                  'আগস্ট',
                                                  'সেপ্টেম্বর',
                                                  'অক্টোবর',
                                                  'নভেম্বর',
                                                  'ডিসেম্বর',
                                                  'শনিবার',
                                                  'রবিবার',
                                                  'সোমবার',
                                                  'মঙ্গলবার',
                                                  '
                                          বুধবার',
                                                  'বৃহস্পতিবার',
                                                  'শুক্রবার',
                                              ];
                                              $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
                                              echo "$convertedDATE";
                                          @endphp

                                      </small>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-7 col-12">
                              <div class="details-social-icon text-right">
                                  <div class="addthis_inline_share_toolbox"></div>
                              </div>
                          </div>
                      </div>
                      <img class="img-fluid" src="{{ asset('admin/post/' . $single_post->image) }}"
                          alt="{{ $single_post->title }}">

                      <!-- <img class="img-fluid" src="https://www.ekusheysangbad.com/media/imgAll/2022January/DVRGRG-20220302063037.jpg" alt="বিজিবির নতুন ডিজির যোগদান"> -->
                      <p class="image-caption"></p>
                      <div class="content-details">
                          <p><strong>{!! $single_post->short_desc !!}</strong></p>
                          <p>{!! $single_post->long_desc !!}</p>
                      </div>
                      <div id="images">



                          <div class="adv-img text-center marginTopBottom20 hidden-print">
                              <!-- /21655469720/JagoNews_Desktop_Details_News_Inner_B -->
                              <!-- <div id='div-gpt-ad-1509258458742-11'>
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5219299595808889"
             data-ad-slot="4380673496"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div> -->
                          </div>


                          <div class="adv-img text-center marginTopBottom20 hidden-print">
                              <!-- /21655469720/JagoNews_Desktop_Details_News_Inner_B -->
                              <!--  <div id='div-gpt-ad-1509258458742-11'>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5219299595808889"
             data-ad-slot="2982997191"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div> -->
                          </div>


                          <div class="adv-img text-center marginTopBottom20 hidden-print">
                              <!-- /21655469720/JagoNews_Desktop_Details_News_Inner_B -->
                              <!--  <div id='div-gpt-ad-1509258458742-11'>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-5219299595808889"
               data-ad-slot="1419484143"
               data-ad-format="auto"
               data-full-width-responsive="true"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div> -->
                          </div>
                      </div>
                      <!--/ Start Tags Area -->

                      <ul class="tag-ul">
                          <li> বিষয়: </li>
                          <li><a href="">{{ $single_post->category->name }}</a></li>
                      </ul>
                      <!--share button-->
                      <div class="sharethis-inline-share-buttons"></div>
                      
                      
                      <div class="other-social-link-wrapper">
                          <div class="addthis_inline_share_toolbox"></div>
                      </div>
                      <div class="new-social-link-wrapper">
                          <!--<div class="new-social-link-wrapper-left">-->
                          <!--  <script src="https://apis.google.com/js/platform.js"></script>-->
                          <!--  <div class="g-ytsubscribe" data-channelid="UCGdy9UJF2Fcgf9_lybf6bng" data-layout="full" data-count="hidden"></div>-->
                          <!--</div>-->

                          <!--<div class="new-social-link-wrapper-right">-->
                          <!--  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEkusheysangbad%2F&tabs=timeline&width=340&height=55&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=334182264340964" width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>-->
                          <!--</div>-->
                      </div>
                  </div>

                  {{-- <div class="facebook-comment" style="border:1px solid #dadada;margin-bottom: 30px;background: #fff;">
                      <h2 class="fb-h2"
                          style="background: #4d4e8a;padding: 15px;font-size: 18px;color: #fff;margin:-1px -1px 0;">
                          আপনার মতামত লিখুন :</h2>
                      <div class="fb-comments" data-width="100%"
                          data-href="https://www.ekusheysangbad.com//national/news/343632" data-numposts="5"></div>
                  </div> --}}

                  <!--     <div style="margin-bottom:15px;">
             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-format="autorelaxed"
                   data-ad-client="ca-pub-5219299595808889"
                   data-ad-slot="8449601395"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
           </div> -->


                  <div class="latest-news-single-wrapper">
                      <div class="special-title-heading">
                          <h2 class="title">
                              <span class="text-span"> সংবাদে সর্বশেষ </span>
                              <span class="liner"></span>
                          </h2>
                      </div>
                      <div class="row custom-row">
                          @foreach ($letest_news as $row)
                              <div class="col-6 col-md-3 custom-padding">
                                  <div class="latest-news-single">
                                      <a href="{{ url('single', $row->slug) }}">
                                          <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}" class="img-fluid"
                                              alt="{{ $row->title }}" />
                                          <div class="latest-news-single-text">
                                              <span></span>
                                              <h3>{{ $row->title }}</h3>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
                  <!--   <div class="details-big-banner" style="margin-bottom:24px;">
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-5219299595808889"
               data-ad-slot="2980122646"
               data-ad-format="auto"
               data-full-width-responsive="true"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div> -->
                  <div class="populer-news-single-wrapper">
                      <div class="special-title-heading">
                          <h2 class="title">
                              <span class="text-span"> সংবাদে জনপ্রিয় </span>
                              <span class="liner"></span>
                          </h2>
                      </div>
                      <div class="row custom-row">
                          @foreach ($popular_news as $row)
                              <div class="col-6 col-md-3 custom-padding">
                                  <div class="latest-news-single">
                                      <a href="{{ url('single', $row->slug) }}">
                                          <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}" class="img-fluid"
                                              alt="{{ $row->title }}" title="{{ $row->title }}" />
                                          <div class="latest-news-single-text">
                                              <span></span>
                                              <h3>{{ $row->title }}</h3>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>

          <div class="right-content-area details-right-content-area">
              <div class="col-lg-12 custom-padding">
                  <!--   <div class="details-page-side-banner" style="position: relative;">
             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
             
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-5219299595808889"
                   data-ad-slot="4759613336"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
           </div> -->



                  <div class="other-details-right-wrapper">
                      <div class="special-title-heading">
                          <h2 class="title">
                              <span class="text-span"> সর্বশেষ - {{ $single_post->category->name }} </span>
                              <span class="liner"></span>
                          </h2>
                      </div>
                      <ul class="details-news-single-ul">
                          @foreach ($relatedpost as $row)
                              <li class="details-news-single">
                                  <a href="{{ url('single', $row->slug) }}">
                                      <div class="details-news-single-left">
                                          <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}" class="img-fluid"
                                              alt="{{ $row->title }}" title="{{ $row->title }}" />
                                      </div>
                                      <div class="details-news-single-right">
                                          <span></span>
                                          <h3>{{ $row->title }}</h3>
                                      </div>
                                  </a>
                              </li>
                          @endforeach
                      </ul>

                  </div>

                  <!--  <div class="right-other-image" style="margin-top:24px;text-align: center;">
               <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-5219299595808889"
                   data-ad-slot="3854220612"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
             </div>
 -->


                  <div class="details-right-news">
                      <div class="details-right-news-heading">
                          <h2> সর্বোচ্চ পঠিত - {{ $single_post->category->name }} </h2>
                      </div>
                      <ul class="details-news-single-ul">
                          @foreach ($most_view as $row)
                              <li class="details-news-single">
                                  <a href="{{ url('single', $row->slug) }}">
                                      <div class="details-news-single-left">
                                          <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}" class="img-fluid"
                                              alt="{{ $row->title }}" title="{{ $row->title }}" />
                                      </div>
                                      <div class="details-news-single-right">
                                          <span></span>
                                          <h3>{{ $row->title }}</h3>
                                      </div>
                                  </a>
                              </li>
                          @endforeach
                      </ul>

                  </div>



              </div>
              <!--/.col-lg-12-->
          </div>
          <!--/.right-content-area-->
      </div>
      <!--/.row-->
  </div>
  <!--/.container-->
@endsection
