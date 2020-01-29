@extends("panel.app")

@section("title")
    Maqazalar
    @endsection

@section("content")
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section mt-2" id="blog-list">
                        <div class="row" id="stores">
                            @if(!$stores->isEmpty())
                                @foreach($stores as $store)
                                    <div class="col s12 m6 l4 stores-height">
                                        <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                            <a href="{{ route("panel.user.store" , ["store_id" => $store['id'] ]) }}">
                                                <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="{{ asset("user/stores/img/{$store['image']}") }}" alt="">
                                            </a>
                                            <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">{{ $store['name'] }}</a></h6>
                                            <span>{{ $store['description'] }}</span>
                                            <div class="row mt-4">
                                                <div class="col s7 mt-1">
                                                    <img src="{{ asset("user/stores/img/{$store['image']}") }}" alt="fashion" class="circle mr-3 width-30 vertical-text-middle">
                                                    <span class="pt-2">{{ $store->user->name }}</span>
                                                </div>
                                                <div class="col s4 mt-3 right-align social-icon">
                                                    <span class="material-icons">star_border</span> <span class="ml-3 vertical-align-top">{{ $store['rating'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col s12 m6 l4 " >
                                <div class="card-panel border-radius-6 mt-10 waves-effect  light-blue card-animation-2" @click="openNewStoreModal()" >
                                    <div class="row    ">
                                        <div class="col s9   ">
                                            <span class="white-text" >Yeni Maqaza yarat  </span>
                                        </div>
                                        <div class="col s3 align-content-center    ">
                                            <i style="color:white;" class="material-icons">add</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(empty($stores))
                            <div class="row">
                                <div class="col s12  center">
                                     <h1> Maqazanız yoxdur</h1>
                                </div>
                            </div>
                        @endif
                        <!-- Background Image News -->
                    </div><!-- START RIGHT SIDEBAR NAV -->
                </div>
            </div>
        </div>
    </div>


    <div id="new-store-modal" class="modal" style="width: 500px" >

        <div v-if="loading === true">
            <div class="modal-content ">
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </div>

        <div v-if="loading === false" >
            <div class="modal-header">
                <div class="container">
                    <div class="col 12 center-align">
                        <h2 >Yeni Maqaza</h2>
                    </div>
                </div>
            </div>
            <div class="modal-content">
                    <div  class="col s12 padding-3" >
                        <div class="input-field col s6">
                            <label for="store-name" >Maqaza Adı</label>
                            <input  v-model="name" class="validate" required=""  aria-required="true" id="store-name" type="text" >
                        </div>
                    </div>
                <div  class="col s12 padding-3" >
                    <div class="input-field col s6">
                        <label for="store-description" >Maqaza Haqqında</label>
                        <input  v-model="description" class="validate" required=""  aria-required="true" id="store-description" type="text" >
                    </div>
                </div>
                <div  class="col s12 padding-3" >
                    <div class="input-field col s6">
                        <label for="store-description" >Telefon</label>
                        <input  v-model="number" class="validate" required=""  aria-required="true" id="store-description" type="text" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button @click="send()" class="btn  waves-effect waves-green ">Göndər</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("application_javascript")
    <script>
        let stores = new Vue({
            el : "#stores",
            data : {},
            methods : {
                openNewStoreModal : function(){
                    modal.open();
                }
            }
        });
        let modal = new Vue({
            el : "#new-store-modal",
            data: {
                modInstance : null,
                loading: false,
                number: "",
                name: "",
                description: ""
            },
            methods : {
                error(type = "Undefined error ocurred"){
                    swal({
                        title: type,
                        icon: 'error'
                    })
                },
                close(){
                    $('#new-store-modal').modal("close");
                },
                setup : function(){
                    this.modInstance = $('#new-store-modal').modal({
                        dismissible: true,
                        opacity: .5,
                        inDuration: 150,
                        outDuration: 150,
                        startingTop: '3%',
                        endingTop: '25%',
                        ready: function(modal, trigger) {
                            console.log(modal);
                        },
                        complete: function() {}
                    });
                },
                open : function ( ) {
                    if (this.modInstance == null){
                        this.setup();
                    }
                    this.modInstance.modal("open");
                },
                onLoading(loading = true){
                    this.loading = loading;
                },
                send : function () {
                    this.onLoading();
                    axios.post("{{ @route("panel.user.stores.create") }}" , {
                        number: this.number,
                        name: this.name,
                        description: this.description
                    }).then(response => {
                        let data = response.data;
                        if (data.status !== undefined  ){
                            if ( data.status === "OK") {
                                this.close();
                                window.location.reload();
                            }else if (data.status === "ERROR"){
                                this.error(data.msg);
                            }
                        }else {
                            this.error("Undefined error");
                        }
                    }).catch(error => {
                        console.log(error.message);
                        this.error(error.message);
                    });
                    this.onLoading(false);
                }
            }
        });


    </script>
    @endsection
