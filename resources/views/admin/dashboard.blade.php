
  @extends('admin.layout.layout')
  @section ('content')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Shah Technology</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary"></span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
   @php
$post=DB::table('posts')->where('status',1)->get();
  @endphp
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Post</p>
                      <p class="fs-30 mb-2">{{count($post)}}</p>
                     
                    </div>
                  </div>
                </div>
   @php
$videos=DB::table('video_posts')->where('status',1)->get();
  @endphp

                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Video</p>
                      <p class="fs-30 mb-2">{{count($videos)}}</p>
                      
                    </div>
                  </div>
                </div>
   @php
$category=DB::table('categories')->where('status',1)->get();
  @endphp

                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Category</p>
                      <p class="fs-30 mb-2">{{count($category)}}</p>
                      
                    </div>
                  </div>
                </div>

  @php
$admins=DB::table('admins')->get();
  @endphp
                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Admin Control</p>
                      <p class="fs-30 mb-2">{{count($admins)}}</p>
                     
                    </div>
                  </div>
                </div>
            
           
          

              </div>
              </div>
            </div>
        
          
        

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('admin.layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->


      @endsection