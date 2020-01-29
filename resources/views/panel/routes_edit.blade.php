@extends("panel.app")

@section("content")

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">

            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-title">

                                        </div>
                                        <div class="row">
                                            <div class="col s12">


                                                <form class="formValidate0" id="formValidate0" method="post" action="{{ route("panel.routes.update" , ["id" => $id]) }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <label for="name">Route name *</label>
                                                            <input value="{{ $routes->name }}" class="validate" required="" aria-required="true" id="name" name="name" type="text">
                                                        </div>

                                                        @foreach(config("translatable.locales") as $k => $code )
                                                            <div  class="input-field col s12" >
                                                                <label for="lang_{{ $code }}" class="" > {{ config("app.locales.{$code}") }} </label>
                                                                <input value="{{ $routes->translate($code)->title }}"  class="validate" required="" name="lang_{{ $code }}"  aria-required="true" id="lang_{{ $code }}" type="text" >
                                                            </div>
                                                        @endforeach
                                                        <div class="input-field col s12 icon-app row">
                                                            <div class="col s8">
                                                                <label for="name">Route icon *</label>
                                                                <input v-model="icon" value="{{ $routes->icon }}" class="validate" required="" aria-required="true" id="name" name="icon" type="text">
                                                            </div>
                                                            <div class="col s2">
                                                                <i class="material-icons">@{{ icon }}</i>

                                                            </div>

                                                            <div class="col s2">
                                                                <label>
                                                                    <input {{ $routes->for_admin ? "checked" : "" }}  class="validate" name="for_admin" id="tnc_select1" type="checkbox">
                                                                    <span>For admin</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="input-field col s12">


                                                        </div>
                                                        <div class="input-field col s12">
                                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                                <i class="material-icons right">send</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

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



@section("application_javascript")
    <script>

        new Vue({
            el : ".icon-app",
            data:  { icon: "{{ $routes->icon }}" }
        });
    </script>
@endsection
