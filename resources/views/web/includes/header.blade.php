<header id="topSection">
	<nav class="navbar navbar-expand-lg navbar-dark navbar-7 fixed-top scrolling-navbar">
		<div class="container px-0">
			<a class="navbar-brand" href="{{ route('homepage') }}">
				<img src="https://placehold.it/150x50?text=Logo" alt="Proling az Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
			aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-7">
			<ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="{{ LaravelLocalization::localizeUrl( route($category->route) ) }}" > {{ $category->name }} </a>
                    </li>
                @endforeach
			</ul>

			<div class="ml-auto text-center">
				<div class="btn-group mx-3">
					<a class="nav-link dropdown-toggle" type="button" id="dropdown09" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-{{ app()->getLocale() == 'en' ? 'us' : app()->getLocale() }}"> </span> {{ config('laravellocalization.supportedLocales.'. app()->getLocale() . '.native') }}</a>
					<div class="dropdown-menu">
                        @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                            @if($code !== app()->getLocale())
                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($code) }}"><span class="flag-icon flag-icon-{{  $code == 'en' ? 'us' : $code }}"> </span>{{ $locale['native'] }}</a>
						    @endif
                        @endforeach
					</div>
				</div>
				<div class="btn-group dropleft">
					<a class="nav-link dropdown-toggle" type="button" id="dropdown09" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"> <i class="fas fa-phone fa-lg"></i> </a>
					<!--Menu-->
					<div class="dropdown-menu ">
						<a class="dropdown-item" href="#">
							<h6 class="h6 pt-1" onclick="window.open('tel:+994125110464');">+994 12 511 0464</h6>
						</a>
						<a class="dropdown-item" href="#">
							<h6 class="h6" onclick="window.open('tel:+994506761464');">+994 50 676 1464</h6>
						</a>
					</div>
				</div>
				<!--/Dropdown primary-->
			</div>

		</div>
	</div>
</nav>

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
	<!--Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-1z" data-slide-to="1"></li>
		<li data-target="#carousel-example-1z" data-slide-to="2"></li>
	</ol>
	<!--/.Indicators-->

	<!--Slides-->
	<div class="carousel-inner" role="listbox">

		<!--First slide-->
		<div class="carousel-item active pb-5 mb-5">
			<div class="view" style="background-image: url('{{ asset('web/img/slider2.png') }}');">
				<div class="container h-100 d-flex justify-content-center align-items-center pl-lg-5 pt-lg-5">
					<div class="row">
						<div class="col-md-6 text-center text-md-left margins">
							<div class="white-text">
								<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s"><strong>"PROLING"</strong>
								</h1>
								<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Xarici Dillər və Tərcümə Mərkəzi</h1>
								<hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
								<h6 class="wow fadeInLeft" data-wow-delay="0.3s">Biz dəqiq və məsuliyyətli, surətli və keyfiyyətli tərcümə xidmətləri təklif etməyimizlə sizin inam və etibarınızı qazanırıq.</h6>
								<br>
								<a href="{{ route('about') }}" class="btn btn-info wow fadeInLeft button-style-1" data-wow-delay="0.3s">Read More</a>
							</div>
						</div>
						<div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
							<img src="" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/First slide-->

		<!--Second slide-->
		<div class="carousel-item pb-5 mb-5">
			<div class="view" style="background-image: url('http://genchi.info/images/city-wallpaper-10.jpg');">
				<div class="container h-100 d-flex justify-content-center align-items-center pl-lg-5 pt-lg-5">
					<div class="row">
						<div class="col-md-6 text-center text-md-left margins">
							<div class="white-text">
								<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s"><strong>"PROLING"</strong>
								</h1>
								<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Xarici Dillər və Tərcümə Mərkəzi</h1>
								<hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
								<h6 class="wow fadeInLeft" data-wow-delay="0.3s">Biz dəqiq və məsuliyyətli, surətli və keyfiyyətli tərcümə xidmətləri təklif etməyimizlə sizin inam və etibarınızı qazanırıq.</h6>
								<br>
								<a href="{{ route('about') }}" class="btn btn-info wow fadeInLeft button-style-1" data-wow-delay="0.3s">Read More</a>
							</div>
						</div>
						<div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
							<img src="" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Second slide-->

		<!--Third slide-->
		<div class="carousel-item pb-5 mb-5">
			<div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/92.jpg');">
				<div class="container h-100 d-flex justify-content-center align-items-center pl-lg-5 pt-lg-5">
					<div class="row">
						<div class="col-md-6 text-center text-md-left margins">
							<div class="white-text">
								<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s"><strong>"PROLING"</strong>
								</h1>
								<h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Xarici Dillər və Tərcümə Mərkəzi</h1>
								<hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
								<h6 class="wow fadeInLeft" data-wow-delay="0.3s">Biz dəqiq və məsuliyyətli, surətli və keyfiyyətli tərcümə xidmətləri təklif etməyimizlə sizin inam və etibarınızı qazanırıq.</h6>
								<br>
								<a href="{{ route('about') }}" class="btn btn-info wow fadeInLeft button-style-1" data-wow-delay="0.3s">Read More</a>
							</div>
						</div>
						<div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
							<img src="" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Third slide-->

	</div>
	<!--/.Slides-->

	<!--Controls-->
	<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

</header>
<!--Main Navigation-->

@section('script')

<script type="text/javascript">
	$(function() {
        let url = window.location.href;
        $(".navbar-nav a").each(function() {
            if (url === (this.href)) {
            	$(this).closest("li").addClass("active");
                $(this).closest("li").parent().parent().addClass("active");
            }
        });
    });
</script>

@endsection
