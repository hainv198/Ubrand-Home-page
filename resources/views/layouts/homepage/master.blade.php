@php
    // $logo=asset(Storage::url('uploads/logo'));
    $logo=\App\Models\Utility::get_file('uploads/logo/');
    $setting = App\Models\Utility::settings();
    $set_cookie = App\Models\Utility::cookie_settings();
    $langSetting=App\Models\Utility::langSetting();
@endphp
    <!DOCTYPE html>
<html lang="en" dir="{{ $setting['SITE_RTL'] == 'on' ? 'rtl' : '' }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{(Utility::getValByName('title_text')) ? Utility::getValByName('title_text') : config('app.name', 'vCardGo SaaS')}}</title>

    <link rel="icon" href="{{ $logo. '/favicon.png' }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="./assets/css/docs.theme.min.css"> -->
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.carousel.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.theme.default.min.css') }}">
    <script src="{{ asset('landing/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @if ($setting['SITE_RTL'] == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}">
    @endif
    @if (isset($setting['cust_darklayout']) && $setting['cust_darklayout'] == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">

    <style type="text/css">
        .logo{
            max-width: 160px;
            width: 100%;
            /*height: 50px;*/
            padding: 0.33594rem 0;
        }
        .logo img {
            width: 100%;
            height: 100%;
            /* object-fit: scale-down; */
        }
    </style>

</head>
<body translate="no">
<main id="wrap">
    @include('layouts.homepage.layouts.header')
    <section id="container">
        @yield('content_ubrand')
    </section>
    @include('layouts.homepage.layouts.footer')
</main>

</body>
@if($set_cookie['enable_cookie'] == 'on')
    @include('layouts.cookie_consent')
@endif

{{--<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>--}}
<script id="rendered-js">
    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const body = document.querySelector('body');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');
        //Toggle Nav
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');

            //Animate Links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;

                }
            });
            //burger animation
            burger.classList.toggle('toggle');
            body.classList.toggle('scroll-hidden');
        });
    };
    navSlide();
    //# sourceURL=pen.js
</script>

</html>