@extends('web.layouts.app')

@section('content')

<section id="service">

    <div class="container py-5">
     <!--Grid row-->
     <div class="row">
        <div class="col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach($services as $k => $service)
                    <a
                        class="list-group-item list-group-item-action active"
                        data-toggle="list"
                        href="#list-{{ $k + 1 }}"
                        role="tab"
                        aria-controls="home"
                    > {{ $service->title }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content pt-3 pl-2" id="nav-tabContent">

                <div class="page-title-1  pb-2">
                    <h1>Biz Sizin üçün tərcümə edərik !</h1>
                </div>
                @foreach($services as $k => $service )
                    <div class="tab-pane fade {{ $k == 0 ? 'show active' : '' }}" id="list-{{ $k+1 }}" role="tabpanel">
                        {{ $service->text }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Grid row-->
</div>


</section>

@endsection
