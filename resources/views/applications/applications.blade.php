<!doctype html>
<html lang="en">
  <head>
    <style>
      html, body {
        height: 100%;
        overflow-x: hidden;
      }
      .site-wrap {
        min-height: 100vh;
      }
    </style>
    <title>Admin Dashboard - JobBoard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="ftco-32x32.png">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/custom-bs.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
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

      <!-- NAVBAR -->
      <header class="site-navbar mt-3">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="site-logo col-6 text-black">
              <a href="{{url('home')}}" class="text-black">Admin Panel</a>
            </div>

            <nav class="mx-auto site-navigation">
              <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">

                <li><a href="{{url('users')}}" class="text-black">Users</a></li>
                <li><a href="{{url('category')}}" class="text-black">Category</a></li>
                <li><a href="{{url('job_view')}}" class="text-black">Jobs</a></li>
                <li><a href="{{url('applications')}}" class="text-black">Applications</a></li>
                
              </ul>
            </nav>

            <div class="right-cta-menu text-right d-flex align-items-center col-6">
              <div class="ml-auto">
                <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-primary border-width-2 d-none d-lg-inline-block">
        <span class="mr-2 icon-lock_outline"></span>Logout
    </button>
</form>

                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3">
                  <span class="icon-menu h3 m-0 p-0 mt-2"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- MAIN CONTENT -->
      <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container-fluid page-body-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="flex justify-content-between align-items-center mb-3">
                <h4 class="card-title">List of Applications</h4>
               
              </div>
                   

                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-gray">
                        <thead>
                          <tr>
                            <th> # </th>
                         <th>User name</th>
                         <th>User email</th>
                         <th>CV</th>
                         <th>Job title</th>
                         <th>Company</th>
                         <th>Status</th>
                         <th>Approved</th>
                         <th>Canceled</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                          <tr>

                           <td>{{$loop->iteration}}</td>
                           <td>{{$application->user->name}}</td>
                           <td>{{$application->user->email}}</td>
                           <td>
    <a href="{{ route('view_cv', ['userId' => $application->user_id]) }}" target="_blank" class="btn btn-info">Download CV</a>
</td>
                           <td>{{$application->job->job_title}}</td>
                           <td>{{$application->job->company_name}}</td>
                           <td><div class="badge badge-outline-warning">{{$application->status}}</div></td>
              <td><a class="btn btn-success" href="{{url('approved',$application->id)}}">Approved</a></td>
              <td><a class="btn btn-danger" href="{{url('canceled',$application->id)}}">Canceled</a></td>
                         
                 
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
    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/custom.js"></script>
  </body>
</html>
