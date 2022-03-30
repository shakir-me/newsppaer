 
  @extends('admin.layout.layout')
  @section ('content')


 

 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">gallary Management</h4>
             <p class="card-description">
              <a href="{{route('all.gallry')}}" class="btn btn-primary">All gallary</a>
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


                  <form action="{{route('update.gallry',$gallary->id)}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">gallary Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$gallary->name}}">
                    </div>


                      <div class="form-group">
                          <label for="exampleInputName1">Image</label>
                        
                           <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                              <span class="custom-file-control"></span>
                    <img src="#" id="one" >
                    <img id="logo" src="{{asset('admin/gallary/'.$gallary->image) }}" width="50" height="50;" />
                        </div>

     







                          <div class="form-group">
                            <label for="exampleSelectGender">Description</label>
                              <textarea class="form-control" name="desc" id="summernotetwo">
                              	{!!$gallary->desc!!}
                              </textarea>
                            </div>
                    




                    <div class="form-group">
                      <label for="exampleSelectGender"> Gallary Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender" >
                        
                          <option value="1" {{($gallary->status=="1")?"selected":""}}>Public</option>
                          <option value="0" {{($gallary->status=="0")?"selected":""}}>Private</option>
                        </select>
                      </div>

                          <div class="row">
                            
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                               
                                      <input type="checkbox" name="first_section" value="1"<?php if($gallary->first_section==1)
                                            {
                                              echo "checked";
                                               }?>>
                                     Lead Slider
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                
                                      <input type="checkbox" name="second_section" value="1"<?php if($gallary->second_section==1)
                                            {
                                              echo "checked";
                                               }?>>
                                     Lead 
                                    </label>
                                  </div>
                                </div>
                              </div>




                         
                      
                         
                         

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