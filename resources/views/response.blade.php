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
                            data-appear-animation="fadeInUpShorter">RESPONSE AND RECOVERY</h2>
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
                    <section class="section section-light section-no-border  pb-0 m-0">
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
                    <section class="section section-no-border bg-warning   section-angled section-funnel p-0 mb-0 "
                            style="background-repeat: no-repeat;">
                            <div class="section-angled-layer-top section-angled-layer-increase-angle"
                                style="padding: 2rem 0; background-color: #ffffff;"></div>

                            <div class="spacer py-md-4 my-md-5"></div>
                            <div class="container pt-5 mt-5 mb-10">

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
                                <div class="row justify-content-center mt-md-10 mb-4 pt-lg-4">
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
                                <div class="row z-index-1 col-12 container pt-5 pb-5 text-light">dasdlasd</div>


                            </div>
                            <div class="section-funnel-layer-bottom">
                                <div class="section-funnel-layer bg-light"></div>
                                <div class="section-funnel-layer bg-light"></div>
                            </div>
                        </section>
                        <section  class="section section-no-border section-light position-relative z-index-3 pt-0 m-0 mb-5">
                            <div class="container">
                                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
                                    <div class="col-lg-8 offset-lg-2 text-center">
                                        <p class="d-flex align-items-center justify-content-center font-weight-bold text-primary text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class=" alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3">8</span>to-dos after an EARTHQUAKE</p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row process process-shapes process-shapes-hover-animate my-5">
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">01</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">First Step</h4>
                                                <p class="mb-0">After the shaking stops, evacuate to the designated evacuation assembly area for the building you are in.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">02</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Second Step</h4>
                                                <p class="mb-0">Take your emergency supplies, car keys, purse and/or wallet with you. You may not be able to re-enter the building.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">03</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Third Step</h4>
                                                <p class="mb-0">Report serious injuries, fires or other hazards to the any of the ALERRT members at your assigned Assembly Area.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">04</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Fourth Step</h4>
                                                <p class="mb-0">Do not re-enter buildings until the ALERRT Commander or First Responder has given clearance to return.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">05</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Fifth Step</h4>
                                                <p class="mb-0">Await instructions, be patient, and help others.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">06</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Sixth Step</h4>
                                                <p class="mb-0">Be prepared for aftershocks; these may occur seconds, minutes, hours or days after the initial shock.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">07</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Seventh Step</h4>
                                                <p class="mb-0"> Only activate the fire alarm if there is a fire in your building.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">08</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Eight Step</h4>
                                                <p class="mb-0">Stay on campus until you have been accounted for and instructed that it is safe to leave.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>

                <div  class="col-sm-12 col-md-12 col-lg-12 " id="fire">
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
                    <section class="section section-no-border bg-warning section-angled section-funnel  p-0 mb-0" style="background-repeat: no-repeat;">
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
                                        <label class="text-primary appear-animation z-index-1"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">3</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do during</h3>
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
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
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
                            <div class="row z-index-1 col-12 container pt-5 pb-5 text-light">dasdlasd</div>

                        </div>
                            <div class="section-funnel-layer-bottom">
                                <div class="section-funnel-layer bg-light"></div>
                                <div class="section-funnel-layer bg-light"></div>
                            </div>
                    </section>
                        <section  class="section section-no-border section-light position-relative z-index-3 pt-0 m-0 mb-5">
                            <div class="container">
                                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
                                    <div class="col-lg-8 offset-lg-2 text-center">
                                        <p class="d-flex align-items-center justify-content-center font-weight-bold text-primary text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class=" alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3">3</span>to-dos after the Typhoon or Flood</p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row process process-shapes process-shapes-hover-animate my-5">
                                        <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">01</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">First Step</h4>
                                                <p class="mb-0">Be sure that all individuals who are injured – be if from burns, smoke inhalation, or injuries incurred while escaping – should be treated by a doctor.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">02</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Second Step</h4>
                                                <p class="mb-0">Do not return to the building until given the okay by the fire authorities. For minor fires, make sure that there is no damage to the structure of the home that could cause its collapse.</p>
                                            </div>
                                        </div>
                                        <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">03</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-5 font-weight-bold">Third Step</h4>
                                                <p class="mb-0">Throw away foods if they have signs of smoke damage or were touched by firefighting chemicals. These chemicals are very poisonous and cannot be safely washed off foods.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 " id="flood">
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
                    <section class="section section-no-border bg-warning section-angled section-funnel p-0 mb-0"
                        style="background-repeat: no-repeat;">
                        <div class="section-angled-layer-top section-angled-layer-increase-angle"
                            style="padding: 2rem 0; background-color: #ffffff;"></div>

                        <div class="spacer py-md-4 my-md-5"></div>
                        <div class="container pt-5 mt-5 mb-10">

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
                                            data-appear-animation-duration="750">what to do during</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                            data-appear-animation-duration="750"><span
                                                class="highlight-word light">FLOOD</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                    <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                        data-appear-animation-duration="750"><span
                                            class="alternative-font text-3 text-color-light">When the <span
                                                class="alternative-font text-danger text-weight-bold">Flood </span>
                                            occurs, <span class="alternative-font text-primary text-4">What should you
                                                do?</span> </span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">
                                        A Flood can develop slowly, over a period of several days, or it can develop within minutes, which is the case with Flash Floods. In genreal you should know the difference between a <i>watch</i> and a <i>warning</i>.
                                    </p>
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
                                                data-src="{{ asset('storage/uploads/pages/responses/flood/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                   DISSCONNECT APPLIANCES
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">If you need to evacuate, turn off utilities and disconnect electrical appliances.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/flood/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    TAKE SHELTER!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Take shelter to avoid injury due to flying debris, strong winds, strong currents rising floodwater, exposed electrical wiring (especially in flooded areas).</p>
                                        </div>
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/flood/3.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    BE CAREFUL
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Avoid walking in floodwater. If you have no other option, disinfect yourself as soon as possible. If you have an open wound, seek medical attention immediately.</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row z-index-1 col-12 container pt-5 pb-5 text-light">dasdlasd</div>

                        </div>

                        <div class="section-funnel-layer-bottom">
                            <div class="section-funnel-layer bg-light"></div>
                            <div class="section-funnel-layer bg-light"></div>
                        </div>


                    </section>
                    <section  class="section section-no-border section-light position-relative z-index-3 pt-0 m-0 mb-5">
                        <div class="container">
                            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
                                <div class="col-lg-8 offset-lg-2 text-center">
                                    <p class="d-flex align-items-center justify-content-center font-weight-bold text-primary text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class=" alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3">4</span>to-dos after the Typhoon or Flood</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row process process-shapes process-shapes-hover-animate my-5">
                                    <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">01</strong>
                                        </div>
                                        <div class="process-step-content">
                                            <h4 class="mb-1 text-5 font-weight-bold">First Step</h4>
                                            <p class="mb-0">Stay out of any building, if it is surrounded by floodwaters.</p>
                                        </div>
                                    </div>
                                    <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">02</strong>
                                        </div>
                                        <div class="process-step-content">
                                            <h4 class="mb-1 text-5 font-weight-bold">Second Step</h4>
                                            <p class="mb-0">Avoid floodwaters; water may be contaminated by oil, gasoline, or raw sewage. Water may also be electrically charged from underground or downed power lines.</p>
                                        </div>
                                    </div>
                                    <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">03</strong>
                                        </div>
                                        <div class="process-step-content">
                                            <h4 class="mb-1 text-5 font-weight-bold">Third Step</h4>
                                            <p class="mb-0">Use extreme caution when entering buildings, there may be hidden damage, particularly in foundations.</p>
                                        </div>
                                    </div>
                                    <div class="process-step col-lg-3 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">04</strong>
                                        </div>
                                        <div class="process-step-content">
                                            <h4 class="mb-1 text-5 font-weight-bold">Fourth Step</h4>
                                            <p class="mb-0">Clean and disinfect everything that got wet during the flood. Mud left from flood water can contain sewage and chemicals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 " id="volcanic">
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
                    <section class="section section-no-border bg-warning section-angled  p-0 mb-5"
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
                                            data-appear-animation-duration="750">4</label>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450"
                                            data-appear-animation-duration="750">tips on</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750"
                                            data-appear-animation-duration="750">what to do during a</h3>
                                        <h3 class="text-color-light text-4 text-md-6 appear-animation"
                                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950"
                                            data-appear-animation-duration="750"><span
                                                class="highlight-word light">VOLCANIC ERUPTION</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                                    <h2 class=" text-6 font-weight-bold line-height-2 mb-2 appear-animation "
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"
                                        data-appear-animation-duration="750"><span
                                            class="alternative-font text-3 text-color-light">When the <span
                                                class="alternative-font text-danger text-weight-bold">Volcanic eruption </span>
                                            occurs, <span class="alternative-font text-primary text-4">What should you
                                                do?</span> </span></h2>
                                    <p class="text-color-light line-height-5 appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350"
                                        data-appear-animation-duration="750">Follow any evacuation orders issued by authorities, and put your emergency plan into action. Although it may seem safe to stay at home and wait out an eruption,
                                        if you are in a hazard zone, doing so could be very dangerous.</p>
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
                                                data-src="{{ asset('storage/uploads/pages/responses/volcanic/1.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    CLOSE ALL
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start"> If indoors, close all window, doors, and dampers to keep volcanic ash from entering.</p>
                                        </div>

                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/volcanic/2.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    TAKE SHELTER
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">If You Are Outdoors, Seek shelter indoors if possible.</p>
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
                                                    NO TO RESTRICTED ZONES
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Stay out of designated restricted zones. Effects of a volcanic eruption can be experienced many miles from a volcano.</p>
                                        </div>
                                        {{-- second row --}}
                                        <div class="justify-content-center col-10 col-sm-6 col-lg-4 image-box appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">
                                            <img class="lazyload img-fluid" alt="Duck/Drop, Cover and Hold"
                                                src="img/lazy.png"
                                                data-src="{{ asset('storage/uploads/pages/responses/volcanic/4.png') }}">
                                            <div class="d-flex align-items-center mb-2">
                                                <span
                                                    class="text-primary font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                                <h4
                                                    class="text-primary d-flex flex-column font-weight-bold text-5 mb-0 mt-2">
                                                    KNOW WHERE TO GO!
                                                </h4>
                                            </div>
                                            <p class="pe-5 text-color-light text-start">Avoid low-lying areas, areas downwind of the volcano, and river valleys downstream of the volcano. Debris and ash will be carried by wind and gravity. Stay in areas where you will not be further exposed to volcanic eruption hazards. Trying to watch an erupting volcano up close is a deadly idea.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                $('#fire').fadeOut("slow",function(){});
                $('#earthquake').fadeIn("slow",function(){});
                $('#flood').fadeOut("slow",function(){});
                $('#volcanic').fadeOut("slow",function(){});
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
                $('#earthquake').fadeOut("slow",function(){});
                $('#flood').fadeOut("slow",function(){});
                $('#volcanic').fadeOut("slow",function(){});
                document.getElementById("eqli").classList.remove("active");
                document.getElementById("fili").classList.add("active");
                document.getElementById("flli").classList.remove("active");
                document.getElementById("vlli").classList.remove("active");
                $('html, body').animate({
            scrollTop: $(".post-head").offset().top
        }, 1000);

            }
            else if(x==3){
                $('#fire').fadeOut("slow",function(){});
                $('#earthquake').fadeOut("slow",function(){});
                $('#flood').fadeIn("slow",function(){});
                $('#volcanic').fadeOut("slow",function(){});
                document.getElementById("eqli").classList.remove("active");
                document.getElementById("fili").classList.remove("active");
                document.getElementById("flli").classList.add("active");
                document.getElementById("vlli").classList.remove("active");
                $('html, body').animate({
            scrollTop: $(".post-head").offset().top
        }, 1000);

            }
            else if(x==4){
                $('#fire').fadeOut("slow",function(){});
                $('#earthquake').fadeOut("slow",function(){});
                $('#flood').fadeOut("slow",function(){});
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
