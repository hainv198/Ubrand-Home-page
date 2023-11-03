@extends('layouts.homepage.master');
@section('content_ubrand')
    <section class="ubrand-contact" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="title-contact blog-heading ">
                        <h3 style="color:#2F38FF ">{{__('Liên hệ')}}</h3>
                        <h4>
                            {{__('Chúng tôi rất mong muốn được nghe từ bạn!')}}
                        </h4>
                        <p>
                            {{__('Vui lòng liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi, phản hồi hoặc yêu cầu thông tin về các giải pháp thẻ danh thiếp số của chúng tôi.')}}
                        </p>
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
                </div>
                <div class="col-md-6">
                    <div class="form-contact-homepage" style="background: #fff">
                        <div class="blog-heading">
                            <h4>
                                <span style="color: #2F38FF; font-weight: bold">{{__('Để lại thông tin của bạn')}}</span>
                            </h4>
                        </div>
                        <div class="form-contact-home-page mt-5">
                            <form class="px-3" method="post" id="send-mail-home">

                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label for="user_name" class="form-label">{{ __('Họ và tên*')}}</label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" required placeholder="Họ và tên..."/>

                                    </div>
                                    <div class="col">
                                        <label for="phone_number" class="form-label">{{ __('Số điện thoại*')}}</label>
                                        <input type="number" class="form-control" id="phone_number" name="phone_number" required placeholder="Số điện thoại..."/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label for="email" class="form-label">{{ __('Email*')}}</label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email..."/>
                                    </div>
                                    <div class="col">
                                        <label for="position" class="form-label">{{ __('Chức danh*')}}</label>
                                        <input type="text" class="form-control" id="position" name="position" required placeholder="Chức danh..."/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label for="link_url" class="form-label">{{ __('Website URL*')}}</label>
                                        <input type="text" class="form-control" id="link_url" name="link_url" required placeholder="Nhập URL..."/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col d-flex flex-column">
                                        <label for="number_member" class="form-label">{{ __('Số lượng nhân viên tại công ty*')}}</label>
                                        <select  class="form-select" aria-label="Default select example" name="number_member" id="number_member">
                                            <option value="">Lựa chọn</option>
                                            <option value="1">1 nhân viên</option>
                                            <option value="2">2 nhân viên</option>
                                            <option value="3">3 nhân viên</option>
                                            <option value="4">4 nhân viên</option>
                                            <option value="5">5 nhân viên</option>
                                            <option value="6">6 nhân viên</option>
                                            <option value="7">7 nhân viên</option>
                                            <option value="8">8 nhân viên</option>
                                            <option value="9">9 nhân viên</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-2 mt-3 d-flex justify-content-start">
                                        <button class="button_contact_form btn-primary" id="submitFormBtn" type="submit">
                                            {{__('Gửi ngay')}}
                                            <img src="{{ asset('landing/assets/img/icons/Send-2.svg') }}" alt="icon_footer"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
