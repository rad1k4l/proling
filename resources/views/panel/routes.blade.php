 @extends("panel.app")

@section("content")

<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
      <!-- Search for small screen-->
    </div>
    <div class="col s12">
      <div class="container">
        <div class="section section-data-tables">
            <style>
                .debug {
                    border-style: groove;
                    border-color: red;
                }
            </style>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <div class="row">
                    <div class="row col s12  ">
                        <div class="col s6  ">
                            <h4 class="card-title">
                                 
                            </h4>
                        </div>
                        <div class="col s6  right-align-lg" id="plusButton" >
                            <a @click="openModal()" class="btn-floating mb-1 btn-large waves-effect waves-light "><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div class="col s12">
                      <table id="multi-select" class="display">
                        <thead>
                          <tr>
                            <th>
                              <label>
                                {{--<input type="checkbox" class="select-all" />--}}
                                <span>Select</span>
                              </label>
                            </th>
                              <th>Route</th>
                              <th>Lang name</th>
                              <th>For admin</th>
                              <th>Icon</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($routes as $route)
                          <tr>
                            <th>
                              <label>
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </th>
                            <td>{{ $route['name'] }}</td>
                            <td>{{ $route['title'] }}</td>
                            <td>{{ $route['for_admin'] }}</td>
                            <td><i class="material-icons">{{ $route['icon'] }}</i></td>
                              <td><a href="{{ route("panel.routes.edit.form" , ["id" => $route['id']]) }}"> Edit </a></td>
                          </tr>
                        @endforeach

                        </tbody>

                        <tfoot>
                          <tr>
                            <th></th>
                              <th>Route</th>
                              <th>Lang name</th>
                              <th>For admin</th>
                              <th>Icon</th>
                              <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
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

{{-- addtional html--}}
<div id="routeAddModal" class="modal">
   <div v-if="loading == true">
       <div class="modal-content ">
           <div class="progress">
               <div class="indeterminate"></div>
           </div>
       </div>
   </div>
   <div v-if="loading == false">
       <div class="modal-header center">
           <div class="center container">
               <div class="row center">
                   <div class="col s4">
                       <h4>Yeni route</h4>
                   </div>
               </div>
           </div>

       </div>
       <div class="modal-content ">

           @foreach($locales as $code => $content )
               <div  class="col s12 padding-3" >
                   <div class="input-field col s6">
                       <label for="route_title_{{ $code }}" >{{ config("app.locales.{$code}") }} </label>
                       <input v-model="languages.{{ $code }}" class="validate" required=""  aria-required="true" id="route_title_{{ $code }}" type="text" >
                   </div>
               </div>
           @endforeach
           <div  class="col s12 padding-3" >
               <div class="input-field col s6">
                   <label for="password0" >route name</label>
                   <input v-model="name" class="validate" required=""  aria-required="true" type="text" >
               </div>
           </div>
           <div  class="col s12 padding-3 row" >
               <div class="col s4 ">
                   <a @click="icons" class="btn">
                      <span class="row">
                          <i class="material-icons">@{{ icon === null ? '' : icon }}</i> <span>@{{ icon === null ? 'Icon' : icon }}</span>
                      </span>
                   </a>
               </div>
               <div class="col s4">
                   <label>
                       <input v-model="for_admin" type="checkbox" checked="checked" >
                       <span>For admin</span>
                   </label>
               </div>
           </div>
           <div class="modal-footer">
               <button @click="send()" class="btn  waves-effect waves-green ">Göndər</button>
           </div>
       </div>
   </div>

</div>

<div class="icon-modal modal">
    <div class="modal-content row ">
        @foreach($icons as $icon)
            <div class="col s4">
                <a  @click.prevent ="setIcon('{{ $icon->name }}')" class="btn waves-effect waves-teal">
                    <span> <i class="material-icons">{{ $icon->name }}</i> {{ $icon->name }}</span>
                </a>
            </div>
        @endforeach
    </div>


</div>
{{-- end section --}}


{{-- app.js --}}

@endsection


@section("application_javascript")

    <script>

       

        let plusButton = new Vue({
            el: "#plusButton",
            methods : {
                openModal : function () {
                    modal.open("new");
                }
            }
        });

        let modal = new Vue({
            el : "#routeAddModal",
            data: {
                loading: false,
                state: "",
                languages: @json($locales),
                icon : null,
                for_admin: false,
                edit: null,
                name: "panel.routes",
                instance: $('#routeAddModal')
            },
            methods : {
                error: function(type = "Undefined error ocurred"){
                    swal({
                        title: type,
                        icon: 'error'
                    });
                },
                close: function(){
                    $('#routeAddModal').modal("close");
                },
                open : function ( ) {
                    $('#routeAddModal').modal({
                            dismissible: true,
                            opacity: .5,
                            inDuration: 300,
                            outDuration: 200,
                            startingTop: '4%',
                            endingTop: '10%',
                            ready: function(modal, trigger) {

                                console.log(modal, trigger);
                            },
                            complete: function() {
                                alert('Closed');
                            }
                    }).modal("open");
                },
                icons : function(){
                  iconModal.open();
                },
                onLoading: function (loading = true){
                    this.loading = loading;
                },
                send : function () {
                    this.onLoading();
                    axios.post("{{ @route("panel.routes.save") }}" , {
                        name : this.name,
                        lang : this.languages,
                        for_admin : this.for_admin === true ? 1 : 0,
                        icon: this.icon

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
                        this.onLoading(false);
                    }).catch(error => {
                        console.log(error.message);
                        this.error(error.message);
                        this.onLoading(false);
                    });

                }
            }
        });

        let iconModal = new Vue({
            el: ".icon-modal",
            methods : {
                open: function (){
                    $('.icon-modal').modal({
                            dismissible: true,
                            opacity: .5,
                            inDuration: 300,
                            outDuration: 200,
                            startingTop: '4%',
                            endingTop: '10%',
                            ready: function(modal, trigger) {

                            },
                            complete: function() { alert('Closed'); }
                    }).modal("open");
                },
                setIcon : function (icon) {
                    modal.icon = icon;
                    this.close();
                },
                close: function (){
                    $(".icon-modal").modal("close");
                }
            }
        });
    </script>
    @endsection

