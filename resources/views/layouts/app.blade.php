<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> @yield('title') | SAAD-RENT-A-CAR</title>
      <!-- css -->
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
      <link rel="stylesheet" href="{{ asset('css/font.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body >
      <!-- sec-1 start -->
      <div class="sec-1">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo/SAAD RENT A CAR.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                           <ul class="navbar-nav mx-auto">
                              <li class="nav-item">
                                 <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('booking') }}">Booking</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('carrent') }}">Car-Rent</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('car.service') }}">Car-Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('aboutus') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('address') }}">Address</a>
                              </li>
                              @if (Auth::guest())
                                 <li class="nav-item">
                                       <a class="nav-link" href="{{ route('login') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                 </li>
                              @else
                                 <li>
                                       @if (Auth::user()->role == 1)
                                          <li class="nav-item">
                                             <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                          </li>
                                       @elseif(Auth::user()->role == 2)
                                          <li class="nav-item">
                                             <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                          </li>
                                       @endif
                                 </li>
                              @endif
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <!-- sec-1 end -->

    @yield('content')

    <!-- sec-5 start -->
   <div class="sec-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="sec-5-dgn">
                  <img src="{{ asset('img/logo/SAAD RENT A CAR.png') }}" alt="">
                  <h1>we are your safe space on wheels.</h1>
                  <h3><span>ADDRESS:</span> Location:- 31 comersial plot main road-1, Senpara parbata khan pharmacy goli. mirpur-10. Dhaka-1216</h3>
                  <h3><span>PHONE:</span>  01721846158</h3>
                  <h3><span>PHONE:</span> 01921481668</h3>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="sec-5-dgn">
                  <h2>USEFUL LINKS</h2>
                  <h3><a href="{{ route('aboutus') }}">ABOUT</a></h3>
                  <h3><a href="{{ route('car.service') }}">OUR-SERVICE</a></h3>
                  <h3><a href="{{ route('address') }}">CONTACT</a></h3>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="sec-5-dgn">
                  <h2>CONTACT</h2>
                  <ul>
                     <li><a href="https://www.facebook.com/SAAD-RENT-A-CAR-103615092325466/"><i class="fab fa-facebook"></i></a></li>
                     <li>
                        <h3><span>PHONE:</span> 01996013126</h3>
                     </li>
                     <li>BOOKING 24/7</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- sec-5 end -->
   <!-- js -->
   <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('js/slick.min.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
   {!! Notify::message() !!}


</body>
</html>


