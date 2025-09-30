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
</style>
<!-- Slider One -->
	<section class="slider-two" id="benner">
		<div class="main-slider-carousel owl-carousel owl-theme">
			<div class="slider-two_slide">
				<div class="slider-two_icon-one" style="background-image:url({{ asset('assets/images/main-slider/pattern-3.png') }})"></div>
				<div class="slider-two_icon-two" style="background-image:url({{ asset('assets/images/main-slider/pattern-4.png') }})"></div>
				<div class="slider-two_icon-three" style="background-image:url({{ asset('assets/images/main-slider/pattern-5.png') }})"></div>
				<div class="slider-two_cloud-layer" style="background-image:url({{ asset('assets/images/main-slider/cloud.png') }})"></div>
				<div class="slider-two_image-layer" style="background-image:url({{ asset('assets/images/main-slider/image-2.jpg') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="slider-two_image-column col-lg-6 col-md-12 col-sm-12">
							<div class="slider-two_image">
								<img src="{{ asset('assets/images/main-slider/wedding.png') }}" alt="" />
							</div>
						</div>
						<!-- Content Column -->
						<div class="slider-two_content col-lg-6 col-md-12 col-sm-12">
							<div class="slider-two_content-inner">
								<h2 class="slider-two_heading">لا تشيل هم! مع سعادتــــي زفافك جاهز بضغطة زر</h2>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Two -->
	<section class="about-two" id="about">
		<div class="about-two_pattern-one" style="background-image:url(assets/images/background/pattern-15.png)"></div>
		<div class="about-two_pattern-two" style="background-image:url(assets/images/background/pattern-16.png)"></div>
		<div class="about-two_pattern-three" style="background-image:url(assets/images/background/pattern-18.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-two_image-inner">
						<div class="about-two_image titlt" data-tilt data-tilt-max="5">
							<img src="assets/images/resource/about1.png" style="border-radius: 25px;" alt="" />
						</div>

					</div>
				</div>

                <!-- Content Column -->
				<div class="about-two_content-column col-lg-6 col-md-12 col-sm-12 mt-5">
					<div class="about-two_content-inner">
						<div class="sec-title title-anim" style="text-align: center; margin-top: 50px;">
							<h2 class="sec-title_heading">تطبيق سعادتي</h2>
							<div class="sec-title_text">سعادتي هي منصة سعودية متخصصه في توفير جميع خدمات ، احتياجات وتجهيزات الأعراس وشهر العسل والمناسبات</div>
						</div>

						<div class="about-one_button" style="text-align: center;">
							<a href="#mission" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one" style="font-size: 18px">تصفـــح</span>
									<span class="text-two" style="font-size: 18px">تصفـــح</span>
								</span>
							</a>
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
						<h4 class="service-block_one-heading"><a href="speaker-detail.html">الرؤيـــــة</a></h4>
						<div class="service-block_one-text">
                            أن نكون الخيار الأول في تجهيز الأعراس والمناسبات من خلال تقديم العروض والخدمات المتنوعة بجودة عالية وذلك من خلال تطبيق امن وسهل الاستخدام
                        </div>
					</div>
				</div>

				<!-- Service Block One -->
				<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
					<div class="service-block_one-inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
						<div class="service-block_one-icon flaticon-connection"></div>
						<h4 class="service-block_one-heading"><a href="speaker-detail.html">المهمــــة</a></h4>
						<div class="service-block_one-text">
                            مهمتنا تكمن في تقديم نموذج متميز وفعال من حيث التكلفة والجودة العالية للمنتجات والأمان عند الاستخدام ، بالإضافة إلى الحرص على كسب ثقة العملاء
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

				<h2 class="sec-title_heading">الفئــــــــــات</h2>
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
                                <a class="news-block_one-more" href="{{ route('stores', ['id' => $category['id']]) }}">اقرا المزيد</a>
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
					<div class="faq-two_form-box" style="background-image:url(assets/images/background/contact.png)">
						<h3 class="faq-two_form-title">التواصــــــل</h3>

						<!-- Faq Form -->
						<div class="faq-form">
							<form method="post" action="https://html.themerange.net/conat/conat/blog.html">

								<div class="form-group">
									<input type="text" name="username" placeholder="الاســم" required="">
								</div>

								<div class="form-group">
									<input type="text" name="username" placeholder="الايميــل" required="">
								</div>

								<div class="form-group">
									<input type="text" name="phone" placeholder="رقــم الجوال" required="">
								</div>

								<div class="form-group">
									<textarea class="" name="message" placeholder="الرسالـــة"></textarea>
								</div>

								<div class="form-group">
									<!-- Button Box -->
									<div class="button-box">
										<button class="theme-btn submit-btn">
											إرســــال
										</button>
									</div>
								</div>

							</form>
						</div>
						<!-- End Comment Form -->

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
