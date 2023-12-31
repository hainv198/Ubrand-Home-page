<?php
    // $logo=asset(Storage::url('uploads/logo'));
    $logo=\App\Models\Utility::get_file('uploads/logo/');
    $setting = App\Models\Utility::settings();
    $set_cookie = App\Models\Utility::cookie_settings();
    $langSetting=App\Models\Utility::langSetting();
?>
    <!DOCTYPE html>
<html lang="en" dir="<?php echo e($setting['SITE_RTL'] == 'on' ? 'rtl' : ''); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e((Utility::getValByName('title_text')) ? Utility::getValByName('title_text') : config('app.name', 'vCardGo SaaS')); ?></title>

    <link rel="icon" href="<?php echo e($logo. '/favicon.png'); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo e(asset('landing/assets/css/style.css')); ?>">
    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="./assets/css/docs.theme.min.css"> -->
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('landing/assets/css/owl.carousel.min.css')); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo e(asset('landing/assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="<?php echo e(asset('landing/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landing/assets/js/owl.carousel.js')); ?>"></script>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <?php if($setting['SITE_RTL'] == 'on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-rtl.css')); ?>">
    <?php endif; ?>
    <?php if(isset($setting['cust_darklayout']) && $setting['cust_darklayout'] == 'on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-dark.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('custom/css/custom.css')); ?>">

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
    <?php echo $__env->make('layouts.homepage.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="container">
        <div class="alert alert-success" role="alert" id="successMsg" style="display: none;   position: fixed; right: 0; top: 90px; z-index: 9999999" >
            <?php echo e(__('Cảm ơn bạn đã để lại thông tin liên lạc')); ?>

        </div>
        <?php echo $__env->yieldContent('content_ubrand'); ?>
    </section>
    <?php echo $__env->make('layouts.homepage.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>

</body>
<?php if($set_cookie['enable_cookie'] == 'on'): ?>
    <?php echo $__env->make('layouts.cookie_consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


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
<script src="<?php echo e(asset('landing/assets/js/custom.js')); ?>"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

</html>
<?php /**PATH C:\Ubrand\resources\views/layouts/homepage/master.blade.php ENDPATH**/ ?>