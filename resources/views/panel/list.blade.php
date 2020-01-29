@extends("panel.app")

@section("content")

    <!-- BEGIN: Page Main-->
    <div id="main" xmlns:v-on="http://www.w3.org/1999/xhtml">
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
                                        <div class="row" id="users-app">
                                            <div class="row col s12  ">
                                                <div class="col s6  ">
                                                    <h4 class="card-title">
                                                        <div v-if="loading" class="progress">
                                                            <div class="indeterminate"></div>
                                                        </div>
                                                    </h4>
                                                </div>
                                                <div class="col s6 right-align-lg" id="plusButton" >

                                                    {{--<div class="col s3 right-align-lg">--}}
                                                    {{--<a class="btn waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">button</a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col s3 right-align-lg  ">--}}
                                                    <a @click="add()" class="btn-floating mb-1 btn-large waves-effect waves-light ">
                                                        <i class="material-icons">add</i>
                                                    </a>
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <table id="multi-select" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            Select
                                                            {{--<label>--}}
                                                            {{--<input type="checkbox" class="select-all" />--}}
                                                            {{--<span>Select</span>--}}
                                                            {{--</label>--}}
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Code</th>
                                                        <th>Symbol</th>
                                                        <th>Course</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr v-for = "(currency , k ) in currencies.data">
                                                        <th>
                                                            <label>
                                                                <input type="checkbox" v-model="currency.selected"/>
                                                                <span></span>
                                                            </label>
                                                        </th>
                                                        <td>@{{ currency.name }}</td>
                                                        <td>@{{ currency.code }}</td>
                                                        <td>@{{ currency.symbol }}</td>
                                                        <td>@{{ currency.course }}</td>
                                                        <td>
                                                            <button v-on:click.prevent="del(currency.id)"  class="middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                                                <span class="hide-on-small-only">delete</span>
                                                            </button>
                                                            <button v-on:click.prevent="currEdit(k)"  class="middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                                                <span class="hide-on-small-only">edit</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>

                                                    <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Code</th>
                                                        <th>Symbol</th>
                                                        <th>Course</th>
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

    {{-- end section --}}


    {{-- app.js --}}

@endsection




@section("application_javascript")

    @include("clibs.input-modal")

    <script>
        // let plusButton = new Vue({
        //     el: "#plusButton",
        //     methods : {
        //         openModal : function () {
        //             modal.open("new");
        //         }
        //     }
        // });


    </script>


    <script>

        new Vue({
            el : "#users-app",
            data: {
                loading: false,
                users : [],
                modalTemplate : {
                    username : {
                        type: "text",
                        label: "İstifadəçi Adı"
                    },
                    mail: {
                        type:"text",
                        label: "Email"
                    },
                    address: {
                        type:"text",
                        label: "Ünvanı"
                    },
                    number: {
                        type :"number",
                        label: "Tel."
                    },
                    password: {
                        type : "text",
                        label : "Parol *",
                    },
                    re_password: {
                        type : "text",
                        label : "Parolun təkrarı *",
                    }
                }

            },
            methods : {
                error: function(type = "Unexpected error ocurred"){
                    swal({
                        title: type,
                        icon: 'error'
                    });
                },
                add : function(){
                    let that = this;
                    modal.open(this.modalTemplate ,function (data) {
                        that.course = data.course.data;
                        that.code = data.code.data;
                        that.symbol = data.symbol.data;
                        that.name = data.name.data;
                        that.send();
                    });
                },
                del : function  (id) {
                    let that = this;
                    swal({
                        title: "Seçilmiş valyuta silinsin ?",
                        text: "",
                        icon: 'warning',
                        dangerMode: true,
                        buttons: {
                            cancel: 'Cancel',
                            delete: 'OK'
                        }
                    }).then(function (willDelete) {
                        if (willDelete) {
                            axios.post("{{ route("panel.currency.delete") }}",{
                                currency_id : id
                            }).then(response =>{
                                if(response.status ===  200)
                                    if (response.data.status === "OK"){
                                        window.location.reload();
                                    }
                            })
                                .catch();
                        }
                    });
                },

                currEdit : function (index){
                    let template = JSON.parse(JSON.stringify(this.modalTemplate));

                    let currency = this.currencies.data[index];
                    template.name.data = currency.name;
                    template.course.data = currency.course;
                    template.code.data = currency.code;
                    template.symbol.data = currency.symbol;
                    let id = currency.id;
                    let t = this;
                    modal.open(template,
                        function (submitted) {
                            t.onLoading(true);
                            axios.post("{{ route("panel.currency.update") }}", {
                                currency_id : id,
                                name : submitted.name.data,
                                course : submitted.course.data,
                                code : submitted.code.data,
                                symbol : submitted.symbol.data
                            }).then(response => {
                                t.onLoading(false);
                                if(response.status === 200 || response.status === 401 ){
                                    window.location.reload();
                                }
                            }).catch();

                        });
                },

                update : function ( ){

                    let that = this;
                    axios.post("{{ route("panel.user.list.get") }}")
                        .then(response => {
                            let data = response.data;
                            if(response.status === 401 ){
                                window.location.reload();
                            }
                            if (response.status === 200)
                                if(data.status === "OK"){
                                    that.currencies = data.requested;
                                }
                        }).catch();
                },
                onLoading: function (loading = true){
                    this.loading = loading;
                },

                send : function () {
                    this.onLoading();
                    let that = this;
                    axios.post("{{ @route("panel.currency.create") }}", {
                        name  : this.name,
                        code    : this.code,
                        symbol  : this.symbol,
                        course  : this.course
                    }).then(response => {
                        let data = response.data;
                        if(response.status === 401 )
                            window.location.reload();

                        if (response.status === 200 )
                            if (data.status !== undefined  ){
                                if ( data.status === "OK") {
                                    window.location.reload();
                                }else if (data.status === "ERROR"){
                                    that.error(data.msg);
                                }
                            }else {
                                that.error("Undefined error");
                            }
                        that.onLoading(false);
                    }).catch(error => {
                        console.log(error.message);
                        that.error(error.message);
                        that.onLoading(false);
                    });
                }


            }
        }).update();
    </script>

@endsection



@section("content-temp")
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
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <h4 class="card-title">User List
                  </h4>
                  <div class="row">
                    <div class="col s12">
                      <table id="multi-select" class="display">
                        <thead>
                          <tr>
                            <th>
                              <label>
                                <input type="checkbox" class="select-all" />
                                <span></span>
                              </label>
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Start date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                          <tr>
                            <th>
                              <label>
                                <input type="checkbox" />
                                <span></span>
                              </label>
                            </th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><span class="badge  {{ $user->isActive ? "green" : "pink" }}  lighten-5 {{ $user->isActive ? "green" : "pink" }}-text text-accent-2">{{ $user->isActive ? "Active" : "Closed" }}</span></td>
                            <td>2011/04/25</td>
                            <td><i class="material-icons pink-text">clear</i></td>
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <th></th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Start date</th>
                              <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                        {{ $users->render() }}
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
