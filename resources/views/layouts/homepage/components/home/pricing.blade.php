<section class="pricing py-5">

    <div class="container container-mobile">
        <div class="row justify-content-center p-3">
            <div class="col-md-12">
                <h2 class="text-center text-herding">{{__('Bảng giá dành cho mọi người')}}</h2>
                <p class="text-center" style="font-size: 16px">{{__('Chọn kế hoạch phù hợp với bạn hoặc tổ chức của bạn.')}}</p>
            </div>
        </div>
        <div class="tabs-container">
            <nav class="tabs">
                <div style="padding: 0">
                    <p class="active-price" data-tab="tab-month">{{__('Báo giá theo tháng')}}</p>
                    <p data-tab="tab-year">{{__('Báo giá theo năm')}}</p>
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
                                                <li><b>{{__('Free')}}</b></li>
                                                <li><span><i class='bx bx-user-circle'></i> {{(__('1 nguời dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Bắt đầu sử dụng Smart Card')}} <br> {{__('miễn phí')}} </span> </li>
                                                <li class="card-price font-weight-bold">0đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Bao gồm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tài khoản cá nhân')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('5 Mẫu Smart Card chuyên nghiệp')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh Profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Starter')}}</b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> {{(__('+3 nguời dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Smart Card dành cho đội')}} <br> {{__('nhóm nhỏ')}}</span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Mọi thứ đều miễn phí, cộng thêm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('1 Tài khoản công ty')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('10 Mẫu Smart Card chuyên nghiệp')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Xem phân tích tiêu chuẩn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh Profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('In Smart Card')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Starter')}}</b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> {{(__('+3 nguời dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Smart Card dành cho đội')}} <br> {{__('nhóm nhỏ')}}</span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Mọi thứ đều miễn phí, cộng thêm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('1 Tài khoản công ty')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Truy cập toàn bộ thư viện Smart Card')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Xem toàn bộ phân tích')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tạo Profile template')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh nhận diện thương hiệu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('In Smart Card')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Starter')}}</b></li>
                                                <li><span><i class='bx bx-buildings'></i> {{(__('100+ người dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Smart Card dành cho đội')}} <br> {{__('nhóm nhỏ')}}</span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Mọi thứ trong doanh nghiệp, cộng thêm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Không giới hạn công ty')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Thiết kế mẫu Smart Card theo nhận diện thương hiệu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Xem toàn bộ phân tích')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Quản lý users')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Phân tích dữ liệu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('In Smart Card theo yêu cầu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Hỗ trợ bởi chuyên viên')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Free')}}</b></li>
                                                <li><span><i class='bx bx-user-circle'></i> {{(__('1 nguời dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Bắt đầu sử dụng Smart Card')}} <br> {{__('miễn phí')}} </span> </li>
                                                <li class="card-price font-weight-bold">0đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Bao gồm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tài khoản cá nhân')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('5 Mẫu Smart Card chuyên nghiệp')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh Profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Starter')}}</b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> {{(__('+3 nguời dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Smart Card dành cho đội')}} <br> {{__('nhóm nhỏ')}}</span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Mọi thứ đều miễn phí, cộng thêm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('1 Tài khoản công ty')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('10 Mẫu Smart Card chuyên nghiệp')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Xem phân tích tiêu chuẩn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh Profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('In Smart Card')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Medium')}}</b></li>
                                                <li><span><i class='bx bx-user-plus' ></i> {{(__('+3 nguời dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Smart Card dành cho đội')}} <br> {{__('nhóm nhỏ')}}</span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Mọi thứ đều miễn phí, cộng thêm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('1 Tài khoản công ty')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Truy cập toàn bộ thư viện Smart Card')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Xem toàn bộ phân tích')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tạo Profile template')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh nhận diện thương hiệu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('In Smart Card')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
                                                <li><b>{{__('Premium')}}</b></li>
                                                <li><span><i class='bx bx-buildings'></i> {{(__('100+ người dùng'))}}</span></li>
                                            </ul>
                                            <ul class="pricing-description">
                                                <li> <span>{{__('Smart Card dành cho đội')}} <br> {{__('nhóm nhỏ')}}</span> </li>
                                                <li class="card-price font-weight-bold">45000đ<span class="period">/{{__('Tháng')}}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="fa-ul">
                                        <li> {{__('Mọi thứ trong doanh nghiệp, cộng thêm:')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Không giới hạn công ty')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Thiết kế mẫu Smart Card theo nhận diện thương hiệu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Xem toàn bộ phân tích')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Quản lý users')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Phân tích dữ liệu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Tùy chỉnh profile')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Chia sẻ không giới hạn')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('In Smart Card theo yêu cầu')}}</li>
                                        <li><img src="{{ asset('landing/assets/img/icons/tick.svg') }}" alt="icon_footer" > {{__('Hỗ trợ bởi chuyên viên')}}</li>
                                    </ul>
                                    <div class="d-grid p-4 ">
                                        <a href="#" class="btn btn-demo text-white" style="background: rgba(47, 56, 255, 1);"><img src="{{ asset('landing/assets/img/icons/phone.svg') }}" alt="icon_footer" > {{__('Liên hệ tư vấn')}} </a>
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
