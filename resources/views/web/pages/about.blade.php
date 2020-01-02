@extends('web.layouts.app')

@section('content')
<div class="container py-5">
    <section id="about">
        <!--Grid row-->
        <div class="row">
            <div class="col-md-12 pt-3 pl-4 page-title-1">
                <h1>Biz Sizin üçün tərcümə edərik !</h1>
                <p>Xarici dillər və tərcüm mərkəsi olaraq Sizə müxtəlif sahələri (bədii, texniki, tibbi, hüquqi, iqtisadi ) əhatə edən yazılı və şifahi tərcümə xidmətlərini təklif edirik. Tərcümələr müxtəlif dillər (Azərbaycanalman, bolqar, çex, çin, ərəb, fars, fransiz, gürcü, inglis, ispan, italyan, ivrit, koreya, macar, polyak, portuqal, rus, türk, urdu, yapon, yunan və s.) arasında həyata keçirilir.</p>

                <p>Mərkəzimiz tərəfindən həmçinin filmlərin tərcüməsi və səsləndirilməsi, tərcümə edilmiş sənədlərin redaktəsi, sənədlərin notarial təsdiqi və ünvanına çatdırılması (kuryer xidməti) həyata keçirilir. Siz online tərcümə xidmətlərindən istifadə edərək və ya sosial şəbəkələrdən (LinkedIn, Facebook və Instagram) bizə yazaraq həftənin 7 günü, günün 24 saatı tərcümə xidmətləri üçün müraciət edə bilərsiniz.</p>                    
            </div>
        </div>
        <!--Grid row-->

        <hr class="pb-4">
        <!--Grid row-->
        <div class="row mx-1">
          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <!-- Card -->
            <div class="card card-image">
              <!-- Content -->
              <div class="text-center d-flex align-items-center hoverable py-5 px-4">
                <div>
                    <h5 class="text-danger"><i class="fas fa-bullseye-arrow"></i> Bizim Məqsədlərimiz</h5>

                    <p class="text-black pt-2">" PROLİNG " Xarici dillər və tərcümə mərkəzi olaraq məqsədimiz müştərilərə surətli və keyfiyyətli tərcümə xidmətləri təklif etməkdir.</p>
                </div>
            </div>
        </div>
        <!-- Card -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-4">
        <!-- Card -->
        <div class="card card-image">
          <!-- Content -->
          <div class="text-center d-flex align-items-center hoverable py-5 px-4">
            <div>
                <h5 class="text-danger"><i class="fal fa-eye"></i> Bizim Vizyonlarimiz</h5>

                <p class="text-black pt-2">" PROLİNG " Xarici dillər və tərcümə mərkəzi olaraq xarici ölkələrin tərcümə şirkətləri ilə partnyorluq etmək arzusundayıq.</p>
            </div>
        </div>
    </div>
    <!-- Card -->
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-4 mb-4">
    <!-- Card -->
    <div class="card card-image">
      <!-- Content -->
      <div class="text-center d-flex align-items-center hoverable py-5 px-4">
        <div>
            <h5 class="text-danger"><i class="far fa-hand-holding-seedling"></i> Bizim Dəyərlərimiz</h5>
            <p class="text-black pt-2">" PROLİNG " Xarici dillər və tərcümə mərkəzi olaraq dəqiq və məsuliyyətli olmaq, inam və etibar qazanmaq bizim üçün çox vacibdir.</p>
        </div>
    </div>
</div>
<!-- Card -->
</div>
<!-- Grid column -->
</div>
<!--Grid row-->
</div>

</section>

<hr>

<section id="carousel" class="pb-lg-4">

    <div class="container-fluid">
        <!--Carousel Wrapper-->
        <div id="carousel-example-2z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view intro-3">
                        <div class="container">
                            <div class="row pt-lg-5 mt-3">
                                <div class="col-md-12 col-lg-4 pt-lg-5">
                                    <div class="video-carousel-text text-center text-lg-left margins">
                                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Ermənistan və Azərbaycanın qadağan olunmuş tarixi</h1>
                                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">TEST-1 MoversGo offers a wide array of moving services just for you and your unique needs. For the past 25 years, we have moved thousands of people to their new homes.</h6>
                                        <br>
                                        <a href="{{ route('video') }}" class="btn btn-outline-danger btn-rounded waves-effect wow fadeInLeft button-style-2">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 pt-3">
                                    <video class="video-fluid" autoplay loop muted>
                                        <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <div class="view intro-3">
                        <div class="container">
                            <div class="row pt-lg-5 mt-3">
                                <div class="col-md-12 col-lg-4 pt-lg-5">
                                    <div class="video-carousel-text text-center text-lg-left margins">
                                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Danışanlar ruhlar</h1>
                                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">TEST-2 MoversGo offers a wide array of moving services just for you and your unique needs. For the past 25 years, we have moved thousands of people to their new homes.</h6>
                                        <br>
                                        <a href="{{ route('video') }}" class="btn btn-outline-danger btn-rounded waves-effect wow fadeInLeft button-style-2">Read More</a>                          
                                    </div>
                                </div>
                                <div class="col-lg-8 pt-3">
                                    <video class="video-fluid" autoplay loop muted>
                                        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view intro-3">
                        <div class="container">
                            <div class="row pt-lg-5 mt-3">
                                <div class="col-md-12 col-lg-4 pt-lg-5">
                                    <div class="video-carousel-text text-center text-lg-left margins">
                                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">EXAMPLE 3</h1>
                                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">TEST-3 MoversGo offers a wide array of moving services just for you and your unique needs. For the past 25 years, we have moved thousands of people to their new homes.</h6>
                                        <br>
                                        <a href="{{ route('video') }}" class="btn btn-outline-danger btn-rounded waves-effect wow fadeInLeft button-style-2">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 pt-3">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/Third slide-->

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

</div>
<!--/.Carousel Wrapper-->
</div>

</section>

</div>

@endsection