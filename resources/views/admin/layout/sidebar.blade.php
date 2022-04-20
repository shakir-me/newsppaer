  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/dashboard') }}">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
              </a>
          </li>

          @if(Auth::guard('admin')->user()->category =="category")
 

          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                  aria-controls="ui-basic">
                  <i class="icon-layout menu-icon"></i>
                  <span class="menu-title">Category</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{ route('add.category') }}">Add
                              Category</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('add.subcategory') }}">Add
                              Sub Category</a></li>

                  </ul>
              </div>
          </li>

          @else
          @endif

          @if(Auth::guard('admin')->user()->division =="division")


          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <i class="icon-head menu-icon"></i>
                  <span class="menu-title">Division & Distric</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{ route('all.division') }}">
                              Divisions </a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('all.distric') }}"> Districs
                          </a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('all.upzila') }}"> Upozila
                          </a></li>
                  </ul>
              </div>
          </li>

          @else
          @endif
@if(Auth::guard('admin')->user()->post =="post")
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false"
                  aria-controls="error">
                  <i class="icon-ban menu-icon"></i>
                  <span class="menu-title">Post </span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="error">
                  <ul class="nav flex-column sub-menu">
                    @if(Auth::guard('admin')->user()->type=="superadmin")
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.post.list') }}"> Admin Post List
                        </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('add.post') }}"> Add Post
                            </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('all.post') }}">All Post </a>
                        </li>
                        @else

                      <li class="nav-item"> <a class="nav-link" href="{{ route('add.post') }}"> Add Post
                          </a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('all.post') }}">All Post </a>
                      </li>

                      @endif
                  </ul>
              </div>
          </li>
          @else
          @endif
          @if(Auth::guard('admin')->user()->video_post =="video_post")
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                  aria-controls="form-elements">
                  <i class="icon-columns menu-icon"></i>
                  <span class="menu-title">Video Post</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"><a class="nav-link" href="{{ route('all.videocategory') }}">Add
                              Video Category</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('add.video') }}">Add Video
                              Post</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('all.video') }}">All Video
                              Post</a></li>
                  </ul>
              </div>
          </li>
          @else
          @endif
 
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-shakir" aria-expanded="false"
                  aria-controls="form-shakir">
                  <i class="icon-columns menu-icon"></i>
                  <span class="menu-title">Gallary Post</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-shakir">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"><a class="nav-link" href="{{ route('add.gallry') }}">Add
                              Gallry</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('all.gallry') }}">All
                              Gallry</a></li>
                  </ul>
              </div>
          </li>
         

@if(Auth::guard('admin')->user()->user =="user")
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-test" aria-expanded="false"
                  aria-controls="form-elements">
                  <i class="icon-columns menu-icon"></i>
                  <span class="menu-title">User Management</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-test">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"><a class="nav-link" href="{{ route('add.user') }}">Add User</a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('all.user') }}">All User</a>
                      </li>
                  </ul>
              </div>
          </li>

        @else
          @endif

          @if(Auth::guard('admin')->user()->website =="website")
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-new" aria-expanded="false"
                  aria-controls="form-elements">
                  <i class="icon-columns menu-icon"></i>
                  <span class="menu-title">Web site</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-new">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"><a class="nav-link"
                              href="{{ route('website.setting') }}">Setting</a></li>


                              <li class="nav-item"><a class="nav-link"
                                      href="{{ route('seo.setting') }}">Seo Setting</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('all.ads') }}">Ads</a></li>
                  </ul>
              </div>
          </li>
          @else
            @endif


      </ul>
  </nav>
