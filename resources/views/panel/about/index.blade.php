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
                                            <div class="col s12">
                                                <div class="col s10">
                                                    <ul class="collapsible collapsible-accordion">
                                                        @foreach(config('laravellocalization.supportedLocales') as $code => $locale)
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">flag</i> Tittle {{ $locale['native'] }}</div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                    <div  id="snow-container">
                                                                        <div class="quill-toolbar_title_{{ $code }}">
                                                                          <span class="ql-formats">
                                                                            <select class="ql-header browser-default">
                                                                              <option value="1">Heading</option>
                                                                              <option value="2">Subheading</option>
                                                                              <option selected>Normal</option>
                                                                            </select>
                                                                            <select class="ql-font browser-default">
                                                                              <option selected>Sailec Light</option>
                                                                              <option value="sofia">Sofia Pro</option>
                                                                              <option value="slabo">Slabo 27px</option>
                                                                              <option value="roboto">Roboto Slab</option>
                                                                              <option value="inconsolata">Inconsolata</option>
                                                                              <option value="ubuntu">Ubuntu Mono</option>
                                                                            </select>
                                                                          </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-bold"></button>
                                                                                <button class="ql-italic"></button>
                                                                                <button class="ql-underline"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-list" value="ordered"></button>
                                                                                <button class="ql-list" value="bullet"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-link"></button>
                                                                                <button class="ql-image"></button>
                                                                                <button class="ql-video"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-formula"></button>
                                                                                <button class="ql-code-block"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-clean"></button>
                                                                            </span>
                                                                        </div>
                                                                        <div v-if="!editor" id="editor_title_{{ $code }}">
                                                                            {!! $about->translate($code)->title !!}
                                                                        </div>
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
                                                                    <div  id="snow-container">
                                                                        <div class="quill-toolbar_body_{{ $code }}">
                                                                          <span class="ql-formats">
                                                                            <select class="ql-header browser-default">
                                                                              <option value="1">Heading</option>
                                                                              <option value="2">Subheading</option>
                                                                              <option selected>Normal</option>
                                                                            </select>
                                                                            <select class="ql-font browser-default">
                                                                              <option selected>Sailec Light</option>
                                                                              <option value="sofia">Sofia Pro</option>
                                                                              <option value="slabo">Slabo 27px</option>
                                                                              <option value="roboto">Roboto Slab</option>
                                                                              <option value="inconsolata">Inconsolata</option>
                                                                              <option value="ubuntu">Ubuntu Mono</option>
                                                                            </select>
                                                                          </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-bold"></button>
                                                                                <button class="ql-italic"></button>
                                                                                <button class="ql-underline"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-list" value="ordered"></button>
                                                                                <button class="ql-list" value="bullet"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-link"></button>
                                                                                <button class="ql-image"></button>
                                                                                <button class="ql-video"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-formula"></button>
                                                                                <button class="ql-code-block"></button>
                                                                            </span>
                                                                            <span class="ql-formats">
                                                                                <button class="ql-clean"></button>
                                                                            </span>
                                                                        </div>
                                                                        <div v-if="!editor" id="editor_body_{{ $code }}">
                                                                            {!! $about->translate($code)->body !!}
                                                                        </div>
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

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        function checkResponse(response) {
            return response.status === 200 && response.data.status.toLowerCase() === 'ok';
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
                    this.collectBody().then(body => {
                        t.collectTitles().then(titles => {
                            axios.post(
                                '{{ route('panel.about.update') }}',
                                {
                                    title : titles,
                                    body : body
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
                    return this.collect(body_quils);
                },
                collectTitles(){
                    return this.collect(title_quils);
                },
                collect(quills){
                    return new Promise(async resolve => {
                        let result = {};
                        await Object.keys(quills).forEach(function (k) {
                            result[k] = quills[k].root.innerHTML;
                        });
                        resolve(result);
                    });
                }
            }
        });


        const title_quils = [];
        const body_quils = [];


        languages.forEach(function (val) {
            title_quils[val.code] =  new Quill('#editor_title_' + val.code, {
                modules: {
                    toolbar: '.quill-toolbar_title_' + val.code
                },
                theme: 'snow'
            });

            body_quils[val.code] =  new Quill('#editor_body_' + val.code, {
                modules: {
                    toolbar: '.quill-toolbar_body_' + val.code
                },
                theme: 'snow'
            });



        });


    </script>
@endsection
