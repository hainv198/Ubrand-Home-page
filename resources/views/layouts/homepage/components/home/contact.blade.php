<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                <img src="{{ asset('landing/assets/img/homepage/image_contact.png') }}" alt="hero" class=" img-fluid">
            </div>
            <div class="col-lg-6 col-sm-12" >
                <div class="form-contact-homepage">
                    <div class="blog-heading">
                        <h3>
                            {{__('Liên hệ với')}} <span style="color: #2F38FF; font-weight: bold">{{__('đội ngũ nhân viên')}}</span> {{__('bán hàng của chúng tôi')}}
                        </h3>
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

<script type="text/javascript">


    $('#send-mail-home').on('submit',function(e){

        e.preventDefault();
        let name = $('#user_name').val();
        let phone_number = $('#phone_number').val();
        let email = $('#email').val();
        let position = $('#position').val();
        let link_url = $('#link_url').val();
        let number_member = $('#number_member').val();
        if(name && position && email && number_member !== '') {
            var spinner = '<div class="spinner-border" role="status"> <span class="sr-only">Sending...</span></div> Đang gửi...'
            $("#submitFormBtn").html(spinner).css('pointer-events','none')
        }

        $.ajax({
            type: "POST",
            url: '/send-mail-contact-home-page',
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                phone_number:phone_number,
                email:email,
                position:position,
                link_url:link_url,
                number_member:number_member
            },
            success: function(data) {
                $('#user_name').val('');
                $('#phone_number').val('');
                $('#email').val('');
                $('#position').val('');
                $('#link_url').val('');
                $('#number_member').val('');
                $("#submitFormBtn").text('Gửi ngay').css('pointer-events', 'auto')
                $('#successMsg').fadeIn('fast').delay(3000).fadeOut('fast');
                console.log(data);
            },
            error: function(xhr, status, error) {
                $("#submitFormBtn").text('Gửi ngay').css('pointer-events', 'auto')
                console.log(error);
            }
        });
    })
</script>
