<html lang="{{ app()->getLocale() }}">

<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>ProLing</title>

	{{--	<!--Fonts-->--}}
	{{--	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">--}}
	{{--	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">--}}
	{{--	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">--}}

	<!-- Font Awesome Pro -->
	<link href="{{ asset('css/all.min.css') }}?v=5" rel="stylesheet" async>
	<!--Flag Icons-->
	<link href="{{ asset('css/flag-icon.css') }}" rel="stylesheet" async>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" async>
	<!-- Material Design Bootstrap -->
	<link href="{{ asset('web/css/mdb.min.css') }}" rel="stylesheet" async>
	<!-- Normalize Css -->
	<link href="{{ asset('web/css/normalize.css') }}" rel="stylesheet"async >
	<!-- Custom -->
	<link href="{{ asset('web/css/custom.css') }}" rel="stylesheet" async>

	@yield('style')

</head>

<body>

	@include('web.includes.header')

	<!--PreLoader-->
	{{--	<div id="mdb-preloader" class="flex-center">--}}
		{{--		<div class="preloader-wrapper active">--}}
			{{--			<div class="spinner-layer spinner-red-only">--}}
				{{--				<div class="circle-clipper left">--}}
					{{--					<div class="circle"></div>--}}
				{{--				</div>--}}
				{{--				<div class="gap-patch">--}}
					{{--					<div class="circle"></div>--}}
				{{--				</div>--}}
				{{--				<div class="circle-clipper right">--}}
					{{--					<div class="circle"></div>--}}
				{{--				</div>--}}
			{{--			</div>--}}
		{{--		</div>--}}
	{{--	</div>--}}
	<!--PreLoader-->

	<!--Main Layout-->
	<main>

		@yield('content')

	</main>
	<!--Main Layout-->

	@include('web.includes.footer')

	<!--  SCRIPTS  -->

	<!-- JQuery -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<!-- Bootstrap tooltips -->
	<script defer type="text/javascript" src="{{ asset('web/js/popper.min.js') }}"></script>
	<!-- Bootstrap core JavaScript -->
	<script defer type="text/javascript" src="{{ asset('web/js/bootstrap.min.js') }}"></script>
	<!-- MDB core JavaScript -->
	<script defer type="text/javascript" src="{{ asset('web/js/mdb.min.js') }}"></script>
	<script defer src="{{ asset('js/nette.ajax.js') }}"></script>
	<script defer src="{{ asset('js/custom/custom-script.js') }}"></script>

	@yield('script')

	<!--  SCRIPTS  -->

</body>

</html>
