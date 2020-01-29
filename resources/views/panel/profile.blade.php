@extends("panel.app")


@section("title")
    User
@endsection


@section("view_meta_tags")

@endsection

@section("content")



    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

            <div class="col s12">
                <div class="container">
                    <div class="row user-profile mt-1">
                        <img class="responsive-img" alt="" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/profile-bg.png">
                    </div>
                    <div class="section" id="user-profile">
                        <div class="row">
                            <!-- User Profile Feed -->
                            <div class="col s12 m4 l3 user-section-negative-margin">
                                <div class="row">
                                    <div class="col s12 center-align">
                                        <img class="responsive-img circle z-depth-5" width="200" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/12.jpg" alt="">
                                        <br>
                                        <a class="waves-effect waves-light btn mt-5 border-radius-4"> Follow</a>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col s6">
                                        <h6>Maqaza sayı</h6>
                                        <h5 class="m-0"><a href="#">{{ $user->stores->count() }}</a></h5>
                                    </div>
                                    <div class="col s6">
                                        <h6>Satışlar</h6>
                                        <h5 class="m-0"><a href="#">130</a></h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col s12">
                                        <p class="m-0">Reyting</p>
                                        <p class="m-0"><a href="#">56</a> and <a href="#">42</a> reviews</p>
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
                            <div class="col s12 m8 l6" id="panel-cats" >
                                <div class="row">
                                    <div class="card user-card-negative-margin z-depth-0" id="feed">
                                        <div class="card-content card-border-gray">
                                            <div class="row">
                                                <div class="col s12">
                                                    <h5>{{ auth()->user()->name }}</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <ul class="tabs card-border-gray mt-4">
                                                        <li @click="open(1)" class="tab col m3 s6 p-0"><a :class="{ 'active' : tab === 0 }" href="#test1">
                                                                <i class="material-icons vertical-align-middle">crop_portrait</i> Info
                                                            </a>
                                                        </li>
                                                        <li @click="open(2)" class="tab col m3 s6 p-0"><a :class="{ 'active' : tab === 1 }" href="#test2">
                                                                <i class="material-icons vertical-align-middle">bookmark_border</i> Feed
                                                            </a>
                                                        </li>
                                                        <li @click="open(3)" class="tab col m3 s6 p-0"><a :class="{ 'active' : tab === 2 }" href="#test3">
                                                                <i class="material-icons vertical-align-middle">date_range</i> Agenda
                                                            </a>
                                                        </li>
                                                        <li @click="open(4)" class="tab col m3 s6 p-0"><a :class="{ 'active' : tab === 3 }" href="#test4">
                                                                <i class="material-icons vertical-align-middle">attach_file</i> Resume
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div v-if="tab == 0">
                                                @foreach([[] , [] , [ ] , [] ] as $timeline)
                                                <div class="row mt-5">
                                                    <div class="col s1 pr-0 circle">
                                                        <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/12.jpg" alt=""></a>
                                                    </div>
                                                    <div class="col s11">
                                                        <a href="#">
                                                            <p class="m-0">{{ auth()->user()->name }}    <span><i class="material-icons vertical-align-bottom">access_time</i>  5 gün əvvəl  </span></p>
                                                        </a>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="card card-border z-depth-2">
                                                                    {{--<div class="card-image">--}}
                                                                        {{-- <img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/post-1.png" alt=""> --}}
                                                                    {{--</div>--}}
                                                                    <div class="card-content">
                                                                        <h6 class="font-weight-900 text-uppercase"><a href="#">Designing Services</a></h6>
                                                                        <p>UI/UX & Graphics Design</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

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
                    </div>
                    <aside id="right-sidebar-nav">
                        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a href="#messages" class="active">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body">
                                    <div id="messages" class="col s12">
                                        <div class="collection border-none">
                                            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                                            <ul class="collection p-0">
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="settings" class="col s12">
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="activity" class="col s12">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Homepage mockup design <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                    <span class="new badge amber" data-badge-caption="Important"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                    <span class="new badge light-green" data-badge-caption="Resolved"></span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        12 new users registered <span class="secondary-content">30 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Tina is attending your activity <span class="secondary-content">2 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Josh is now following you <span class="secondary-content">5 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                    <span class="new badge red" data-badge-caption="Pending"></span>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        New order received urgent <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                    <span class="new badge blue" data-badge-caption="Urgent"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Database overloaded 89% <span class="secondary-content">20 min</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Production server down. <span class="secondary-content">1 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                    <span class="new badge blue" data-badge-caption="Urgent"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
                                    <div class="input-field">
                                        <input id="icon_prefix" type="text" class="search" />
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                        <ul>
                            <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                            <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                            <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                            <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a
        href="https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=PIXINVENT"
        target="_blank"
        class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
        data-position="left"
        data-tooltip="Buy Now!"
    >
        <i class="material-icons">add_shopping_cart</i></a>
@endsection
@section("application_javascript")
    <script>

        let panel_cats = new Vue({
            el: "#panel-cats",
            data : {
                tab :  0
            },
            methods : {
                open : function (id){
                    this.tab  = id -1;
                }
            }
        });

    </script>
@endsection
