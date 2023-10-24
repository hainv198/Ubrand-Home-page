<header class="header" id="header">
    <section class="wrapper container">
        <a href="" class="brand">
            <img src="{{ asset('landing/assets/img/logo_ubrand.png') }}" alt="img_header" >

        </a>
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <span class="overlay"></span>
        <nav class="navbar" id="navbar">
            <ul class="menu" id="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link">{{__('Về chúng tôi')}}</a>
                </li>
                <li class="menu-item menu-dropdown">
                    <span class="menu-link" data-toggle="submenu">{{__('Giải pháp về Business Card')}}<i class="bx bx-chevron-down"></i></span>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="#" class="submenu-link">Feature Link</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Feature Link</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Feature Link</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Feature Link</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-dropdown">
                    <span class="menu-link" data-toggle="submenu">{{__('Nên tảng')}}<i class="bx bx-chevron-down"></i></span>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="#" class="submenu-link">Discover Link</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Discover Link</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Discover Link</a></li>
                        <li class="submenu-item"><a href="#" class="submenu-link">Discover Link</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-dropdown">
                    <span class="menu-link" data-toggle="submenu">{{__('Blog ')}}<i class="bx bx-chevron-down"></i></span>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="#" class="submenu-link">{{__('Hướng dẫn')}}</a></li>

                    </ul>
                </li>
                <li class="menu-item"><a href="#" class="menu-link">{{__('Liên hệ')}}</a></li>
                <li class="menu-item">
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
                </li>
                <li class="menu-item">
                    <a href="{{ route('login') }}">{{__('Đăng nhập')}}</a>
                </li>
                @if(Utility::getValByName('signup_button') == 'on')
                    <li class="try-btn btn_desktop"><a href="{{ route('register') }}">{{__('Đăng ký')}}</a></li>
                @endif
            </ul>
        </nav>
    </section>
</header>


<script>
    const navbarMenu = document.getElementById("navbar");
    const burgerMenu = document.getElementById("burger");
    const overlayMenu = document.querySelector(".overlay");

    // Show and Hide Navbar Function
    const toggleMenu = () => {
        navbarMenu.classList.toggle("active");
        overlayMenu.classList.toggle("active");
    };

    // Collapsible Mobile Submenu Function
    const collapseSubMenu = () => {
        navbarMenu
            .querySelector(".menu-dropdown.active .submenu")
            .removeAttribute("style");
        navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
    };

    // Toggle Mobile Submenu Function
    const toggleSubMenu = (e) => {
        if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 992) {
            e.preventDefault();
            const menuDropdown = e.target.parentElement;

            // If Dropdown is Expanded, then Collapse It
            if (menuDropdown.classList.contains("active")) {
                collapseSubMenu();
            } else {
                // Collapse Existing Expanded Dropdown
                if (navbarMenu.querySelector(".menu-dropdown.active")) {
                    collapseSubMenu();
                }

                // Expanded the New Dropdown
                menuDropdown.classList.add("active");
                const subMenu = menuDropdown.querySelector(".submenu");
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
            }
        }
    };

    // Fixed Resize Window Function
    const resizeWindow = () => {
        if (window.innerWidth > 992) {
            if (navbarMenu.classList.contains("active")) {
                toggleMenu();
            }
            if (navbarMenu.querySelector(".menu-dropdown.active")) {
                collapseSubMenu();
            }
        }
    };

    // Initialize Event Listeners
    burgerMenu.addEventListener("click", toggleMenu);
    overlayMenu.addEventListener("click", toggleMenu);
    navbarMenu.addEventListener("click", toggleSubMenu);
    window.addEventListener("resize", resizeWindow);

</script>
