 @extends('admin.layout.layout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">


                 <div class="col-8 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Setting Management</h4>

                             <form action="{{ route('update.setting', $setting->id) }}" method="post"
                                 class="forms-sample" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                     <label for="exampleInputName1">Title</label>
                                     <input type="text" name="title" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->title }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email One</label>
                                     <input type="email" name="email_one" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->email_one }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email Two</label>
                                     <input type="email" name="email_two" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->email_two }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Editor</label>
                                     <input type="text" name="editor_name" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->editor_name }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Address</label>
                                     <input type="text" name="address" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->address }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Telephone</label>
                                     <input type="text" name="telephone" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->telephone }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Phone numbner </label>
                                     <input type="text" name="number_one" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->number_one }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Phone numbner </label>
                                     <input type="text" name="number_two" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->number_two }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Phone </label>
                                     <input type="text" name="phone" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->phone }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Facebook Link </label>
                                     <input type="text" name="facebook_link" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->facebook_link }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Youtube Link </label>
                                     <input type="text" name="youtube_link" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->youtube_link }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Twitter Link </label>
                                     <input type="text" name="twitter_link" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->twitter_link }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Instragram Link </label>
                                     <input type="text" name="instragram_link" class="form-control" id="exampleInputName1"
                                         value="{{ $setting->instragram_link }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Image</label>

                                     <input type="file" name="image" class="form-control" onchange="readURL(this);">

                                     <span class="custom-file-control"></span>
                                     <img src="#" id="one">
                                     <img id="logo" src="{{ asset('admin/setting/' . $setting->image) }}" width="50"
                                         height="50;" />
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
