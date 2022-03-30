 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
         
       
          
        
   
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Distric List</h4>
                  <p class="card-description">
                   <a href="{{route('add.distric')}}" class="btn btn-primary">Add Distric</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Distric Name</th>
                          <th>Divison Name</th>
                          <th>Slug</th>
                          <th>Action</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($distric as $row)
                        <tr class="table-info">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$row->name}} </td>
                          <td>{{$row->division->name}} </td>
                             <td>@if ($row->status == 1)
                              <span class="btn btn-info">Public</span>
                               @else
                               <span class="btn btn-danger">Private</span>
                               @endif</td>
                          <td>
                          	<a href="{{route('edit.distric',$row->id)}}" class="btn btn-primary">edit</a>
                          	<a href="" class="btn btn-danger">Delete</a>
                          </td>
                      
                        </tr>
                        @endforeach
                       
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection
