
@section("input-modal")
    <style>
        .modal{
            max-height: 100% !important;
        }
    </style>
    <div id="input-modal" class="modal col s4" :style = "{ width: sources._width ?? 600 + 'px',  height : sources._height ?? 900 + 'px !important' }">
        <div class="modal-content">
            <h4> @{{ sources._title ?? "Title"}}</h4>
            <h6 v-if="error" style="color: #ff0e07">@{{ error ?? "" }}</h6>
            <div v-if="source.type !== undefined" v-for="(source , k) in sources" class="input-field">
                <input
                    :id="'input_' + k"
                    :class="{
                        valid : source.error !== undefined && source.error === false,
                        invalid : source.error !== undefined && source.error === true
                    }"
                    v-if="source.type == 'text' || source.type == 'email' || source.type == 'password'"
                    :type="source.type"
                    v-model="source.data"
                    class="validate"
                    ref = "input"
                    v-on:keydown.enter="submit()"
                >

                <textarea
                    v-if="source.type == 'textarea'"
                    :id="'input_' + k"
                    :class="{ valid : source.error !== undefined && source.error ===false,
                            invalid : source.error !== undefined && source.error === true ,}"
                    cols="30"
                    rows="10"
                    class="validate"
                >
                </textarea>
                <label
                    :for="'input_' + k"
                    :data-error="source.onError ?source.onError : 'Invalid input'"
                    :data-success="source.onSuccess  ? source.onSuccess : ''"
                    :class="{active : source.data ? true : false && source.data.length > 0 }"
                >
                    @{{ source.label ?? k }}
                </label>
            </div>
        </div>

        <div class="modal-footer carousel-fixed-item center ">
            <button @click.prevent ="submit()"  class="moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                <span class="hide-on-small-only">Təsdiqlə</span>
            </button>
        </div>
    </div>
@show


@section("modal-js")
    <script>
        var modal = new Vue({
            el : "#input-modal",
            data : {
                sources : {
                    _width : 20,
                    _title : 'Default Title'
                },
                onSubmit : null,
                modInstance : null,
                error : null
            },
            methods : {
                setup : function(){
                    this.modInstance = $('#input-modal').modal({
                        dismissible: true,
                        opacity: .1,
                        inDuration: 300,
                        outDuration: 200,
                        startingTop: '5%',
                        endingTop: '10%',
                    });
                },
                openModal : function ( ) {
                    if (this.modInstance == null){
                        this.setup();
                    }
                    this.modInstance.modal("open");
                },
                close : function (){
                    if(this.modInstance !== null){
                        this.modInstance.modal("close");
                    }
                },
                open : function (arguments , callable) {
                    this.sources = arguments;
                    this.onSubmit = callable;
                    this.openModal();
                },
                submit : function () {
                    let t = this;
                    if (this.onSubmit !== null && typeof this.onSubmit === 'function' ){
                        this.onSubmit(this.sources).then(response =>{
                            if(response === true) {
                                t.close();
                            }else {
                                console.log(response);
                                t.error = response;
                            }
                        });
                    }
                }
            }
        });

    </script>

@show
