@extends('frontend.main')

@section('content')

<style>
    .gallery-wrapper {
        display: flex;
        gap: 15px; /* space between left & right */
    }

    /* Main image (big one on the left) */
    .gallery-main {
        position: relative;
        flex: 2; /* bigger than right side */
    }

    .gallery-main img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        object-fit: cover;
    }

    /* "See All" button */
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

    /* Right side (grid of 4 small images) */
    .gallery-thumbs {
        flex: 1; /* smaller column */
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
                <div class="counter-two_block col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-two_inner">
                        <span class="counter-two_block-icon flaticon-money-bag"></span>
                        <div class="counter-two_counter"><span class="odometer odometer-auto-theme" data-count="180"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">180</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">150</span></span></span></span></span></div></span>SR</div>
                        <div class="counter-two_text">السعـــــــــر</div>
                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-two_block col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-two_inner">
                        <span class="counter-two_block-icon flaticon-digital-learning"></span>
                        <div class="counter-two_counter"><span class="odometer odometer-auto-theme" data-count="18"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span></div>
                        <div class="counter-two_text">الخبـــرة بالسنـــــوات</div>
                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-two_block col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-two_inner">
                        <span class="counter-two_block-icon flaticon-conversation-1"></span>
                        <div class="counter-two_counter"><span class="odometer odometer-auto-theme" data-count="44"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</div>
                        <div class="counter-two_text">الفريــــــق</div>
                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-two_block col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-two_inner">
                        <span class="counter-two_block-icon flaticon-policy"></span>
                        <div class="counter-two_counter"><span class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">نعم</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span></div>
                        <div class="counter-two_text">العربـــــون</div>
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
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">خدماتنا</h2>
                <p class="text-muted">اكتشف أفضل الخدمات التي نقدمها لك بطريقة احترافية وبسيطة</p>
            </div>

            <div class="row g-4">

                <!-- Service 1 -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-gear-fill fs-1 text-primary"></i>
                            </div>
                            <h5 class="card-title"> 1</h5>
                            <p class="card-text">وصف قصير يوضح ماهية الخدمة بطريقة جذابة وبسيطة للمستخدم.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-laptop-fill fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title"> 2</h5>
                            <p class="card-text">وصف قصير للخدمة الثانية بطريقة مختصرة وجذابة للمستخدمين.</p>
                        </div>
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
                                <div class="location-info_block-icon flaticon-clock"></div>
                                <strong>الوقت</strong>
                                    9am - 6pm يوميا من
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

                </div>
            </div>
        </div>
    </section>
    <!-- End Google Map -->

@endsection
