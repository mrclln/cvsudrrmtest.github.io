@extends('layouts.app')
@section('page-css')
    <link rel="stylesheet" href="css/demos/demo-landing.css">
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-landing.css">
@endsection
@section('content')
    <section id="demos" class="section section-no-border   section-light position-relative z-index-5 pt-0 m-0">
        <div class="container">
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="250" data-appear-animation-duration="750">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="col-sm-12">
                        <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter">RESPONSE AND RECOVERY</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid position-relative">
            <div class="py-4 bg-light left-0 z-index-3 w-100"
                data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400"
                    data-appear-animation-duration="750">
                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0"
                        data-sort-id="portfolio" data-option-key="filter"
                        data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.earthquake', 'useHash': false}">
                        <li class="nav-item active" data-option-value=".earthquake"><a id="earthquakepush"
                                class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0"
                                data-hash-offset-lg="-200">Earthquake</a></li>
                        <li class="nav-item" data-option-value=".fire"><a class="nav-link custom-nav-link"
                                href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Fire</a></li>
                        <li class="nav-item" data-option-value=".flood"><a class="nav-link custom-nav-link"
                                href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Flood</a></li>
                        <li class="nav-item" data-option-value=".volcanic"><a class="nav-link custom-nav-link"
                                href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Volcanic
                                Eruption</a></li>

                    </ul>
                </div>
            </div>
            <div class=" container-fluid row isotope portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4"
                data-sort-id="portfolio">


                <div id="eqisotope"class="col-lg-12 isotope-item earthquake">
                    <section class="section section-light section-no-border pb-0 m-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">EARTHQUAKE</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Establish and strengthen capacities of school to anticipate,
                                        cope and recover from the negative impacts of emergency occurrences and disasters
                                        and to restore and improve facilities,living conditions and organizational
                                        capacities of affected , and reduced disaster risks in accordance with the “building
                                        back better” principle.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">
                                        <video id="presentation"
                                            class="lazyload img-fluid border-width-2 border-color-light clearfix border border-radius"
                                            width="100%" height="100%" controls="" muted="no" loop="" playsinline loop
                                            preload="metadata" poster="video/presentation.jpg" data-auto-play="true">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/DRRMPART2.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border bg-warning section-angled  p-0 m-0"
                        style="background-repeat: no-repeat;">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle"
                            style="padding: 2rem 0; background-color: #ffffff;"></div>

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
                                        <label class="text-primary appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">6</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do during an</h3>
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
                                                class="alternative-font text-danger text-weight-bold">Earthquake </span>
                                            occurs, <span class="alternative-font text-primary text-4">What should you
                                                do?</span> </span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">Imagine this: you’re going about your daily
                                        business—working at the office, driving to the store, or walking in your
                                        neighborhood—when suddenly the ground beneath you starts moving. After the initial
                                        surprise, you realize: you’re in an earthquake.

                                        What should you do?</p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center">
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    DUCK!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">When you feel an earthquake, DUCK
                                                under a desk or study table.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    STAY CALM!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay calm! If you're indoors, stay
                                                inside. If you're outside, stay outside.</p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    COVER & HOLD
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">If you're indoors, COVER or crawl under heavy furniture (a desk or table) HOLD and stay inside until the shaking stops.</p>
                                        </div>
                                        {{-- second row --}}
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/4.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    KNOW WHERE TO GO!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">After the shaking stops, walk out calmly and proceed to assigned assembly area.
                                                Stay calm! If you're indoors, stay inside. If you're outside, stay outside.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/5.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    BE CAREFUL!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay away from windows, shelves and other danger areas. Watch out for falling debris.
                                                If you're outside the building, stay in an open area to avoid falling objects.
                                                </p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/6.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">6</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    STAY SAFE!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">
                                                Stay away from buildings (stuff might fall off the building or the building could fall on you).Stay safe and calmly proceed to the assigned assembly area</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <div class=" col-lg-12 isotope-item fire">
                    <section class="section section-light section-no-border pb-0 m-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">FIRE OUTBREAK</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Establish and strengthen capacities of school to anticipate,
                                        cope and recover from the negative impacts of emergency occurrences and disasters
                                        and to restore and improve facilities,living conditions and organizational
                                        capacities of affected , and reduced disaster risks in accordance with the “building
                                        back better” principle.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">

                                            <video class="lazyload img-fluid border-width-2 border-color-light clearfix border border-radius" width="100%" height="100%" controls="" muted=""
                                            loop="" preload="metadata">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/FirePart2.mp4') }}"
                                                type="video/mp4">

                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border bg-warning section-angled  p-0 m-0"
                        style="background-repeat: no-repeat;">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle"
                            style="padding: 2rem 0; background-color: #ffffff;"></div>

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
                                        <label class="text-primary appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">3</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do during an</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                            data-appear-animation-duration="750"><span
                                                class="highlight-word light">FIRE OUTBREAK</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                    <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                        data-appear-animation-duration="750"><span
                                            class="alternative-font text-3 text-color-light">When the <span
                                                class="alternative-font text-danger text-weight-bold">Fire Outbreak </span>
                                            occurs, <span class="alternative-font text-primary text-4">What should you
                                                do?</span> </span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">Fire safety is an important aspect of home and workplace safety. A fire can break out anywhere and at any time because of unexpected causes such as a power overload, a short circuit, a kitchen accident or a lightning strike.
                                        In the event of a fire, it is the responsibility of every individual to stay safe.

                                        What should you do?</p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center">
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/fire/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    R.A.C.E
                                                </h4>
                                            </div>
                                            <ul class="pe-5 text-start text-2 text-color-light">
                                                <li>Remove people from immediate danger. Hit the fire alarm.</li>
                                                <li>Alert others in the area. Call CvSU Security and give the following information:</li>
                                                        <ul class=" text-start text-2 text-color-light">
                                                           <li>Your name</li>
                                                           <li>Telephone number</li>
                                                           <li>Location of the fire (building, floor, room number, etc.)</li>
                                                           <li>Severity of fire</li>
                                                           <li>Indicate people or equipment present</li>
                                                           <li>Do not hang up until the dispatcher does</li>
                                                      </ul>
                                                <li>Contain the emergency, e.g., by closing (but not locking) the door.</li>
                                                <li>Evacuate or extinguish the fire if trained and it is safe to do so.</li>
                                            </ul>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/fire/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    P.A.S.S
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Use extinguishers on small fires (e.g., smaller than a trash can). Remember “PASS”</p>
                                            <ul class="pe-5 text-color-light text-start">
                                                <li classs="text-left">Pull the pin.</li>
                                                <li classs="text-left">Aim the base of the fire.</li>
                                                <li classs="text-left">Squeeze the lever.</li>
                                                <li classs="text-left">Sweep side to side.</li>
                                            </ul>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/fire/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    EVACUATE!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">On hearing the fire alarm: EVACUATE!</p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="col-lg-12 isotope-item flood">
                    <section class="section section-light section-no-border pb-0 m-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">FLOOD</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Establish and strengthen capacities of school to anticipate,
                                        cope and recover from the negative impacts of emergency occurrences and disasters
                                        and to restore and improve facilities,living conditions and organizational
                                        capacities of affected , and reduced disaster risks in accordance with the “building
                                        back better” principle.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">

                                        <video class="lazyload img-fluid border-width-2 border-color-light clearfix border border-radius" width="100%" height="100%" controls="" muted=""
                                        loop="" preload="metadata">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/DRRMPART2.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border bg-warning section-angled  p-0 m-0"
                        style="background-repeat: no-repeat;">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle"
                            style="padding: 2rem 0; background-color: #ffffff;"></div>

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
                                        <label class="text-primary appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">6</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do during an</h3>
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
                                                class="alternative-font text-danger text-weight-bold">Earthquake </span>
                                            occurs, <span class="alternative-font text-primary text-4">What should you
                                                do?</span> </span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">Imagine this: you’re going about your daily
                                        business—working at the office, driving to the store, or walking in your
                                        neighborhood—when suddenly the ground beneath you starts moving. After the initial
                                        surprise, you realize: you’re in an earthquake.

                                        What should you do?</p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center">
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    DUCK!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">When you feel an earthquake, DUCK
                                                under a desk or study table.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    STAY CALM!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay calm! If you're indoors, stay
                                                inside. If you're outside, stay outside.</p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    COVER & HOLD
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">If you're indoors, COVER or crawl under heavy furniture (a desk or table) HOLD and stay inside until the shaking stops.</p>
                                        </div>
                                        {{-- second row --}}
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/4.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    KNOW WHERE TO GO!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">After the shaking stops, walk out calmly and proceed to assigned assembly area.
                                                Stay calm! If you're indoors, stay inside. If you're outside, stay outside.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/5.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    BE CAREFUL!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay away from windows, shelves and other danger areas. Watch out for falling debris.
                                                If you're outside the building, stay in an open area to avoid falling objects.
                                                </p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/6.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">6</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    STAY SAFE!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">
                                                Stay away from buildings (stuff might fall off the building or the building could fall on you).Stay safe and calmly proceed to the assigned assembly area</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class=" col-lg-12 isotope-item volcanic">
                    <section class="section section-light section-no-border pb-0 m-0">
                        <div class="container">
                            <div class="col-sm-12">
                                <h2 class="font-weight-bold text-center text-color-primary text-10 pt-3 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter">VOLCANIC ERUPTION</h2>
                            </div>
                            <div class="row align-items-center justify-content-between col-12  m-0 p-0">
                                <div class="col-lg-6  text-center appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <p class="text-4">Establish and strengthen capacities of school to anticipate,
                                        cope and recover from the negative impacts of emergency occurrences and disasters
                                        and to restore and improve facilities,living conditions and organizational
                                        capacities of affected , and reduced disaster risks in accordance with the “building
                                        back better” principle.</p>
                                </div>
                                <div class=" col-lg-6 image-wrapper position-relative z-index-3 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                    data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                                    <div class=" mb-0 appear-animation" data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="500">

                                        <video class="lazyload img-fluid border-width-2 border-color-light clearfix border border-radius" width="100%" height="100%" controls="" muted=""
                                        loop="" preload="metadata">
                                            <source src="video/presentation.webm" type="video/webm">
                                            <source src="{{ asset('storage/uploads/videos/DRRMPART2.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-no-border bg-warning section-angled  p-0 m-0"
                        style="background-repeat: no-repeat;">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle"
                            style="padding: 2rem 0; background-color: #ffffff;"></div>

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
                                        <label class="text-primary appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">6</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do during an</h3>
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
                                                class="alternative-font text-danger text-weight-bold">Earthquake </span>
                                            occurs, <span class="alternative-font text-primary text-4">What should you
                                                do?</span> </span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">Imagine this: you’re going about your daily
                                        business—working at the office, driving to the store, or walking in your
                                        neighborhood—when suddenly the ground beneath you starts moving. After the initial
                                        surprise, you realize: you’re in an earthquake.

                                        What should you do?</p>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                                <div class="col-lg-11">
                                    <div class="row justify-content-center">
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    DUCK!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">When you feel an earthquake, DUCK
                                                under a desk or study table.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    STAY CALM!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay calm! If you're indoors, stay
                                                inside. If you're outside, stay outside.</p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    COVER & HOLD
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">If you're indoors, COVER or crawl under heavy furniture (a desk or table) HOLD and stay inside until the shaking stops.</p>
                                        </div>
                                        {{-- second row --}}
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/4.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    KNOW WHERE TO GO!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">After the shaking stops, walk out calmly and proceed to assigned assembly area.
                                                Stay calm! If you're indoors, stay inside. If you're outside, stay outside.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/5.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    BE CAREFUL!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay away from windows, shelves and other danger areas. Watch out for falling debris.
                                                If you're outside the building, stay in an open area to avoid falling objects.
                                                </p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/earthquake/6.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">6</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    STAY SAFE!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">
                                                Stay away from buildings (stuff might fall off the building or the building could fall on you).Stay safe and calmly proceed to the assigned assembly area</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>



            </div>
        </div>


    </section>
@endsection

@section('page-script')
{{-- <script>
    $(document).ready(function() {

        setTimeout(function(){ $('.isotope').isotope('layout')}, 2000);
});
</script> --}}
@endsection
