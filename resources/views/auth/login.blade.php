<!doctype html>
<html lang="en">
<head>
    <title>Login - JobBoard Admin</title>
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
    text-decoration: none;">JobBoard</a>
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

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot your password?</a>
    @endif

    <div class="d-flex gap-2">
        <a href="{{ route('register') }}" class="btn btn-info px-4">
            Register
        </a>
        <button type="submit" class="btn btn-primary px-4">
            Log in
        </button>
        
    </div>
</div>

        </form>
    </div>

    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
