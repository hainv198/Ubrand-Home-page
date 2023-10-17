@extends('layouts.homepage.master')

@section('content_ubrand')
    @include('layouts.homepage.components.home.banner')
    @include('layouts.homepage.components.home.information')
{{--
     <section class="logo_slider theme-bg">
            <div class="container">
                <div class="row">
                    <div class="logo_slider_main">
                        <ul>
                            <li>
                                <div class="logo_slider_img">
                                    <h4>vCard<span>Go</span></h4>
                                </div>
                            </li>
                            <li>
                                <div class="logo_slider_img">
                                    <h4>vCard<span>Go</span></h4>
                                </div>
                            </li>
                            <li>
                                <div class="logo_slider_img">
                                    <h4>vCard<span>Go</span></h4>
                                </div>
                            </li>
                            <li>
                                <div class="logo_slider_img">
                                    <h4>vCard<span>Go</span></h4>
                                </div>
                            </li>
                            <li>
                                <div class="logo_slider_img">
                                    <h4>vCard<span>Go</span></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
     <section class="services-section" id="services">
            <div class="container">
                <div class="mb-5 text-center">
                    <div class="bg_vector">
                        <img src="{{ asset('landing/assets/img/bg_vector.svg') }}" alt="bg_vector" class="img-fluid">
                    </div>
                    <div class="blog-heading">
                        <h3>
                            The world’s advanced<br> <span> contact tech cards  </span>
                        </h3>
                        <p class="section_paragragh">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="d-md-flex d-block align-items-center justify-content-center w-100">
                        <div class="product-details">
                            <div class="product-image">
                                <img src="{{ asset('landing/assets/img/Icon.svg') }}" alt="Icon1" class="img-fluid hover-hide">
                                <img src="{{ asset('landing/assets/img/Icon-black.svg') }}" alt="Icon1" class="img-fluid hover-show">
                            </div>
                            <div class="product-text">
                                <p>The world’s advanced
                                    <span>
                                   contact tech cards
                                   </span>
                                </p>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-image">
                                <img src="{{ asset('landing/assets/img/Icon.svg') }}" alt="Icon1" class="img-fluid hover-hide">
                                <img src="{{ asset('landing/assets/img/Icon-black.svg') }}" alt="Icon1" class="img-fluid hover-show">
                            </div>
                            <div class="product-text">
                                <p>The world’s advanced
                                    <span>
                                   contact tech cards
                                   </span>
                                </p>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="product-image">
                                <img src="{{ asset('landing/assets/img/Icon.svg') }}" alt="Icon1" class="img-fluid hover-hide">
                                <img src="{{ asset('landing/assets/img/Icon-black.svg') }}" alt="Icon1" class="img-fluid hover-show">
                            </div>
                            <div class="product-text">
                                <p>The world’s advanced
                                    <span>
                                   contact tech cards
                                   </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="position_relative">
                        <div class="mockup_img">
                            <img src="{{ asset('landing/assets/img/mockup.png') }}" alt="mockup" class="img-fluid">
                        </div>
                        <div class="bg_vector_two">
                            <img src="{{ asset('landing/assets/img/bg_vector.svg') }}" alt="bg_vector" class="img-fluid">
                        </div>
                        <div class="vector_2">
                            <img src="{{ asset('landing/assets/img/Vector2.svg') }}" alt="Vector2" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </section>
     <section class="blog">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 respo-order-2">
                        <div class="blog-section">
                            <div class="blog-heading">
                                <h3>
                                    The world’s advanced
                                    <br>
                                    <span> contact tech cards </span>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                                <div class="btns_main">
                                    <a href="{{ route('login') }}" class="btn theme-bg try_theme_btn">
                                        <span class="text-white">Try vCardGo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-image text-center">
                            <img src="{{ asset('landing/assets/img/blog1.png') }}" alt="blog" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <section class="blog">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-image">
                            <img src="{{ asset('landing/assets/img/hero.png') }}" alt="hero" class="img-fluid">
                            <div class="blog-image_bg_img">
                                <img src="{{ asset('landing/assets/img/bg_vector.svg') }}" alt="bg_vector" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 respo-order-2">
                        <div class="blog-section">
                            <div class="blog-heading">
                                <h3>
                                    The world’s advanced
                                    <br>
                                    <span> contact tech cards </span>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                                <div class="btns_main">
                                    <a href="{{ route('login') }}" class="btn theme-bg try_theme_btn">
                                        <span class="text-white">Try vCardGo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vector_3">
                        <img src="{{ asset('landing/assets/img/Vector3.svg') }}" alt="Vector2" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
     <section class="blog all_techcard_img"  id="demos">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 m-auto">
                        <div class="blog-section">
                            <div class="blog-heading text-center">
                                <h3>
                                    The world’s advanced
                                    <br>
                                    <span> contact tech cards </span>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <ul class="owl-carousel owl-theme">
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard1.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard01.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard2.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard02.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard3.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard03.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard4.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard04.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard5.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard05.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard6.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard06.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard7.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard07.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard8.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard08.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard9.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard09.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard10.png') }}" alt="techcard1" class="img-fluid"></li>
                            <li class="items"><img src="{{ asset('landing/assets/img/cards/vcard010.png') }}" alt="techcard1" class="img-fluid"></li>
                        </ul>
                    </div>
                    <div class="vector_4">
                        <img src="{{ asset('landing/assets/img/bg_vector.svg') }}" alt="Vector2" class="img-fluid">
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('.owl-carousel').owlCarousel({
                                loop:true,
                                nav:true,
                                margin: 10,
                                responsiveClass: true,
                                rtl: true,
                                responsive: {
                                    0: {
                                        items: 1,
                                        nav: true
                                    },
                                    600: {
                                        items: 3,
                                        nav: false
                                    },
                                    1000: {
                                        items: 6,
                                        nav: true,
                                        loop: true,
                                        margin: 20
                                    }
                                }
                            })
                        })
                    </script>
                </div>
            </div>
            </div>
            <nav class="custom_navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="logo footer_logo">
                                <h4><img src="{{$logo.'/logo-dark.png'}}"></h4>
                            </div>
                            <ul class="nav-links footer-nav-links ">
                                <li class="text-muted">Copyright © &nbsp;{{ isset($langSetting['footer_text']) ? $langSetting['footer_text'] : config('app.name', 'vCardGo-SaaS') }} {{ date('Y') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
--}}



@endsection
