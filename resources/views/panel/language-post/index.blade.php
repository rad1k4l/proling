@extends('panel.app')

@section("title")
    Dil Mətni
@endsection

@section("content")
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"></h5>

                        </div>
                        <div class="col s2 m6 l6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div id="draggable-handles" class="card card card-default scrollspy categories" style="z-index: 9999">
                                <div class="card-content" style="height: 500px">
                                    <div class="container" id="about-app">
                                        <div class="row ">
                                            <div class="col s12">
                                                <div class="col s10">
                                                    <ul class="collapsible collapsible-accordion">
                                                        @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">flag</i> Tittle {{ $locale['native'] }}</div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <div  id="snow-container">

                                                                            <textarea id="title_{{ $code }}">
                                                                                {!! $language_post->translate($code)->title !!}
                                                                            </textarea>
                                                                        </div>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="col s2 center valign-wrapper" >
                                                    <button @click.prevent="update" class="btn waves-effect waves-teal  center-block" style="margin:17% auto ">Save</button>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <ul class="collapsible collapsible-accordion">
                                                   @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                        <li>
                                                            <div class="collapsible-header"><i class="material-icons">flag</i> About {{ $locale['native'] }}</div>
                                                            <div class="collapsible-body">
                                                                <p>
                                                                    <textarea id="body_{{ $code }}" >
                                                                        {!! $language_post->translate($code)->content !!}
                                                                    </textarea>

                                                                </p>
                                                            </div>
                                                        </li>
                                                   @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('application_css')
    <style>
        .about-body {
            cursor: pointer;
        }

        .about-title {
            cursor: pointer;
        }
    </style>
    <style>
        .toast{
            background-color: #66bb6a !important;
        }
    </style>


    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

@section('application_javascript')

    <script src="{{ asset('js/tinymce.min.js') }}"></script>

    @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
        @include('clibs.tinymce', [ 'selector' => '#title_'. $code ])
        @include('clibs.tinymce', [ 'selector' => '#body_'. $code ])
    @endforeach

    <script>
        function checkResponse(response) {
            return response.status === 200 && response.data.status && response.data.status.toLowerCase() === 'ok';
        }
        const languages = [
            @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                {!! "{
                       code : '{$code}',
                       native : '{$locale['native']}'
                    }," !!}
            @endforeach
        ];
        const about = new Vue({
            el: "#about-app",
            data: {
                title: "",
                body: "",
                editor: false,
                changed : false
            },
            methods: {
                update() {
                    let t = this;
                    this.collectBody().then( (body) => {
                        t.collectTitles().then(titles => {
                            axios.post(
                                '{{ route('panel.language.post.update') }}',
                                {
                                    title : titles,
                                    content : body
                                }
                            ).then(response => {
                                if(checkResponse(response)){
                                    t.changed = false;
                                    t.success("Uğurla yeniləndi !")
                                }
                            }).catch(error => {
                                console.log(error);
                            });
                        });
                    });
                },
                success(msg){
                    M.toast({html:msg });
                },
                collectBody(){
                    return this.collect("body_");
                },
                collectTitles(){
                    return this.collect('title_');
                },
                collect(prefix){
                    return new Promise(async resolve => {
                        let result = { };
                        await languages.forEach(function (value) {
                            result[value.code] = tinymce.get(`${prefix}${value.code}`).getContent();
                        });
                        resolve(result);
                    });
                }


            }
        });





    </script>
@endsection
