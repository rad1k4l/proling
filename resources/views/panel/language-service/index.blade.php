@extends("panel.app")

@section("title")
    Dil Xidmətləri
@endsection

@section("content")
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
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
                    <div class="row">
                        <div class="col s12 m12 l12">

                            <div id="draggable-handles" class="card card card-default scrollspy categories">
                                <div style="height: 500px;" class="card-content">
                                   <div class="col s8">
                                       <div class="dd" id="categories">
                                           @include("panel.language-service.list", compact('services'))
                                       </div>
                                   </div>
                                    <div class="col s4 align-content-lg-end">
                                        <div class="row" >
                                            <div class="container">
                                                <div class="col s6">
                                                    <a @click.prevent="save" class="btn waves-effect waves-teal">Yaddaşa yaz</a>
                                                </div>
                                                <div class="col s6">
                                                    <a @click.prevent="add" class="btn waves-effect waves-teal">Yeni</a>
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


@section("application_javascript")
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/jquery.nestable/nestable.css">
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/jquery.nestable/jquery.nestable.js"></script>
    @include("clibs.input-modal")
    <script>

        function checkResponse(response){
            return response.status === 200 && response.data.status.toLowerCase() === 'ok';
        }

        const categories = new Vue({
            el : ".categories",
            data : {
                state : null,
                modalTemplate: {
                    _title :"Dil Xidməti Əlavə et",
                    name : {
                        label : 'Xidmət adı',
                        type : 'text'
                    }
                }
            },
            methods : {
                changed: function (changes) {
                    this.state = changes;
                },

                save: function () {
                    if(this.state !== null){
                        axios.post("{{ route("panel.language.services.state") }}" , {
                            data : this.state
                        }).then(response => {
                            if(checkResponse(response)){
                                window.location.reload();
                            }
                        }).catch();
                    }
                },

                add: function () {
                    modal.open(this.modalTemplate, function (submitted) {
                        console.log(submitted);
                        return new Promise(resolve => {
                            axios.post("{{ route("panel.language.services.create") }}", {
                                submitted
                            }).then(response => {
                                if(checkResponse(response)){
                                    window.location.reload();
                                    resolve(true);
                                } else {
                                    resolve(response.data.info);
                                }
                            }).catch(error => {
                                resolve("Network error");
                            });
                        });
                    });
                },

                edit: function (id) {
                    axios.post("{{ route("panel.language.services.get") }}", { id : id }).then(response => {
                        let that = this;
                        if(checkResponse(response)){
                            let template = JSON.parse(JSON.stringify(that.modalTemplate));
                                template.name.data = response.data.data.name;
                                template._title = "Dil Xidməti Redaktə";
                            modal.open(template, function (submitted) {
                                return new Promise(resolve => {
                                    axios.post("{{ route("panel.language.services.update") }}", {
                                        id : id,
                                        submitted
                                    }).then(response => {
                                        if(checkResponse(response)){
                                            window.location.reload();
                                        }else {
                                            if(response.data.info !== undefined){
                                                resolve(response.data.info);
                                            }else {
                                                resolve("validation error");
                                            }
                                        }
                                    }).catch(error => {
                                        resolve("network error");
                                    })
                                })
                            });
                        }
                    }).catch();
                },
                del : function  (id) {
                    let that = this;
                    swal({
                        title: "Seçilmiş kategoriya silinsin ?",
                        text: "",
                        icon: 'warning',
                        dangerMode: true,
                        buttons: {
                            cancel: 'Cancel',
                            delete: 'OK'
                        }
                    }).then(function (willDelete) {
                        if (willDelete) {
                            axios.post("{{ route("panel.language.services.delete") }}",{
                                id : id
                            }).then(response =>{
                                if(checkResponse(response)){
                                    window.location.reload();
                                }
                            })
                            .catch();
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
