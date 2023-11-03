<div class="container">
    <div class="row justify-content-center p-3">
        <div class="col-md-8">
            <p class="text-center " style="font-size: 16px">
                {{__('Khám phá')}}
            </p>
            <h2 class="text-center text-herding ">{{__('Blog của chúng tôi')}}</h2>
            <p class="text-center" style="font-size: 16px">{{__('Đọc blog UBRAND để tìm hiểu thêm về các tính năng và cập nhật mới nhất của UBRAND cũng như tìm hiểu về các mẹo và công cụ kết nối mạng mới nhất.')}}</p>
        </div>
    </div>


    <div class="row" id="result">

    </div>
</div>

<script>
    $(document).ready(function () {
        // Cuộc gọi API để lấy danh sách tất cả các danh mục
        $.ajax({
            url: 'http://localhost/herident/wp-json/wp/v2/categories',
            method: 'GET',
            success: function (categoriesData) {
                // Lưu thông tin các danh mục trong một đối tượng
                let categories = {};
                categoriesData.forEach(category => {
                    categories[category.id] = category.name;
                });

                $.ajax({
                    url: 'http://localhost/herident/wp-json/wp/v2/posts',
                    method: 'GET',
                    success: function (data) {
                        console.log(data);
                        let resultDiv = document.getElementById('result');
                        let imageInfo = {};
                        let featuredMediaIDs = data.map(item => item.featured_media);

                        // Lấy thông tin hình ảnh cho tất cả các featured_media ID cùng một lúc
                        $.ajax({
                            url: `http://localhost/herident/wp-json/wp/v2/media?include=${featuredMediaIDs.join(',')}`,
                            method: 'GET',
                            success: function (mediaData) {
                                mediaData.forEach(media => {
                                    imageInfo[media.id] = media;
                                });

                                for (let i = 0; i < data.length; i++) {
                                    let item = data[i];
                                    let media = imageInfo[item.featured_media];
                                    let categoryIds = item.categories; // Danh sách ID của các danh mục của bài viết

                                    // Kiểm tra danh mục của bài viết và quyết định xem liệu bạn sẽ hiển thị nó hay không
                                    let shouldDisplayPost = categoryIds.includes(11); // Chỉ hiển thị nếu thuộc danh mục có ID là 11

                                    if (shouldDisplayPost) {
                                        let html = `
                                        <div class="col-md-4 col-sm-6 mb-4 text-center p-4">
                                            <div class="card-header">
                                                <a href="${item.link}">
                                                    <img class="image-card" src="${media.source_url}" alt="${media.alt_text}" width="420" height="260">
                                                </a>
                                            </div>
                                            <br>
                                            <h5>
                                                <a href="${item.link}">
                                                    ${item.title.rendered}
                                                </a>
                                            </h5>
                                        </div>
                                    `;
                                        resultDiv.innerHTML += html;
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

</script>
