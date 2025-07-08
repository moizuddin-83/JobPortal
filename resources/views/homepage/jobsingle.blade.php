
<!doctype html>
<html lang="en">

  
  <head>
    <title class="text-black">JobBoard &mdash; Website Template by Colorlib</title>
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
              <li><a href="{{url('/')}}" class="nav-link active text-black">Home</a></li>
              <li><a href="{{route('joblist')}} "class='text-black'>Job Listings</a></li>
              <li><a href="{{route('contact1')}}" class='text-black'>Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
          <div class="ml-auto">

@if(Route::has('login'))

  @auth
  <div class="flex">

  <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuOutlineButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Applications </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton2" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                        <a class="dropdown-item" href="{{route('showProfile')}}">Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('favourites')}}">Favourite</a>
                         
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('messages')}}">Messages</a>
                          <div class="dropdown-divider"></div>
                          
                          <a class="dropdown-item" href="{{route('upload_cv')}}">Upload cv</a>
                        </div>
                      </div>
<br>
<x-app-layout>
</x-app-layout>

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
   
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('info'))
    <div class="alert alert-info">
        {{ session()->get('info') }}
    </div>
@endif
@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif


    
    <section class="site-section">
  <div class="container">
    <div class="row">
      <!-- Left Column -->
      <div class="col-lg-8">
        <div class="d-flex align-items-center mb-4">
          <div class="border p-2 d-inline-block mr-3 rounded">
            @if($job->image)
              <img src="{{ asset('jobimage/' . $job->image) }}" width="100" height="100">
            @else
              <img src="{{ asset('path/to/placeholder/image.jpg') }}" width="100" height="100">
            @endif
          </div>
          <div>
            <h2>{{ $job->job_title }}</h2>
            <div>
              <span class="icon-briefcase mr-2"></span>{{ $job->company_name }}
              <span class="icon-room ml-3 mr-2"></span>{{ $job->job_region }}
              <span class="icon-clock-o ml-3 mr-2 text-primary"></span>{{ $job->job_type }}
            </div>
          </div>
        </div>

        <!-- Description -->
        <div class="mb-4" style="max-width: 90%;">
          <h4 class="text-success"><span class="icon-align-left mr-2"></span>Job Description</h4>
          <p>{{ $job->job_description }}</p>
        </div>

        <!-- Responsibilities -->
        <div class="mb-4" style="max-width: 90%;">
          <h4 class="text-success"><span class="icon-rocket mr-2"></span>Responsibilities</h4>
          <p>{{ $job->responsibilities }}</p>
        </div>

        <!-- Education -->
        <div class="mb-4" style="max-width: 90%;">
          <h4 class="text-success"><span class="icon-book mr-2"></span>Education + Experience</h4>
          <p>{{ $job->education_experience }}</p>
        </div>

        <!-- Other Benefits -->
        <div class="mb-4" style="max-width: 90%;">
          <h4 class="text-success"><span class="icon-turned_in mr-2"></span>Other Benefits</h4>
          <p>{{ $job->otherbenefits }}</p>
        </div>

        <!-- Apply/Save Buttons -->
        <div class="row mb-5">
          @if(Route::has('login'))
            @auth
              <div class="col-6">
                <form action="{{ route('save_job', ['id' => $job->id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-block btn-md {{ Auth::user()->hasSavedJob($job->id) ? 'btn-primary' : 'btn-light' }}">
                    @if(Auth::user()->hasSavedJob($job->id))
                      <i class="icon-check"></i> Job Saved
                    @else
                      <i class="icon-heart"></i> Save Job
                    @endif
                  </button>
                </form>
              </div>
              <div class="col-6">
                @if(Auth::user()->hasAppliedForJob($job->id))
                  <button class="btn btn-block btn-md btn-primary" disabled>
                    <span class="icon-check"></span> Applied
                  </button>
                @else
                  <form action="{{ route('apply', ['job' => $job->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-block btn-md btn-primary">
                      <span class="icon-paper-plane mr-2"></span> Apply Now
                    </button>
                  </form>
                @endif
              </div>
            @else
              <div class="col-6">
                <a href="{{ route('login') }}" class="btn btn-block btn-primary btn-md">You need to register first</a>
              </div>
            @endauth
          @endif
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-4">
        <!-- Job Summary -->
        <div class="bg-light p-3 border rounded mb-4">
          <h4 class="text-success">Job Summary</h4>
          <ul class="list-unstyled">
            <li><strong>Vacancy:</strong> {{ $job->vacancy }}</li>
            <li><strong>Status:</strong> {{ $job->job_type }}</li>
            <li><strong>Experience:</strong> {{ $job->experience }}</li>
            <li><strong>Location:</strong> {{ $job->job_region }}</li>
            <li><strong>Salary:</strong> {{ $job->salary }}</li>
            <li><strong>Gender:</strong> {{ $job->Gender }}</li>
            <li><strong>Deadline:</strong> {{ $job->application_deadline }}</li>
          </ul>
        </div>

        <!-- Categories -->
        <div class="bg-light p-3 border rounded mb-4">
          <h4 class="text-success">Categories</h4>
          <ul class="list-unstyled">
            @foreach($categories as $category)
              <li><a href="{{ route('category_single', $category->name) }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


    
  </div>

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
    
    <script src="../assets/js/bootstrap-select.min.js"></script>
    
    <script src="../assets/js/custom.js"></script>

     
  </body>
</html>