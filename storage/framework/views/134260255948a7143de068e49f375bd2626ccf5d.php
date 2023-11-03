<nav class="custom_navbar">

    <div class="container-fluid">
        <div class="row">
            <div class=" wgl-site-header" >
                <div class="logo">
                    <!-- <h4>vCard<span>Go</span></h4> -->
                    
                    <a href="">
                        <img src="<?php echo e(asset('landing/assets/img/logo_ubrand.png')); ?>" alt="img_header" >
                    </a>
                </div>

                <ul class="nav-links ">
                    <li class="menu-item menu-dropdown">
                        <span class="menu-link" data-toggle="submenu"><?php echo e(__('Giải pháp  Business Card')); ?><i class="bx bx-chevron-down"></i></span>
                        <ul class="submenu">
                            <li class="submenu-item"><a href="#" class="submenu-link"><?php echo e(__('Blog ')); ?></a></li>
                            <li class="submenu-item"><a href="#" class="submenu-link"><?php echo e(__('Hướng dẫn')); ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(route('about-us')); ?>"><?php echo e(__('Về chúng tôi')); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo e(__('Nên tảng')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('contact-page')); ?>"><?php echo e(__('Liên hệ')); ?></a>
                    </li>
                    <li class="menu-item menu-dropdown menu_language_desktop">
                        <span class="menu-link" data-toggle="submenu"><img src="<?php echo e(asset('landing/assets/img/icons/vietnamese.svg')); ?>" alt="icon_header" > VN<i class="bx bx-chevron-down"></i></span>
                        <ul class="submenu">
                            <li class="submenu-item"><a class="" href="#" style="gap: 15px"><img src="<?php echo e(asset('landing/assets/img/icons/vietnamese.svg')); ?>" alt="icon_header" > EN</a></li>
                        </ul>
                    </li>

                    <div class="btn_login_register_mobile">
                        <li class="changeLangEN">
                            <?php if(app()->getLocale() != 'en'): ?>
                                <a>VN</a>
                            <?php endif; ?>

                            <?php if(app()->getLocale() == 'en'): ?>
                                <a style="color: #D00023 !important; font-weight: bold !important;">VN</a>
                            <?php endif; ?>

                        </li>
                        <li class="changeLangKO">
                            <?php if(app()->getLocale() != 'ko'): ?>
                                <a>EN</a>
                            <?php endif; ?>
                            <?php if(app()->getLocale() == 'ko'): ?>
                                <a style="color: #D00023 !important; font-weight: bold !important;">EN</a>
                            <?php endif; ?>
                        </li>
                    </div>

                    <div class="btn_login_register_mobile">
                        <li class="try-btn "><a href="<?php echo e(route('login')); ?>"><?php echo e(__('Đăng nhập')); ?></a></li>
                        <?php if(Utility::getValByName('signup_button') == 'on'): ?>
                            <li class="try-btn"><a href="<?php echo e(route('register')); ?>"><?php echo e(__('Đăng ký')); ?></a></li>
                        <?php endif; ?>
                    </div>

                    <div class="nav-item dropdown dropdown-toggle-icon-none nav-search form_search">
                        <a class="input_search nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo e(asset('landing/assets/img/icons/location.svg')); ?>" alt="icon_footer" >
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch" style="width: 320px">
                            <form class="input-group">
                                <input class="form-control border-success" type="search" placeholder="<?php echo e(__('Nhập từ khóa...')); ?>" aria-label="Search">
                                <button class="btn btn-primary m-0" type="submit"><?php echo e(__('Tìm kiếm')); ?></button>
                            </form>
                        </div>
                    </div>

                    <li class="menu-item try-btn btn_desktop">
                        <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Đăng nhập')); ?></a>
                    </li>
                    <?php if(Utility::getValByName('signup_button') == 'on'): ?>
                        <li class="try-btn btn_desktop"><a href="<?php echo e(route('register')); ?>"><?php echo e(__('Đăng ký')); ?></a></li>
                    <?php endif; ?>
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




<?php /**PATH C:\Ubrand\resources\views/layouts/homepage/layouts/header.blade.php ENDPATH**/ ?>