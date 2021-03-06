@extends("panel.app")
@section("title")
   Admin
@endsection
@section("content")
    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"> </h5>

                        </div>
                        <div class="col s2 m6 l6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Dark Theme -->
                    <!-- Draggable Handles -->
                    <div class="row">
                        <div class="col s12 m12 l12">

                            <div id="draggable-handles" class="card card card-default scrollspy categories">
                                <div class="card-content" style="height: 500px">
                                   <div class="col s10">
                                       <div class="dd" id="categories">
                                           @include("panel.about.cards.list")
                                       </div>
                                   </div>
                                    <div class="col s2 center">
                                        <div class="row" >
                                            <div class="container">
                                                <div class="col s6">
                                                    <a  @click.prevent="save" class="btn waves-effect waves-teal">Save</a>
                                                </div>
                                                <div class="col s6">
                                                    <a  @click.prevent="add" class="btn waves-effect waves-teal">New </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <!-- END RIGHT SIDEBAR NAV -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->
@endsection


@section("application_javascript")

    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/jquery.nestable/nestable.css">
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/jquery.nestable/jquery.nestable.js"></script>

    @include("clibs.input-modal")
    <script>
        function checkResponse(response){
            return response.status === 200 &&response.data.status.toLowerCase() === 'ok';
        }

        let categories = new Vue({
            el : ".categories",
            data : {
                state : null,
                modalTemplate: {
                    _width : 800,
                   @foreach(config("laravellocalization.supportedLocales") as $code => $lang )
                       {{ "title_".$code . ":"  }}
                       {{ "{" }}
                            data : "",
                            label : "Başlıq " + "{{ $lang['native'] }}",
                            type : "text"
                       {{  "}," }}
                   @endforeach
                   @foreach(config("laravellocalization.supportedLocales") as $code => $lang )
                       {{ "body_".$code . ":"  }}
                       {{ "{" }}
                            data : "",
                            label : "Card Mətni " + "{{ $lang['native'] }}",
                            type : "text"
                       {{  "}," }}
                   @endforeach
                }
            },
            methods : {
                changed: function (changes) {
                    this.state = changes;
                },
                save: function () {
                    if(this.state !== null){
                        axios.post("{{ route("panel.about.cards.state") }}" , {
                            data : this.state
                        }).then(response => {
                            if(response.status === 200){
                                if (response.data.status === "OK") {
                                    window.location.reload();
                                }
                            }
                        }).catch();
                    }
                },
                add: function () {
                    modal.open(this.modalTemplate, function (submitted) {
                        return new Promise(resolve => {
                            axios.post("{{ route("panel.about.cards.create") }}", {  submitted  })
                                .then(response => {
                                    if(checkResponse(response)){
                                        window.location.reload();
                                    }else {
                                        if(response.data.info !== undefined) {
                                            resolve(response.data.info);
                                        }else {
                                            resolve("Validation error");
                                        }
                                    }
                                }).catch(error => {
                                    resolve(error.message);
                                });
                        });
                    });
                },
                edit: function (id) {
                    axios.post("{{ route("panel.about.cards.get") }}", { id : id }).then(response => {
                        let that = this;

                        if (checkResponse(response)) {
                            let data = response.data.data ;
                            let template = JSON.parse(JSON.stringify(that.modalTemplate));
                            data.translations.forEach(function (value) {
                                template["title_" + value.locale].data = value.title;
                                template["body_" + value.locale].data = value.body;
                            });
                            template._title = "About Kartı";
                            modal.open(template, function (submitted) {
                                return new Promise(resolve => {
                                    axios.post("{{ route("panel.about.cards.update") }}",{
                                        id : id ,
                                        submitted
                                    }).then(response => {
                                        if(checkResponse(response)){
                                            window.location.reload();
                                            return true;
                                        }else {
                                            resolve(response.data.info);
                                        }
                                    }).catch(error => {
                                       resolve(error.message);
                                    });
                                });
                            });
                        }

                    }).catch();
                },
                del : function (id) {
                    swal({
                        title: "Seçilmiş kart silinsin ?",
                        text: "",
                        icon: 'warning',
                        dangerMode: true,
                        buttons: {
                            cancel: 'Ləğv et',
                            delete: 'Təsdiq'
                        }
                    }).then(function (willDelete) {
                        if (willDelete) {
                            axios.post("{{ route("panel.about.cards.delete") }}",{
                                card_id : id
                            }).then(response =>{
                                if(response.status ===  200)
                                    if (response.data.status === "OK"){
                                        window.location.reload();
                                    }
                            }).catch();
                        }
                    });
                },
            }

        });

        $('#categories').nestable().on("change", function (e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            let changes = list.nestable('serialize');
            categories.changed(changes);
        });

    </script>


@endsection
