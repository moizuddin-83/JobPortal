<!doctype html>
<html lang="en">
<head>
    <title>Reset Password - JobBoard Admin</title>
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
<p> Reset your password. </p>
        </div>

        <div class="mb-3 text-sm text-center" style="color: rgba(0, 0, 0, 0.62);">
            Enter your email and we’ll send you a link to reset it.
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            </div>

            <div class="d-flex justify-content-between">
                <a class="underline text-left text-sm text-gray-600 hover:text-gray-900 mt-2" href="{{ route('login') }}">
                    {{ __('Remember your password?') }}
                </a>
                <button type="submit" class="btn btn-primary px-4">
                    Send Reset Link
                </button>
            </div>
        </form>
    </div>

    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
