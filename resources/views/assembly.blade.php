@extends('layouts.app')
@section('page-css')
    <link rel="stylesheet" href="css/demos/demo-landing.css">
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-landing.css">
@endsection
@section('content')

<section id="demos" class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
    <div class="container">
        <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
            <div class="col-lg-8 offset-lg-2 text-center">
                <ul class="list list-unstyled d-flex justify-content-center text-primary font-weight-semibold positive-ls-2 flex-column flex-md-row text-4 mb-4">
                    <li>1. SELECT DEMO</li>
                    <li class="mx-5">2. CUSTOMIZE</li>
                    <li>3. DONE</li>
                </ul>
                <p class="text-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto is a truely complete template, with over 80 prebuilt websites that make it suitable for any type of website. We believe you will like Porto.</p>
                <p class="d-flex align-items-center justify-content-center font-weight-bold text-color-dark text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1-2-dark highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3">85+</span> Prebuilt Websites Ready to Use</p>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative">
        <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
            <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Show All</a></li>
                    <li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">NEW</a></li>
                    <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Classic</a></li>
                    <li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Shop</a></li>
                    <li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">One Page</a></li>
                    <li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Business</a></li>
                    <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Blog</a></li>
                    <li class="nav-item" data-option-value=".portfolio"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Portfolio</a></li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4" data-sort-id="portfolio">

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">

                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item onepage">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-one-page.jpg">
                                    <a href="index-one-page.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">One Page</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate.jpg">
                                    <a href="index-corporate.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 1</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-2.jpg">
                                    <a href="index-corporate-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-3.jpg">
                                    <a href="index-corporate-3.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 3</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-4.jpg">
                                    <a href="index-corporate-4.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 4</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-5.jpg">
                                    <a href="index-corporate-5.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 5</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-6.jpg">
                                    <a href="index-corporate-6.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 6</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-7.jpg">
                                    <a href="index-corporate-7.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 7</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-8.jpg">
                                    <a href="index-corporate-8.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 8</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-9.jpg">
                                    <a href="index-corporate-9.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 9</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-10.jpg">
                                    <a href="index-corporate-10.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 10</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-11.jpg">
                                    <a href="index-corporate-11.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 11</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-12.jpg">
                                    <a href="index-corporate-12.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 12</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-13.jpg">
                                    <a href="index-corporate-13.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 13</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-14.jpg">
                                    <a href="index-corporate-14.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 14</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-15.jpg">
                                    <a href="index-corporate-15.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 15</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-16.jpg">
                                    <a href="index-corporate-16.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 16</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-17.jpg">
                                    <a href="index-corporate-17.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 17</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-18.jpg">
                                    <a href="index-corporate-18.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 18</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-19.jpg">
                                    <a href="index-corporate-19.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 19</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-20.jpg">
                                    <a href="index-corporate-20.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 20</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-21.jpg">
                                    <a href="index-corporate-21.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Corporate 21</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-3.jpg">
                                    <a href="demo-business-consulting-3.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Business Consulting 3</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business new">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-4.jpg">
                                    <a href="demo-business-consulting-4.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Business Consulting 4</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business new">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-transportation-logistic.jpg">
                                    <a href="demo-transportation-logistic.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Transportation & Logistic</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business new">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-renewable-energy.jpg">
                                    <a href="demo-renewable-energy.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Renewable Energy</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-industry-factory.jpg">
                                    <a href="demo-industry-factory.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Industry Factory</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-startup-agency.jpg">
                                    <a href="demo-startup-agency.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Startup Agency</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-architecture-2.jpg">
                                    <a href="demo-architecture-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Architecture 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-auto-services.jpg">
                                    <a href="demo-auto-services.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Auto Services</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-law-firm-2.jpg">
                                    <a href="demo-law-firm-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Law Firm 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-insurance.jpg">
                                    <a href="demo-insurance.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Insurance</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-cleaning-services.jpg">
                                    <a href="demo-cleaning-services.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Cleaning Services</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-construction.jpg">
                                    <a href="demo-construction.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Construction</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-construction-2.jpg">
                                    <a href="demo-construction-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Construction 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting.jpg">
                                    <a href="demo-business-consulting.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Business Consulting</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-2.jpg">
                                    <a href="demo-business-consulting-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Business Consulting 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-medical.jpg">
                                    <a href="demo-medical.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Medical</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-medical-2.jpg">
                                    <a href="demo-medical-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Medical 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business new">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-dentist.jpg">
                                    <a href="demo-dentist.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Dentist</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-finance.jpg">
                                    <a href="demo-finance.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Finance</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-seo.jpg">
                                    <a href="demo-seo.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">SEO</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-seo-2.jpg">
                                    <a href="demo-seo-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">SEO 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-it-services.jpg">
                                    <a href="demo-it-services.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">IT Services</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item shop">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-product-landing.jpg">
                                    <a href="demo-product-landing.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Product Landing</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-coffee.jpg">
                                    <a href="demo-coffee.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Coffee Shop</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-sass.jpg">
                                    <a href="demo-sass.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">SASS</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-architecture-interior.jpg">
                                    <a href="demo-architecture-interior.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Architecture &amp; Interior Design</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business new">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-beauty-salon.jpg">
                                    <a href="demo-beauty-salon.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Beauty Salon</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-barber.jpg">
                                    <a href="demo-barber.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Barber Shop</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-education.jpg">
                                    <a href="demo-education.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Education</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency.jpg">
                                    <a href="demo-digital-agency.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Digital Agency</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency-2.jpg">
                                    <a href="demo-digital-agency-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Digital Agency 2 (Light)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency-2-dark.jpg">
                                    <a href="demo-digital-agency-2-dark.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Digital Agency 2 (Dark)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-app-landing.jpg">
                                    <a href="demo-app-landing.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">App Landing</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-law-firm.jpg">
                                    <a href="demo-law-firm.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Law Firm</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio creative z-index-1">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">

                            <div class="owl-carousel nav-dark show-nav-hover" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000, 'autoplayHoverPause': true}">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume.jpg">
                                        <a href="demo-resume.html"></a>
                                    </span>
                                </span>

                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-blue.jpg">
                                        <a href="demo-resume-blue.html"></a>
                                    </span>
                                </span>

                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-red.jpg">
                                        <a href="demo-resume-red.html"></a>
                                    </span>
                                </span>

                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-green.jpg">
                                        <a href="demo-resume-green.html"></a>
                                    </span>
                                </span>

                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-dark.jpg">
                                        <a href="demo-resume-dark.html"></a>
                                    </span>
                                </span>

                            </div>

                            <h5 class="text-color-dark text-capitalize mt-3">CV - Portfolio - Resume</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-hotel.jpg">
                                    <a href="demo-hotel.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Hotel</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-hotel-boxed.jpg">
                                    <a href="demo-hotel-boxed.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Hotel (Boxed)</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-real-estate.jpg">
                                    <a href="demo-real-estate.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Real Estate</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item creative business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-event.jpg">
                                    <a href="demo-event.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Event</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-restaurant.jpg">
                                    <a href="demo-restaurant.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Restaurant</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-gym.jpg">
                                    <a href="demo-gym.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Gym</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item onepage creative business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-band.jpg">
                                    <a href="demo-band.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Band</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item onepage creative">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-one-page-agency.jpg">
                                    <a href="demo-one-page-agency.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">One Page Agency</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography.jpg">
                                    <a href="demo-photography.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Photography</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography-2.jpg">
                                    <a href="demo-photography-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Photography 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography-3.jpg">
                                    <a href="demo-photography-3.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Photography 3</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-church.jpg">
                                    <a href="demo-church.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Church</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-wedding.jpg">
                                    <a href="demo-wedding.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Wedding</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio.jpg">
                                    <a href="index-portfolio.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Portfolio 1</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-2.jpg">
                                    <a href="index-portfolio-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Portfolio 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-3.jpg">
                                    <a href="index-portfolio-3.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Portfolio 3</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-4.jpg">
                                    <a href="index-portfolio-4.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Portfolio 4</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-5.jpg">
                                    <a href="index-portfolio-5.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Portfolio 5</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item blog">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog.jpg">
                                    <a href="index-blog.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Blog 1</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item blog">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-2.jpg">
                                    <a href="index-blog-2.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Blog 2</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item blog">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-3.jpg">
                                    <a href="index-blog-3.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Blog 3</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item blog">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-4.jpg">
                                    <a href="index-blog-4.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Blog 4</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item blog">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-5.jpg">
                                    <a href="index-blog-5.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Blog 5</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item business">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-hosting.jpg">
                                    <a href="index-corporate-hosting.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Hosting</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-color.jpg">
                                    <a href="index-classic-color.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Classic Color</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-light.jpg">
                                    <a href="index-classic-light.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Classic Light</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-video.jpg">
                                    <a href="index-classic-video.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Classic Video</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-video-light.jpg">
                                    <a href="index-classic-video-light.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Classic Video Light</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-boxed.jpg">
                                    <a href="feature-layout-boxed.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">Boxed</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                        <div class="portfolio-item hover-effect-1 text-center">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-rtl.jpg">
                                    <a href="feature-layout-rtl.html"></a>
                                </span>
                            </span>
                            <h5 class="text-color-dark text-capitalize mt-3">RTL</h5>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>




    <section class="text-color-light">
sadasdfwersfsdf
    </section>
@endsection

@section('page-script')

@endsection
