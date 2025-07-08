
<!doctype html>
<html lang="en">
  <head>
<style>

<style>
html, body {
  height: 100%;
  overflow: hidden;
}
.site-wrap {
  height: 100%;
  overflow: hidden;
}
#home-section {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
</style>

</style>
    <title>JobBoard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="../assets/css/custom-bs.css">
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/fonts/line-icons/style.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/quill.snow.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6 text-black"><a href="{{url('/')}}" class="text-black">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
         
              <li><a href="{{ route('joblist') }}" class="text-black">Job Listings</a></li>
            <li><a href="{{route('contact1')}}" class='text-black'>Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
          <div class="ml-auto">

@if(Route::has('login'))

  @auth
  <div class="d-flex align-items-center">
  <!-- Applications Dropdown -->
  <div class="dropdown show">
    <button class="btn btn-outline-secondary dropdown-toggle" 
            type="button" 
            id="dropdownMenuApplications" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
      Applications
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuApplications">
      <a class="dropdown-item" href="{{ route('showProfile') }}">Profile</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('favourites') }}">Favourite</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('messages') }}">Messages</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('upload_cv') }}">Upload CV</a>
    </div>
  </div>

  <!-- Username Dropdown -->
  <div class="dropdown show ml-2">
    <button class="btn btn-outline-secondary dropdown-toggle" 
            type="button" 
            id="dropdownMenuUser" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
      {{ Auth::user()->name }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuUser">
      <a class="dropdown-item" href="{{ route('showProfile') }}">Profile</a>
      <div class="dropdown-divider"></div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="dropdown-item" type="submit">Logout</button>
      </form>
    </div>
  </div>
</div>

  @else
  <a href="{{route('register')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Register</a>
  <a href="{{route('login')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
</div>
@endauth
@endif
<a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
</div>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <!-- HOME -->
<section id="home-section " class="home-section section-hero d-flex align-items-center justify-content-center" style="background-color: white;">
  <div class="container ">
        <div class="row align-items-center justify-content-center mb-5">
          <div class="col-md-12 ">
            <div class="mb-5 text-center">
              <h1 class="text-black font-weight-bold" style='font-size: 2rem;'>Welcome to <span class="text-black" style="font-weight: normal; font-size: 2rem; letter-spacing: .2rem; text-transform: uppercase;">
    JOBBOARD<span class="text-black font-weight-bold" style='font-size: 2rem;'>!</span>
  </span></h1>
              <h4 class="text-black">Making job finding <span class='text-primary'>easier</span>.</h4>
                <p class="text-black">Upload your CV, browse available jobs, apply for positions.</p>
            </div>
         
          </div>
        </div>
      </div>
</section>

    
       <!-- SCRIPTS -->
      <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/stickyfill.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.animateNumber.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/quill.min.js"></script>
    
    
    <script src="../assets/js/bootstrap-select.min.js"></script>
    
    <script src="../assets/js/custom.js"></script>
   

     
  </body>
</html>