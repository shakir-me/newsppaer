 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profile Management</h4>
            
                  <form action="{{route('update.password')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                  	@csrf

                 
                    <div class="form-group">
                      <label for="oldpass"> Old Password</label>
               
                      <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>

                      @if ($errors->has('oldpass'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('oldpass') }}</strong>
                          </span>
                      @endif

                    </div>

                    <div class="form-group">
                      <label for="password"> New Password </label>
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"> Confirm Password </label>
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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