@extends('web.layouts.app')

@section('content')

<!--Section: Features v.2-->
<section id="home" class="text-center wow fadeIn" data-wow-delay="0.3s">
	<div class="container">
		<!--Section heading-->
		<h1 class="font-weight-bold text-center h1 mt-5 mb-3">Təklif etdiyimiz xidmətlər</h1>
		<!--Section description-->
		<p class="text-center grey-text mb-5 mx-auto w-responsive lead">Bizim mərkəz tərcümə və redaktə sifarişlərinin qəbulunu və ünvanına çatdırılmasını həyata keçirir.</p>
		<!--Grid row-->
		<div class="row text-left cursor">

			<div class="col-md-3 flip-card px-0">
				<a href="{{route('online-order')}}">
					<!-- Rotating card -->
					<div class="card-wrapper">
						<div id="card-1" class="card card-rotating text-center">

							<!-- Front Side -->
							<div class="face front rounded mb-0">

								<div class="card-up">
									<i class="fal fa-mobile-android fa-7x mt-5"></i>
								</div>
								<!-- Content -->
								<div class="card-body">
									<h4 class="font-weight-bold mb-3">Sifariş</h4>
								</div>
							</div>
							<!-- Front Side -->

							<!-- Back Side -->
							<div class="face back rounded mb-0">
								<div class="card-body mt-5">
									<!-- Content -->
									<h5 class="text-white pt-3">Sifariş</h5>
									<p class="text-white p-style-1">Biz tərcümə sənədlərini həftənin 7 günü, günün 24 saatı qəbul edirik</p>
								</div>
							</div>
							<!-- Back Side -->

						</div>
					</div>
					<!-- Rotating card -->
				</a>
			</div>

			<div class="col-md-3 flip-card px-0">
				<a href="{{ route('online-translate') }}">
					<!-- Rotating card -->
					<div class="card-wrapper">
						<div id="card-1" class="card card-rotating text-center">

							<!-- Front Side -->
							<div class="face front rounded mb-0">

								<div class="card-up">
									<i class="fal fa-language fa-7x mt-5"></i>
								</div>
								<!-- Content -->
								<div class="card-body">
									<h4 class="font-weight-bold mb-3">Tərcümə</h4>
								</div>
							</div>
							<!-- Front Side -->

							<!-- Back Side -->
							<div class="face back rounded mb-0">
								<div class="card-body mt-5">
									<h5 class="text-white pt-3">Tərcümə</h5>
									<p class="text-white p-style-1">Biz, bizə etibar edilən tərcümə sənədlərini surətli və keyfiyyətli tərcümə edirik.</p>
									<a></a>
								</div>
							</div>
							<!-- Back Side -->

						</div>
					</div>
					<!-- Rotating card -->
				</a>
			</div>

			<div class="col-md-3 flip-card px-0">
				<a href="#">
					<!-- Rotating card -->
					<div class="card-wrapper">
						<div id="card-1" class="card card-rotating text-center">

							<!-- Front Side -->
							<div class="face front rounded mb-0">

								<div class="card-up">
									<i class="fad fa-money-check-edit fa-7x mt-5"></i>
								</div>
								<!-- Content -->
								<div class="card-body">
									<h4 class="font-weight-bold mb-3">Redaktə</h4>
								</div>
							</div>
							<!-- Front Side -->

							<!-- Back Side -->
							<div class="face back rounded mb-0">
								<div class="card-body mt-5">
									<h5 class="text-white pt-3">Redaktə</h5>
									<p class="text-white p-style-1">Biz tərcümə sənədlərini göndərməmişdən öncə onları redaktə edirik.</p>
									<a></a>
								</div>
							</div>
							<!-- Back Side -->

						</div>
					</div>
					<!-- Rotating card -->
				</a>
			</div>

			<div class="col-md-3 flip-card px-0">
				<a href="{{ route('online-deliver') }}">
					<!-- Rotating card -->
					<div class="card-wrapper">
						<div id="card-1" class="card card-rotating text-center">

							<!-- Front Side -->
							<div class="face front rounded mb-0">

								<div class="card-up">
									<i class="fal fa-truck-loading fa-7x mt-5"></i>
								</div>
								<!-- Content -->
								<div class="card-body">
									<h4 class="font-weight-bold mb-3">Çatdırılma</h4>
								</div>
							</div>
							<!-- Front Side -->

							<!-- Back Side -->
							<div class="face back rounded mb-0">
								<div class="card-body mt-5">
									<h5 class="text-white pt-3">Çatdırılma</h5>
									<p class="text-white p-style-1">Biz tərcümə etdiyimiz sənədləri ünvanına da çatdırırıq.</p>
									<a></a>
								</div>
							</div>
							<!-- Back Side -->

						</div>
					</div>
					<!-- Rotating card -->
				</a>
			</div>
			<!--Grid row-->
		</div>
		<!--Section: Features v.2-->
	</section>

	<section id="carousel" class="pb-lg-4">

		<div class="container-fluid">
			<!--Carousel Wrapper-->
			<div id="carousel-example-2z" class="carousel slide carousel-fade" data-ride="carousel">
				<!--Slides-->
				<div class="carousel-inner" role="listbox">

					@foreach($videopages as $k =>  $videopage)
                        <div class="carousel-item {{ $k == 0 ? 'active' : '' }}">
                            <div class="view intro-3">
                                <div class="container">
                                    <div class="row pt-lg-5 mt-3">
                                        <div class="col-md-12 col-lg-4 pt-lg-5">
                                            <div class="video-carousel-text text-center text-lg-left margins">
                                                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">{{ $videopage->title }}</h1>
                                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">{{ $videopage->short_title }}</h6>
                                                <br>
                                                <a href="{{ route('video', ['id' => $videopage->id, 'slug' => \Illuminate\Support\Str::slug($videopage->title) ]) }}" class="btn btn-outline-danger btn-rounded waves-effect wow fadeInLeft button-style-2">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 pt-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                {!! $videopage->youtube_embed !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
				<!--/.Slides-->

				<!--Controls-->
				<a class="carousel-control-next" href="#carousel-example-2z" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!--/.Controls-->

			</div>
			<!--/.Carousel Wrapper-->
		</div>

	</section>

	<section id="translate">

		<div class="container py-4">
			<div class="row text-center translate-bottom mx-auto">
				<div class="col-md-12 mx-auto text-center justify-content-center">
					<h5>İSTƏDİYİNİZİ ASANLIQLA TƏRCÜMƏ EDƏ BİLƏRSİNİZ</h5>
					<div class="row">
						<div class="col-md-5">
							<select class="mdb-select md-form">
								<option value="" disabled selected>Choose your option</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
							<div class="md-form">
								<textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
								<label for="form7">Material textarea</label>
							</div>
						</div>
						<div class="col-md-2 my-auto">
							<i class="fas fa-exchange-alt fa-2x p-2"></i>
						</div>
						<div class="col-md-5">
							<select class="mdb-select md-form">
								<option value="" disabled selected>Choose your option</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
							<div class="md-form">
								<textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
								<label for="form7">Material textarea</label>
							</div>
						</div>
						<button type="button" class="btn btn-outline-danger btn-rounded button-style-2">Tərcümə</button>
					</div>
				</div>
			</div>
		</div>

	</section>


	@endsection
