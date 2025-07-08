<!doctype html>
<html lang="en">
<head>
    <title>Register - JobBoard Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/custom-bs.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .auth-card {
            max-width: 500px;
            margin: 80px auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }
    </style>
</head>
<body>

<div class="auth-card">
   <div class="text-center mb-4">
    <a href="{{ url('/') }}" class="text-dark" style="font-weight: normal; font-size: 1.5rem; letter-spacing: .2rem; text-transform: uppercase;
    text-decoration: none;">
        JobBoard
    </a>
</div>


    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
        </div>

        <label for="usertype">User Type</label>
    <input type="text" class="form-control" id="usertype_display" value="client" disabled>
    <input type="hidden" name="usertype" value="client">

        <div class="form-group mb-3 mt-2">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="username">
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>
            <button type="submit" class="btn btn-success px-4">Register</button>
        </div>
    </form>
</div>

<!-- JS -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>