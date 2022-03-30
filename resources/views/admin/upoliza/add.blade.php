 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upzila  Management</h4>
             <p class="card-description">
                      <label for="exampleSelectGender"></label>
              <a href="{{route('all.upzila')}}" class="btn btn-primary">All Upzila</a>
             </p>
                  <form action="{{route('store.upzila')}}" method="post" class="forms-sample">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Upzila Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" required="">
                    </div>



             
            
               
                    <div class="form-group">
                        <select class="form-control" name="distric_id" id="exampleSelectGender">
                        <option value="">Selete Distric</option>
                        @foreach($distric as $row)
                          <option value="{{$row->id}}">{{$row->name}}</option>
                      
                          @endforeach
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