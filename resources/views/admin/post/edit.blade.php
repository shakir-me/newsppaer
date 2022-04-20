 
  @extends('admin.layout.layout')
  @section ('content')


 

 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Management</h4>
             <p class="card-description">
              <a href="{{route('all.post')}}" class="btn btn-primary">All Post</a>
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


                  <form action="{{route('update.post',$edit_post->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Post Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputName1" value="{{$edit_post->title}}">
                    </div>


                      <div class="form-group">
                          <label for="exampleInputName1">Image</label>
                        
                           <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                              <span class="custom-file-control"></span>
                       <img src="#" id="one" >
                    <img id="logo" src="{{asset('admin/post/'.$edit_post->image) }}" width="50" height="50;" />
                        </div>

          @php
          $admin=App\Models\Admin::get();
          @endphp
                      <div class="form-group">
                        <label for="exampleInputName1">Type Post</label>
                        <select class="form-control" name="admin_id">
                          <option value="">Selete Type Post</option>
                          @foreach ($admin as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $edit_post->admin_id ? 'selected' : '' }}>{{ $row->name }}</option>
                            @endforeach

                      
                        </select>
                      </div>

                                                
@php
$category=DB::table('categories')->where('status',1)->get();
@endphp
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name</label>
                      <select class="form-control" name="category_id" required="">
                        <option value="">Selete Category</option>
                        @foreach ($category as $row)
                          <option value="{{ $row->id }}" {{ $row->id == $edit_post->category_id ? 'selected' : '' }}>{{ $row->name }}</option>
                          @endforeach
                      </select>
                    </div>
@php
$subcategory=DB::table('sub_categories')->get();
@endphp

                    <div class="form-group">
                      <label for="exampleInputName1">Sub Category Name</label>
                      <select class="form-control" name="subcategory_id">

                      	@foreach ($subcategory as $row)
                      	  <option value="{{ $row->id }}" {{ $row->id == $edit_post->subcategory_id ? 'selected' : '' }}>{{ $row->name }}</option>
                      	  @endforeach
                    
                      </select>
                    </div>
@php
$division=DB::table('divisions')->get();
@endphp
                    <div class="form-group">
                      <label for="exampleSelectGender"> Division Name</label>
                        <select class="form-control" name="division_id" id="exampleSelectGender" >
                          <option value="">Selete Division</option>
                       @foreach($division as $row)
                          <option value="{{ $row->id }}" {{ $row->id == $edit_post->division_id ? 'selected' : '' }}>{{ $row->name }}</option>
                          @endforeach
                        </select>
                      </div>

@php
$distric=DB::table('districs')->get();
@endphp
                      <div class="form-group">
                        <label for="exampleSelectGender"> Distric Name</label>
                          <select class="form-control" name="distric_id" id="exampleSelectGender">
                        @foreach($distric as $row)
                      <option value="{{ $row->id }}" {{ $row->id == $edit_post->distric_id ? 'selected' : '' }}>{{ $row->name }}</option>
                      @endforeach
                          </select>
                        </div>


                        <div class="form-group">
                          <label for="exampleSelectGender"> Short  Description</label>
                            <textarea class="form-control" name="short_desc" id="summernote">
                            	{!!$edit_post->short_desc!!}
                            </textarea>
                          </div>


                          <div class="form-group">
                            <label for="exampleSelectGender"> Long  Description</label>
                              <textarea class="form-control" name="long_desc" id="summernotetwo">
                              	 	{!!$edit_post->long_desc!!}
                              </textarea>
                            </div>
                    




                    <div class="form-group">
                      <label for="exampleSelectGender"> Post Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender" >
                          <option value="1" {{($edit_post->status=="1")?"selected":""}}>Public</option>
                          <option value="0" {{($edit_post->status=="0")?"selected":""}}>Private</option>
                        </select>
                      </div>


                          <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                    

                                      <input type="checkbox" name="heding_news" value="1"<?php if($edit_post->heding_news==1)
                                            {
                                              echo "checked";
                                               }?>>
                                    Heading News
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                    	  <input type="checkbox" name="first_section" value="1"<?php if($edit_post->first_section==1)
                                            {
                                              echo "checked";
                                               }?>>
                                      
                                     Slider News
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">

                                    		  <input type="checkbox" name="second_section" value="1"<?php if($edit_post->second_section==1)
                                    	        {
                                    	          echo "checked";
                                    	           }?>>
                                    
                                     Lead Section
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                   

                                      	  <input type="checkbox" name="three_section" value="1"<?php if($edit_post->three_section==1)
                                              {
                                                echo "checked";
                                                 }?>>
                                           Exclusive one
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                   

                                          <input type="checkbox" name="four_section" value="1"<?php if($edit_post->four_section==1)
                                              {
                                                echo "checked";
                                                 }?>>
                                           Exclusive Two
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                   

                                          <input type="checkbox" name="five_section" value="1"<?php if($edit_post->five_section==1)
                                              {
                                                echo "checked";
                                                 }?>>
                                           Exclusive Three
                                    </label>
                                  </div>
                                </div>
                              </div>

                         
                      </div>
                         
                             <h4>Seo </h4>



                         <div class="form-group">
                           <label for="exampleInputName1">Seo Title</label>
                           <input type="text" name="seo_title" class="form-control" id="exampleInputName1" value="{{$edit_post->seo_title}}">
                         </div>

                             <div class="form-group">
                               <label for="exampleSelectGender"> Seo  Description</label>
                                  <input type="text" name="seo_desc" class="form-control" id="exampleInputName1" value="{{$edit_post->seo_desc}}">
                               </div>


                               <div class="form-group">
                                 <label for="exampleSelectGender">Seo   Keyworks</label>
                                  
                                   <input type="text" name="seo_key" class="form-control" id="exampleInputName1" value="{{$edit_post->seo_key}}">
                                 </div>
                          

                     


                     

                      
               
               
   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                
                  </form>
                </div>
              </div>
            </div>

      
         
         
           
     
          </div>
        </div>

      </div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
      </script>

      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

      <script type="text/javascript">
          $(document).ready(function() {
               $('select[name="category_id"]').on('change', function(){
                   var category_id = $(this).val();
                   if(category_id) {

                     $.ajax({
                         url: "{{  url('/get/category/') }}/"+category_id,
                         type:"GET",
                         dataType:"json",
                         success:function(data) {
                            var d =$('select[name="subcategory_id"]').empty();
                               $.each(data, function(key, value){

                                   $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                               });

                         },
                        
                     });
                   } else {
                       alert('danger');
                   }

               });
           });

      </script>



      <script type="text/javascript">
          $(document).ready(function() {
               $('select[name="division_id"]').on('change', function(){
                   var division_id = $(this).val();
                   if(division_id) {

                     $.ajax({
                         url: "{{  url('/get/division/') }}/"+division_id,
                         type:"GET",
                         dataType:"json",
                         success:function(data) {
                            var d =$('select[name="distric_id"]').empty();
                               $.each(data, function(key, value){

                                   $('select[name="distric_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                               });

                         },
                        
                     });
                   } else {
                       alert('danger');
                   }

               });
           });

      </script>


                      <script type="text/javascript">
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
     </script>
@endsection      