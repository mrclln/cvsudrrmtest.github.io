@extends('layouts.app')
@section('page-css')
    <link rel="stylesheet" href="css/demos/demo-landing.css">
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-landing.css">
@endsection
@section('content')
<div class="container post-head">
    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
        data-appear-animation-delay="250" data-appear-animation-duration="750">
        <div class="col-lg-8 offset-lg-2 text-center">
            <div class="col-sm-12">
                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                    data-appear-animation="fadeInUpShorter">MITIGATION & PREPAREDNESS</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid position-relative">
    <div class="py-4 bg-light left-0 z-index-4 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
        <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.new', 'useHash': false}">
                <li id="eqli"  class="nav-item active" ><a id="eqlink" onclick="changediv(1)"class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-1000">Earthquake</a></li>
                <li id="fili"class="nav-item" ><a id="firelink"  onclick="changediv(2)" class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Fire</a></li>
                <li id="flli" class="nav-item"><a id="floodlink" onclick="changediv(3)" class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Flood</a></li>
                <li id="vlli"class="nav-item" ><a id="volcaniclink" onclick="changediv(4)" class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Volcanic Eruption</a></li>

            </ul>
        </div>
    </div>

                <div class="col-sm-12 col-md-12 col-lg-12   earthquake " id="earthquake">
                            <section class="section section-light section-no-border pb-0 m-0">
                                <div class="container">
                                    <div class="col-sm-12">
                                        <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorter">EARTHQUAKE</h2>
                                    </div>
                                    <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                        <div class="col-lg-6  text-center appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                            <p class="text-4">Avoid hazards and mitigate their potential impacts by reducing
                                                vulnerabilities and exposure of school to all hazards and establish and strengthen
                                                capacities of school to anticipate, cope and recover from the negative impacts of
                                                emergency occurrences and disasters.</p>
                                        </div>
                                        <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                            data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                            <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="500">
                                                <video id="presentation" class="lazyload img-fluid border-width-2 border-color-light clearfix border border-radius" width="100%" height="100%"
                                                    controls="" muted="no" loop="" playsinline loop preload="metadata"
                                                    poster="video/presentation.jpg" data-auto-play="true">
                                                    <source src="video/presentation.webm" type="video/webm">
                                                    <source src="{{ asset('storage/uploads/videos/CVSUDRRMEarthquake.mp4') }}"
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-no-border section-angled  p-0 mb-5" style="background-repeat: no-repeat; background-color: #0b9440 !important;" >
                                <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 2rem 0; background-color: #ffffff;"></div>

                                <div class="spacer py-md-4 my-md-5"></div>
                                <div class="container pt-5">

                                    <div class="row align-items-center ">
                                        <div class="col-lg-6 offset-lg-1 position-relative mb-5">
                                            <div class="appear-animation" data-appear-animation="fadeIn"
                                                data-appear-animation-delay="300">
                                                <img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154"
                                                    height="146" class="lazyload position-absolute top-auto" alt="6 reasons"
                                                    data-plugin-float-element
                                                    data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}"
                                                    style="bottom: 184px; left: 70px;">
                                            </div>
                                            <div class="text-reasons">
                                                <label class="text-color-light appear-animation z-index-1"
                                                    data-appear-animation="blurIn" data-appear-animation-delay="250"
                                                    data-appear-animation-duration="750">3</label>
                                                <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                                    data-appear-animation-duration="750">tips on</h3>
                                                <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                                    data-appear-animation-duration="750">what to do before an</h3>
                                                <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                                    data-appear-animation-duration="750"><span
                                                        class="highlight-word light">EARTHQUAKE</span></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                            <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                                data-appear-animation-duration="750"><span
                                                    class="alternative-font text-3 text-color-light">When the <span
                                                        class="alternative-font text-warning text-weight-bold">Earthquake </span>
                                                    comes, are you prepared?</span></h2>
                                            <p class="text-color-light line-height-5 appear-animation"
                                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                                data-appear-animation-duration="750">It is best to be prepared and ready for all
                                                eventualities, because no one can predict when earthquakes will happen. Schools
                                                cannot be closed in advance due to earthquakes; neither can we suspend classes, like
                                                we do when there’s a storm warning. However, with proper training and advance
                                                planning, everyone in our school community can be prepared to react appropriately
                                                during and after the occurrence of an earthquake.</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                        <div class="col-lg-11">
                                            <div class="row justify-content-center col-lg">
                                                <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"
                                                    data-appear-animation-duration="750">
                                                    <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                        src="img/lazy.png"
                                                        data-src="{{ asset('storage/uploads/pages/mitigation/earthquake/1.png') }}">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span
                                                            class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                        <h4
                                                            class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                            <small
                                                                class="font-weight-semibold positive-ls-2 line-height-1">FAMILIARIZE</small>Duck/Drop,
                                                            Cover and Hold
                                                        </h4>
                                                    </div>
                                                    <p class="pe-5 custom-text-color-1 text-start">Duck down to the floor, take
                                                        cover under a sturdy table or desk, and hold on until the shaking stops.
                                                        Remember: Avoid danger spots near windows, hanging objects, mirrors, or tall
                                                        furniture.</p>
                                                </div>
                                                <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350"
                                                    data-appear-animation-duration="750">
                                                    <img class="lazyload img-fluid" alt="Secure" src="img/lazy.png"
                                                        data-src="{{ asset('storage/uploads/pages/mitigation/earthquake/2.png') }}">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span
                                                            class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                        <h4
                                                            class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                            <small
                                                                class="font-weight-semibold positive-ls-2 line-height-1">SECURE</small>Furniture
                                                            and Materials
                                                        </h4>
                                                    </div>
                                                    <p class="pe-5 custom-text-color-1 text-start">If you are an occupant of a room,
                                                        secure furniture and materials that can injure people.
                                                    </p>
                                                </div>
                                                <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                                                    data-appear-animation-duration="750">
                                                    <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                        data-src="{{ asset('storage/uploads/pages/mitigation/earthquake/3.png') }}">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span
                                                            class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                        <h4
                                                            class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                            <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                                FAMILIAR</small>With the Safezones
                                                        </h4>
                                                    </div>
                                                    <p class="pe-5 custom-text-color-1 text-start">Be familiar with the places where
                                                        you can take over, exit routes and assigned assembly area.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                </div>

                <div  class="col-sm-12 col-md-12 col-lg-12 " id="fire">
                    <section class="section section-no-border section-light pb-0 m-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">FIRE OUTBREAK</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Avoid hazards and mitigate their potential impacts by reducing
                                        vulnerabilities and exposure of school to all hazards and establish and strengthen
                                        capacities of school to anticipate, cope and recover from the negative impacts of
                                        emergency occurrences and disasters.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">
                                        <video class="lazyload img-fluid" width="100%" height="100%" controls="" muted=""
                                            loop="" preload="metadata">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/CVSUDRRMFIRE.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border section-angled  pb-0 mb-5"
                        style="background-repeat: no-repeat; background-color: #0b9440 !important;"
                        data-src="img/landing/reason_bg.png">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 2rem 0; background-color: #ffffff;"></div>

                        <div class="spacer py-md-4 my-md-5"></div>
                        <div class="container pt-5 mt-5">

                            <div class="row align-items-center ">
                                <div class="col-lg-6 offset-lg-1 position-relative mb-5">
                                    <div class="appear-animation" data-appear-animation="fadeIn"
                                        data-appear-animation-delay="300">
                                        <img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154"
                                            height="146" class="lazyload position-absolute top-auto" alt="6 reasons"
                                            data-plugin-float-element
                                            data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}"
                                            style="bottom: 184px; left: 70px;">
                                    </div>
                                    <div class="text-reasons">
                                        <label class="text-color-light appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">6</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do before a</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                            data-appear-animation-duration="750"><span class="highlight-word light">FIRE
                                                OUTBREAK</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                    <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                        data-appear-animation-duration="750"><span
                                            class="alternative-font text-3 text-color-light">When the <span
                                                class="alternative-font text-warning text-weight-bold">Fire</span> accident
                                            comes, are you prepared?</span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">The most important take away when protecting
                                        your facility is to be prepared for any type of emergency and training all staff to
                                        be empowered in a situation and know what steps need to be taken to protect
                                        students.

                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center text-start">
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="PASS" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/fire/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0 text-start">
                                                    <small
                                                        class="font-weight-semibold positive-ls-2 line-height-1">FAMILIARIZE</small>P.A.S.S.
                                                </h4>
                                            </div>
                                            <ul class="pe-5 custom-text-color-1 text-start">
                                                <li classs="text-left">Pull the pin.</li>
                                                <li classs="text-left">Aim the base of the fire.</li>
                                                <li classs="text-left">Squeeze the lever.</li>
                                                <li classs="text-left">Sweep side to side.</li>
                                            </ul>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Secure" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/fire/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small
                                                        class="font-weight-semibold positive-ls-2 line-height-1">FAMILIARIZE</small>STOP,
                                                    DROP, ROLL
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1 text-start">If your clothes catch fire,
                                                stop, drop and roll. Stop, drop to the ground, and cover your face with your
                                                hands. Roll over and over or back and forth until the fire is out.
                                            </p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/fire/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                        FAMILIAR WITH</small>the EXITS
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1 text-start">Identify the two (2) closest
                                                exits and all possible evacuation routes.</p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/fire/4.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">LOCATE
                                                        THE</small>FIRE ALARMS
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1 text-start"> Make sure to know the locations
                                                of fire alarms and how to use them.</p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1010"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/fire/5.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">CHECK
                                                        THE</small>FIRE EXITS
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1 text-start"> Make sure that the fire exit is
                                                not blocked.</p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1020"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/fire/6.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">6</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                        FAMILIARIZE WITH</small>THE REGROUP POINT
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1 text-start">Familiarize the location where
                                                the students, teachers and staff, know to meet once they exit the building.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 " id="flood">
                    <section class="section section-no-border section-light pb-0 m-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">FLOOD</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Avoid hazards and mitigate their potential impacts by
                                        reducing vulnerabilities and exposure of school to all hazards and establish and
                                        strengthen capacities of school to anticipate, cope and recover from the negative
                                        impacts of emergency occurrences and disasters.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">
                                        <video class="lazyload img-fluid" width="100%" height="100%" controls="" muted=""
                                            loop="" preload="metadata">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/CVSUDRRMFLOOD.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border section-angled  pb-0 mb-5"
                        style="background-repeat: no-repeat; background-color: #0b9440 !important;"
                        data-src="img/landing/reason_bg.png">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 2rem 0; background-color: #ffffff;"></div>

                        <div class="spacer py-md-4 my-md-5"></div>
                        <div class="container pt-5 mt-5">

                            <div class="row align-items-center ">
                                <div class="col-lg-6 offset-lg-1 position-relative mb-5">
                                    <div class="appear-animation" data-appear-animation="fadeIn"
                                        data-appear-animation-delay="300">
                                        <img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154"
                                            height="146" class="lazyload position-absolute top-auto" alt="6 reasons"
                                            data-plugin-float-element
                                            data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}"
                                            style="bottom: 184px; left: 70px;">
                                    </div>
                                    <div class="text-reasons">
                                        <label class="text-color-light appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">2</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips that</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">can help you prepared</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                            data-appear-animation-duration="750"><span class="highlight-word light">when
                                                typhoon/flood happens</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                    <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                        data-appear-animation-duration="750"><span class="text-2 text-color-light">PREPARE
                                            NOW!</span><span class="alternative-font text-3 text-color-light"> Know the
                                            type of <span class="alternative-font text-warning text-weight-bold"> Flood
                                                Risks</span> in your area</span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">Floods can sometimes be predictable. So, how
                                        can you protect your school or municipality from flood damage? Schools should
                                        certainly take precautions and measures to address these types of situations, but
                                        natural disasters are also common and should be taken very seriously.

                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center text-start">
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="PASS" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/flood/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">PREPARE
                                                    </small>your EMERGENCY supplies
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1">
                                                Prepare your emergency supplies such as flashlights/candles, battery-powered
                                                radio, food, water, batteries.

                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Secure" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/flood/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                        INFORMED</small>of STORM WARNING
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1">Be informed of the Public Storm Warning
                                                Signal, rainfall and flood advisories.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 " id="volcanic">
                    <section class="section section-no-border section-light pb-0 mb-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">VOLCANIC ERUPTION</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Avoid hazards and mitigate their potential impacts by
                                        reducing vulnerabilities and exposure of school to all hazards and establish and
                                        strengthen capacities of school to anticipate, cope and recover from the negative
                                        impacts of emergency occurrences and disasters.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">
                                        <video class="lazyload img-fluid" width="100%" height="100%" controls="" muted=""
                                            loop="" preload="metadata">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/CVSUDRRMVOLCANIC.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border section-angled  pb-0 mb-5"
                        style="background-repeat: no-repeat; background-color: #0b9440 !important;"
                        data-src="img/landing/reason_bg.png">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 2rem 0; background-color: #ffffff;"></div>

                        <div class="spacer py-md-4 my-md-5"></div>
                        <div class="container pt-5 mt-5">

                            <div class="row align-items-center ">
                                <div class="col-lg-6 offset-lg-1 position-relative mb-5">
                                    <div class="appear-animation" data-appear-animation="fadeIn"
                                        data-appear-animation-delay="300">
                                        <img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154"
                                            height="146" class="lazyload position-absolute top-auto" alt="6 reasons"
                                            data-plugin-float-element
                                            data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}"
                                            style="bottom: 184px; left: 70px;">
                                    </div>
                                    <div class="text-reasons">
                                        <label class="text-color-light appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">5</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do before a</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                            data-appear-animation-duration="750"><span
                                                class="highlight-word light">Volcanic Eruption</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                    <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                        data-appear-animation-duration="750"><span
                                            class="alternative-font text-3 text-color-light">When the <span
                                                class="alternative-font text-warning text-weight-bold">Volcanic
                                                Eruption</span> comes, are you prepared?</span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">A Volcanic eruptions may be subtle or explosive
                                        and can produce dangerous lava flows, poisonous gases, and flying rocks and ash.
                                        Many volcanic eruptions are also accompanied by other natural hazards, such as
                                        earthquakes, landslides, debris flows, flash floods, fires and tsunamis. If you live
                                        near a volcano, active or dormant, be prepared to act on short notice. Schools
                                        should certainly take precautions and measures to address these types of situations.

                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center text-start">
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="PASS" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/volcanic/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                        PREPARED</small>either to SHELTER or to EVACUATE
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1">Be prepared either to shelter or to
                                                evacuate. Stay informed about your school and community risk and response
                                                plans.
                                            </p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Secure" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/volcanic/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                        INFORMED</small>of UPDATES
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1">Listen to local radio, TV or log on to
                                                Emergency web page for information.
                                            </p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/volcanic/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small class="font-weight-semibold positive-ls-2 line-height-1">BE
                                                        ALERT</small>prepare your THINGS
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1">Bring your very important valuables and
                                                immediately evacuate if told to do so.</p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/volcanic/4.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small
                                                        class="font-weight-semibold positive-ls-2 line-height-1">LOCATE</small>the
                                                    SHELTERS
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1"> Proceed to the temporary shelter provided
                                                by the emergency rescuers in case there is no safe shelter available.</p>
                                        </div>
                                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Safezones" src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/mitigation/volcanic/5.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-warning font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                                <h4
                                                    class="text-color-light d-flex flex-column font-weight-bold text-5 mb-0">
                                                    <small
                                                        class="font-weight-semibold positive-ls-2 line-height-1">PREPARE</small>an
                                                    EMERGENCY SUPPLY KIT
                                                </h4>
                                            </div>
                                            <p class="pe-5 custom-text-color-1"> If you haven’t already done so, put
                                                together an emergency supply kit.</p>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <section class="section section-height-3 bg-warning mb-5 border-0">
                                <div class="container">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                                            <h2 class="text-color-light font-weight-normal text-6 mb-2"><strong
                                                    class="font-weight-extra-bold">EMERGENCY SUPPLY KIT</strong></h2>
                                            <p class="lead text-color-light ">Supplies should include the following:</p>
                                            <ul class="text-start text-2 text-color-light">
                                                <li>Flashlight and extra batteries.</li>
                                                <li>First aid kit and manual.</li>
                                                <li>Emergency food and water.</li>
                                                <li>Manual (nonelectric) can opener.</li>
                                                <li>Essential medicines.</li>
                                                <li>Sturdy shoes.</li>
                                                <li>Respiratory (breathing) protection.</li>
                                                <li>Eye protection (goggles).</li>
                                                <li>Battery-powered radio.</li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5"
                                            style="top: 1.7rem;">
                                            <img src="{{ asset('storage/uploads/pages/mitigation/volcanic/8.png') }}"
                                                class="img-fluid position-absolute d-none d-sm-block border-1 appear-animation"
                                                data-appear-animation="expandIn" data-appear-animation-delay="300"
                                                style="top: 10%; left: -50%;" alt="" />
                                            <img src="{{ asset('storage/uploads/pages/mitigation/volcanic/7.png') }}"
                                                class="img-fluid position-absolute d-none d-sm-block  border-1 appear-animation"
                                                data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                                            <img src="{{ asset('storage/uploads/pages/mitigation/volcanic/6.png') }}"
                                                class="img-fluid position-relative appear-animation  border-1 mb-2"
                                                data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </section>



                        </div>
                    </section>
                </div>
