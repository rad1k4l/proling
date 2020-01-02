@extends('web.layouts.app')

@section('content')

<section id="contact">
  <!--Section heading-->
  <h1 class="font-weight-bold text-center my-5">SİZ BİZƏ YAZIN !</h1>
  <!--Section description-->
  <p class="text-center grey-text mb-5 mx-auto w-responsive">Sizin üçün uyğun olan hər hansı bir şəkildə əlaqə saxlaya bilərsiniz. Siz həmçinin aşağıdakı qısa müraciət formasından da yararlana bilərsiz. Siz bizə yazin ! Biz suallarınızı məmnuniyyətlə cavablandırarıq.</p>

  <div class="col-md-12">
    <div class="row">
      <!--Grid column-->
      <div class="col-md-4 col-xl-3 pt-5">
        <ul class="contact-icons text-center list-unstyled">
          <li>
            <i class="fas fa-map-marker-alt fa-2x"></i>
            <p><strong>Azərbaycan</strong> <br>
              Bakı
            </p>
          </li>

          <li>
            <i class="fas fa-phone fa-2x"></i>
            <p class="pt-1">
              <strong>Telefon:</strong> +99412 511 0464
              <br>
              <strong>Mobil:</strong> +99450 676 1464
            </p>
          </li>

          <li>
            <i class="fas fa-envelope fa-2x"></i>
            <p>
              <strong>Məlumat:</strong> info@proling.az 
              <br>
              <strong>Sifariş:</strong> order@proling.az
            </p>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-8 col-xl-9">
        <form method="POST">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="contact-name" class="form-control">
                <label for="contact-name" class="">Adınız</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="contact-lastname" class="form-control">
                <label for="contact-lastname" class="">Soyadınız</label>
              </div>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form">
                <input type="email" id="contact-email" class="form-control">
                <label for="contact-email" class="">E-Poçt</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="contact-phone" class="form-control">
                <label for="contact-phone" class="">Telefon</label>
              </div>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
              <div class="md-form">
                <input type="text" id="contact-Subject" class="form-control">
                <label for="contact-Subject" class="">Mövzu</label>
              </div>
            </div>
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <div class="md-form">
                <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                <label for="contact-message">Mesajınız</label>
              </div>
            </div>
          </div>
          <!--Grid row-->
          <div class="text-center text-md-right my-4">
            <a class="btn btn-outline-danger button-style-2 rounded-pill">Göndər</a>
          </div>
        </form>
      </div>
      <!--Grid column-->
    </div>
  </div>
  <!--Grid row-->
</section>
<!--Section: Contact v.2-->

<hr>

<section id="map">
  <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
    <iframe src="https://maps.google.com/maps?q=azerbaijan%20baku%20ataturk%20park&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"></iframe>
  </div>
</section>

@endsection