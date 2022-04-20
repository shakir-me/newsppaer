<!DOCTYPE html>
<html lang="bn">
    

<head>
    @php
        $seo = DB::table('seos')->first();
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <meta property="og:url" content="@yield('url')">
      <meta property="og:image" content="@yield( 'image',asset('admin/seo/' . $seo->image) )">
      <meta property="og:description" content="@yield('desc','site description')">

     @php
        $setting = DB::table('settings')->first();
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/setting/' . $setting->image) }}">
    
    
    <title>@yield('title',$setting->name)</title>

<style>
    :root {
    --primarycus: #802138;
    --secondarycus: rgb(207, 85, 85);
}
</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="{{ asset('front/asset/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/asset/css/bootsnav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/asset/css/modern-megamenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/asset/css/modern-megamenu-responsive.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('front/asset/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
   
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nivoslider/3.2/nivo-slider.min.css" integrity="sha512-nabQX023kkkPP+H9ptetp5lK0CQ4rv6lG/slhMi5eONKfC1fI4lClHXubH6VP6PgXExycfzlAQHufX1oHMzUew==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('front/asset/css/default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/asset/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/asset/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


    <style>
        .tab-section-option2 .nav-title {
            margin-right: 16px;
        }

        .tab-section-option2 .nav-title .nav-link a:last-child {
            float: right;
            text-align: right;
        }

    </style>
    
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=625e9a1d95f3d9001910a79a&product=inline-share-buttons' async='async'></script>
</head>

<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=2944143205855394&autoLogAppEvents=1" nonce="2RuLOMHT"></script>



    <style>
        /* For facebook hover like box */
        .fb-box {
            position: fixed;
            top: 55%;
            left: 0;
            width: 340px;
            z-index: 99;
        }

        .fb-box span i {
            position: absolute;
            left: 0;
            display: block;
            background: #29487d;
            z-index: 10000;
            top: -52px;
            padding: 15px 15px;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            font-size: 24px;
        }

        .fb-box span i:hover {
            background: #3b5a8e;
        }

        .fb-block {
            position: absolute;
            width: 100%;
            left: -100%;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .fb-box:hover .fb-block {
            left: 0;
            animation: pulse-animation 1s infinite;
        }

        @-webkit-keyframes pulse-animation {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(41, 72, 125, 0.84);
            }

            70% {
                -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }

        @keyframes pulse-animation {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(41, 72, 125, 0.84);
                box-shadow: 0 0 0 0 rgba(41, 72, 125, 0.84);
            }

            70% {
                -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }

        .new-social-link-wrapper-left {
            text-align: center;
            background: #ddd;
            padding-top: 12px;
            margin-top: 3px;
        }

        #header nav.navbar.bootsnav li.dropdown.megamenu-fw ul.dropdown-menu.megamenu-content {
            background: #fff;
        }

        @media only screen and (max-width: 767px) {
            .fb-box {
                top: 54%;
            }

            .fb-box span i {
                top: -45px;
                padding: 12px 12px;
                font-size: 22px;
            }

            .new-social-link-wrapper-left {
                margin-bottom: 20px;
            }

        }

    </style>





    <div class="scrollup">
        <i aria-hidden="true" class="fa fa-chevron-up"></i>
    </div>


    @php
        $setting = DB::table('settings')->first();
    @endphp
    <header>
        <div class="header-info">
            <div class="container custom-container">
                <div class="row custom-row">
                    <div class="col-12 col-md-4 col-lg-4 d-md-block custom-padding">
                        <small class="top-date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> ঢাকা
                            <i class="fa fa-calendar" aria-hidden="true"></i>

                            <?php
                            $currentDate = date('l, F j, Y');
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
                            ?>



                        </small>
                    </div>
                    <!--/.col-sm-9-->
                    <div class="col-12 col-md-4 col-lg-4 d-md-block custom-padding top-text-small">
                        <p><strong>{{ $setting->title }}</strong></p>
                    </div>
                    <!--/.col-sm-9-->
                    <div class="col-12 col-md-4 col-lg-4 d-none d-md-block custom-padding">
                        <div class="top_socail_icon_area">
                            <ul class="list-inline">
                                <li><a target="_blank" href="{{ $setting->facebook_link }}" class="facebook">
                                        <span class="cube">
                                            <span class="cube-top"><i class="fa fa-facebook"></i></span>
                                            <span class="cube-front"><i class="fa fa-facebook"></i></span>
                                        </span>
                                    </a></li>

                                <li><a target="_blank" href="{{ $setting->youtube_link }}" class="youtube">
                                        <span class="cube">
                                            <span class="cube-top"><i class="fa fa-youtube"></i></span>
                                            <span class="cube-front"><i class="fa fa-youtube"></i></span>
                                        </span>
                                    </a></li>
                                <li><a target="_blank" href="{{ $setting->twitter_link }}" class="twitter">
                                        <span class="cube">
                                            <span class="cube-top"><i class="fa fa-twitter"></i></span>
                                            <span class="cube-front"><i class="fa fa-twitter"></i></span>
                                        </span>
                                    </a></li>
                                <li><a target="_blank" href="{{ $setting->instragram_link }}" class="instagram">
                                        <span class="cube">
                                            <span class="cube-top"><i class="fa fa-instagram"></i></span>
                                            <span class="cube-front"><i class="fa fa-instagram"></i></span>
                                        </span>
                                    </a></li>

                            </ul>
                        </div>
                        <!--/.top_socail_icon_area-->
                    </div>
                    <!--/.col-md-3-->
                </div>
                <!--/row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.header-info-->
        <div class="new-header">
            <div class="container custom-container">
                <div class="row custom-row">
                    <div class="col-md-12 col-lg-4 custom-padding">
                        <div class="new-logo-area">
                            <a href="{{ url('/') }}"><img class="img-fluid"
                                    src="{{ asset('admin/setting/' . $setting->image) }}" style="height:80px;"
                                    alt=""></a>
                        </div>
                        <!--/.new-logo-area-->
                    </div>
                    <!--/.col-md-3-->

                    @php
                        $ads_one = DB::table('ads')
                            ->latest()
                            ->where('ads_one', '1')
                            ->limit(1)
                            ->get();
                        $ads_two = DB::table('ads')
                            ->latest()
                            ->where('ads_two', '1')
                            ->limit(1)
                            ->get();
                    @endphp

                    <div class="col-md-12 col-lg-8 custom-padding d-block d-lg-block">
                        <div class="header-banner">
                            @foreach ($ads_one as $row)
                                <div class="header-banner-right">
                                    <a href="{{ $row->link }}" target="_blank"><img class="img-fluid"
                                            src="{{ asset('admin/ads/' . $row->image) }}" alt="Janata Bank"></a>
                                </div>
                            @endforeach

                            @foreach ($ads_two as $row)
                                <div class="header-banner-left">
                                    <a href="{{ $row->link }}" target="_blank"><img class="img-fluid"
                                            src="{{ asset('admin/ads/' . $row->image) }}" alt="Rupalibank"></a>
                                </div>
                            @endforeach
                        </div>
                        <!--/.header-banner-->
                    </div>
                    <!--/.col-md-8-->
                </div>
                <!--/.row-->
            </div>
            <!--/.contaienr-->
        </div>
        <!--/.new-header-->
    </header>

    <header class="header headerbg-darkcolor nav-container" id="header">
        <div class="container custom-container">
            <div class="row custom-row">
                <div class="col-sm-12 custom-padding">
                    <nav class="bootsnav navbar navbar-transparent">
                        <div class="navbar-header">
                            <button aria-controls="navbar-menu" aria-expanded="false"
                                class="navbar-toggle navbar-toggler" data-target="#navbar-menu" data-toggle="collapse"
                                type="button">
                                <span class="hidden">MENU</span> <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        @php
                            $menu = DB::table('categories')
                                ->where('status', 1)
                                ->get();
                        @endphp
                        <!--/.navbar-header-->
                        <div class="collapse navbox-collapse" id="navbar-menu">
                            <ul class="nav navbar-right" data-in="fade-In-Down" data-out="fade-Out-Up">
                                <li><a id="home" href="{{ url('/') }}"> <span> <i class="fa fa-home"></i>
                                        </span></a></li>
                                @foreach ($menu as $cat)
                                    @if ($cat->slug != 'onzanz')
                                        @php
                                            $subcategory = DB::table('sub_categories')
                                                ->where('category_id', $cat->id)
                                                ->get();
                                        @endphp
                                        <li class="dropdown">
                                            <a href="{{ url('/category') }}/{{ $cat->slug }}"
                                                class="@if (count($subcategory) != 0) dropdown-toggle @endif"
                                                data-toggle="@if (count($subcategory) != 0) dropdown @endif"><span>
                                                    {{ $cat->name }} </span></a>

                                            @if (count($subcategory) != 0)
                                                <ul class="dropdown-menu megamenu-content">


                                                    @foreach ($subcategory as $sub)
                                                        <li><a href="{{ url('/subcategory') }}/{{ $sub->slug }}">{{ $sub->name }}
                                                            </a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @else
                                        @php
                                            $subcategory2 = DB::table('sub_categories')
                                                ->where('category_id', $cat->id)
                                                ->get();
                                        @endphp

                                        <li class="dropdown megamenu-fw">
                                            <a id="" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                {{ $cat->name }} </a>
                                            <ul class="dropdown-menu animated fade-Out-Up megamenu-content" role="menu">


                                                <li>
                                                    <div class="row">
                                                        @foreach ($subcategory2 as $sub)
                                                            <div class="col-lg-3 col-menu col-12">


                                                                <ul class="menu-col">

                                                                    <li><a
                                                                            href="{{ url('/subcategory') }}/{{ $sub->slug }}">{{ $sub->name }}</a>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach




                            </ul>
                            <!--/.nav navbar-right-->
                        </div>

                        <div class="
                                                attr-nav">
                            <ul>
                                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <!--/.attr-nav-->
                    </nav>
                    <!--/.bootsnav navbar navbar-transparent-->
                </div>
                <!--/.col-sm-12-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
        <div class="top-search">
            <div class="container custom-container">
                <div class="col-lg-3 col-md-12 col-12 top-search-secton">
                    <form class="search-form" action="{{ url('search') }}">
                        <div class="input-group">
                            <label for="search" class="sr-only"> অনুসন্ধান করুন </label>

                            <input type="text" class="form-control" name="search" placeholder="অনুসন্ধান করুন">
                            <button class="input-group-addon" type="submit" name="button"><i
                                    class="fa fa-search"></i></button>
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                        <!--/.input-group-->
                    </form>
                </div>
                <!--/.col-lg-2 col-md-4 -->
            </div>
            <!--/.container-->
        </div>
        <!--/.top-search-->
        </div>
        <!--/.top-nav-main-->
    </header>

    @php
        $heding_news = App\Models\Post::where('heding_news', '1')
            ->latest()
            ->limit(5)
            ->get();
    @endphp
    <div class="container custom-container marquee-container">
        <div class="row custom-row">
            <div class="col-md-12 custom-padding">
                <div class="marquee-block">
                    <h2> সংবাদ শিরোনাম :</h2>
                    <ul class="marquee">
                        @foreach ($heding_news as $heading)
                            <li><a href="{{ url('single', $heading->slug) }}"><span><img class="img-fluid"
                                            src="{{ asset('icon.gif') }}" alt="{{ $heading->title }}"></span>
                                    {{ $heading->title }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('main_content')
    <!--/.photo-gallery-wrapper-->
    @php
        $setting = DB::table('settings')->first();
    @endphp
    <div class="footer-top-wrapper">
        <div class="container jagaran-container">
            <div class="row custom-row">
                <div class="col-md-6 custom-padding">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}"><img class="img-fluid"
                                src="{{ asset('admin/setting/' . $setting->image) }}"
                                alt="{{ $setting->title }}"></a>
                    </div>
                    <!--/.new-logo-area-->
                </div>
                <!--/.col-md-6-->
                <div class="col-md-6 custom-padding">
                    <div class="foter-right-new">
                        <ul class="footer-ul-new">
                            <!-- <li><a href="https://www.ekusheysangbad.com/about.php">আমাদের কথা</a></li> -->

                            <li><a href="{{ url('contact-us') }}">যোগাযোগ</a></li>
                            <li><a href="{{ url('privacy-policy') }}">প্রাইভেসি পলিসি</a></li>
                            <li><a href="{{ url('terms-and-condition') }}">ব্যবহার বিধি</a></li>
                        </ul>
                        <!--/.footer-ul-new-->
                    </div>
                    <!--/.foter-right-new-->
                </div>
                <!--/.col-md-6-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-top-wrapper-->

    <footer class="footer-new">
        <div class="container jagaran-container">
            <div class="row custom-row">




                <div class="col-md-12 col-lg-4 custom-padding">
                    <div class="contact-details">
                        <ul class="footer-address-ul">
                            {!! $setting->footer_one !!}

                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 custom-padding">
                    <div class="contact-details">
                        <ul class="footer-address-ul">
                            {!! $setting->footer_two !!}

                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 custom-padding">
                    <div class="contact-details">
                        <ul class="footer-address-ul">
                            <li>
                                <span class="size-w-4">
                                    {{ $setting->editor_name }}
                                </span>
                            </li>
                            <li>
                                <span class="size-w-3">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </span>
                                <span class="size-w-4">
                                    {{ $setting->address }}
                                </span>
                            </li>
                            <li>
                                <span class="size-w-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                                <span class="size-w-4">
                                    {{ $setting->telephone }} ,{{ $setting->number_one }} ,
                                    {{ $setting->number_two }}
                                </span>
                            </li>
                            <li>
                                <span class="size-w-3">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                </span>
                                <span class="size-w-4">
                                    {{ $setting->phone }}
                                </span>
                            </li>
                            <li>
                                <span class="size-w-3">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                <span class="size-w-4">{{ $setting->email_one }}
                                </span>
                            </li>
                            <li>
                                <span class="size-w-3">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                <span class="size-w-4">{{ $setting->email_two }}
                                </span>
                            </li>
                        </ul>
                        <ul class="social-icon footer-icon footer-icon-2">
                            <li><a target="_blank" href="{{ $setting->facebook_link }}" class="facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                     
                            <li><a target="_blank" href="{{ $setting->youtube_link }}" class="youtube"><i
                                        class="fa fa-youtube"></i></a></li>
                                        <li><a target="_blank" href="{{ $setting->twitter_link }}" class="youtube"><i
                                                                     class="fa fa-twitter"></i></a></li>
                                                       <li><a target="_blank" href="{{ $setting->instagram }}" class="youtube"><i
                                                                     class="fa fa-instagram"></i></a></li>
                           
                        </ul>
                        <!--/.social-icon-->
                    </div>
                    <!--/.contact-details-->
                </div>
                <!--/.col-md-8-->

                <!--   <div class="col-md-12 col-lg-4 custom-padding">
        <div class="footer-facebook-like">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEkusheysangbad%2F&tabs=timeline&width=340&height=270&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="220" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
      </div> -->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </footer>
    <!--/.footer-new-->
    <div class="footer">
        <div class="container custom-container">
            <div class="row custom-row footer-bottom-row">
                <div class="col-md-6 col-12 footer-copy-text">
                    <p> কপিরাইট © ২০২২ - ২০২২ সর্বস্বত্ব সংরক্ষিত | </p>
                </div>
                <div class="col-md-6 col-12">
                    <div class="design-link">
                        <p>Design &amp; Developed by <a href="https://trustsoftbd.com/contact-us/" target="_blank">
                                
                                Trust Soft BD</a></p>
                    </div>
                </div>
            </div>
            <!--/.custom-row-->
        </div>
        <!--/.custom-container-->
    </div>
    <!--/.footer-->


    <!--===== JAVASCRIPT FILES =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" integrity="sha512-AFwxAkWdvxRd9qhYYp1qbeRZj6/iTNmJ2GFwcxsMOzwwTaRwz2a/2TX225Ebcj3whXte1WGQb38cXE5j7ZQw3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $('img').lazyload();
    })
