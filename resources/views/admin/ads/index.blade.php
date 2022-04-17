 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
         
       
          
        
   
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ads List</h4>
                  <p class="card-description">
                   <a href="{{route('add.ads')}}" class="btn btn-primary">Add Ads</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Link Name</th>
                          <th>Image</th>
                          <th>Ads One</th>
                          <th>Ads Two</th>
                          <th>Ads Three</th>
                          <th>Ads Four</th>
                          <th>Ads Five</th>
                          <th>Ads Six</th>
                          <th>Ads Seven</th>
                          <th>Ads Eight</th>
                          <th>Ads Nine</th>
                          <th>Ads Ten</th>
                          <th>Action</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($ads as $row)
                        <tr class="table-info">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$row->link}} </td>
                          <td><img id="logo" src="{{asset('admin/ads/'.$row->image) }}" width="50" height="50;" /></td>
                            <td>{{$row->ads_one}} </td>
                            <td>{{$row->ads_two}} </td>
                            <td>{{$row->ads_three}} </td>
                            <td>{{$row->ads_four}} </td>
                            <td>{{$row->ads_five}} </td>
                            <td>{{$row->ads_six}} </td>
                            <td>{{$row->ads_seven}} </td>
                            <td>{{$row->ads_eight}} </td>
                            <td>{{$row->ads_nine}} </td>
                            <td>{{$row->ads_ten}} </td>
                       <td>
                          	<a href="{{route('edit.ads',$row->id)}}" class="btn btn-primary">edit</a>
                          	<a href="{{route('delete.ads',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
