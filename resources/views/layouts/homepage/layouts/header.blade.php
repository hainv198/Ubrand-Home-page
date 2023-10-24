<nav class="custom_navbar">

    <div class="container-fluid">
        <div class="row">
            <div class=" wgl-site-header" >
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
                    <li class="menu-item menu-dropdown">
                        <span class="menu-link" data-toggle="submenu">{{__('Giải pháp  Business Card')}}<i class="bx bx-chevron-down"></i></span>
                        <ul class="submenu">
                            <li class="submenu-item"><a href="#" class="submenu-link">{{__('Blog ')}}</a></li>
                            <li class="submenu-item"><a href="#" class="submenu-link">{{__('Hướng dẫn')}}</a></li>
                        </ul>
                    </li>
                    <li><a href="#">{{__('Về chúng tôi')}}</a></li>
                    <li><a href="#">{{__('Nên tảng')}}</a></li>
                    <li><a href="#">{{__('Liên hệ')}}</a></li>
                    <li class="menu-item menu-dropdown menu_language_desktop">
                        <span class="menu-link" data-toggle="submenu"><img src="{{ asset('landing/assets/img/icons/vietnamese.svg') }}" alt="icon_header" > VN<i class="bx bx-chevron-down"></i></span>
                        <ul class="submenu">
                            <li class="submenu-item"><a class="" href="#" style="gap: 15px"><img src="{{ asset('landing/assets/img/icons/vietnamese.svg') }}" alt="icon_header" > EN</a></li>
                        </ul>
                    </li>


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

                    <li class="menu-item try-btn btn_desktop">
                        <a href="{{ route('login') }}">{{__('Đăng nhập')}}</a>
                    </li>
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

<script>
    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 50) {
            // console.log("test 3")
            jQuery(".wgl-site-header").addClass("sticky_active");
        } else {
            jQuery(".wgl-site-header").removeClass("sticky_active");
        }
    });
</script>




