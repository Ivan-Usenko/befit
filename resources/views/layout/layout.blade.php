<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.png') }}">
</head>
<body class="d-flex flex-column vh-100">
    <header class="bg-primary p-3 mb-4">
        <div class="container-fluid d-flex flex-row align-items-center">
            <h1 class="me-auto"><a class="text-light" href="{{ route('index.index') }}">BeFit</a></h1>
            @guest
                <a class="btn btn-outline-light mx-2" href="{{ route('auth.register') }}">Registration</a>
                <a class="btn btn-outline-light mx-2" href="{{ route('auth.login') }}">Log In</a>
            @endguest
            @auth
                <a class="btn btn-outline-light mx-2" href="{{ route('user.profile') }}">Profile</a>
            @endauth
        </div>
    </header>
    <main class="vh-100">
            @yield('content')
    </main>
    <footer class="footer mt-auto py-4 bg-primary text-light">
        <div class="container-fluid d-flex flex-row pe-5 ps-5">
            <a class="text-light" href="#">Contact support</a>
            <p class="ms-auto p-0 m-0">@copyright {{ date('Y') }}</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>