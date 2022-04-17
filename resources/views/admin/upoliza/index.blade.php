 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
         
       
          
        
   
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upzila List</h4>
                  <p class="card-description">
                   <a href="{{route('add.upzila')}}" class="btn btn-primary">Add Upzila</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Upzila Name</th>
                          <th>Distrci Name</th>
                          <th>Status</th>
                          <th>Action</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($upoliza as $row)
                        <tr class="table-info">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$row->name}} </td>
                          <td>{{$row->distric->name}} </td>
                  
                             <td>@if ($row->status == 1)
                              <span class="btn btn-info">Public</span>
                               @else
                               <span class="btn btn-danger">Private</span>
                               @endif</td>
                          <td>
                          	<a href="{{route('edit.upzila',$row->id)}}" class="btn btn-primary">edit</a>
                          	<a href="{{route('delete.upzila',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
