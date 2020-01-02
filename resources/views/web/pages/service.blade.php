@extends('web.layouts.app')

@section('content')

<section id="service">

    <div class="container py-5">
     <!--Grid row-->
     <div class="row">
        <div class="col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#list-1"
                role="tab" aria-controls="home">ŞİFAHİ TƏRCÜMƏ</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-2"
                role="tab" aria-controls="profile">SİNXRON TƏRCÜMƏ</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-3"
                role="tab" aria-controls="messages">YAZILI TƏRCÜMƏ</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-4"
                role="tab" aria-controls="settings">NOTARİAL TƏSDİQ</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-5"
                role="tab" aria-controls="settings">APOSTİL</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-6"
                role="tab" aria-controls="settings">LEQALLAŞDIRMA</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-7"
                role="tab" aria-controls="settings">TƏRCÜMƏLƏRİN REDAKTƏSİ</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#list-8"
                role="tab" aria-controls="settings">MƏTİNLƏRİN YIĞILMASI</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content pt-3 pl-2" id="nav-tabContent">
                <div class="page-title-1  pb-2">
                    <h1>Biz Sizin üçün tərcümə edərik !</h1>
                </div>

                <div class="tab-pane fade show active" id="list-1" role="tabpanel">
                    Xarici dillər və tərcüm mərkəsi olaraq Sizə müxtəlif sahələri (bədii, texniki, tibbi, hüquqi, iqtisadi ) əhatə edən yazılı və şifahi tərcümə xidmətlərini təklif edirik. 
                    ​
                    Tərcümələr müxtəlif dillər (Azərbaycanalman, bolqar, çex, çin, ərəb, fars, fransiz, gürcü, inglis, ispan, italyan, ivrit, koreya, macar, polyak, portuqal, rus, türk, urdu, yapon, yunan və s.) arasında həyata keçirilir.
                    ​
                    Mərkəzimiz tərəfindən həmçinin filmlərin tərcüməsi və səsləndirilməsi, tərcümə edilmiş sənədlərin redaktəsi, sənədlərin notarial təsdiqi və ünvanına çatdırılması (kuryer xidməti) həyata keçirilir.
                    ​
                    Siz online tərcümə xidmətlərindən istifadə edərək və ya sosial şəbəkələrdən (LinkedIn, Facebook və Instagram) bizə yazaraq həftənin 7 günü, günün 24 saatı tərcümə xidmətləri üçün müraciət edə bilərsiniz.

                </div>
                <div class="tab-pane fade" id="list-2" role="tabpanel">
                    Example-2
                </div>
                <div class="tab-pane fade" id="list-3" role="tabpanel">
                    Example-3
                </div>
                <div class="tab-pane fade" id="list-4" role="tabpanel">
                    Example-4
                </div>
                <div class="tab-pane fade" id="list-5" role="tabpanel">
                    Example-5
                </div>
                <div class="tab-pane fade" id="list-6" role="tabpanel">
                    Example-6
                </div>
                <div class="tab-pane fade" id="list-7" role="tabpanel">
                    Example-7
                </div>
                <div class="tab-pane fade" id="list-8" role="tabpanel">
                    Example-8
                </div>
            </div>
        </div>
    </div>
    <!--Grid row-->
</div>


</section>

@endsection