 @extends('admin.layout.layout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">


                 <div class="col-8 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">User Management</h4>
                             <p class="card-description">
                                 <a href="{{ route('all.user') }}" class="btn btn-primary">All User</a>
                             </p>
                             @if ($errors->any())
                                 <div class="alert alert-danger">
                                     <ul>
                                         @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                 </div>
                             @endif
                             <form action="{{ route('store.user') }}" method="post" class="forms-sample"
                                 enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                     <label for="exampleInputName1">Name</label>
                                     <input type="text" name="name" class="form-control" id="exampleInputName1"
                                         placeholder="Name" required="">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleSelectGender">Type</label>
                                     <select class="form-control" name="type" id="exampleSelectGender">
                                         <option value="">Selete Type</option>
                                         <option value="superadmin">Super Admin</option>
                                         <option value="admin">Admin</option>
                                         <option value="editor">Editor</option>
                                         <option value="author">Author</option>
                                     </select>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Email</label>
                                     <input type="email" name="email" class="form-control" id="exampleInputName1"
                                         placeholder="Enter Your Email" required="">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Password</label>
                                     <input type="password" name="password" class="form-control" id="exampleInputName1"
                                         required="">
                                 </div>


                                 <div class="form-group">
                                     <label for="exampleInputName1">Phone Number</label>
                                     <input type="number" name="number" class="form-control" id="exampleInputName1"
                                         required="">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleSelectGender"> About Us</label>
                                     <textarea class="form-control" name="about" id="summernotetwo"></textarea>
                                 </div>





                                 <div class="form-group">
                                     <label for="exampleInputName1">Image</label>

                                     <input type="file" name="image" class="form-control" onchange="readURL(this);">

                                     <span class="custom-file-control"></span>
                                     <img src="#" id="one">

                                 </div>

                                 <h1>Permision System</h1>
                                 <div class="row">
                                     <div class="col-md-2">
                                         <div class="form-group">
                                             <div class="form-check">
                                                 <label class="form-check-label">
                                                     <input type="checkbox" name="category" class="form-check-input"
                                                         value="category">
                                                     Category
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="form-group">
                                             <div class="form-check">
                                                 <label class="form-check-label">
                                                     <input type="checkbox" name="division" class="form-check-input"
                                                         value="division">
                                                     Division & Distric
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="form-group">
                                             <div class="form-check">
                                                 <label class="form-check-label">
                                                     <input type="checkbox" name="post" class="form-check-input"
                                                         value="post">
                                                     Post
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="form-group">
                                             <div class="form-check">
                                                 <label class="form-check-label">
                                                     <input type="checkbox" name="video_post" class="form-check-input"
                                                         value="video_post">
                                                     Video Post
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <div class="form-group">
                                             <div class="form-check">
                                                 <label class="form-check-label">
                                                     <input type="checkbox" name="user" class="form-check-input"
                                                         value="user">
                                                     User Mangement
                                                 </label>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="col-md-2">
                                         <div class="form-group">
                                             <div class="form-check">
                                                 <label class="form-check-label">
                                                     <input type="checkbox" name="website" class="form-check-input"
                                                         value="website">
                                                     Website Setting
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                 </div>















                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>

                             </form>
                         </div>
                     </div>
                 </div>






             </div>
         </div>

     </div>

     <script type="text/javascript">
         function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();
                 reader.onload = function(e) {
                     $('#one')
                         .attr('src', e.target.result)
                         .width(80)
                         .height(80);
                 };
                 reader.readAsDataURL(input.files[0]);
             }
         }
     </script>
 @endsection
