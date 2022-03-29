@extends('layouts.app')
@section('page-css')
<link id="skinCSS" rel="stylesheet" href="css/skins/skin-corporate-9.css">
@endsection
@section('content')
<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','700px','550px','500px']" style="height: 700px;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            <!-- Carousel Slide 1 -->
            <div class="owl-item position-relative overflow-hidden overlay overlay-show overlay-op-2" style="background-image: url({{asset('storage/uploads/banners/124da12.jpg')}}); background-size: cover; background-position: center;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7">
                            <div class="d-flex flex-column align-items-center">
                                <h2 class="position-relative text-color-primary text-5 line-height-5 font-weight-semibold ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50">
                                        <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    <span class="position-relative text-color-light "> CAVITE STATE UNIVERSITY <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="img/slides/slide-dark-line.png" class="w-auto ms-4 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50">
                                        <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h2>
                                <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-1 text-center mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">DISASTER RISK REDUCTION MANAGEMENT </h1>
                                <p class="text-4-5 text-warning font-weight-extra-bold text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Check out our FAQs and updates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Slide 2 -->
            <div class="owl-item position-relative overlay overlay-show overlay-op-2" style="background-image: url({{asset('storage/uploads/banners/312asd.jpg')}}); background-size: cover; background-position: center;">
                <div class="container position-relative z-index-1 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7">
                            <div class="d-flex flex-column align-items-center">
                                <h2 class="text-color-dark font-weight-extra-bold text-10 text-md-12-13 line-height-1 text-center mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">PREPARE RESPOND RECOVER</h2>
                                <p class="text-4-5 text-color-dark  text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Always expect the unexpected</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev"></button>
        <button type="button" role="presentation" class="owl-next"></button>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>
{{--
<section class="section section-with-shape-divider border-0 py-0 m-0">
    <div class="shape-divider shape-divider-bottom z-index-3" style="height: 136px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
            <path d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z" fill="#ffffff"/>
        </svg>
    </div>
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-primary nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-8" style="background-image: url({{asset('storage/uploads/banners/312asd.jpg')}}); background-size: cover; background-position: center; height: 100vh;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">
                                    <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-normal px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        WE CREATE DESIGNS, WE ARE
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>
                                    <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 300, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">PORTO</h2>
                                    <p class="text-4 text-color-light font-weight-light text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best choice for your new website</p>
                                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-3 py-3 btn-px-5 mt-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-9 pt-5" style="background-image: url({{asset('storage/uploads/banners/124da12.jpg')}}); background-size: cover; background-position: center; height: 100vh;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7 text-center">
                                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                    <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-normal ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                            <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        HELLO, THIS IS
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                            <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>
                                    <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">PORTO HTML TEMPLATE</h1>
                                    <p class="text-4-5 text-color-light font-weight-light text-center mb-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Trusted by over 40,000 satisfied users.</p>
                                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-3 py-3 btn-px-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GET STARTED NOW <i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div>
</section> --}}

    <div class="container py-4 my-5">
        <div class="row justify-content-center text-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
            <div class="col-lg-10">
                <h2 class="font-weight-bold mb-3 mt-3">DISASTER RISK REDUCTION AND MANAGEMENT</h2>
                {{-- <p class="text-6 text-color-dark line-height-7 negative-ls-1 px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus blandit massa enim.</p> --}}
                <p class="opacity-9 text-4">The Cavite State University Disaster Risk Reduction and Management serves to make operational skills and capacities to implement policies,
                     strategies and coping capacities of the school to lessen the impacts of natural hazards and related environmental and technological disasters.
                      It comprises all forms of activities, including structural and non-structural measures to avoid (prevention) or to limit (mitigation and preparedness)
                       adverse effects of hazards and to respond and evacuate when the disaster comes and to take actions taken after
                       a disaster to restore or improve the pre-disaster living conditions of the stricken community while encouraging and facilitating necessary adjustments to reduce disaster risks (UNISDR,2009).</p>
            </div>
        </div>
        <div class="row featured-boxes featured-boxes-style-4">
            <div class="col-md-6 col-lg-3">
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="box-content px-4">
                        <img src="img/1.png" height="65px"width="65px" class=" icons text-12">
                        {{-- <i class="icon-featured icon-screen-tablet icons text-12"></i> --}}
                        <h4 class="font-weight-bold text-color-dark pb-1 mb-2">Earthquake</h4>
                        <p class="mb-0">An Earthquake is a sudden and violent shaking of the ground, sometimes causing great destruction, as a result of movements within the earth's crust or volcanic action.</p>
                    </div>
                </div>
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                    <div class="box-content px-4">
                    <a href="#" class="btn btn-outline btn-primary font-weight-bold text-1 px-4 btn-py-2">READ MORE</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                    <div class="box-content px-4">
                        {{-- <i class="icon-featured icon-layers icons text-12"></i> --}}
                        <img src="img/2.png" height="65px"width="65px">
                        <h4 class="font-weight-bold text-color-dark pb-1 mb-2">Fire</h4>
                        <p class="mb-4">A Fire is a combination of fuel (combustible substance), Oxygen and Heat, when under ideal conditions causes the combustible substance to ignite and burn. <font style="color:snow">to ignite and burn.</font></p>
                        <p style="color:snow"></p>
                    </div>
                </div>
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                    <div class="box-content px-4">
                    <a href="#" class="btn btn-outline btn-primary font-weight-bold text-1 px-4 btn-py-2">READ MORE</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                    <div class="box-content px-4">
                        {{-- <i class="icon-featured icon-magnifier icons text-12"></i> --}}
                        <img src="img/3.png" height="65px"width="65px">
                        <h4 class="font-weight-bold text-color-dark pb-1 mb-2">Flood</h4>
                        <p class="mb-0">Flooding is a temporary overflow of water onto land that is normally dry. Floods may: Result from rain, snow, coastal storms, storm surges, and overflows of dams and other water systems.</p>
                    </div>

                </div>
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                    <div class="box-content px-4">
                    <a href="#" class="btn btn-outline btn-primary font-weight-bold text-1 px-4 btn-py-2">READ MORE</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="box-content px-4">
                        {{-- <i class="icon-featured icon-screen-desktop icons text-12"></i> --}}
                        <img src="img/4.png" height="65px"width="65px">
                        <h4 class="font-weight-bold text-color-dark pb-1 mb-2">Volcanic Eruption</h4>
                        <p class="mb-0">Volcanic Eruption occurs when hot materials from the Earth's interior are thrown out of a volcano. Lava, rocks, dust, and gas. Eruptions can come from side branches or from the top of the volcano.</p>
                    </div>
                </div>
                <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                    <div class="box-content px-4">
                    <a href="#" class="btn btn-outline btn-primary font-weight-bold text-1 px-4 btn-py-2">READ MORE</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="section section-no-background section-height-4 border-0 pb-2 py-2 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row justify-content-center recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class=" col-md-3 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                    <div class="ratio ratio-4x3">
                                        <video width="100%" height="100%" controls="" muted="" loop="" preload="metadata" {{--poster="video/presentation.jpg" __idm_id__="417793"--}}>
                                              {{-- <source src="video/presentation.webm" type="video/webm"> --}}
                                              <source src="{{asset('storage/uploads/videos/CVSUDRRMEarthquake.mp4')}}" type="video/mp4">
                                        </video>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-color-primary text-2 mb-1">EARTHQUAKE</p>
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">When the earthquake comes, are you prepared?</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">It is best to be prepared and ready for all eventualities because no on. .</p>
                                <a  href="{{url('mit-and-prep')}}" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class=" col-md-3 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                    <div class="ratio ratio-4x3">
                                        <video width="100%" height="100%" controls="" muted="" loop="" preload="metadata" {{--poster="video/presentation.jpg" __idm_id__="417793"--}}>
                                              {{-- <source src="video/presentation.webm" type="video/webm"> --}}
                                              <source src="{{asset('storage/uploads/videos/CVSUDRRMFIRE.mp4')}}" type="video/mp4">
                                        </video>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-color-primary text-2 mb-1">FIRE OUTBREAK</p>
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Are you prepared, when there is a fire outbreak?</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">First, familiarize PASS, P-A-S-S. Pull the pin. Aim at the base of fire. Squ. .</p>
                                <a href="{{url('mit-and-prep')}}" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class=" col-md-3 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                    <div class="ratio ratio-4x3">
                                        <video width="100%" height="100%" controls="" muted="" loop="" preload="metadata" {{--poster="video/presentation.jpg" __idm_id__="417793"--}}>
                                              {{-- <source src="video/presentation.webm" type="video/webm"> --}}
                                              <source src="{{asset('storage/uploads/videos/CVSUDRRMFLOOD.mp4')}}" type="video/mp4">
                                        </video>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-color-primary text-2 mb-1">LOREM IPSUM DOLOR SIT</p>
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                <a href="{{url('mit-and-prep')}}" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class=" col-md-3 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                    <div class="ratio ratio-4x3">
                                        <video width="100%" height="100%" controls="" muted="" loop="" preload="metadata" {{--poster="video/presentation.jpg" __idm_id__="417793"--}}>
                                              {{-- <source src="video/presentation.webm" type="video/webm"> --}}
                                              <source src="{{asset('storage/uploads/videos/CVSUDRRMVOLCANIC.mp4')}}" type="video/mp4">
                                        </video>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-color-primary text-2 mb-1">LOREM IPSUM DOLOR SIT</p>
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
                                <a href="{{url('mit-and-prep')}}" class="read-more text-color-primary font-weight-semibold text-2">VIEW MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <div class="container">
        <div class="row py-4 my-5">
            <div class="col py-3">
                <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/1.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/2.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/3.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/4.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/5.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/6.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/7.png')}}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="{{asset('storage/uploads/minibanner/1.png')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="section bg-color-grey-scale-1 section-height-3 section-no-border section-center mb-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{asset('storage/uploads/quotespic/8audwa.png')}}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5">
                                            When we rebuild a house, we are rebuilding a home. When we recover from disaster, we are rebuilding lives and livelihoods.

                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="opacity-9 font-weight-extra-bold text-2">-Sri Mulyani Indrawati</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{asset('storage/uploads/quotespic/sad213.png')}}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5">
                                            We cannot stop natural disasters but we can arm ourselves with knowledge: so many lives wouldn't have to be lost if there was enough disaster preparedness.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="opacity-9 font-weight-extra-bold text-2">-Petra Nemcova</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{asset('storage/uploads/quotespic/2312aawq.png')}}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5">
                                            Disaster preparedness, whether it's in anticipation of potential wearher-related incidents or terrorist incidents require a skill set that in my mind someone has to be trained for,.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="opacity-9 font-weight-extra-bold text-2">-Bennie Thompson</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('page-script')


@endsection
