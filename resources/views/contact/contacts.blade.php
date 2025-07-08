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
                <li><a href="{{url('contacts')}}" class="text-black">Messages</a></li>
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
                    <h4 class="card-title">Messages</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-gray">
                        <thead>
                          <tr>
                         
                            
                            <th> First name </th>
                            <th> Last name </th>
                            <th> Email </th>
                            <th> Subject </th>
                            <th> Message </th>
                           
                           
                            <!-- <th>View</th> -->
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $message)
                          <tr>
                         
                            <td> {{ $message->fname}} </td>
                            <td> {{ $message->lname}} </td>
                            <td> {{ $message->email}} </td>
                            <td> {{ $message->subject}} </td>
                            <td> {{ $message->message}} </td>
                            <!-- <td ><a class="btn btn-success"  href="{{url('show',$message->id)}}" ><i class="bi bi-eye"></i></a> </td> -->
                          <td>  <a class="btn btn-danger" href="{{url('delete',$message->id)}}"  onclick="return confirm('you really want to delete this !')" ><i class="bi bi-trash3-fill"></i></a></td>
                         
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
