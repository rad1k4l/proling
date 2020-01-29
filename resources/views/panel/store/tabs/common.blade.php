


{{-- Start tab 1  #test1 --}}
<div id="common">
    <div class="row mt-5">

        <div class="col s11">

            <div class="row">

                <div class="col s6">
                    <div class=" waves-effect waves-light  accent-2 z-depth-4 card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                        <div class="card-content center">
                            <img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/icon/apple-watch.png" class="width-40 border-round z-depth-5" alt="">
                            <h5 class="white-text lighten-4">Məhsul əlavə et</h5>
                            <p class="white-text lighten-4"></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>


                <div class="col s6">
                    <div  class=" instagram waves-effect waves-light  accent-2 z-depth-4 card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                        <div class="card-content center">
                            <img src="{{ asset("user/stores/sys/instagram.png") }}" class="width-40 border-round z-depth-5" alt="">
                            <h5 class="white-text lighten-4">Instagram</h5>
                            <p class="white-text lighten-4">Məhsullarınızı İnstagramdan import et</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    @foreach([   ] as $st)
        <div class="row mt-5">
            <div class="col s1 pr-0 circle">
                <a href="#"><img class="responsive-img circle" src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/user/12.jpg" alt=""></a>
            </div>
            <div class="col s11">
                <a href="#">
                    <p class="m-0">Suzanne Martin <span><i class="material-icons vertical-align-bottom">access_time</i> 5 days</span></p>
                </a>
                <div class="row">
                    <div class="col s12">
                        <div class="card card-border z-depth-2">
                            <div class="card-image">
                                <img src="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/../../../app-assets/images/gallery/post-2.png" alt="">
                            </div>
                            <div class="card-content">
                                <h6 class="font-weight-900 text-uppercase"><a href="#">Australia office hours</a></h6>
                                <p>Working so hard</p>
                            </div>
                        </div>
                        <div class="social-icon">
                            <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                            15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div> {{-- end #test1 tab --}}
<style>
    /*.instagram{*/
        /*background: #d6249f;*/
        /*background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);*/
    /*}*/
</style>
