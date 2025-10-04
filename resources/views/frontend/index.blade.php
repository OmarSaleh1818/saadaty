@extends('frontend.main')

@section('content')

<style>
    .news-block_one-image {
        width: 100%;
        height: 400px;
        overflow: hidden;
    }

    .news-block_one-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .download-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .download-buttons img {
        height: 100px;
        width: auto;
        transition: transform 0.2s ease-in-out;
    }

    .download-buttons img:hover {
        transform: scale(1.05);
    }

    .btn-style-one {
         border-radius: 30px;
         margin-top: 20px
    }

    .contact-form-box {
        direction: rtl;
        background-color: #ffffff;
        border: 1px solid #e5e5e5;
        transition: all 0.3s ease;
    }

    .contact-form-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .contact-form-title {
        color: black;
        font-weight: 500;
        letter-spacing: 1px;
    }

    .form-control:focus {
        border-color: black;
        box-shadow: 0 0 0 0.15rem rgba(242, 177, 0, 0.25);
    }

    .custom-btn {
        background-color: #F2B100;
        color: #fff;
        border: none;
    }

    .custom-btn:hover {
        background-color: #d99b00; /* لون أغمق عند المرور */
    }

    /* افتراضياً لا شيء */
.text-center h2 {
    color: white;
    margin-top: -80px; /* للكمبيوتر */
}

/* عند الشاشات الصغيرة (مثلاً أقل من 768px) */
@media (max-width: 767px) {
    .text-center h2 {
        margin-top: 0 !important; /* إزالة الـ margin على الجوال */
    }
}

