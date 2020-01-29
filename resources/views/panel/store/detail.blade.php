@extends("panel.app")


@section("title")
    {{ $store->name }}  - {{ "Instangle" }}
@endsection


@section("view_meta_tags")

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
                            <h5 class="breadcrumbs-title mt-0 mb-0">User Profile Page</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">User</a>
                                </li>
                                <li class="breadcrumb-item active">User Profile Page
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="row user-profile mt-1">
                        <img class="responsive-img" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/profile-bg.png">
                    </div>
                    <div class="section" id="user-profile">
                        <div class="row">
                            <!-- User Profile Feed -->
                            <div class="col s12 m4 l3 user-section-negative-margin">
                                <div class="row"  id="profile-photo">
                                    <div class="col s12 center-align">
                                        <img   class="responsive-img circle z-depth-5" width="200" :src="url" alt="">
                                        <br>

                                        <input  type="file" ref="file" style="display: none;" @change="fileChanged">
                                        <a v-if="!loading" @click="$refs.file.click()" class="waves-effect waves-light btn mt-5 border-radius-4"> <i class="material-icons">photo </i></a>

                                        <div v-if="loading" class="progress">

                                            <div class="determinate" :style="{width: percent +'%'}"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col s6">
                                        <h6> Məhsul sayı </h6>
                                        <h5 class="m-0"><a href="#">{{ $store->goods->count() }}</a></h5>
                                    </div>
                                    <div class="col s6">
                                        <h6> Satışlar </h6>
                                        <h5 class="m-0"><a href="#">128</a></h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col s12">
                                        <p class="m-0">Performance</p>
                                        <p class="m-0"><a href="#">56</a> and <a href="#">42</a> reviews</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row user-projects">
                                    <h6 class="col s12">Projects</h6>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/35.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/36.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/37.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/38.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/39.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/40.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/41.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/42.png">
                                    </div>
                                    <div class="col s4">
                                        <img class="responsive-img photo-border mt-10" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/43.png">
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <div class="row">
                                    <div class="col s12">
                                        <h6>Boosts</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/1.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Micheal S. Castilleja</p>
                                        </a>
                                        <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span></p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/11.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Thomas A. Carranza</p>
                                        </a>
                                        <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span></p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/5.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Micheal Bryant</p>
                                        </a>
                                        <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span></p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle pb-2">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/8.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Wiley J. Bryant</p>
                                        </a>
                                        <p class="m-0 amber-text"><span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span> <span class="material-icons star-width">star_rate</span>
                                            <span class="material-icons star-width">star_rate</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- User Post Feed -->
                            <div class="col s12 m8 l6">
                                <div class="row">
                                    <div class="card user-card-negative-margin z-depth-0" id="feed">
                                        <div class="card-content card-border-gray">
                                            <div class="row">
                                                <div class="col s12">
                                                    <h5>{{ $store->name }}</h5>
                                                    <p>Senior Designer <span class="amber-text"><span class="material-icons star-width vertical-align-middle">star_rate</span>
                                                            <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span>
                                                            <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span></span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <ul class="tabs card-border-gray mt-4">
                                                        <li class="tab col m3 s6 p-0">
                                                            <a class="active" href="#common">
                                                                <i class="material-icons vertical-align-middle">crop_portrait</i>Əsas
                                                            </a>
                                                        </li>
                                                        <li class="tab col m3 s6 p-0">
                                                            <a  href="#test2">
                                                                <i class="material-icons vertical-align-middle">bookmark_border</i>İnstagram
                                                            </a>
                                                        </li>
                                                        <li class="tab col m3 s6 p-0">
                                                            <a href="#settings">
                                                                <i class="material-icons vertical-align-middle">date_range</i>Ayarlar
                                                            </a>
                                                        </li>
                                                        <li class="tab col m3 s6 p-0">
                                                            <a href="#test4">
                                                                <i class="material-icons vertical-align-middle">attach_file</i>Bildirişlər
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @include("panel.store.tabs.common" , compact("store"))

                                            @include("panel.store.tabs.settings")

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Today Highlight -->
                            <div class="col s12 m12 l3 hide-on-med-and-down">
                                <div class="row mt-5">
                                    <div class="col s12">
                                        <h6>Today Highlight</h6>
                                        <img class="responsive-img card-border z-depth-2 mt-2" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/post-3.png"
                                             alt="">
                                        <p><a href="#">Meeting with clients</a></p>
                                        <p>Crediting isn’t required, but is appreciated and allows photographers to gain exposure. Copy the text
                                            below or embed a credit badge</p>
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <div class="row">
                                    <div class="col s12">
                                        <h6>Who to follow</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/2.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Frank Goodman</p>
                                        </a>
                                        <p class="m-0 grey-text lighten-3">Senior architect</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/7.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Luiza Ales</p>
                                        </a>
                                        <p class="m-0 grey-text lighten-3">Senior Developer</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/4.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Robbin Drummo</p>
                                        </a>
                                        <p class="m-0 grey-text lighten-3">Graphic Designer</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col s2 mt-2 pr-0 circle">
                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/8.jpg" alt=""></a>
                                    </div>
                                    <div class="col s9">
                                        <a href="#">
                                            <p class="m-0">Myles Steven</p>
                                        </a>
                                        <p class="m-0 grey-text lighten-3">Senior Developer</p>
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <div class="row">
                                    <div class="col s12">
                                        <h6>Latest Updates</h6>
                                        <p class="latest-update">Make Metronic<span class="right"> <a href="#">+480</a> </span></p>
                                        <p class="latest-update">Programming Language <span class="right"> <a href="#">+12</a> </span></p>
                                        <p class="latest-update">Project completed <span class="right"> <a href="#">+570</a> </span></p>
                                        <p class="latest-update">New Customer <span class="right"><a href="#">+120</a> </span></p>
                                        <p class="latest-update">Annual Companies<span class="right"> <a href="#">+890</a> </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->


                </div>
            </div>
        </div>
    </div>



@endsection

@section("application_javascript")
{{-- Required data --}}
    <script>
        const store_id = "{{ $store->id }}";
    </script>

    @yield("settings_javascript")

{{-- Profil shekili --}}
    <script>

        let profilePhoto = new Vue({
            el: "#profile-photo",
            data: {
                url : "{{ asset("user/stores/img/400x400/{$store->image}") }}",
                percent : 0,
                loading : false
            },
            methods :{
                fileChanged : function (event){
                    let file = event.target.files[0];
                    this.loading = true;
                    this.send(file);
                },
                send  : function (file){
                    let form  = new FormData();
                    this.loading = true;
                    form.append("image" , file);
                    form.append("store_id" , store_id);
                    axios.post("{{ route("panel.user.store.change.photo") }}", form, {
                        onUploadProgress: event => {
                            let percent = Math.round(event.loaded / event.total * 100);
                            this.percent = percent;

                            console.log(  percent + " %" );
                        }
                    })
                        .then(response => {
                            let status = response.status;
                            let data = response.data;
                            if(status ===  200){
                                this.url = data.url;
                            }else if(status === 422){

                            }else if(status === 403){

                            }else {

                            }
                            this.loading = false;
                        }).catch(error => {
                            this.loading = false;
                        });

                }
            }
        });
    </script>

@endsection
