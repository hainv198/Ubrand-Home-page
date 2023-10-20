<section class="pricing py-5" style="background: #BBBEFF;">

    <div class="container container-mobile">
        <div class="row justify-content-center p-3">
            <div class="col-md-12">
                <h2 class="text-center text-herding text-white">{{__('Các câu hỏi thường gặp')}}</h2>
            </div>
        </div>
        <div class="container mt-5">

            <div class="accordion_ques">
                <div class="accordion_ques-item">
                    <button id="accordion_ques-button-1" aria-expanded="false">
                        <span class="accordion_ques-title">{{__('Danh thiếp kỹ thuật số là gì?')}}</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion_ques-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="accordion_ques-item">
                    <button id="accordion_ques-button-2" aria-expanded="false">
                        <span class="accordion_ques-title">{{__('Làm cách nào để chia sẻ danh thiếp của tôi với mọi người?')}}</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion_ques-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="accordion_ques-item">
                    <button id="accordion_ques-button-3" aria-expanded="false">
                        <span class="accordion_ques-title">{{__('Danh thiếp NFC có an toàn không?')}}</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion_ques-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="accordion_ques-item">
                    <button id="accordion_ques-button-4" aria-expanded="false">
                        <span class="accordion_ques-title">{{__('Tôi có thể tùy chỉnh thiết kế của thẻ danh thiếp số của mình không?')}}</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion_ques-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="accordion_ques-item">
                    <button id="accordion_ques-button-5" aria-expanded="false">
                        <span class="accordion_ques-title">{{__('Lợi ích của thẻ kỹ thuật số là gì?')}}</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion_ques-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const items = document.querySelectorAll('.accordion_ques button');

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));

</script>


