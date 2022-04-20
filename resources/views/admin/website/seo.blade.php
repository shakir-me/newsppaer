 @extends('admin.layout.layout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">


                 <div class="col-8 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Setting Management</h4>

                             <form action="{{ route('seo.update.setting', $seo->id) }}" method="post"
                                 class="forms-sample" enctype="multipart/form-data">
                                 @csrf

                                 <div class="form-group">
                                     <label for="exampleInputName1">Seo Title</label>
                                     <input type="text" name="seo_title" class="form-control" id="exampleInputName1"
                                         value="{{ $seo->seo_title }}">
                                 </div>

                                       <div class="form-group">
                                     <label for="exampleInputName1">Seo Description</label>
                                     <input type="text" name="seo_desc" class="form-control" id="exampleInputName1"
                                         value="{{ $seo->seo_desc }}">
                                 </div>


                                 <div class="form-group">
                                     <label for="exampleInputName1">Seo Keywords</label>
                                     <input type="text" name="sec_keywords" class="form-control" id="exampleInputName1"
                                         value="{{ $seo->sec_keywords }}">
                                 </div>


                            
                                 <div class="form-group">
                                     <label for="exampleInputName1">Facebook Page Link</label>
                                     <input type="text" name="fbpage_link" class="form-control" id="exampleInputName1"
                                         value="{{ $seo->fbpage_link }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Facebook App Id </label>
                                     <input type="text" name="fbapp_id" class="form-control" id="exampleInputName1"
                                         value="{{ $seo->fbapp_id }}">
                                 </div>
                           


                        

                                 <div class="form-group">
                                     <label for="exampleInputName1">Featured Image</label>

                                     <input type="file" name="image" class="form-control" onchange="readURL(this);">

                                     <span class="custom-file-control"></span>
                                     <img src="#" id="one">
                                     <img id="logo" src="{{ asset('admin/seo/' . $seo->image) }}" width="50"
                                         height="50;" />
                                 </div>

                                


                      



                                 <button type="submit" class="btn btn-primary mr-2">Update</button>

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
