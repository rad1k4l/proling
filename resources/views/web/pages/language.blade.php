@php

/**
 * @var $language LanguagePost
 */
use App\Models\LanguagePost;
@endphp
@extends('web.layouts.app')

@section('content')

<div class="container py-5">
  <!--Grid row-->
  <div class="row">
    <div class="col-md-12 pt-3 pl-4 page-title-1">
        {!! $post->title ?? ''   !!}
        {!! $post->content ?? '' !!}
    </div>
  </div>
  <!--Grid row-->
  <!--Grid row-->
  <div class="row text-center pt-5 language-bottom">
    @foreach($languages as $k => $language)
        @php
            $child = $language->childs();
        @endphp
        <div class="col-md-4">
          <h6>
              <i class="far fa-chevron-double-right fa-sm language-bottom-head btn-rounded"></i>
              {{ $language->name }}
          </h6>
            @if($child !== false)
                @foreach($child as $item)
                    <a href="#">
                        <p>
                            <i class="fal fa-angle-right py-1 px-2 btn-rounded"></i>{{ $item->name }}</p></a>
                @endforeach
            @endif
        </div>
    @endforeach
 </div>
 <!--Grid row-->

</div>


@endsection