</style>
<!-- Slider One -->
	<section class="banner-section-two" style="background-image:url({{ asset('assets/images/background/saadaty_banner.png') }})">
		<div class="auto-container">
			<div class="text-center mb-5">
					<h2>نحو ليلة عمر خالدة … سعادتي ترافقك في كل التفاصيل</h2>
			</div>
            <div class="about-one_button" style="text-align: center;">
                <a href="{{ route('home') }}#contact" class="theme-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one" style="font-size: 18px; color: white;">تواصل معنا</span>
                        <span class="text-two" style="font-size: 18px; color: white;">تواصل معنا</span>
                    </span>
                </a>
            </div>
		</div>
	</section>

	<!-- About Two -->
	<section class="about-two" id="about">
		<div class="about-two_pattern-one" style="background-image:url(assets/images/background/pattern-15.png)"></div>
		<div class="about-two_pattern-three" style="background-image:url(assets/images/background/pattern-18.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">

                <!-- Content Column -->
				<div class="about-two_content-column col-lg-6 col-md-12 col-sm-12 mt-5">
					<div class="about-two_content-inner">
						<div class="sec-title title-anim" style="text-align: center;">
							<h2 class="sec-title_heading">عن <span style="color: #F2B100;">سعادتي</span></h2>
							<div class="sec-title_text">سعادتي ، يتحول زفافك من حلم إلى لوحة تفيض بالأناقة والبهجة نجمع لك كل ما تحتاجه في مكان واحد، لنحوّل كل تفصيلة إلى تجربة مترفة وسهلة ... <span style="color: #F2B100;">سعادتي</span> حيث يلتقي الحلم بالواقع ويُصبح الفرح أرقى مما تتصور</div>
						</div>

						<div class="about-one_button" style="text-align: center;">
							<a href="#mission" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one" style="font-size: 18px; color: white;">اكتشــف المزيــد</span>
									<span class="text-two" style="font-size: 18px; color: white;">اكتشــف المزيــد</span>
								</span>
							</a>
						</div>
					</div>
				</div>

                <!-- Image Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_image-inner">
						<div class="about-two_image titlt" data-tilt data-tilt-max="5">
							<img src="assets/images/resource/about1.png" style="border-radius: 25px;" alt="" />
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Two -->

    {{-- mission --}}
    <section class="services-one" id="mission">
		<div class="services-one_pattern-one" style="background-image:url(assets/images/background/pattern-6.png)"></div>
		<div class="services-one_pattern-two" data-parallax="{&quot;y&quot; : 100}" style="transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); background-image:url(assets/images/background/pattern-10.png)"></div>
		<div class="auto-container">
			<div class="sec-title centered title-anim">
				<h2 class="sec-title_heading">الرؤيــة والمهمــة</h2>
			</div>
			<div class="row clearfix">

                <!-- Service Block One -->
				<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
					<div class="service-block_one-inner wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
						<div class="service-block_one-icon flaticon-book"></div>
						<h4 class="service-block_one-heading"><a href="speaker-detail.html">رؤيتنــا</a></h4>
						<div class="service-block_one-text">
                            أن تصبح سعادتي الوجهة الأولى لكل من يسعى لزفاف استثنائي، حيث يلتقي الحلم بالواقع، ويعيش كل عروس وعريس تجربة فرح فريدة ومتفردة
                        </div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
					<div class="service-block_one-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
						<div class="service-block_one-icon flaticon-connection"></div>
						<h4 class="service-block_one-heading"><a href="speaker-detail.html">المهمــــة</a></h4>
						<div class="service-block_one-text">
                            تقديم تجربة متكاملة ومترفة لتجهيز حفلات الزفاف، تجمع بين البساطة والأناقة، لنمنح كل عروس وعريس راحة البال وجمال الذكريات في يوم العمر
                        </div>
					</div>
				</div>

			</div>
		</div>
	</section>
    <!-- end mission -->

    {{-- categories --}}
	<section class="speakers-one" id="categories">
		<div class="speakers-one_pattern" style="background-image:url({{ asset('assets/images/background/pattern-4.png') }})"></div>
		<div class="speakers-one_pattern-two" style="background-image:url({{ asset('assets/images/background/pattern-6.png') }})"></div>
		<div class="auto-container">

			<div class="sec-title title-anim centered">

				<h2 class="sec-title_heading">خدماتنــا الاستثنــائية</h2>
			</div>

			<div class="row clearfix">
                @foreach($categories as $category)
                    <!-- News Block -->
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="{{ route('stores', ['id' => $category['id']]) }}"><img src="{{ $category['image'] }}" alt="" /></a>
                                <img src="{{ $category['image'] }}" alt="" />
                            </div>
                            <div class="news-block_one-content text-center">
                                <ul class="news-block_one-meta">
                                </ul>
                                <h5 class="news-block_one-title"><a href="{{ route('stores', ['id' => $category['id']]) }}">{{ $category['name'] }}</a></h5>
                                <a href="{{ route('stores', ['id' => $category['id']]) }}"
                                style="display:inline-block; background-color:#F2B100; color:#fff; padding:10px 25px; border-radius:25px; text-decoration:none; margin-top:15px; font-weight:600;">
                                 عــرض التفــاصيل
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
	</section>
    {{-- end categories --}}

    {{-- contact --}}
    <section class="news-two" style="background-image:url(assets/images/background/4.jpg)" id="contact">
		<div class="auto-container">
			<div class="row clearfix">

				<div class="col-lg-6 col-md-12 col-sm-12">
					<!-- Accordion Box / Style Two -->
					<ul class="accordion-box style-two">

						<!-- Block -->
						<li class="accordion block active-block">
							<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>ما هي منصات سعادتي؟</div>
							<div class="acc-content current">
								<div class="content">
									<p>
                                        سعادتي هي منصات سعودية متخصصة في توفير جميع الخدمات والاحتياجات المتعلقة بالأعراس، شهر العسل، والمناسبات. نهدف إلى أن يجد العريس أو العروس كامل متطلباتهم في مكان واحد وبأسلوب مبسط واحترافي
                                    </p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>ما هي المناطق التي يشملها تطبيق سعادتي حالياً؟</div>
							<div class="acc-content">
								<div class="content">
									<p>
                                         في المرحلة الأولية أطلقنا خدماتنا في مدينة جدة، ونعمل على التوسع قريباً لتغطية باقي مناطق المملكة العربية السعودية بإذن الله.
                                    </p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>ما هي المنصات التي يتوفر عليها تطبيق سعادتي؟</div>
							<div class="acc-content">
								<div class="content">
									<p>
                                        يمكنكم استخدام جميع خدماتنا عبر التطبيقات الذكية المتاحة على أنظمة Android و iOS، بالإضافة إلى موقعنا الإلكتروني الذي يتيح الوصول المباشر إلى كافة الخدمات.
                                    </p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>هل يتطلب استخدام تطبيق سعادتي دفع رسوم معينة؟</div>
							<div class="acc-content">
								<div class="content">
									<p>
                                        لا، تطبيق سعادتي مجاني بشكل كامل ولا يفرض أي رسوم على العملاء مقابل استخدامه أو تصفح خدماته.
                                    </p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>ما هي فكرة تطبيق سعادتي بشكل مختصر؟</div>
							<div class="acc-content">
								<div class="content">
									<p>
                                        يهدف تطبيق سعادتي إلى أن يكون منصة متكاملة تجمع جميع خدمات الأعراس والمناسبات وشهر العسل في مكان واحد، مما يسهل على العملاء الوصول إلى كل احتياجاتهم بطريقة مريحة وسريعة.
                                    </p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>هل يمكن الدفع أو الحجز مباشرة من خلال منصات سعادتي؟</div>
							<div class="acc-content">
								<div class="content">
									<p>
                                        في المرحلة الحالية لا نوفر خاصية الدفع أو الحجز المباشر عبر المنصات. حيث نعرض قائمة واضحة وشاملة لمزودي الخدمات المسجلين لدينا، مع إمكانية التواصل المباشر معهم لإتمام الحجز أو الطلب بكل سهولة.
                                    </p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-form-box p-4 shadow rounded-4 bg-white">
                        <h3 class="contact-form-title text-center mb-4">التواصــــــل</h3>

                        <form method="post" action="#">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control form-control-lg text-end" placeholder="الاســم" required>
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control form-control-lg text-end" placeholder="الايميــل" required>
                            </div>

                            <div class="mb-3">
                                <input type="text" name="phone" class="form-control form-control-lg text-end" placeholder="رقــم الجوال" required>
                            </div>

                            <div class="mb-4">
                                <textarea name="message" rows="4" class="form-control form-control-lg text-end" placeholder="الرسالـــة" required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn custom-btn px-5 py-2 rounded-pill fw-bold">
                                    إرســــال
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

			</div>
		</div>
	</section>
    {{-- end contact --}}

    {{-- application --}}
    <section class="events-about-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column titlt" data-tilt="" data-tilt-max="4" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
						<div class="icon-one" style="background-image:url(assets/images/icons/pattern-1.png)"></div>
							<img src="{{ asset('assets/images/main-slider/iphone.png') }}" width="400" alt="">
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title title-anim">
							<h2 class="sec-title_heading">حمـّــــل التطبيـــق</h2>
							<div class="sec-title_text">متوفر في جميع المتاجر الرقميه!</div>
						</div>
						<div class="row clearfix">
							<div class="download-buttons">
                                <a href="https://apps.apple.com/sa/app/saadaty/id6450555553" target="_blank">
                                <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                    alt="Download on the App Store" style="height: 70px; margin-top: 15px;">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.group.saadaty" target="_blank">
                                <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                                    alt="Get it on Google Play">
                                </a>
                            </div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
    {{-- end application --}}

@endsection
