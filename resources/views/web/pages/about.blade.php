@extends('web.layouts.app')

@section('content')
<div class="container py-5">
    <section id="about">

        <div class="row">
            <div class="col-md-12 pt-3 pl-4 page-title-1">
                {!!  $about->title ?? "None" !!}
                <p>{!!   $about->body ?? "None" !!}</p>
            </div>
        </div>
        <hr class="pb-4">
        <div class="row mx-1">

            @foreach($aboutCards as $card)
                <div class="col-md-4 mb-4">
                    <div class="card card-image">
                        <div class="text-center d-flex align-items-center hoverable py-5 px-4">
                            <div>
                                <h5 class="text-danger">
{{--                                    <i class="far fa-hand-holding-seedling"></i>--}}
                                     {!! $card->title !!}
                                </h5>
                                <p class="text-black pt-2">
                                    {!! $card->body !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
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
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1gbZGoSwpxs" allowfullscreen></iframe>
                                    </div>
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
