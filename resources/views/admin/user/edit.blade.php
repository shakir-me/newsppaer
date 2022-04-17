 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Management</h4>
             <p class="card-description">
              <a href="{{route('all.user')}}" class="btn btn-primary">All User</a>
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
                  <form action="{{route('update.user',$user->id)}}" method="post" class="forms-sample" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectGender">Type</label>
                        <select class="form-control" name="type" id="exampleSelectGender" >

                         <option value="superadmin" {{($user->type=="superadmin")?"selected":""}}>Super Admin</option>
                         <option value="admin" {{($user->type=="admin")?"selected":""}}>Admin</option>
                         <option value="editor" {{($user->type=="editor")?"selected":""}}>Editor</option>
                         <option value="author" {{($user->type=="editor")?"selected":""}}>Author</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputName1" value="{{$user->email}}">
                      </div>

               


                      <div class="form-group">
                        <label for="exampleInputName1">Phone Number</label>
                        <input type="number" name="number" class="form-control" id="exampleInputName1" value="{{$user->number}}">
                      </div>




                      <div class="form-group">
                          <label for="exampleInputName1">Image</label>
                        
                           <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                              <span class="custom-file-control"></span>
                    <img src="#" id="one" >
               <img id="logo" src="{{asset('admin/user/'.$user->image) }}" width="50" height="50;" />
                        </div>

                      <h1>Permision System</h1>
                   <div class="row">
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             	<input type="checkbox" name="category" value="category"<?php if($user->category=="category")
                             	      {
                             	        echo "checked";
                             	         }?>>

                               
                              Category
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">

                             	<input type="checkbox" name="division" value="division"<?php if($user->division=="division")
                             	      {
                             	        echo "checked";
                             	         }?>>
                              
                               Division & Distric
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             	<input type="checkbox" name="post" value="post"<?php if($user->post=="post")
                             	      {
                             	        echo "checked";
                             	         }?>>
                             
                               Post
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">

                             	<input type="checkbox" name="video_post" value="video_post"<?php if($user->video_post=="video_post")
                             	      {
                             	        echo "checked";
                             	         }?>>
                             	
                               
                              Video Post
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             	<input type="checkbox" name="user" value="user"<?php if($user->user=="user")
                             	      {
                             	        echo "checked";
                             	         }?>>
                            
                               User Mangement
                             </label>
                           </div>
                         </div>
                       </div>

                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             	<input type="checkbox" name="website" value="website"<?php if($user->website=="website")
                             	      {
                             	        echo "checked";
                             	         }?>>
                            
                               Website Setting
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