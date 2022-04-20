@extends('layouts.app')
@section('main_content')
    <div class="container custom-container">

        <div class="col-lg-12 custom-padding">
            <input type="hidden" value="{{ $admin->id }}" id="admin" />
            <div class="profile_con">
                <img src="{{ asset('admin/user/' . $admin->image) }}" alt="Profile Imgae" width="160px;" style="    margin-right: 20px;">
                <div>
                    <h4>{{ $admin->name }}</h4>
                <span>Member since  {{ date('d-m-Y', strtotime($admin->created_at)) }}</span>
                <p>{!! $admin->about !!}</p>
                </div>

            </div>
            <div class="row">
                @foreach ($admin_post as $row)
                    <div class="col-md-3 col-6 custom-padding">
                        <div class="author-single-news">
                            <a href="{{ url('single', $row->slug) }}">
                                <div class="author-single-news-img">
                                    <img src="{{url('/front/default_image.png')}}" data-original="{{ asset('admin/post/' . $row->image) }}" class="img-fluid"
                                        alt="{{ $row->title }}">
                                </div>
                                <div class="author-single-news-heading">
                                    <span> </span>
                                    <h3>{{ $row->title }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>



            {{-- <div class="row custom-row content_list" id="grid_view_all_data{{ $admin->id }}">

                        @foreach ($admin_post as $row)
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
                        <span id="ajax-loadmore-product{{ $admin->id }}" class="show_more"
                            title="Load more posts">আরও খবর</span>
                        <span class="loding" id="loading_post" style="display: none;"><span
                                class="loding_txt">Loading...</span></span>
                    </div>
                </div>
            </div>




        </div>



    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var admin_id = $('#admin_id').val()

            function loadmoreProduct(page) {
                $.ajax({
                        type: "get",
                        url: "?page=" + page,
                        beforeSend: function(response) {
                            $('#ajax-loadmore-product' + admin_id).hide();
                            $('#loading_post').show();
                        }
                    })
                    .done(function(data) {
                        $('#loading_post').hide();
                        $('#ajax-loadmore-product' + admin_id).show();

                        if (data.grid_view == "") {


                            $('#ajax-loadmore-product' + admin_id).html('No More Post Found');

                            $('#ajax-loadmore-product' + admin_id).unbind("click");
                            return;
                        }

                        $('.ajax-loadmore-product' + admin_id).hide();
                        $('#grid_view_all_data' + admin_id).append(data.grid_view);


                    })
                    .fail(function() {
                        $('#ajax-loadmore-product' + admin_id).show();
                        alert('something went wrong')
                    });
            }

            var page = 1;
            $("#ajax-loadmore-product" + admin_id).on("click", function() {
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
