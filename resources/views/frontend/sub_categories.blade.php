@extends('frontend.main')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endsection
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
								<option value="jeddah" selected>جدة</option>
							</select>
						</div>

						<!-- Neighborhood Selection -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<label for="neighborhood" class="form-label">اختر الحي</label>
							<select class="form-control select2" name="district" required>
                                @foreach ($districts as $district)
                                    <option value="{{ $district }}">
                                        {{ $district }}
                                    </option>
                                @endforeach
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
                @foreach ($stores as $store)
                    <div class="news-block_two col-lg-3 col-md-6 col-sm-12">
                        <div class="news-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <!-- Post Info -->
                            <!-- <div class="news-block_two-date">2 May 2025</div> -->
                            <div class="news-block_two-image">
                                <a href="{{ route('store', ['id' => $store['id']]) }}"><img src="{{ asset($store['main_image_url']) }}" alt="" /></a>
                                <img src="{{ asset($store['main_image_url']) }}" alt="" />
                            </div>
                            <div class="news-block_two-content">
                                <!-- <ul class="news-block_two-meta">
                                    <li><span class="icon fa-regular fa-calendar fa-fw"></span>by Christine</li>
                                    <li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li>
                                </ul> -->
                                <h4 class="news-block_two-title"><a href="{{ route('store', ['id' => $store['id']]) }}">{{ $store['name'] }}</a></h4>
                                <a class="news-block_two-more" href="{{ route('store', ['id' => $store['id']]) }}">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
             $('.select2').select2({ placeholder: "اختر", allowClear: true });
        });
    </script>
@endsection
