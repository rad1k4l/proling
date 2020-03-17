@extends('web.layouts.app')

@section('content')

<div class="container py-5">
   <!--Grid row-->
   <div class="row">
    <div class="col-lg-10 mx-auto">

        <div class="embed-responsive embed-responsive-16by9">{!! $videopage->youtube_embed !!}</div>
    </div>
</div>
<!--Grid row-->

<!--Grid row-->
<div class="row pt-5">
    <div class="col-md-12 pt-3 pl-4 page-title-1">
        <h1>{{ $videopage->title }}</h1>
        {!! $videopage->content !!}
    </div>
</div>
<!--Grid row-->
</div>


@endsection
