 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profile Management</h4>
            
                  <form action="{{route('update.profile')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                  	@csrf

                 
                    <div class="form-group">
                      <label for="exampleInputName1"> Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$editData->name}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"> Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputName1" value="{{$editData->email}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"> Number</label>
                      <input type="number" name="number" class="form-control" id="exampleInputName1" value="{{$editData->number}}">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputName1">Image</label>
                    
                       <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                          <span class="custom-file-control"></span>
                <img src="#" id="one" >
                <img id="logo" src="{{asset('admin/user/'.$editData->image) }}" width="50" height="50;" />
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