</div>



@endsection

@section('page-script')
<script>
$(document).ready(function(){ $('#earthquake').show();
$('#fire').hide();
$('#flood').hide();
$('#volcanic').hide();
        });
    function changediv(x){
        if(x==1){
            $('#fire').fadeOut("fast",function(){});
            $('#earthquake').fadeIn("slow",function(){});
            $('#flood').fadeOut("fast",function(){});
            $('#volcanic').fadeOut("fast",function(){});
            document.getElementById("eqli").classList.add("active");
            document.getElementById("fili").classList.remove("active");
            document.getElementById("flli").classList.remove("active");
            document.getElementById("vlli").classList.remove("active");
            $('html, body').animate({
        scrollTop: $(".post-head").offset().top
    }, 1000);
        }
        else if(x==2){
            $('#fire').fadeIn("slow",function(){});
            $('#earthquake').fadeOut("fast",function(){});
            $('#flood').fadeOut("fast",function(){});
            $('#volcanic').fadeOut("fast",function(){});
            document.getElementById("eqli").classList.remove("active");
            document.getElementById("fili").classList.add("active");
            document.getElementById("flli").classList.remove("active");
            document.getElementById("vlli").classList.remove("active");
            $('html, body').animate({
        scrollTop: $(".post-head").offset().top
    }, 1000);

        }
        else if(x==3){
            $('#fire').fadeOut("fast",function(){});
            $('#earthquake').fadeOut("fast",function(){});
            $('#flood').fadeIn("slow",function(){});
            $('#volcanic').fadeOut("fast",function(){});
            document.getElementById("eqli").classList.remove("active");
            document.getElementById("fili").classList.remove("active");
            document.getElementById("flli").classList.add("active");
            document.getElementById("vlli").classList.remove("active");
            $('html, body').animate({
        scrollTop: $(".post-head").offset().top
    }, 1000);

        }
        else if(x==4){
            $('#fire').fadeOut("fast",function(){});
            $('#earthquake').fadeOut("fast",function(){});
            $('#flood').fadeOut("fast",function(){});
            $('#volcanic').fadeIn("slow",function(){});
            document.getElementById("eqli").classList.remove("active");
            document.getElementById("fili").classList.remove("active");
            document.getElementById("flli").classList.remove("active");
            document.getElementById("vlli").classList.add("active");
            $('html, body').animate({
        scrollTop: $(".post-head").offset().top
    }, 1000);
        }
    }
    </script>
@endsection