</script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.3.3/umd/popper.min.js" integrity="sha512-ET2VjqOvCOCo7OQIBbY/HSXcBZdQ4t5rMhyHZdwuro/FKgcbNGI9YB3adCM7tiwHNl14SFdU1/TrEM+odXzgAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('front/asset/js/bootsnav.js') }}"> </script>
    <script src="{{ asset('front/asset/js/modern-megamenu.js') }}"> </script>

    <script src="{{ asset('front/asset/js/owl.carousel.min.js') }}"> </script>



   
    
    <!--/. Main Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nivoslider/3.2/jquery.nivo.slider.min.js" integrity="sha512-rwjQKesPaeXWoFNcTVz8rPBqsU06+JhcsudIQfpUiOhxGHqymn9aSJpG7NPu4MZJ7V32Cq4YjT1qV5vVngYA1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--/. Main Slider -->
    <!--/. For JQUERY Marquery Text -->
   

    
    <script src="{{ asset('front/asset/js/jquery.pause.js') }}"></script>
    <script src="{{ asset('front/asset/js/jquery.marquee.min.js') }}"></script>

    <script src="{{ asset('front/asset/js/custom.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            /*-------------------------------------
               Fetuered Videos jQuery activation code
             -------------------------------------*/
            $("#featured-videos-section").owlCarousel({
                // Navigation
                nav: true,
                loop: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                autoplay: true,
                smartSpeed: 600,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1 // In this configuration 1 is enabled from 0px up to 479px screen size
                    },
                    480: {
                        items: 1, // from 480 to 677
                        center: false // only within 678 and next - 959
                    },
                    678: {
                        items: 2, // from this breakpoint 678 to 959
                        center: false // only within 678 and next - 959
                    },
                    768: {
                        items: 2, // from this breakpoint 960 to 1199
                        margin: 20, // and so on...
                        center: false
                    },
                    1200: {
                        items: 3,
                        margin: 24
                    }
                }
            });

            $("#featured-videos-news").owlCarousel({
                // Navigation
                nav: true,
                loop: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                autoplay: true,
                smartSpeed: 600,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1 // In this configuration 1 is enabled from 0px up to 479px screen size
                    },
                    480: {
                        items: 1, // from 480 to 677
                        center: false // only within 678 and next - 959
                    },
                    678: {
                        items: 2, // from this breakpoint 678 to 959
                        center: false // only within 678 and next - 959
                    },
                    768: {
                        items: 2, // from this breakpoint 960 to 1199
                        margin: 20, // and so on...
                        center: false
                    },
                    1200: {
                        items: 3,
                        margin: 24
                    }
                }
            });

            $("#facebook-videos-news").owlCarousel({
                // Navigation
                nav: true,
                loop: true,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                autoplay: true,
                smartSpeed: 600,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1 // In this configuration 1 is enabled from 0px up to 479px screen size
                    },
                    480: {
                        items: 1, // from 480 to 677
                        center: false // only within 678 and next - 959
                    },
                    678: {
                        items: 2, // from this breakpoint 678 to 959
                        center: false // only within 678 and next - 959
                    },
                    768: {
                        items: 2, // from this breakpoint 960 to 1199
                        margin: 20, // and so on...
                        center: false
                    },
                    1200: {
                        items: 3,
                        margin: 24
                    }
                }
            });

            /*-------------------------------------
                 NIVO SLIDER
               -------------------------------------*/
            $(window).load(function() {
                $('#slider').nivoSlider({
                    // effect: 'random',
                    // slices: 15,
                    // boxCols: 8,
                    // boxRows: 4,
                    // animSpeed: 500,
                    // pauseTime: 3000,
                });

            });


        });

        $(function() {
            /*-------------------------------------
            jQuery Marquee
            -------------------------------------*/
            $('.marquee').marquee({
                pauseOnHover: true,
                duration: 20000
            });

            $('.marquee-breaking').marquee({
                pauseOnHover: true,
                duration: 28000
            });

        });


        $('#home').addClass('active');
        $('#slickSlider').slick({
            arrows: true,
            dots: false,
            autoplay: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><img src="/front/left-arrow.png" width="30px" class="arrow-img" /></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><img src="/front/right-arrow.png" width="30px" class="arrow-img" /></button>'
        });
    </script>
    


</body>

</html>
