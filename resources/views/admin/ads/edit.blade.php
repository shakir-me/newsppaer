 
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
                  <form action="{{route('update.ads',$ads->id)}}" method="post" class="forms-sample" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Ads Link</label>
                      <input type="text" name="link" class="form-control" id="exampleInputName1" value="{{$ads->link}}">
                    </div>

                      <div class="form-group">
                          <label for="exampleInputName1">Image</label>
                        
                           <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                              <span class="custom-file-control"></span>
                        <img src="#" id="one" >
               <img id="logo" src="{{asset('admin/ads/'.$ads->image) }}" width="50" height="50;" />
                        </div>

                      
                   <div class="row">
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                              
                               <input type="checkbox" name="ads_one" value="1"<?php if($ads->ads_one==1)
                                     {
                                       echo "checked";
                                        }?>>
                               First Ads
                             </label>
                           </div>
                         </div>
                       </div>


         


                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             	 <input type="checkbox" name="ads_two" value="1"<?php if($ads->ads_two==1)
                                     {
                                       echo "checked";
                                        }?>>
                               
                               2nd Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             		 <input type="checkbox" name="ads_three" value="1"<?php if($ads->ads_three==1)
                             	        {
                             	          echo "checked";
                             	           }?>>
                               
                               3rd Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                              
                               	 <input type="checkbox" name="ads_four" value="1"<?php if($ads->ads_four==1)
                                       {
                                         echo "checked";
                                          }?>>
                               4th  Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                              

                               	 <input type="checkbox" name="ads_five" value="1"<?php if($ads->ads_five==1)
                                       {
                                         echo "checked";
                                          }?>>
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
                             		 <input type="checkbox" name="ads_six" value="1"<?php if($ads->ads_six==1)
                             	        {
                             	          echo "checked";
                             	           }?>>
                               
                               6th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             		 <input type="checkbox" name="ads_seven" value="1"<?php if($ads->ads_seven==1)
                             	        {
                             	          echo "checked";
                             	           }?>>
                               
                               7th Ads 
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             		 <input type="checkbox" name="ads_eight" value="1"<?php if($ads->ads_eight==1)
                             	        {
                             	          echo "checked";
                             	           }?>>
                              
                               8th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             		 <input type="checkbox" name="ads_nine" value="1"<?php if($ads->ads_nine==1)
                             	        {
                             	          echo "checked";
                             	           }?>>
                             
                               9th Ads
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                             		 <input type="checkbox" name="ads_ten" value="1"<?php if($ads->ads_ten==1)
                             	        {
                             	          echo "checked";
                             	           }?>>
                               
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