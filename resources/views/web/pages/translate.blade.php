@extends('web.layouts.app')

@section('content')

<div class="container py-5">

    <section id="translate">
     <!--Grid row-->
     <div class="row">
        <div class="col-md-12 pt-3 pl-4 page-title-1">
            <h1>Elə indi tərcümə edin</h1>
            <p>Sed tincidunt felis eget aliquet interdum. Sed leo nisi, ornare vitae consequat a, molestie nec urna. In turpis nisl, eleifend a placerat vel, viverra et diam. Morbi varius enim id neque mollis rutrum. Vivamus at enim eleifend, aliquam augue nec, imperdiet ipsum. Maecenas maximus mauris a tortor venenatis, in bibendum leo semper. Cras facilisis vehicula tortor eu faucibus. Morbi lacus justo, sodales at posuere nec, molestie a nunc. Fusce eget leo sit amet est feugiat viverra ac vel magna.</p>
            <p>Integer pharetra dapibus justo vel placerat. Suspendisse nec iaculis lectus, in gravida est. Sed et eleifend justo. Vestibulum convallis tincidunt fringilla. Cras sed pharetra neque, at pharetra diam. Proin aliquet arcu sed diam commodo cursus. Donec pellentesque faucibus felis vitae Cr tortor eu faucibus.Sed tincidunt felis eget aliquet interdum. Sed leo nisi, ornare vitae consequat a, molestie nec urna. In turpis nisl, eleifend a placerat vel, viverra et diam. Morbi varius enim id neque mollis rutrum. Vivamus at enim eleifend, aliquam augue nec, imperdiet ipsum. Maecenas maximus mauris a tortor venenatis, in bibendum leo-s emper.Sed tincid unt felis eget aliquet interdum. Sed leo nisi, ornare vitae consequat a, molestie nec urna. In turpis.</p>                    
        </div>
        <div class="col-md-12">
            <div class="row py-4 text-center fa-color fa-text-color">
                <div class="col-md-4">
                    <i class="far fa-arrow-alt-circle-up fa-3x p-4" aria-hidden="true"></i>
                    <h6 class="pt-4">PICK SOURCE LANGUAGE AND TARGET LANGUAGE.</h6>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-spinner fa-3x p-4" aria-hidden="true"></i>
                    <h6 class="pt-4">CLICK ON TRANSLATE BUTTON AND TRANSLATE THE TEXT.</h6>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-sync-alt fa-3x p-4" aria-hidden="true"></i>
                    <h6 class="pt-4">TRANSLATE THE TEXT BACK TO YOUR SOURCE LANGUAGE.</h6>
                </div>
            </div>
        </div>
    </div>
    <!--Grid row-->
    <hr>
    <!--Grid row-->
    <div class="row text-center translate-bottom mx-auto">
        <div class="col-md-12 py-4">
            <h5>İSTƏDİYİNİZİ ASANLIQLA TƏRCÜMƏ EDƏ BİLƏRSİNİZ</h5>
        </div>
        <div class="col-md-5">
            <select class="mdb-select md-form">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            
            <div class="md-form">
                <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
                <label for="form7">Material textarea</label>
            </div>
        </div>
        <div class="col-md-2 my-auto">
            <i class="fas fa-exchange-alt fa-2x p-2"></i>
        </div>
        <div class="col-md-5">
            <select class="mdb-select md-form">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            
            <div class="md-form">
                <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
                <label for="form7">Material textarea</label>
            </div>
        </div>
        <button type="button" class="btn btn btn-outline-danger btn-rounded button-style-2">Tərcümə</button>
    </div>
    <!--Grid row-->
</section>

</div>


@endsection