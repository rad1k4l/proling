@extends("panel.app")

@section("title") Məhsul əlavə et @endsection

@section('application_css')
    <style xmlns:http="http://www.w3.org/1999/xhtml">
        .wrapper  {
            width: 100%;
        }
        .images {

            flex-wrap:  wrap;
            margin-top: 20px;
        }
        .images .img,
        .images .pic {
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .images .img {
            flex-basis: 15%;
        }

        .images .pic {
            flex-basis: 10%;
        }
        .images .img {
            width: 112px;
            height: 93px;
            background-size: cover;
            margin-right: 10px;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .images .img:nth-child(3n) {
            margin-right: 0;
        }
        .images .img span {
            display: none;
            text-transform: capitalize;
            z-index: 2;
        }
        .images .img::after {
            content: '';
            width: 100%;
            height: 100%;
            transition: opacity .1s ease-in;
            border-radius: 4px;
            opacity: 0;
            position: absolute;
        }
        .images .img:hover::after {
            display: block;
            background-color: #000;
            opacity: .5;
        }
        .images .img:hover span {
            display: block;
            color: #fff;
        }
        .images .pic {
            align-self: center;
            text-align: center;
            text-transform: uppercase;
            font-size: 12px;
            cursor: pointer;
            background-color: #26a69a;
            padding: 20px 0;
            color: #fff;
            overflow: hidden;
        }
       .images  input[type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #26a69a;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
	font-family: 'Poppins', sans-serif;
	font-size: inherit;
  font-weight: 600;
  margin-bottom: 1rem;
  outline: none;
  padding: 15px;
  position: relative;
  transition: all 0.3s;
  vertical-align: middle;

  &:hover {
    background-color: darken(#26a69a, 10%);
  }

}
.images img
{
    width:70px;
    height:70px;
    border-radius:5px;
}
.images button
{
    width:70px;
    height:70px;
    border:none;
    border-radius:5px;
    font-size:12px;
    font-weight: 700;
    background-color: #26a69a;
    color:#fff;
}
.card-1{
    height:35vh;
}
.card-esas{
    cursor: pointer;
    height:35vh;
}
.card-2{
    height:15vh;
}
.p-2{
    font-size: 11.5px;
    width:80%;
    margin:0 auto !important;
    text-align: center;
}
.i-1{
    margin-top:7vh;width:100%;
}
.i-2{
    margin-top:3vh !important;width:100%;
}
@media (max-width:1000px) {
    .card-1{
    height:35vh;
}
.card-esas{
 height:37vh;
}
.card-2{
    height:25vh;
}
.p-2{
    font-size: 11.5px;
    width:80%;
    margin:0 auto !important;
    text-align: center;
}
.i-1{
    margin-top:7vh;width:100%;
}
.i-2{
    margin-top:3vh !important;width:100%;
}
}
@media (max-width:600px){
    .m-2{
        font-size: 12px;
    }
    .card-1{
    height:45vh;
}
.card-esas{
 height:45vh;
}
.card-2{
    height:35vh;
}
.p-1{
    font-size: 12.5px;
}
.p-2{
    font-size: 11.5px;
    width:90%;
    margin:0 auto !important;
    text-align: center;
}
.i-1{
    margin-top:6vh;width:100%;
}
.i-2{
    margin-top:7vh !important;width:100%;
}
}
.product-image{
    height: 100%;
    width: 100%;
}
.img-on-progress{
    opacity: 0.3;
}
    </style>
@endsection

@section("content")
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper"> </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-title"></div>
                                        <div class="row">
                                            <div class="col s12" id="product-add-form">
                                                <form class="formValidate0" id="formValidate0" >
                                                    @csrf
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <div class="row">
                                                                <div class="container" >
                                                                    <div class="col s12 m12 l6">
                                                                        <div  :class="{'img-on-progress' : files.main.loading !== undefined && files.main.loading > 0 }" class=" card grey lighten-4 card-esas waves-light gradient-shadow"  >
                                                                            <input type="file" style="display: none" v-on:change="changedImgMain" ref="img_main" accept="image/*">
                                                                            <span @click="rmMain" v-if="has()" class="btn btn-floating btn-small" style="position:absolute;top:2px;right:5px;background: #393eff;color: white;border-radius: 50%;">X</span>
                                                                            <div @click="openMainDialog()" >
                                                                                <span v-if="!has()">
                                                                                    <i class="material-icons center-align i-1" >add_a_photo</i>
                                                                                    <p class="p-1 center-align blue-grey-text text-darken-4">Şəkil əlavə edin</p>
                                                                                    <p class="p-2 center-align blue-grey-text text-darken-2">Əsas şəkil axtarış nəticələrində əks olunacaq</p>
                                                                                </span>
                                                                                <img v-if="has()" :src="files.main.url" class="product-image" alt="d">
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col s12 l6">
                                                                        <div class="row">

                                                                            <div v-for="(small, k ) in files.small" class="col s12 m6 l6">
                                                                                <div class="card grey lighten-4 card-2" style="cursor:pointer;">
                                                                                    <span @click="remove(k)" class="btn btn-floating btn-small" style="position:absolute;top:2px;right:5px;background: #393eff;color: white;border-radius: 50%;">X</span>
                                                                                    <img :src="small.url" class="product-image" alt="d">
                                                                                </div>
                                                                            </div>
                                                                            <div v-if="files.small.length < 4" class="col s12 m6 l6">
                                                                                <input type="file" style="display: none" v-on:change="changedImg" ref="img_small" accept="image/*">
                                                                                <div class="card grey lighten-4 card-2" style="cursor:pointer;">
                                                                                    <span @click="openFileDialog(1)">
                                                                                        <i class="material-icons center-align i-2" style="margin-top:2vh;width:100%">add_a_photo</i>
                                                                                        <p class="p-1 center-align blue-grey-text text-darken-4">Şəkil əlavə edin</p>
                                                                                    </span>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <div class="row">
                                                                <div class="container">
                                                                    <div class="col s12 m6 l6">
                                                                        <label for="name">Mehsul haqqinda</label>
                                                                        <input class="validate" required="" aria-required="true" id="name" name="name" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
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


@section('application_javascript')
    {{--multiple image upload--}}
        <script type="text/javascript">
            let img_section = new Vue({
                el: "#product-add-form",
                data: {
                    files: {
                        main:  { url : null, file : null},
                        small: []
                    }
                },
                methods: {
                    openFileDialog: function (id) {
                        this.$refs.img_small.click();
                    },
                    changedImg: function (event) {
                        const fr = new FileReader();
                        let that = this;
                        fr.onload = (res) => {
                            let k = that.files.small.push({ url : res.target.result, file : event.target.files[0], loading : 0 });
                            console.log("index push " + k);
                            that.upload({ file : (new FormData).append('file', event.target.files[0]) },
                                (response) => {
                                console.log(response);
                            }, (progress) => {
                                console.log(progress);
                            });

                        };
                        fr.readAsDataURL(event.target.files[0]);
                    },
                    has: function () {
                        return this.files.main.url !== null && this.files.main.url.length > 0;
                    },
                    remove: function (id) {
                        this.files.small.splice(id,1);
                    },
                    rmMain(){
                        this.files.main = { url : null, file : null};
                        return true;
                    },
                    changedImgMain(event)
                    {
                        let that = this;
                        this.readUrl(event.target.files[0], (result) => {
                            that.files.main.url = result;
                            let form = new FormData();
                            form.append('file', event.target.files[0]);
                            let uploaded = { file : form  };
                            that.upload(uploaded,
                                (response) => {
                                    console.log(response);
                                }, (progress) => {
                                    console.log(progress);
                                });
                        });
                    },
                    readUrl (data, callback){
                        const fr = new FileReader();
                        fr.addEventListener('load', function (event) {
                            callback(event.target.result);
                        });
                        fr.readAsDataURL(data);
                        return fr;
                    },
                    openMainDialog(){
                        this.$refs.img_main.click();
                    },


                    upload(data, onResponseCallback, onProgressCallback, onError)
                    {
                        axios.post("{{ route("create.temp.image") }}", data, {
                            onUploadProgress : (pEvent) => {
                                onProgressCallback(parseInt( Math.round( ( pEvent.loaded / pEvent.total ) * 100 )));
                            }
                        }).then((response) => {
                            let status = response.status;
                            if(status === 200 ){
                                let data = response.data;
                                if(data.status === 'ok')
                                {
                                    onResponseCallback(data.hash_code);
                                }
                            }
                        }).catch((error) => {
                            onError(error);
                        });

                    },


                }
            });



        </script>
    {{--multiple image upload end--}}
@endsection
