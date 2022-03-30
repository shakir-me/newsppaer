 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Video Category Management</h4>
             <p class="card-description">
              <a href="{{route('all.videocategory')}}" class="btn btn-primary">All Video Category</a>
             </p>
                  <form action="{{route('store.videocategory')}}" method="post" class="forms-sample">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Video Category Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" required="">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                
                  </form>
                </div>
              </div>
            </div>

      
         
         
           
     
          </div>
        </div>

      </div>
@endsection      