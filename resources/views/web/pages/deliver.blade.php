@extends('web.layouts.app')

@section('style')

<style type="text/css">

	#msform ul
	{
		padding-left: 0px;
	}

	#msform fieldset:not(:first-of-type) 
	{
		display: none
	}

	#msform .form-card .fs-title 
	{
		font-weight: 700;
		font-family: 'Roboto', sans-serif;
	}

	.card 
	{
		z-index: 0;
		border: none;
		border-radius: 0.5rem;
		position: relative;
		border: 5px solid #e21312;
		border-radius: 3px;
	}

	#progressbar li 
	{
		list-style-type: none;
		font-size: 12px;
		width: 25%;
		float: left;
		position: relative;
	}
	
	#progressbar #personal:before 
	{
		font-family: "FontAwesome";
		content: "\f007";
	}

	#progressbar #location:before 
	{
		font-family: "FontAwesome";
		content: "\f124";
	}

	#progressbar #official:before 
	{
		font-family: "FontAwesome";
		content: "\f0b1";
	}

	#progressbar #payment:before 
	{
		font-family: "FontAwesome";
		content: "\f09d";
	}

	#progressbar li:before 
	{
		width: 50px;
		height: 50px;
		line-height: 45px;
		display: block;
		font-size: 18px;
		color: #ffffff;
		background: lightgray;
		border-radius: 50%;
		margin: 0 auto 10px auto;
		padding: 2px;
	}

	#progressbar li:after 
	{
		content: '';
		width: 100%;
		height: 2px;
		background: lightgray;
		position: absolute;
		left: 0;
		top: 25px;
		z-index: -1;
	}

	#progressbar li.active:before,
	#progressbar li.active:after 
	{
		background: #d20f0e;
	}

</style>

@endsection

@section('content')

