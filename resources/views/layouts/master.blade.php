
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <title>Hello, world!</title>
</head>

<body class="d-flex flex-column min-vh-100">

    @include('layouts.navbar')

    <div class="container mt-3 flex-grow-1">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>