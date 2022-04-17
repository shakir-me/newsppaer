  @extends('layouts.app')
  @section ('main_content')

<div class="container custom-container">
   <div class="row custom-row">
     <div class="col-12 custom-padding">
       <div class="privacy-content-details">
            <h1 class="text-center">Contact Us</h1>
            <div class="contact-details">
          <ul class="footer-address-ul footer-address-ul-contact">
            <li>
              <span class="size-w-3">
                <i class="fa fa-home" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
               {{$conatct->address}} 
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
                    {{$conatct->telephone}}  ,   {{$conatct->number_one}} 
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-fax" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
                    {{$conatct->number_two}} 
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
                {{$conatct->email_one}}
              </span>
            </li>
            <li>
              <span class="size-w-3">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </span>
              <span class="size-w-4">
                 {{$conatct->email_two}}
              </span>
            </li>
          </ul>
          <ul class="social-icon footer-icon footer-icon-2">
            <li><a target="_blank" href="{{$conatct->facebook_link}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
<!--             <li><a href="{{$conatct->youtube_link}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
 -->            <li><a target="_blank" href="{{$conatct->youtube_link}}" class="youtube"><i class="fa fa-youtube"></i></a></li>
          <!--   <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
          </ul><!--/.social-icon-->
        </div>

        </div>
     </div>
   </div>
 </div>
  @endsection