<section id="deliver">
	
	<!-- MultiStep Form -->
	<div class="container-fluid" id="grad1">
		<div class="row justify-content-center">
			<div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2" >
				<div class="card px-0 pt-4 pb-0 my-3" style="">
					<h2 class="h2"><strong>ELEKTRON ÖDƏNİŞ FORMASI</strong></h2>
					<p class="lead">Növbəti mərhələyə keçmək üçün bütün sahələri doldurun</p>
					<div class="row">
						<div class="col-md-12">
							<form id="msform">
								<!-- progressbar -->
								<ul id="progressbar">
									<li class="active" id="personal"><strong>Personal</strong></li>
									<li id="location"><strong>Contact</strong></li>
									<li id="official"><strong>Official</strong></li>
									<li id="payment"><strong>Payment</strong></li>
								</ul> <!-- fieldsets -->

								<fieldset class="text-right">

									<div class="form-card">

										<h2 class="font-weight-bold-content text-left fs-title pt-2">Şəxsi məlumatlar</h2>
										<div class="form-group md-form">
											<label for="yourEmail-2" data-error="wrong" data-success="right">Ad</label>
											<input id="yourEmail-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form">
											<label for="yourUsername-2" data-error="wrong" data-success="right">Soyad</label>
											<input id="yourUsername-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form">
											<label for="yourUsername-2" data-error="wrong" data-success="right">Ata adı</label>
											<input id="yourUsername-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form mt-3">
											<label for="yourPassword-2" data-error="wrong" data-success="right">E-poçt</label>
											<input id="yourPassword-2" type="email" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form mt-3">
											<label for="yourPassword-2" data-error="wrong" data-success="right">Telefon</label>
											<input id="yourPassword-2" type="text" required="required" class="form-control validate">
										</div>


									</div> 

									<div class="next">
										<input type="button" name="next" class="btn btn-red action-button" value="Next Step" />
									</div>

								</fieldset>

								<fieldset>
									<div class="form-card">
										<h2 class="font-weight-bold-content text-left fs-title pt-2">Göndəriləcək ünvan</h2>
										<div class="form-group md-form">
											<label for="yourName-2" data-error="wrong" data-success="right">Ölkə</label>
											<input id="yourName-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form mt-3">
											<label for="secondName-2" data-error="wrong" data-success="right">Şəhər</label>
											<input id="secondName-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form">
											<label for="surname-2" data-error="wrong" data-success="right">Rayon</label>
											<input id="surname-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form mt-3">
											<label for="yourAddress-2" data-error="wrong" data-success="right">Poçt indeksi</label>
											<input id="yourEmail-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form mt-3">
											<label for="yourAddress-2" data-error="wrong" data-success="right">Ünvan</label>
											<input id="yourEmail-2" type="text" required="required" class="form-control validate">
										</div>
									</div> 

									<div class="previous text-left btn-group">
										<input type="button" name="previous" class="btn btn-grey action-button-previous" value="Previous" />
									</div>

									<div class="next text-right btn-group">
										<input type="button" name="next" class="btn btn-red action-button" value="Next Step" />
									</div>

								</fieldset>

								<fieldset>
									<div class="form-card">
										<h2 class="font-weight-bold-content text-left fs-title pt-2">Tərcümə edilən sənəd</h2>

										<select class="mdb-select md-form">
											<option value="" disabled selected>Sənəd növü</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>

										<select class="mdb-select md-form">
											<option value="" disabled selected>Sənədin yazıldığı dil</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>

										<select class="mdb-select md-form">
											<option value="" disabled selected>Sənədin tərcümə edildiyi dil</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>

										<select class="mdb-select md-form">
											<option value="" disabled selected>E-mail / Poçt / Kuryer</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>

										<div class="md-form">
											<input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
											<label for="date-picker-example">Son tarix</label>
										</div>
									</div> 

									<div class="previous text-left btn-group">
										<input type="button" name="previous" class="btn btn-grey action-button-previous" value="Previous" />
									</div>

									<div class="next text-right btn-group">
										<input type="button" name="make_translate" class="btn btn-red action-button" value="Next Step" />
									</div>

								</fieldset>

								<fieldset>
									<div class="form-card">

										<div class="radio-group">
											<div class='radio' data-value="credit">
												<img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px">
											</div>
										</div>

										<h2 class="font-weight-bold-content text-left fs-title pt-2">Ödəniş məlumatları</h2>

										<div class="form-group md-form mt-3">
											<label for="yourAddress-2" data-error="wrong" data-success="right">Bank adı</label>
											<input id="yourEmail-2" type="text" required="required" class="form-control validate">
										</div>

										<select class="mdb-select md-form">
											<option value="" disabled selected>Kart növü</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>

										<div class="form-group md-form mt-3">
											<label for="yourAddress-2" data-error="wrong" data-success="right">Kart hesabı sahibinin adı</label>
											<input id="yourEmail-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="form-group md-form mt-3">
											<label for="yourAddress-2" data-error="wrong" data-success="right">Kart nömrəsi</label>
											<input id="yourEmail-2" type="text" required="required" class="form-control validate">
										</div>
										<div class="md-form input-group">
											<input type="text" aria-label="Month" class="form-control" placeholder="Month">
											<input type="text" aria-label="Year" class="form-control" placeholder="Year">
											<input type="text" aria-label="CVC" class="form-control" placeholder="CVC">
										</div>
									</div> 

									<div class="previous text-left btn-group">
										<input type="button" name="previous" class="btn btn-grey action-button-previous" value="Previous" />
									</div>

									<div class="next text-right btn-group">
										<input type="button" name="make_payment" class="btn btn-red action-button" value="Next Step" />
									</div>
								</fieldset>

								<fieldset>
									<div class="form-card">
										<h2 class="text-center pt-2">Success !</h2> 
										<br><br>
										<div class="row justify-content-center">
											<div class="col-3"> 
												<img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="img-fluid"> 
											</div>
										</div> 
										<br>
										<br>
										<div class="row justify-content-center">
											<div class="col-7 text-center">
												<h5>You Have Successfully Signed Up</h5>
											</div>
										</div>
									</div>
								</fieldset>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection

@section('script')

<script type="text/javascript">

	$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
	step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
	'display': 'none',
	'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
	step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
	'display': 'none',
	'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
	$(this).parent().find('.radio').removeClass('selected');
	$(this).addClass('selected');
});

$(".submit").click(function(){
	return false;
})

});

</script>

@endsection
