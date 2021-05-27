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
    {{-- script --}}
    <script src="{{ asset('assests/adminLTE/plugins/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('assests/bootstrap-4.5.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assests/adminLTE/plugins/popper/popper.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
    </script>

</body>

</html>