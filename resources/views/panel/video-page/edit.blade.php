@extends('panel.app')


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

                                            <div class="col s12" v-if="embed.length">
                                                <div class="col s12 input-field" v-html="embed">

                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="col s10 input-field">
                                                    <input placeholder="Youtube Embed Html" v-model="embed" id="embed" type="text" >
                                                    <label for="embed">Youtube Embed</label>
                                                </div>
                                                <div class="col s2 center valign-wrapper" >
                                                    <button @click.prevent="update" class="btn waves-effect waves-teal  center-block" style="margin:17% auto ">Save</button>
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="col s12">
                                                    <ul class="collapsible collapsible-accordion">
                                                        @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">language</i> Başlıq {{ $locale['native'] }}</div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <div  id="snow-container">
                                                                            <input ref="title_{{ $code }}" value="{{ $videopage->translate($code)->title }}">
                                                                        </div>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="col s12">
                                                    <ul class="collapsible collapsible-accordion">
                                                        @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">language</i>Qısa təsvir {{ $locale['native'] }}</div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <div  id="snow-container">
                                                                            <textarea ref="short_title_{{ $code }}" cols="30" rows="10">{{ $videopage->translate($code)->short_title }}</textarea>
                                                                        </div>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="col s12">
                                                    <ul class="collapsible collapsible-accordion">
                                                        @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">language</i> Mətn {{ $locale['native'] }}</div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <div  id="snow-container">
                                                                            <textarea id="content_{{ $code }}">
                                                                                {!! $videopage->translate($code)->content !!}
                                                                            </textarea>
                                                                        </div>
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
    </div>

@endsection

@section('application_css')
    <style>
        iframe {
            height: 300px;
            width: 500px;
        }
        .about-body {
            cursor: pointer;
        }

        .about-title {
            cursor: pointer;
        }
        .toast{
            background-color: #66bb6a !important;
        }
    </style>
@endsection

@section('application_javascript')

    <script src="{{ asset('js/tinymce.min.js') }}"></script>

    @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
        @include('clibs.tinymce', [ 'selector' => '#content_'. $code ])
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
        new Vue({
            el: "#about-app",
            data: {
                title: "",
                body: "",
                editor: false,
                changed : false,
                embed : `{!!  $videopage->youtube_embed  !!}`
            },
            methods: {
                update() {
                    let t = this;
                    this.collectBody().then(body => {
                        t.collectTitles().then(titles => {
                            t.collectShortTitles().then(shortTitles => {
                                t.sendRequest({
                                    title : titles,
                                    content : body,
                                    short_title : shortTitles,
                                    youtube_embed : t.embed
                                });
                            });
                        });
                    });
                },
                sendRequest(data) {
                    axios.post(
                        '{{ route('panel.video.page.update',[ 'id' => $videopage->id]) }}',
                        data
                    ).then(response => {
                        if(checkResponse(response)){
                            this.changed = false;
                            this.success("Uğurla yeniləndi !");
                        }
                    }).catch(error => {
                        this.success("Xəta baş verdi !!!");
                        console.log(error);
                    });
                },
                success(msg){
                    M.toast({ html:msg });
                },
                collectBody(){
                    return this.collect("content_");
                },
                collectTitles(){
                    return this.fromInputs('title_');
                },
                collectShortTitles(){
                    return this.fromInputs('short_title_');
                },
                collect(prefix){
                    return new Promise(async resolve => {
                        let result = { };
                        await languages.forEach(function (value) {
                            result[value.code] = tinymce.get(`${prefix}${value.code}`).getContent();
                        });
                        resolve(result);
                    });
                },
                fromInputs(prefix){
                    let t = this;
                    return new Promise(async resolve => {
                        let result = {};
                        await languages.forEach(function (value) {
                            result[value.code] = t.$refs[prefix + value.code].value;
                        });
                        resolve(result);
                    });
                }
            }
        });

    </script>
@endsection
