@extends('frontend.main')

@section('content')
<!-- Slider One -->
	<section class="slider-two" id="home">
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
	<!-- End Main Slider Section -->

	<section class="speakers-one" id="category">
		<div class="speakers-one_pattern" style="background-image:url({{ asset('assets/images/background/pattern-4.png') }})"></div>
		<div class="speakers-one_pattern-two" style="background-image:url({{ asset('assets/images/background/pattern-6.png') }})"></div>
		<div class="auto-container">

			<div class="sec-title title-anim centered">

				<h2 class="sec-title_heading">الفئــــــــــات</h2>
			</div>

			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image">
							<a href="{{ url('/sub-categories') }}"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt="" /></a>
							<img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt="" />
						</div>
						<div class="news-block_one-content text-center">
							<ul class="news-block_one-meta">
							</ul>
							<h5 class="news-block_one-title"><a href="{{ url('/sub-categories') }}">القاعــــــــــات</a></h5>
							<a class="news-block_one-more" href="{{ url('/sub-categories') }}">اقرا المزيد</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image">
							<a href="{{ url('/sub-categories') }}"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" /></a>
							<img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" />
						</div>
						<div class="news-block_one-content text-center">
							<ul class="news-block_one-meta">
							</ul>
							<h5 class="news-block_one-title"><a href="{{ url('/sub-categories') }}">فنـــــــــادق</a></h5>
							<a class="news-block_one-more" href="{{ url('/sub-categories') }}">اقرأ المزيد</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image">
							<a href="{{ url('/sub-categories') }}"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt="" /></a>
							<img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt="" />
						</div>
						<div class="news-block_one-content text-center">
							<ul class="news-block_one-meta">
							</ul>
							<h5 class="news-block_one-title"><a href="{{ url('/sub-categories') }}">صوالين رجالية ونسائية</a></h5>
							<a class="news-block_one-more" href="{{ url('/sub-categories') }}">اقرأ المزيد</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

@endsection
