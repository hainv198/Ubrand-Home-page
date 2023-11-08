$(document).ready(function () {

    // Cuộc gọi API để lấy danh sách tất cả các danh mục
    $.ajax({
        url: 'https://brandcare.agency/wp-json/wp/v2/categories',
        method: 'GET',
        success: function (categoriesData) {
            // Lưu thông tin các danh mục trong một đối tượng
            let categories = {};
            categoriesData.forEach(category => {
                categories[category.id] = category.name;
            });

            $.ajax({
                url: 'https://brandcare.agency/wp-json/wp/v2/posts',
                method: 'GET',
                success: function (data) {
                    console.log(data);
                    let resultDiv = document.getElementById('result');
                    let imageInfo = {};
                    let featuredMediaIDs = data.map(item => item.featured_media);

                    // Lấy thông tin hình ảnh cho tất cả các featured_media ID cùng một lúc
                    $.ajax({
                        url: `https://brandcare.agency/wp-json/wp/v2/media?include=${featuredMediaIDs.join(',')}`,
                        method: 'GET',
                        success: function (mediaData) {
                            mediaData.forEach(media => {
                                imageInfo[media.id] = media;
                            });
                            var path = window.location.pathname;


                            for (let i = 0; i < data.length; i++) {
                                let item = data[i];
                                let media = imageInfo[item.featured_media];
                                let categoryIds = item.categories; // Danh sách ID của các danh mục của bài viết

                                // Kiểm tra danh mục của bài viết và quyết định xem liệu bạn sẽ hiển thị nó hay không
                                let shouldDisplayPost = categoryIds.includes(104);
                                let listPostTraining = categoryIds.includes(105)
                                let excerpt = '';
                                let date_publish = 'string'
                                excerpt = item.excerpt.rendered
                                date_publish = item.date_gmt

                                var date_publish_format = moment(date_publish).format('YYYY-MM-DD');
                                if(path === '/blog' || path === '/about') {
                                    if (shouldDisplayPost) {
                                        let html = `
                                        <div class="col-md-4 col-sm-6 mb-3 p-4">
                                            <div class="card-blog-ubrand">
                                                <div class="card-header">
                                                    <a href="${item.link}">
                                                        <img class="image-card" src="${media.source_url}" alt="${media.alt_text}" width="420" height="260">
                                                    </a>

                                                    <span class="text-left date-pick-upload"><i class='bx bx-calendar'></i> ${date_publish_format}</span>
                                                </div>

                                                <br>
                                                <div class="card-body-blog">
                                                    <h5>
                                                        <a href="${item.link}">
                                                            ${item.title.rendered}
                                                        </a>
                                                    </h5>
                                                    <span class="text-description-short">${excerpt}</span>
                                                </div>
                                                <div class="card-footer-blog d-flex align-items-center" >
                                                    <div class="image-author">
                                                        <i class='bx bxs-user-circle' ></i>
                                                    </div>
                                                    <div class="name-author">
                                                        <span>admin</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                                        resultDiv.innerHTML += html;
                                    }
                                }
                                if (path === '/training') {
                                    if (listPostTraining) {
                                        let html = `
                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card-blog-ubrand">
                                                <div class="card-header">
                                                    <style>
                                                        .ytp-cued-thumbnail-overlay-image {
                                                            background-image: url(${media.source_url}) !important;
                                                        }
                                                    </style>
                                                    <div class="video-training">
                                                        ${item.content.rendered}
                                                    </div>

                                                    <span class="text-left date-pick-upload"><i class='bx bx-calendar'></i> ${date_publish_format}</span>
                                                </div>

                                                <br>
                                                <div class="card-body-blog">
                                                    <h5>
                                                        <a href="${item.link}">
                                                            ${item.title.rendered}
                                                        </a>
                                                    </h5>
                                                    <span class="text-description-short">${excerpt}</span>
                                                </div>
                                                <div class="card-footer-blog d-flex align-items-center" >
                                                    <div class="image-author">
                                                        <i class='bx bxs-user-circle' ></i>
                                                    </div>
                                                    <div class="name-author">
                                                        <span>admin</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                                        resultDiv.innerHTML += html;
                                    }
                                }


                            }
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
        },
        error: function (error) {
            console.log(error);
        }
    });
});


$(document).ready(function () {
    // Đặt sự kiện click cho tất cả các nút có lớp (class) "activate-button"
    $('.activate-button').on('click', function() {
        // Lấy giá trị của thuộc tính dữ liệu "data-image"
        var imageToActivate = $(this).data('image');

        // Kích hoạt hình ảnh được xác định
        $('#' + imageToActivate).addClass('active');

        $('.image-container .image-default').css('display','none')
        $('.image-container img').not('#' + imageToActivate).removeClass('active');
    });
})


/*$(document).ready(function () {
    const postsPerPage = 5; // Số bài viết trên mỗi trang
    let currentPage = 1; // Trang hiện tại
    let categoryId = 104;

    function loadPosts(page) {
        $.ajax({
            url: 'https://brandcare.agency/wp-json/wp/v2/posts',
            method: 'GET',
            data: {
                page: page,
                per_page: postsPerPage,
                categories: categoryId,

            },
            success: function (data) {
                displayPosts(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function displayPosts(posts) {
        let resultDiv = $('#result');
        resultDiv.empty();

        for (let i = 0; i < posts.length; i++) {
            let post = posts[i];
            let html = createPostHTML(post);
            resultDiv.append(html);
        }
    }

    function createPostHTML(post) {
        // Tạo mã HTML cho mỗi bài viết
        let media = imageInfo[post.featured_media];
        let excerpt = post.excerpt.rendered;
        let date_publish_format = moment(post.date_gmt).format('YYYY-MM-DD');

        return `
                    <div class="col-md-4 col-sm-6 p-4">
                        <div class="card-blog-ubrand">
                            <div class="card-header">
                                <a href="${post.link}">
                                    <img class="image-card" src="${media.source_url}" alt="${media.alt_text}" width="420" height="260">
                                </a>
                                <span class="text-left date-pick-upload"><i class='bx bx-calendar'></i> ${date_publish_format}</span>
                            </div>
                            <br>
                            <div class="card-body-blog">
                                <h5>
                                    <a href="${post.link}">
                                        ${post.title.rendered}
                                    </a>
                                </h5>
                                <span class="text-description-short">${excerpt}</span>
                            </div>
                            <div class="card-footer-blog d-flex align-items-center" >
                                <div class="image-author">
                                    <i class='bx bxs-user-circle' ></i>
                                </div>
                                <div class="name-author">
                                    <span>admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
    }

    function displayPagination() {
        let totalPages = 3; // Tổng số trang (sửa lại theo tùy chọn)
        let paginationDiv = $('#pagination');
        paginationDiv.empty();

        for (let i = 1; i <= totalPages; i++) {
            let pageLink = $(`<a href="#" class="page-link" data-page="${i}">${i}</a>`);
            paginationDiv.append(pageLink);
        }

        paginationDiv.on('click', '.page-link', function (event) {
            event.preventDefault();
            let clickedPage = $(this).data('page');
            currentPage = clickedPage;
            loadPosts(currentPage);

            // Loại bỏ lớp CSS `.current-page` từ tất cả các nút phân trang
            paginationDiv.find('.page-link').removeClass('current-page');

            // Thêm lớp CSS `.current-page` cho nút phân trang đã được nhấn
            $(this).addClass('current-page');
        });
    }

    let imageInfo = {};

    $.ajax({
        url: `https://brandcare.agency/wp-json/wp/v2/media`,
        method: 'GET',
        success: function (mediaData) {
            mediaData.forEach(media => {
                imageInfo[media.id] = media;
            });
        },
        error: function (error) {
            console.log(error);
        }
    });

    loadPosts(currentPage);
    displayPagination();
});*/
