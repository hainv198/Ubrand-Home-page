<footer class="pt-5 pb-5">
    <div class="container pb-1 pb-lg-5">
        <div class="row content-space-t-2">
            <div class="col-lg-3 mb-7 mb-lg-0">
                <h5 class="text-title-footer text-dark mb-3">{{__('Liên hệ')}}</h5>
                <ul class="list-unstyled list-py-1 mb-0 list_navigate_footer">
                    <li>
                        <span><img src="{{ asset('landing/assets/img/icons/location.svg') }}" alt="icon_footer" ></span><b>{{__("Địa chỉ:")}}</b> <span>{{__('Stellar Garden, 35 P. Lê Văn Thiêm, Thanh Xuân Trung, Thanh Xuân, Hà Nội')}}</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('landing/assets/img/icons/call.svg') }}" alt="icon_footer" ></span><b> {{ __('Tel:') }} </b> <span>0964 699 499</span>
                    </li>
                    <li>
                        <span><img src="{{ asset('landing/assets/img/icons/email.svg') }}" alt="icon_footer" ></span><b>{{__('Email:')}}</b> <span>Uband@gmail.com</span>
                    </li>

                </ul>
            </div>

            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="text-dark mb-2 text-title-footer">{{__('Khám phá')}}</h5>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0 list_navigate_footer">
                    <li><a class="link-sm text-dark font-weight-normal" href="#">Digital Business Cards</a></li>
                    <li><a class="link-sm text-dark" href="#">NFC Business Cards </a></li>
                </ul>
            </div>
            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="text-dark mb-3 text-title-footer">{{__('Hỗ trợ')}}</h5>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0 list_navigate_footer">
                    <li><a class="link-sm text-dark" href="#">{{__('Hướng dẫn mua hàng')}}</a></li>
                    <li><a class="link-sm text-dark" href="#">{{__('Cập nhật thông tin')}} </a></li>
                    <li><a class="link-sm text-dark" href="#">{{__('Điện thoại hỗ trợ đọc NFC')}}</a></li>

                </ul>
            </div>
            <div class="col-sm mb-7 mb-sm-0 ">
                <h5 class="text-dark mb-4 text-title-footer">{{__('Chính sách')}}</h5>

                <!-- List -->
                <ul class="list-unstyled list-py-1 mb-0 list_navigate_footer">
                    <li><a class="link-sm text-dark" href="#">{{__('Chính sách thanh toán')}}</a></li>
                    <li><a class="link-sm text-dark" href="#">{{__('Chính sách bảo hành & đổi trả')}} </a></li>
                    <li><a class="link-sm text-dark" href="#">{{__('Chính sách bảo mật')}}</a></li>

                </ul>
            </div>
            <div class="col-sm mb-7 mb-sm-0">
                <h5 class="text-dark mb-3 text-title-footer">{{__('Đăng ký nhận tin')}}</h5>

                <ul class="list-unstyled list-py-1 mb-0 list_navigate_footer">
                    <li><a class="link-sm text-dark" href="#">{{__('Nhận thông báo mới nhất từ chúng tôi.')}}</a></li>
                </ul>
                <form action="" method="post" class="form-contact-footer">
                    <input class="input_footer" type="text" name="contact_footer" placeholder="{{__('Nhập email...')}}"/>
                    <button class="button_contact_footer btn-primary">{{__('Gửi ngay')}} <i class='bx bxl-telegram'></i></button>
                </form>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="border-top border-dark my-7  pb-4"></div>

        <div class="row mb-5">
            <div class="col-lg-3 mb-7 mb-lg-0 d-flex align-items-center">
                <ul class="list-unstyled list-py-1 mb-0 list_navigate_footer">
                    <li>
                        <img src="{{ asset('landing/assets/img/logo_ubrand.png') }}" alt="{{__('icon_footer')}}" >
                    </li>
                </ul>
            </div>

            <div class="col-sm  mb-sm-0 text-center d-flex align-items-center justify-content-center">
                <!-- Socials -->
                <span class="">{{__('UBRAND 2023. All rights reserved. Designed by SaoKim Digital')}}</span>
            </div>


            <div class="text-bottom-footer col-lg-3 mb-7 mb-lg-0 d-flex justify-content-around align-items-center">
                <span class="text-follow-footer">{{__('Theo dõi chũng tôi')}}</span>
                <ul class="list-unstyled list-py-1 mb-0 ">
                    <li class="list-inline-item">
                        <a  href="#">
                            <img src="{{ asset('landing/assets/img/icons/fb_icon.svg') }}" alt="icon_footer" >
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a  href="#">
                            <img src="{{ asset('landing/assets/img/icons/ytb_icon.svg') }}" alt="icon_footer" >
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a  href="#">
                            <img src="{{ asset('landing/assets/img/icons/linkedin_icon.svg') }}" alt="icon_footer" >
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a  href="#">
                            <img src="{{ asset('landing/assets/img/icons/zalo_icon.svg') }}" alt="icon_footer" >
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</footer>
