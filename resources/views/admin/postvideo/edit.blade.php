 
  @extends('admin.layout.layout')
  @section ('content')


 

 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Video Post Management</h4>
             <p class="card-description">
              <a href="{{route('all.video')}}" class="btn btn-primary">All Video</a>
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


                  <form action="{{route('update.video',$postvideo->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Video  Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputName1" value="{{$postvideo->title}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Video  Link</label>
                      <input type="text" name="link" class="form-control" id="exampleInputName1" value="{{$postvideo->link}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Icon </label>
                      <input type="text" name="icon" class="form-control" id="exampleInputName1" value="{{$postvideo->icon}}">
                    </div>



@php
$video_categories=DB::table('video_categories')->get();
@endphp
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name</label>
                      <select class="form-control" name="postcategory_id" required="">
                        <option value="">Selete Video Category</option>
                        @foreach ($video_categories as $row)
                         
                          <option value="{{ $row->id }}" {{ $row->id == $postvideo->postcategory_id ? 'selected' : '' }}>{{ $row->name }}</option>

                          @endforeach

              
                      </select>
                    </div>

                    

                          <div class="form-group">
                              <label for="exampleInputName1">Image</label>
                            
                               <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                                  <span class="custom-file-control"></span>
                        <img src="#" id="one" >
                          <img id="logo" src="{{asset('admin/video/'.$postvideo->file) }}" width="50" height="50;" />
                            </div>


             
<!-- @php
$division=DB::table('divisions')->get();
@endphp
                    <div class="form-group">
                      <label for="exampleSelectGender"> Division Name</label>
                        <select class="form-control" name="division_id" id="exampleSelectGender" required="">
                          <option value="">Selete Division</option>
                       @foreach($division as $row)
                          <option value="{{$row->id}}">{{$row->name}}</option>
                          @endforeach
                        </select>
                      </div> -->


                 <!--      <div class="form-group">
                        <label for="exampleSelectGender"> Distric Name</label>
                          <select class="form-control" name="distric_id" id="exampleSelectGender">
                   
                          </select>
                        </div> -->


                  <!--       <div class="form-group">
                          <label for="exampleSelectGender"> Short  Description</label>
                            <textarea class="form-control" name="short_desc" id="summernote"></textarea>
                          </div>


                          <div class="form-group">
                            <label for="exampleSelectGender"> Long  Description</label>
                              <textarea class="form-control" name="long_desc" id="summernotetwo"></textarea>
                            </div> -->
                    




                    <div class="form-group">
                      <label for="exampleSelectGender"> Post Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender" >
                        
                          <option value="1" {{($postvideo->status=="1")?"selected":""}}>Public</option>
                          <option value="0" {{($postvideo->status=="0")?"selected":""}}>Private</option>
                        </select>
                      </div>

                          <div class="row">
                             
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                          <input type="checkbox" name="first_section" value="1"<?php if($postvideo->first_section==1)
                                            {
                                              echo "checked";
                                               }?>>
                                     First News
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                     
                                          <input type="checkbox" name="second_section" value="1"<?php if($postvideo->second_section==1)
                                              {
                                                echo "checked";
                                                 }?>>
                                     Second Section
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
   
   




<!--                       <script type="text/javascript">
       function readURL(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function (e) {
                   $('#one')
                       .attr('src', e.target.result)
                       .width(80)
                       .height(80);
               };
               reader.readAsDataURL(input.files[0]);
           }
        }
     </script> -->
@endsection      