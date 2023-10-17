<nav class="custom_navbar">

    <div class="container">
        <div class="row">
            <div class="align-items-center col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo">
                    <!-- <h4>vCard<span>Go</span></h4> -->
                    {{--@if ($setting['cust_darklayout'] == 'on')
                        <img src="{{ $logo . (isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo-light.png').'?'.time() }}" alt=""
                             class="img-fluid" />
                    @else
                        <img src="{{ $logo . (isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo-dark.png').'?'.time() }}" alt=""
                             class="img-fluid" />
                    @endif--}}
                    <img src="{{ asset('landing/assets/img/logo_ubrand.png') }}" alt="img_header" >
                </div>

                <ul class="nav-links ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pt-4 pt-lg-2" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__('Giải pháp về Business Card')}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                            <li>
                                <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                                    Education <span class="badge bg-primary ms-1">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="dropdown-item ">
                                    Home Academy
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="dropdown-item">
                                    Courses
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="dropdown-item">
                                    Lead Course
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="dropdown-item">
                                    Request Access
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="dropdown-item">
                                    SaaS
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="dropdown-item ">
                                    Job
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">{{__('Nên tảng')}}</a></li>
                    <li><a href="#">{{__('Về chúng tôi')}}</a></li>
                    <li><a href="#">{{__('Blog ')}}</a></li>
                    <li><a href="#">{{__('Hướng dẫn')}}</a></li>
                    <li><a href="#">{{__('Hướng dẫn')}}</a></li>
                    <li><a href="#">{{__('Liên hệ')}}</a></li>

                    <ul class="navbar-nav nav-divided menu_language_desktop">
                        <li class="nav-item dropdown hovered">
                            <a class="nav-link text-body dropdown-toggle " data-bs-toggle="dropdown" href="#" aria-expanded="false" style="gap: 2px"><img src="{{ asset('landing/assets/img/icons/vietnamese.svg') }}" alt="icon_header" > <span>VN</span></a>
                            <div class="dropdown-menu">
                                <ul class="list-styled" style="padding-left: 10px;">
                                    <li class="">
                                        <a class="" href="#!" style="gap: 15px"><img src="{{ asset('landing/assets/img/icons/vietnamese.svg') }}" alt="icon_header" > VN</a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#!" style="gap: 15px"><img src="{{ asset('landing/assets/img/icons/vietnamese.svg') }}" alt="icon_header" > EN</a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                    </ul>

                    <div class="btn_login_register_mobile">
                        <li class="changeLangEN">
                            @if(app()->getLocale() != 'en')
                                <a>VN</a>
                            @endif

                            @if(app()->getLocale() == 'en')
                                <a style="color: #D00023 !important; font-weight: bold !important;">VN</a>
                            @endif

                        </li>
                        <li class="changeLangKO">
                            @if(app()->getLocale() != 'ko')
                                <a>EN</a>
                            @endif
                            @if(app()->getLocale() == 'ko')
                                <a style="color: #D00023 !important; font-weight: bold !important;">EN</a>
                            @endif
                        </li>
                    </div>

                    <div class="btn_login_register_mobile">
                        <li class="try-btn "><a href="{{ route('login') }}">{{__('Đăng nhập')}}</a></li>
                        @if(Utility::getValByName('signup_button') == 'on')
                            <li class="try-btn"><a href="{{ route('register') }}">{{__('Đăng ký')}}</a></li>
                        @endif
                    </div>

                    <div class="nav-item dropdown dropdown-toggle-icon-none nav-search form_search">
                        <a class="input_search nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('landing/assets/img/icons/location.svg') }}" alt="icon_footer" >
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch" style="width: 320px">
                            <form class="input-group">
                                <input class="form-control border-success" type="search" placeholder="{{__('Nhập từ khóa...')}}" aria-label="Search">
                                <button class="btn btn-primary m-0" type="submit">{{__('Tìm kiếm')}}</button>
                            </form>
                        </div>
                    </div>
                    <li class="try-btn btn_desktop"><a href="{{ route('login') }}">{{__('Đăng nhập')}}</a></li>
                    @if(Utility::getValByName('signup_button') == 'on')
                        <li class="try-btn btn_desktop"><a href="{{ route('register') }}">{{__('Đăng ký')}}</a></li>
                    @endif
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </div>
    </div>
</nav>





