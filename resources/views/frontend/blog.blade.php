@extends('frontend.main')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
@endsection
@section('content')

<style>
    .gallery-wrapper {
        display: flex;
        gap: 15px;
    }

    .gallery-main {
        position: relative;
        flex: 1;
    }

    .gallery-main img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        object-fit: cover;
    }

    .see-all-btn {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: #fff;
        border-radius: 10px;
        padding: 8px 15px;
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
        color: #000;
        box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
    }

    .gallery-thumbs {
        flex: 1;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 15px;
    }

    .gallery-thumbs img, .gallery-thumbs video {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        object-fit: cover;
    }

	.author-box {
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px 16px;
        text-align: center;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .author-box .author-text {
        font-size: 15px;
        color: #333;
    }

	.banner-section-two {
		padding: 0px 0px 120px;
	}
	.gallery-three {
		padding: 50px 0px 110px;
	}
    .social-title {
        font-size: 1.1rem;
        margin-bottom: 12px;
        font-weight: bold;
        text-align: right;
    }

    .social-box {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 12px;
        justify-content: flex-end;
    }

    .social-box li {
        display: inline-block;
    }

    .social-box a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #f1f1f1;
        color: #555;
        font-size: 18px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-box a:hover {
        color: #fff;
        transform: translateY(-4px);
    }

    .gm-style .review-box {
        display: none;
    }

    /* Custom colors per network */
    .social-box a.twitter:hover   { background: #1da1f2; }
    .social-box a.snapchat:hover  { background: #fffc00; color: #000; }
    .social-box a.dribbble:hover  { background: #ea4c89; }
</style>

    <!-- Page Title -->
    <section class="banner-section-two" style="background-image:url({{ asset('assets/images/background/11.jpg') }})">

    </section>
    <!-- End Page Title -->

    <!-- Speakers Three -->
    <section class="gallery-three">
        <div class="auto-container">
            <div class="sec-title centered title-anim">
                <h2 class="sec-title_heading">{{ $store['name'] }}</h2>
                <div class="sec-title_title">
                    {{ $store['city'] }}, {{ $store['district'] }}
                    <i class="icon fa fa-map-marker"></i>
                </div>
            </div>
            <div class="row clearfix mb-5">
                <div class="gallery-wrapper">
                    <!-- Right Side Small Images -->
                    <div class="gallery-thumbs">
                        @foreach($media as $item)
                            @if(Str::endsWith($item, '.mp4'))
                                <video width="288px" controls>
                                    <source src="{{ $item }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <img src="{{ $item }}" alt="media" />
                            @endif
                        @endforeach
                    </div>

                    <!-- Main Big Image -->
                    <div class="gallery-main">
                        <!-- الصورة الرئيسية تبقى كما هي -->
                        <img id="gallery-trigger" src="{{ $store['main_image'] }}" alt="Main Image"
                            style="cursor:pointer; max-width:100%;">

                        <!-- زر عرض الكل -->
                        <a href="#" id="open-gallery" class="see-all-btn">
                            <i class="fa fa-camera"></i> اعرض كل الصور
                        </a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Counter Column -->
                <div class="container mb-3" dir="rtl">
                    <div class="d-flex justify-content-between row-gap-3 flex-md-row flex-lg-nowrap flex-md-wrap flex-column">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="black-color mb-0 fw-bold text-center" style="font-size: 20px">السعـــر</p>
                                <p class="black-color mb-0">
                                   من {{ $store['price_from'] }} إلى {{ $store['price_to'] }}
                                </p>
                            </div>
                            <div class="feature-block_one-icon">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39" style="width: 50px; height: 50px;">
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: #8b7d4f;
                                        }
                                        </style>
                                    </defs>
                                    <path class="cls-1" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"/>
                                    <path class="cls-1" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                <p class="black-color mb-0 fw-bold text-center" style="font-size: 20px">
                                    الخبرة بالسنــوات
                                </p>
                                <p class="font-size-16 black-color mb-0 text-center">
                                   {{ $store['experience'] }} +
                                </p>
                            </div>
                             <div class="feature-block_one-icon">
                                <i class="flaticon-digital-learning"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                <p class="black-color mb-0 fw-bold text-center" style="font-size: 20px">
                                    الفريــــــق
                                </p>
                                <p class="font-size-16 black-color mb-0 text-center">
                                    {{ $store['team_size'] }} +
                                </p>
                            </div>
                             <div class="feature-block_one-icon">
                                <i class="flaticon-conversation-1"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                <p class="black-color mb-0 fw-bold text-center" style="font-size: 20px">
                                    العربــــون
                                </p>
                                <p class="font-size-16 black-color mb-0 text-center">
                                    {{ $store['forward'] }}
                                </p>
                            </div>
                            <div class="feature-block_one-icon">
                                <i class="flaticon-policy"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="author-box">
                    <div class="author-text">
                        {{ $store['description'] }}
                    </div>
                </div>
            </div>
        </div>
       <div class="container my-5">
            <div class="row g-4">

                <!-- عمود الخدمات -->
                <div class="col-md-6 mb-3">
                    <!-- Section Title -->
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">خدماتنا</h3>
                        <p class="text-muted">اكتشف أفضل الخدمات التي نقدمها لك بطريقة احترافية وبسيطة</p>
                    </div>

                    <div class="row g-3">
                        <!-- Services -->
                        @foreach ($store['services'] as $Service )
                            <div class="col-12">
                                <div class="card shadow-sm h-100 border-0">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <i class="bi bi-gear-fill fs-1 text-primary"></i>
                                        </div>
                                        <p class="card-text">{{ $Service }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- عمود المرفقات -->
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">المرفقات</h3>
                        <p class="text-muted">حمّل الملفات والمرفقات المتعلقة بخدماتنا بسهولة</p>
                    </div>

                    <div class="list-group shadow-sm">
                        @foreach($store['attachments'] as $file)
                            @php
                                $extension = pathinfo($file, PATHINFO_EXTENSION);
                                $icon = 'bi-file-earmark-text text-primary'; // default

                                switch(strtolower($extension)) {
                                    case 'pdf':
                                        $icon = 'bi-file-earmark-pdf text-danger';
                                        break;
                                    case 'xls':
                                    case 'xlsx':
                                        $icon = 'bi-file-earmark-excel text-success';
                                        break;
                                    case 'doc':
                                    case 'docx':
                                        $icon = 'bi-file-earmark-word text-primary';
                                        break;
                                }
                            @endphp

                            <a href="{{ $file }}" target="_blank"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                عرض <i class="bi {{ $icon }} fs-5"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Speakers Four -->

    <!-- Google Map -->
    <section class="location-one" style="background-image:url({{ asset('assets/images/background/5.jpg') }})">
        <div class="auto-container">
            <div class="sec-title title-anim centered">
                <h2 class="sec-title_heading">الموقع</h2>
            </div>
            <div class="row clearfix">
                <!-- Map Column -->
                <div class="location-one_map-column col-lg-8 col-md-12 col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10893.958965563896!2d39.103161928785404!3d21.611301991535665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3dbd751aa2b57%3A0xd32f14ab8ce46662!2sJeddah%20Hilton!5e1!3m2!1sen!2ssa!4v1758008205028!5m2!1sen!2ssa"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Info Column -->
                <div class="location-one_info-column col-lg-4 col-md-12 col-sm-12">

                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                            <div class="location-info_block-content">
                                <div class="location-info_block-icon flaticon-user-1"></div>
                                <strong>الاســم</strong>
                                {{ $store['user']['name'] }}
                            </div>
                        </div>
                    </div>

                    <!-- Location Info Block -->
                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                            <div class="location-info_block-content">
                                <div class="location-info_block-icon flaticon-email-1"></div>
                                <strong>الايميل</strong>
                                {{ $store['email'] }}
                            </div>
                        </div>
                    </div>

                    <!-- Location Info Block -->
                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                            <div class="location-info_block-content">
                                <div class="location-info_block-icon flaticon-phone"></div>
                                <strong>رقم الجوال</strong>
                                <span id="mobile-placeholder" style="color:blue;cursor:pointer; text-decoration:underline;">
                                    اضغط هنا
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Location Info Block -->
                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                                <h6 class="social-title">التواصــــل</h6>
                                <ul class="social-box">
                                    <li>
                                        <a href="{{ $store['twitter'] }}" target="_blank" class="twitter">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="height: 25px;"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z"/></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $store['snapchat'] }}" target="_blank" class="snapchat">
                                            <i class="fa-brands fa-snapchat-ghost"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $store['instagram'] }}" target="_blank" class="dribbble">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Google Map -->

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // الجلب الآمن للروابط من الجانب الخادمي
            const mainImage = @json($store['main_image']);
            const mediaUrls = @json($store['media'] ?? []);

            // ضم الصورة الرئيسية إلى قائمة الوسائط إذا لم تكن موجودة
            if (!mediaUrls.includes(mainImage)) {
                mediaUrls.unshift(mainImage);
            }

            // بناء عناصر المعرض مع كشف امتداد الملف لتحديد نوعه
            const items = mediaUrls.map(url => {
                const ext = (url.split('.').pop() || '').split(/#|\?/)[0].toLowerCase();
                const isVideo = ['mp4', 'webm', 'ogg'].includes(ext);
                return {
                    src: url,
                    type: isVideo ? 'video' : 'image'
                };
            });

            // دالة لفتح المعرض برمجياً
            function openGallery(startIndex = 0) {
                if (window.Fancybox && Fancybox.show) {
                    Fancybox.show(items, { startIndex });
                } else {
                    console.warn('Fancybox not loaded. تأكد من إضافة مكتبة Fancybox.');
                }
            }

            // إرفاق حدث للنقر على الصورة الرئيسية وزر "اعرض كل الصور"
            const trigger = document.getElementById('gallery-trigger');
            const openBtn = document.getElementById('open-gallery');

            if (trigger) {
                trigger.addEventListener('click', () => openGallery(0));
            }
            if (openBtn) {
                openBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    openGallery(0);
                });
            }
        });
    </script>

    <script>
        document.getElementById("mobile-placeholder").addEventListener("click", function () {
            let placeholder = this;
            let userId = {{ $store['user']['id'] }};
            let url = `https://admin.saadatyapp.com/api/getMobile?user_id=${userId}`;

            placeholder.textContent = "جاري التحميل...";

            fetch(url, {
                method: "GET",
                headers: {
                    "X-API-KEY": "8f4d9a2b-6c1e-4b7a-9d3e-12f5a8b7c9d0",
                    "Accept": "application/json"
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("HTTP error " + response.status);
                }
                return response.json();
            })
            .then(data => {
                let mobile = null;

                // احتمال يرجع Array أو Object
                if (Array.isArray(data) && data.length > 0 && data[0].mobile) {
                    mobile = data[0].mobile;
                } else if (data.mobile) {
                    mobile = data.mobile;
                }

                if (mobile) {
                    placeholder.textContent = mobile;
                    placeholder.style.color = "#000";
                    placeholder.style.cursor = "default";
                    placeholder.style.textDecoration = "none";
                } else {
                    placeholder.textContent = "لم يتم العثور على الرقم";
                }
            })
            .catch(error => {
                console.error("Fetch error:", error);
                placeholder.textContent = "خطأ في تحميل الرقم";
            });
        });
    </script>
@endsection
