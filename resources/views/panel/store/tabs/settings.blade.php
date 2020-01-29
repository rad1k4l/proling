<div class="container" id="settings">
    <div class="row">
        <div class="col s12">
            <div class="row  ">
                <div class="input-field col s12 " style="display: flex;align-items: center;">
                    <div class="col s8  ">
                        <h5 class="center-align" style="margin-block-start: 0px; margin-block-end: 0px;">@{{ name }}</h5>
                    </div>
                    <div class="col s4 ">
                        <span @click="editName()" class="btn center-align waves-effect waves-light  accent-2 z-depth-4 right"  style="display:inline-flex;text-align: center;width:35%;overflow: hidden;" ><i class="material-icons">edit_border</i></span>

                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="input-field col s12 " style="display: flex;align-items: center;">
                    <div class="col s8  ">
                        <h6   class="center-align" style="margin-block-start: 0px; margin-block-end: 0px;">@{{ description }}</h6>
                    </div>
                    <div class="col s4 ">
                        <span @click="editDescription()" class="btn center-align waves-effect waves-light  accent-2 z-depth-4 right"  style="display:inline-flex;text-align: center;width:35%;overflow: hidden;" ><i class="material-icons">edit_border</i></span>
                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="input-field col s12 " style="display: flex;align-items: center;">
                    <div class="col s8  ">
                        <h6 for="username" class="center-align" style="margin-block-start: 0px; margin-block-end: 0px;">@{{ contact }}</h6>
                    </div>
                    <div class="col s4 ">
                        <span @click="editContact()" class="btn center-align waves-effect waves-light  accent-2 z-depth-4 right "  style="display:inline-flex;text-align: center;width:35%;overflow: hidden;" ><i class="material-icons">edit_border</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal" class="modal col s4">
    <div class="modal-content">
        <div class="input-field">
            <input v-if ="!textarea" type="text" v-model="text" ref = "input"  v-on:keydown.enter="submit()">
            <textarea v-if ="textarea"  class="materialize-textarea" ref = "input"  v-model="text" ></textarea>
        </div>

    </div>
    <div class="modal-footer">
        <a @click.prevent ="submit()"  class="modal-action modal-close waves-effect waves-green btn-flat ">Təsdiqlə</a>
    </div>
</div>

@section("settings_javascript")
    <script>
        var modal = new Vue({
            el : "#modal",
            data : {
                text : "",
                onSubmit : null,
                modInstance : null,
                textarea: true
            },
            methods : {
                setup : function(){
                    this.modInstance = $('#modal').modal({
                        dismissible: true,
                        opacity: .5,
                        inDuration: 150,
                        outDuration: 150,
                        startingTop: '3%',
                        endingTop: '25%',
                        ready: function(modal, trigger) {
                            console.log("ready modal ");
                        },
                        complete: function() {
                            console.log("complete modal");
                        }
                    });
                },
                openModal : function ( ) {
                    if (this.modInstance == null){
                        this.setup();
                    }
                    this.modInstance.modal("open");
                    this.$refs.input.focus();
                },
                close : function (){
                  if(this.modInstance !== null){
                      this.modInstance.modal("close");
                  }
                },
                open : function (text , callable , textarea = false) {
                    this.textarea = textarea;
                    this.text = text;
                    this.onSubmit = callable;
                    this.openModal();
                },
                submit : function () {
                    this.close();
                    console.log("submitted");
                    if (this.onSubmit !== null)
                        this.onSubmit(this.text);
                }
            }
        });
    </script>

    <script>
        var settings = new Vue({
            el : "#settings",
            data: {
                name : "{{ $store->name }}",
                description : "{{ $store->description }}",
                contact: "{{ $store->contact }}"
            },
            methods : {
                editName: function(){
                    let that = this;
                    modal.open(this.name, function(text){
                        that.name = text;
                        axios.post("{{ route("panel.user.store.change.name") }}", {
                            name: text,
                            store_id : store_id
                        }).then( response => {
                            let data = response.data;
                            let status = response.status;

                            if(status === 200){
                                that.name = data.name;
                            }
                        }).catch(error => {});
                    });
                },
                editDescription : function () {
                    let that = this;
                    modal.open(this.description, function(text){
                        that.description = text;
                        axios.post("{{ route("panel.user.store.change.description") }}", {
                            description : text,
                            store_id : store_id

                        }).then( response => {
                            let data = response.data;
                            let status = response.status;

                            if(status === 200){
                                that.description = data.description;
                            }
                        }).catch(error => {});
                    }, true);
                },
                editContact : function () {
                    let that = this;
                    modal.open(this.contact, function(text){
                        that.contact = text;
                        axios.post("{{ route("panel.user.store.change.contact") }}", {
                            contact : text,
                            store_id : store_id

                        }).then( response => {
                            let data = response.data;
                            let status = response.status;

                            if(status === 200){
                                that.contact = data.contact;
                            }
                        }).catch(error => {});
                    });
                }



            }
        });
    </script>
@endsection
