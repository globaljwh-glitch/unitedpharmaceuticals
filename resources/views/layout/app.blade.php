<!DOCTYPE html>
<html lang="en">

<head>
    <title>United Pharmaceuticals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
</head>

<body>
    <div class="topBar greyBg d-flex">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-end">
                <ul class="topInfoList mb-0">
                    <li><a href="{{ route('career') }}">Careers</a></li>
                    <li><a href="{{ route('coming.soon', 'events') }}">Events</a></li>
                    <li><a href="{{ route('coming.soon', 'news') }}">News</a></li>
                    <li><a href="{{ route('sample') }}">Samples</a></li>
                    <li><a href="{{ route('enquiry') }}">Inquiries</a></li>
                </ul>

                <div class="searchSite d-flex">
                    <label class="screen-reader-text" for="searchSite"></label>
                    <input type="text" class="search-field" name="searchSite" id="searchSite" placeholder="Search..."
                        autocomplete="off">
                    <button id="searchsubmit" class="search-submit">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <!-- JS Assets -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>

    <!-- Font Awesome CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>