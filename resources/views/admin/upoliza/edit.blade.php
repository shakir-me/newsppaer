 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upzila Management</h4>
             <p class="card-description">
              <a href="{{route('all.upzila')}}" class="btn btn-primary">All Upzila</a>
             </p>
                  <form action="{{route('update.upzila',$upliza->id)}}" method="post" class="forms-sample">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Upzila Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$upliza->name }}">
                    </div>


                    <div class="form-group">
                      <label for="exampleSelectGender">Distric Name</label>
                        <select class="form-control" name="distric_id" id="exampleSelectGender">
                        <option value="">No Parent</option>
                     @foreach ($distric as $cat)
                       <option value="{{ $cat->id }}" {{ $cat->id == $upliza->distric_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                     @endforeach
                        </select>
                      </div>






                    <div class="form-group">
                      <label for="exampleSelectGender"> Upzila Status</label>
                        <select class="form-control" name="status" id="exampleSelectGender" >
                        <option value="1" {{($upliza->status=="1")?"selected":""}}>Public</option>
                        <option value="0" {{($upliza->status=="0")?"selected":""}}>Private</option>
                        
                        
                        </select>
                      </div>
               
               
            

                      <div class="form-group">
                        <label for="exampleInputName1">Seo Title</label>
                        <input type="text" name="seo_title" class="form-control" id="exampleInputName1" value="{{$upliza->seo_title}}">
                      </div>

                               <div class="form-group">
                        <label for="exampleInputName1">Seo Description</label>
                        <input type="text" name="seo_desc" class="form-control" id="exampleInputName1" value="{{$upliza->seo_desc}}">
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