<html lang="en">

<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>ProLing</title>

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<!-- Font Awesome Pro -->
	<link href="{{ asset('css/pro.min.css') }}" rel="stylesheet">
	<!-- Font Awesome Free -->
	<link rel="stylesheet" type="text/css" href="{{ asset("css/font-awesome.min.css") }}">
	<!--Flag Icons-->
	<link href="{{ asset('css/flag-icon.css') }}" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="{{ asset('web/css/mdb.min.css') }}" rel="stylesheet">
	<!-- Normalize Css -->
	<link href="{{ asset('web/css/normalize.css') }}" rel="stylesheet">
	<!-- Custom -->
	<link href="{{ asset('web/css/custom.css') }}" rel="stylesheet">

	@yield('style')

</head>

<body>

	@include('web.includes.header')

	<!--PreLoader-->
	<div id="mdb-preloader" class="flex-center">
		<div class="preloader-wrapper active">
			<div class="spinner-layer spinner-red-only">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
	</div>
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
	<script type="text/javascript" src="{{ asset('web/js/popper.min.js') }}"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="{{ asset('web/js/bootstrap.min.js') }}"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="{{ asset('web/js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/nette.ajax.js') }}"></script>
	<script>
		    new WOW().init();

          // Material Select Initialization
          $(document).ready(function() {
            $('.mdb-select').materialSelect();
          });

          $(window).on("load", function () {
            $('#mdb-preloader').fadeOut('slow');
          });
        $(function () {
            $.nette.init();
            $('[data-toggle="tooltip"]').tooltip();
            $('body').tooltip({ selector: '[data-toggle="tooltip"]' });
            $(".button-collapse").sideNav();
            console.log('initialized');
        });
  </script>

  @yield('script')

  <!--  SCRIPTS  -->

</body>

</html>
