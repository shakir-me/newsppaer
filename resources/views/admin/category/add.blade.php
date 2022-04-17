 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category Management</h4>
             <p class="card-description">
              <a href="{{route('all.category')}}" class="btn btn-primary">All Category</a>
             </p>
                  <form action="{{route('store.category')}}" method="post" class="forms-sample">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" required="">
                    </div>



                    <div class="form-group">
                      <label for="exampleSelectGender"> Category Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender" >
                        
                          <option value="1">Public</option>
                          <option value="0">Private</option>
                        </select>
                      </div>
               
               
           


                      <div class="form-group">
                        <label for="exampleInputName1">Seo Title</label>
                        <input type="text" name="seo_title" class="form-control" id="exampleInputName1" placeholder="Seo Title">
                      </div>


                
             
                    <div class="form-group">
                      <label for="exampleTextarea1">Seo Description</label>
                      <textarea name="seo_desc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
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