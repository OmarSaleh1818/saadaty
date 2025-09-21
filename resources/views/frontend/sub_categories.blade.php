@extends('frontend.main')

@section('content')

    <!-- Page Title -->
	<section class="banner-section-two" style="background-image:url(assets/images/background/11.jpg)">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="page-title_big">القاعــــــــــات</div>
					<h2 class="page-title_heading">القاعــــــــــات</h2>
				</div>
				<!-- <ul class="bread-crumb clearfix">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ul> -->
			</div>
		</div>
	</section>
	<!-- End Page Title -->

	<!-- Sidebar Page Container -->
	<section class="news-two" id="blog" style="background-image:url(assets/images/background/4.jpg)">
		<div class="auto-container">
			<div class="sec-title">
				<div class="text-center">
					<div class="title-box title-anim">
						<!-- <div class="sec-title_title">Blog % Articles</div> -->
						<h2 class="sec-title_heading">القاعــــــــــات</h2>
					</div>

				</div>
			</div>
			<div class="row clearfix">
				<form action="#" method="GET" class="container mt-4">
					<div class="row g-3 mb-4">

						<!-- City Selection -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<label for="city" class="form-label">اختر المدينة</label>
							<select class="form-control" id="city" name="city" required>
								<option value="">اختر المدينة</option>
								<option value="riyadh">الرياض</option>
								<option value="jeddah">جدة</option>
								<option value="dammam">الدمام</option>
							</select>
						</div>

						<!-- Neighborhood Selection -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<label for="neighborhood" class="form-label">اختر الحي</label>
							<select class="form-control" id="neighborhood" name="neighborhood" required>
								<option value="">اختر الحي</option>
								<option value="alwafa">الوفاء</option>
								<option value="alsalama">السلامة</option>
								<option value="alneim">النعيم</option>
							</select>
						</div>

						<!-- Search Input with Button -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<label for="search" class="form-label">بحث</label>
							<div class="input-group">
								<button class="btn btn-dark" type="submit">
									<i class="fa fa-search"></i> <!-- Bootstrap Icon -->
								</button>
								<input type="text" name="serch" id="search" class="form-control" placeholder="بحث .." required>
							</div>
						</div>

					</div>
				</form>

				<!-- News Block -->
				<div class="news-block_two col-lg-3 col-md-6 col-sm-12">
					<div class="news-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Post Info -->
						<!-- <div class="news-block_two-date">2 May 2025</div> -->
						<div class="news-block_two-image">
							<a href="{{ url('/blog') }}"><img src="assets/images/resource/news-4.jpg" alt="" /></a>
							<img src="assets/images/resource/news-4.jpg" alt="" />
						</div>
						<div class="news-block_two-content">
							<!-- <ul class="news-block_two-meta">
								<li><span class="icon fa-regular fa-calendar fa-fw"></span>by Christine</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li>
							</ul> -->
							<h4 class="news-block_two-title"><a href="{{ url('/blog') }}">قاعة وناسة </a></h4>
							<a class="news-block_two-more" href="{{ url('/blog') }}">اقرأ المزيد</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block_two col-lg-3 col-md-6 col-sm-12">
					<div class="news-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Post Info -->
						<!-- <div class="news-block_two-date">2 May 2025</div> -->
						<div class="news-block_two-image">
							<a href="{{ url('/blog') }}"><img src="assets/images/resource/news-4.jpg" alt="" /></a>
							<img src="assets/images/resource/news-4.jpg" alt="" />
						</div>
						<div class="news-block_two-content">
							<!-- <ul class="news-block_two-meta">
								<li><span class="icon fa-regular fa-calendar fa-fw"></span>by Christine</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li>
							</ul> -->
							<h4 class="news-block_two-title"><a href="{{ url('/blog') }}">قاعة نسائم ليل</a></h4>
							<a class="news-block_two-more" href="{{ url('/blog') }}">اقرأ المزيد</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block_two col-lg-3 col-md-6 col-sm-12">
					<div class="news-block_two-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Post Info -->
						<!-- <div class="news-block_two-date">2 May 2025</div> -->
						<div class="news-block_two-image">
							<a href="{{ url('/blog') }}"><img src="assets/images/resource/news-5.jpg" alt="" /></a>
							<img src="assets/images/resource/news-5.jpg" alt="" />
						</div>
						<div class="news-block_two-content">
							<!-- <ul class="news-block_two-meta">
								<li><span class="icon fa-regular fa-calendar fa-fw"></span>by Christine</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li>
							</ul> -->
							<h4 class="news-block_two-title"><a href="{{ url('/blog') }}">قاعة ليلة فرح</a></h4>
							<a class="news-block_two-more" href="{{ url('/blog') }}">اقرأ المزيد</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block_two col-lg-3 col-md-6 col-sm-12">
					<div class="news-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Post Info -->
						<!-- <div class="news-block_two-date">2 May 2025</div> -->
						<div class="news-block_two-image">
							<a href="{{ url('/blog') }}"><img src="assets/images/resource/news-6.jpg" alt="" /></a>
							<img src="assets/images/resource/news-6.jpg" alt="" />
						</div>
						<div class="news-block_two-content">
							<!-- <ul class="news-block_two-meta">
								<li><span class="icon fa-regular fa-calendar fa-fw"></span>by Christine</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li>
							</ul> -->
							<h4 class="news-block_two-title"><a href="{{ url('/blog') }}">قاعة فرح</a></h4>
							<a class="news-block_two-more" href="{{ url('/blog') }}">اقرأ المزيد</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

@endsection
