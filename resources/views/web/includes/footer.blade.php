<!--Footer-->
<footer class="page-footer pt-5 mt-3 text-center text-md-left">
	<!--Footer Links-->
	<div class="container wow fadeIn" data-wow-delay="0.3s">
		<!--First row-->
		<div class="row mt-3 mb-4">
			<!--Grid column-->
			<div class="col-md-4 text-center mx-auto">
				<h2 class="font-weight-bold">Yeniliklər</h2>
				<p class="pt-3 white-text">Bizim yeniliklərimizdən ilk xəbər tutan siz olun</p>
				<!-- Large input -->
				<div class="md-form form-lg input-group">
					<input type="text" id="inputLGEx" class="form-control form-control-lg">
					<label class="text-white" for="inputLGEx">E-poçt</label>
					<div class="input-group-append">
						<button class="btn btn-md btn-primary my-0 button-style-1" type="button">Bizimlə Əlaqə</button>
					</div>
				</div>
				<div class="social-icon">
					<!--Facebook-->
					<a href="https://www.facebook.com/Proling-Foreign-Languages-and-Translation-Center-103253517694811/" target="_blank" class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
					<!--Instagram-->
					<a href="https://www.instagram.com/p/B0LGqlylKRF/?utm_source=ig_web_button_share_sheet" target="_blank" class="ins-ic mr-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>
					<!--Twitter-->
					<a href="https://www.linkedin.com/in/proling-foreign-languages-and-translation-center-3324a818b/" target="_blank" class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-linkedin-in"></i></a>
				</div>
			</div>
			<!--Grid column-->
		</div>
		<!--/First row-->
	</div>
	<!--/Footer Links-->

	<!--Copyright-->
	<div class="footer-copyright text-center">
		<div class="container-fluid">
			&copy; {{ date("Y") }} Copyright: <a href="{{ route('privacy-policy') }}"> İstifadə qaydaları və Gizlilik siyasəti </a>
		</div>
	</div>
	<!--/Copyright-->

	<div id="btnTop" class="fixed-action-btn smooth-scroll">
		<a href="#topSection" class="btn-floating btn-large white">
			<i class="far fa-angle-up"></i>
		</a>
	</div>


</footer>
<!--/Footer-->

@section('script')

<script type="text/javascript">

	$(function() {

		var $btn = $('#btnTop');
		var $home = $('#topSection');
		var startpoint = $home.scrollTop() + $home.height();

		$(window).on('smooth-scroll', function() {
			if($(window).scrollTop() > startpoint) {
				$btn.show();
			} else {
				$btn.hide();
			}
		});
	});

</script>

@endsection
