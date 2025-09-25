@extends('frontend.main')

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

    .gallery-thumbs img {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        object-fit: cover;
    }

	.author-box {
		background: #f9f9f9;
		border: 1px solid #e0e0e0;
		border-radius: 12px;
		padding: 20px 25px;
		margin: 20px 0;
		box-shadow: 0 4px 10px rgba(0,0,0,0.05);
	}

	.author-text {
		font-size: 18px;
		line-height: 1.8;
		color: #444;
		text-align: center;
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

    /* Custom colors per network */
    .social-box a.twitter:hover   { background: #1da1f2; }
    .social-box a.snapchat:hover  { background: #fffc00; color: #000; }
    .social-box a.dribbble:hover  { background: #ea4c89; }
    .social-box a.linkedin:hover  { background: #0a66c2; }
</style>

    <!-- Page Title -->
    <section class="banner-section-two" style="background-image:url(assets/images/background/11.jpg)">

    </section>
    <!-- End Page Title -->

    <!-- Speakers Three -->
    <section class="gallery-three">
        <div class="auto-container">
            <div class="sec-title centered title-anim">
                <h2 class="sec-title_heading">قاعة وناسة</h2>
                <div class="sec-title_title">جـــــدة, قويزة
                    <i class="icon fa fa-map-marker"></i>
                </div>
            </div>
            <div class="row clearfix mb-5">
                <div class="gallery-wrapper">
                    <!-- Right Side Small Images -->
                    <div class="gallery-thumbs">
                        <img src="assets/images/gallery/2.jpg" alt="">
                        <img src="assets/images/gallery/3.jpg" alt="">
                        <img src="assets/images/gallery/4.jpg" alt="">
                        <img src="assets/images/gallery/5.jpg" alt="">
                    </div>

                    <!-- Main Big Image -->
                    <div class="gallery-main">
                        <img src="assets/images/gallery/1.jpg" alt="Main Image">

                        <!-- View All button -->
                        <a href="assets/images/gallery/1.jpg" class="lightbox-image see-all-btn">
                            <i class="fa fa-camera"></i> اعرض كل الصور
                        </a>

                        <!-- Hidden images for lightbox -->
                        <a href="assets/images/gallery/2.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/3.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/4.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/5.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/6.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/7.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/8.jpg" class="lightbox-image" style="display:none;"></a>
                        <a href="assets/images/gallery/9.jpg" class="lightbox-image" style="display:none;"></a>
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
                                   من 180 إلى 500
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
                                   18 +
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
                                    25 +
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
                                    نعم
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
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد
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
                        <!-- Service 1 -->
                        <div class="col-12">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="mb-3">
                                        <i class="bi bi-gear-fill fs-1 text-primary"></i>
                                    </div>
                                    <p class="card-text">وصف قصير يوضح ماهية الخدمة بطريقة جذابة وبسيطة للمستخدم</p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="col-12">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center">
                                    <div class="mb-3">
                                        <i class="bi bi-laptop-fill fs-1 text-success"></i>
                                    </div>
                                    <p class="card-text">وصف قصير يوضح ماهية الخدمة بطريقة جذابة وبسيطة للمستخدم</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- عمود المرفقات -->
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">المرفقات</h3>
                        <p class="text-muted">حمّل الملفات والمرفقات المتعلقة بخدماتنا بسهولة</p>
                    </div>

                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            ملف تعريفي <i class="bi bi-file-earmark-pdf text-danger fs-5"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            عرض أسعار <i class="bi bi-file-earmark-excel text-success fs-5"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            كتيّب خدمات <i class="bi bi-file-earmark-text text-primary fs-5"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Speakers Four -->

    <!-- Google Map -->
    <section class="location-one" style="background-image:url(assets/images/background/5.jpg)">
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

                    <!-- Location Info Block -->
                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                            <div class="location-info_block-content">
                                <div class="location-info_block-icon flaticon-map"></div>
                                <strong>العنوان</strong>
                                203 Asfan, Jeddah, KSA
                            </div>
                        </div>
                    </div>

                    <!-- Location Info Block -->
                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                            <div class="location-info_block-content">
                                <div class="location-info_block-icon flaticon-email-1"></div>
                                <strong>الايميل</strong>
                                envato@gmail.com
                            </div>
                        </div>
                    </div>

                    <!-- Location Info Block -->
                    <div class="location-info_block">
                        <div class="location-info_block-inner">
                                <h6 class="social-title">التواصــــل</h6>
                                <ul class="social-box">
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank" class="twitter">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.snapchat.com/" target="_blank" class="snapchat">
                                            <i class="fa-brands fa-snapchat-ghost"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://dribbble.com/" target="_blank" class="dribbble">
                                            <i class="fa-brands fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank" class="linkedin">
                                            <i class="fa-brands fa-linkedin"></i>
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
