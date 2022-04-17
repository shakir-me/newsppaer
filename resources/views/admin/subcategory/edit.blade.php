 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sub Category Management</h4>
             <p class="card-description">
              <a href="{{route('all.subcategory')}}" class="btn btn-primary">All SubCategory</a>
             </p>
                  <form action="{{route('update.subcategory',$subcategory->id)}}" method="post" class="forms-sample">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Sub Category Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$subcategory->name}}">
                    </div>



             
 @php
$category=DB::table('categories')->get()
 @endphp              
               
                    <div class="form-group">
                      <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="category_id" id="exampleSelectGender">
                        <option value="">Selete Category</option>
                        @foreach($category as $row)
                          <option value="{{ $row->id }}" {{ $row->id == $subcategory->category_id ? 'selected' : '' }}>{{ $row->name }}</option>
                      
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Seo Title</label>
                        <input type="text" name="seo_title" class="form-control" id="exampleInputName1" value="{{$subcategory->seo_title}}">
                      </div>

                               <div class="form-group">
                        <label for="exampleInputName1">Seo Description</label>
                        <input type="text" name="seo_desc" class="form-control" id="exampleInputName1" value="{{$subcategory->seo_desc}}">
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