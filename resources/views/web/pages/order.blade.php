@extends('web.layouts.app')

@section('content')

<div class="container py-5">

	<section id="order">

		<div class="col-md-12">
			<div class="page-title-1 pt-3 pl-2">
				<h1><strong>Elə indi sifariş edin</strong></h1>
				<p>Tərcümə etmək istədiyiniz sənədi bizə göndərin. Qiymət təklifi qısa zamanda sizin elektron poçtunuza göndəriləcəkdir.</p>
			</div>

			<!--Card content-->
			<div class="card-body px-lg-5 pt-0">
				<!-- Form -->
				<form class="text-center" action="#!">
					<!-- Name -->
					<div class="row">

						<div class="col-md-4 mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select md-form mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Fiziki / Hüquqi şəxs</option>
								<option value="2">Fiziki şəxs</option>
								<option value="3">Hüquqi şəxs</option>
							</select>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<input type="text" id="materialContactFormName" class="form-control">
							<label for="materialContactFormName">Ad</label>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<input type="text" id="materialContactFormName" class="form-control">
							<label for="materialContactFormName">Soyad</label>
						</div>

					</div>

					<div class="row">

						<div class="col-md-4 mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select md-form mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Sizinlə Əlaqə</option>
								<option value="2">Report a bug</option>
								<option value="3">Feature request</option>
								<option value="4">Feature request</option>
							</select>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<input type="text" id="materialContactFormName" class="form-control">
							<label for="materialContactFormName">E-Poçt</label>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<input type="text" id="materialContactFormName" class="form-control">
							<label for="materialContactFormName">Telefon</label>
						</div>

					</div>

					<div class="row">

						<div class="col-md-4 mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select md-form mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Sənəd Növü</option>
								<option value="2">Report a bug</option>
								<option value="3">Feature request</option>
								<option value="4">Feature request</option>
							</select>
						</div>

						<div class="col-md-4 mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select md-form mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Notarial təsdiq</option>
								<option value="2">Hə</option>
								<option value="3">Yox</option>
							</select>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Deadline</option>
								<option value="2">Standart deadline (2-5 working days)</option>
								<option value="3">Express deadline (24 saat)</option>
								<option value="4">Extra express deadline (2-12 hours)</option>
							</select>
						</div>

					</div>

					<div class="row">

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Source Language</option>
								<option value="2">Report a bug</option>
								<option value="3">Feature request</option>
								<option value="4">Feature request</option>
							</select>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<select class="mdb-select mt-1">
								<option value="" disabled>XXX</option>
								<option value="1" selected>Taget Language</option>
								<option value="2">Report a bug</option>
								<option value="3">Feature request</option>
								<option value="4">Feature request</option>
							</select>
						</div>

						<div class="col-md-4 md-form mt-3 p-0 pl-md-3 pr-md-3">
							<form class="md-form">
								<div class="file-field">
									<div class="btn btn-red btn-sm float-left">
										<span>Choose file</span>
										<input type="file">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload your file">
									</div>
								</div>
							</form>
						</div>

					</div>

					<!-- Copy -->
					<div class="row">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="materialContactFormCopy">
							<label class="form-check-label" for="materialContactFormCopy">Razıyam</label>
						</div>
					</div>

					<!-- Send button -->
					<div class="row">
						<div class="col-md-4">
							<button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect button-style-2" type="submit">Get Offer</button>
						</div>
					</div>

					<div class="row">
						<div class="md-form">
							<input placeholder="gün/ay/il" type="text" id="date-picker-example" class="form-control datepicker">
							<label for="date-picker-example">Tarixi Seçin</label>
						</div>
					</div>
				</form>
				<!-- Form -->
			</div>
		</div>

	</section>
</div>

@endsection

@section('script')

<script type="text/javascript">

	// Data Picker Initialization
	$('.datepicker').pickadate();

</script>

@endsection