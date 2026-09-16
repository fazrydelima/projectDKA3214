<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Pelajar')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                Sistem Pelajar
            </a>

            <div class="navbar-nav ms-auto">

                <a class="nav-link" href="{{ route('studentview') }}">
                    Senarai Pelajar
                </a>

                <a class="nav-link" href="{{ route('studentForm') }}">
                    Borang Pelajar
                </a>

                <a class="nav-link" href="{{ route('studentlogout') }}">
                    Logout
                </a>

            </div>

        </div>
    </nav>

    <!-- Content -->
    @yield('content')

</body>
</html>