<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="if you like this content - contact me (628993766315 ~ rizky) ">
    <meta name="author" content="rizky">
    <meta name="generator" content="rizky">

    @yield('title')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assests/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/adminLTE/plugins/fontawesome-free/css/fontawesome.min.css') }}">


</head>

<body class="py-0">
    <main>
        <div class="container-lg" style="min-height: 100%">

            @include('layouts.frontend.navbar')

            @yield('content')

            @include('layouts.frontend.footer')
        </div>
    </main>
    {{-- script --}} <script src="{{ asset('assests/adminLTE/plugins/jquery/jquery.slim.min.js') }}">
    </script>
    <script src="{{ asset('assests/bootstrap-4.5.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assests/adminLTE/plugins/popper/popper.min.js') }}"></script>

</body>

</html>