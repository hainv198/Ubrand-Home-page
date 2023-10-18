<section class="pricing py-5">

    <div class="container container-mobile">
        <div class="row justify-content-center p-3">
            <div class="col-md-12">
                <h2 class="text-center text-herding"><?php echo e(__('Bảng giá dành cho mọi người')); ?></h2>
                <p class="text-center" style="font-size: 16px"><?php echo e(__('Chọn kế hoạch phù hợp với bạn hoặc tổ chức của bạn.')); ?></p>
            </div>
        </div>
        <div class="tabs-container">
            <nav class="tabs">
                <div style="padding: 0">
                    <p class="active-price" data-tab="tab-month"><?php echo e(__('Báo giá theo tháng')); ?></p>
                    <p data-tab="tab-year"><?php echo e(__('Báo giá theo năm')); ?></p>
                </div>
            </nav>
        </div>

        <section id="tab-month" class="tab-content-price current-price">
            <div class="pricing py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Free')); ?></b></li>
                                                <li><span><i class='bx bx-user-circle'></i> <?php echo e((__('1 nguời dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Bắt đầu sử dụng Smart Card')); ?> <br> <?php echo e(__('miễn phí')); ?> </span> </li>
                                                <li class="card-price font-weight-bold">0đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Bao gồm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tài khoản cá nhân')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('5 Mẫu Smart Card chuyên nghiệp')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh Profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Starter')); ?></b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> <?php echo e((__('+3 nguời dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Smart Card dành cho đội')); ?> <br> <?php echo e(__('nhóm nhỏ')); ?></span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Mọi thứ đều miễn phí, cộng thêm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('1 Tài khoản công ty')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('10 Mẫu Smart Card chuyên nghiệp')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Xem phân tích tiêu chuẩn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh Profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('In Smart Card')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Starter')); ?></b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> <?php echo e((__('+3 nguời dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Smart Card dành cho đội')); ?> <br> <?php echo e(__('nhóm nhỏ')); ?></span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Mọi thứ đều miễn phí, cộng thêm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('1 Tài khoản công ty')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Truy cập toàn bộ thư viện Smart Card')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Xem toàn bộ phân tích')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tạo Profile template')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh nhận diện thương hiệu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('In Smart Card')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Starter')); ?></b></li>
                                                <li><span><i class='bx bx-buildings'></i> <?php echo e((__('100+ người dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Smart Card dành cho đội')); ?> <br> <?php echo e(__('nhóm nhỏ')); ?></span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Mọi thứ trong doanh nghiệp, cộng thêm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Không giới hạn công ty')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Thiết kế mẫu Smart Card theo nhận diện thương hiệu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Xem toàn bộ phân tích')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Quản lý users')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Phân tích dữ liệu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('In Smart Card theo yêu cầu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Hỗ trợ bởi chuyên viên')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tab-year" class="tab-content-price">
            <div class="pricing py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Free')); ?></b></li>
                                                <li><span><i class='bx bx-user-circle'></i> <?php echo e((__('1 nguời dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Bắt đầu sử dụng Smart Card')); ?> <br> <?php echo e(__('miễn phí')); ?> </span> </li>
                                                <li class="card-price font-weight-bold">0đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Bao gồm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tài khoản cá nhân')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('5 Mẫu Smart Card chuyên nghiệp')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh Profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Starter')); ?></b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> <?php echo e((__('+3 nguời dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Smart Card dành cho đội')); ?> <br> <?php echo e(__('nhóm nhỏ')); ?></span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Mọi thứ đều miễn phí, cộng thêm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('1 Tài khoản công ty')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('10 Mẫu Smart Card chuyên nghiệp')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Xem phân tích tiêu chuẩn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh Profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('In Smart Card')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Medium')); ?></b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> <?php echo e((__('+3 nguời dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Smart Card dành cho đội')); ?> <br> <?php echo e(__('nhóm nhỏ')); ?></span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Mọi thứ đều miễn phí, cộng thêm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('1 Tài khoản công ty')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Truy cập toàn bộ thư viện Smart Card')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Xem toàn bộ phân tích')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tạo Profile template')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh nhận diện thương hiệu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('In Smart Card')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body card_pricing">
                                    <div class="pricingTable-header">
                                        <div class="price-user">
                                            <ul class="d-flex justify-content-between align-items-center pricing-description">
                                                <li><b><?php echo e(__('Premium')); ?></b></li>
                                                <li><span><i class='bx bx-buildings'></i> <?php echo e((__('100+ người dùng'))); ?></span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span><?php echo e(__('Smart Card dành cho đội')); ?> <br> <?php echo e(__('nhóm nhỏ')); ?></span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/<?php echo e(__('Tháng')); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> <?php echo e(__('Mọi thứ trong doanh nghiệp, cộng thêm:')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Không giới hạn công ty')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Thiết kế mẫu Smart Card theo nhận diện thương hiệu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Xem toàn bộ phân tích')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Quản lý users')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Phân tích dữ liệu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Tùy chỉnh profile')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Chia sẻ không giới hạn')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('In Smart Card theo yêu cầu')); ?></li>
                                        <li><img src="<?php echo e(asset('landing/assets/img/icons/tick.svg')); ?>" alt="icon_footer" > <?php echo e(__('Hỗ trợ bởi chuyên viên')); ?></li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="<?php echo e(asset('landing/assets/img/icons/phone.svg')); ?>" alt="icon_footer" > <?php echo e(__('Liên hệ tư vấn')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>






<script>
    $(document).on('click', 'p', function(){
        $('p').removeClass('active-price');
        $('div').toggleClass('expanded-price');
        $(this).addClass('active-price');
        var tab_id = $(this).attr('data-tab');
        $('.tab-content-price').removeClass('current-price');
        $(this).addClass('current-price');
        $('#'+tab_id).addClass('current-price');
    });
</script>
<?php /**PATH C:\Ubrand\resources\views/layouts/homepage/components/home/pricing.blade.php ENDPATH**/ ?>