 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
         
       
          
        
   
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User List</h4>
                  <p class="card-description">
                   <a href="{{route('add.user')}}" class="btn btn-primary">Add User</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($user as $row)
                        <tr class="table-info">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$row->name}} </td>
                          <td><img id="logo" src="{{asset('admin/user/'.$row->image) }}" width="50" height="50;" /></td>
                            <td>{{$row->type}} </td>

                       <td>
                          	<a href="{{route('edit.user',$row->id)}}" class="btn btn-primary">edit</a>
                          	<a href="{{route('delete.user',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
