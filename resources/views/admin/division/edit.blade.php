 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Division Management</h4>
             <p class="card-description">
              <a href="{{route('all.division')}}" class="btn btn-primary">All Division</a>
             </p>
                  <form action="{{route('update.division',$division->id)}}" method="post" class="forms-sample">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Division Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$division->name }}">
                    </div>



                    <div class="form-group">
                      <label for="exampleSelectGender"> Category Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender" >
                        <option value="1" {{($division->status=="1")?"selected":""}}>Public</option>
                        <option value="0" {{($division->status=="0")?"selected":""}}>Private</option>
                        
                        
                        </select>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputName1">Seo Title</label>
                        <input type="text" name="seo_title" class="form-control" id="exampleInputName1" value="{{$division->seo_title}}">
                      </div>

                               <div class="form-group">
                        <label for="exampleInputName1">Seo Description</label>
                        <input type="text" name="seo_desc" class="form-control" id="exampleInputName1" value="{{$division->seo_desc}}">
                      </div>
                      
                      
               



                
             
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                
                  </form>
                </div>
              </div>
            </div>

      
         
         
           
     
          </div>
        </div>

      </div>
@endsection      