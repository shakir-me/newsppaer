 
  @extends('admin.layout.layout')
  @section ('content')
 <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

   
            <div class="col-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ads Management</h4>
             <p class="card-description">
              <a href="{{route('all.ads')}}" class="btn btn-primary">All Ads</a>
             </p>
             @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                  <form action="{{route('store.ads')}}" method="post" class="forms-sample" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Ads Link</label>
                      <input type="text" name="link" class="form-control" id="exampleInputName1" placeholder="URL LINK" required="">
                    </div>

                      <div class="form-group">
                          <label for="exampleInputName1">Image</label>
                        
                           <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                              <span class="custom-file-control"></span>
                    <img src="#" id="one" >
               
                        </div>



                        <div class="form-group">
                          <label for="exampleSelectGender">Type </label>
                            <select class="form-control" name="type" id="exampleSelectGender" >
                            
                              <option value="1">Normal Ads</option>
                              <option value="0">Google Ads</option>
                              
                            </select>
                          </div>

                      
                   <div class="row">
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_one" class="form-check-input" value="1">
                               First Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_two" class="form-check-input" value="1">
                               2nd Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_three" class="form-check-input" value="1">
                               3rd Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_four" class="form-check-input" value="1">
                               4th  Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_five" class="form-check-input" value="1">
                               5th Ads
                             </label>
                           </div>
                         </div>
                       </div>
               </div>

                   <div class="row">
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_six" class="form-check-input" value="1">
                               6th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_seven" class="form-check-input" value="1">
                               7th Ads 
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_eight" class="form-check-input" value="1">
                               8th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_nine" class="form-check-input" value="1">
                               9th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input type="checkbox" name="ads_ten" class="form-check-input" value="1">
                               10th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                  
               
                  
                  

               </div>
                       
                  
                       
                  
                  


               
               
               
                  


              
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                
                  </form>
                </div>
              </div>
            </div>

      
         
         
           
     
          </div>
        </div>

      </div>

                 <script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection      