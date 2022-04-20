 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
         
       
          
        
   
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Admin Post List</h4>
                  <p class="card-description">
                   <a href="{{route('add.post')}}" class="btn btn-primary">Add Post</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Post Image</th>
                          <th>Post Title</th>
                          <th>Category Name</th>
                          <th>Post by</th>
                          <th>Status</th>
                          <th>Action</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($adminpostlist as $row)
                        <tr class="table-info">
                          <td>{{$loop->iteration}}</td>
                          <td><img id="logo" src="{{asset('admin/post/'.$row->image) }}" width="50" height="50;" /></td>
                          <td>{{$row->title}} </td>
                          <td>{{$row->category->name}} </td>
                          <td>{{$row->admin->name}} </td>
                  
                             <td>@if ($row->status == 1)
                              <span class="btn btn-info">Public</span>
                               @else
                               <span class="btn btn-danger">Private</span>
                               @endif</td>
                          <td>
                            <a href="{{route('edit.post',$row->id)}}" class="btn btn-primary">edit</a>
                          	<a href="{{route('delete.post',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                            <a href="{{route('edit.post',$row->id)}}" class="btn btn-primary">View Post</a>
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
