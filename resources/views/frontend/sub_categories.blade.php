@extends('frontend.main')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endsection
@section('content')

<style>
    .news-block_two-image {
    width: 100%;
    height: 200px; /* يمكنك تغيير الارتفاع */
    overflow: hidden;
    border-radius: 25px 25px 0 0; /* زوايا مدورة من الأعلى */
}

.news-block_two-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease; /* تحريك بسيط */
}

/* تأثير عند المرور */
.news-block_two-image:hover img {
    transform: scale(1.05);
}

/* تأثير عند النقر */
.news-block_two-image:active img {
    transform: scale(0.95);
}
</style>
    <!-- Page Title -->
	<section class="banner-section-two" style="background-image:url({{ asset('assets/images/background/saadaty_banner.png') }})">
		<div class="auto-container">
			<div class="text-center mb-5">
					<h2 style="color: white; margin-top: -80px">كل لحظة في زفافك… نُهديها لمسة من الجمال والرقي</h2>
			</div>
            {{-- <div class="about-one_button" style="text-align: center;">
                <a href="{{ route('home') }}#contact" class="theme-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one" style="font-size: 18px; color: white;">تواصل معنا</span>
                        <span class="text-two" style="font-size: 18px; color: white;">تواصل معنا</span>
                    </span>
                </a>
            </div> --}}
		</div>
	</section>
	<!-- End Page Title -->

	<!-- Sidebar Page Container -->
	<section class="news-two" id="blog" style="background-image:url({{ asset('assets/images/background/4.jpg') }})">
		<div class="auto-container">
			<div class="sec-title">
				<div class="text-center">
					<div class="title-box title-anim">
						<!-- <div class="sec-title_title">Blog % Articles</div> -->
						<h2 class="sec-title_heading">{{ $categoryName }}</h2>
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
						<div class="col-lg-4 col-md-6 col-sm-12 mt-2">
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

                            <div class="news-block_two-image">
                                <a href="{{ route('store', ['id' => $store['id']]) }}"><img src="{{ asset($store['main_image_url']) }}" alt="" /></a>
                                <img src="{{ asset($store['main_image_url']) }}" alt=""  />
                            </div>
                            <div class="news-block_two-content text-center">
                                <h4 class="news-block_two-title"><a href="{{ route('store', ['id' => $store['id']]) }}">{{ $store['name'] }}</a></h4>
                                <a href="{{ route('store', ['id' => $store['id']]) }}"
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

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
             $('.select2').select2({ placeholder: "اختر", allowClear: true });
        });
    </script>
@endsection
