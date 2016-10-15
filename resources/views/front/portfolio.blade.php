@extends('layouts.front')

@section('header')
    <section id="innerheader2"
             style="background-image: url(http://markup.themewagon.com/mountain/assets/images/header/portfolio.jpg)"
             class="innerheader innerheader2">
        <div class="container">
            <div class="row pad-small">
                <div class="col-sm-12 text-center">
                    <div class="inner-title"><h3 data-wow-delay="0.1s" class="wow fadeInUp">portfolio</h3>

                        <p data-wow-delay="0.2s" class="wow fadeInUp">View our different photos</p></div>
                    <div data-wow-delay="0.1s" class="inner-breadcrumb wow fadeInUp">
                        <ol class="breadcrumb">
                            <li><a href="http://markup.themewagon.com/mountain/index.html" target="_blank">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li>portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#innerheader2-->
@endsection
@section('middle-content')
    <section id="portfolio-grid-sortable-gutter" class="portfolio-grid-sortable-gutter section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title-subtitle"><h2>Recent Works</h2>

                        <p>Showcase selected projects in a sylish grid arrangement.</p></div>
                    <div class="portfolio-btn-group-wraper">
                        <div class="sortable-portfolio-button button-group filter-button-group">
                            <button data-filter="*">show all</button>
                            <button data-filter=".illustration">illustration</button>
                            <button data-filter=".apps">apps</button>
                            <button data-filter=".web-design">web design</button>
                            <button data-filter=".branding">branding</button>
                            <button data-filter=".banner-design">banner design</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-grid-sortable">
                <div class="grid-sizer"></div>
                <div class="portfolio-grid-item grid-item-2x illustration web-design">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/1.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_image.html">
                                <div class="portfolio-description"><h5>Michael Andrews</h5>

                                    <p>Branding &amp; Identity</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item apps branding banner-design">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/2.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_video.html">
                                <div class="portfolio-description"><h5>iOS Application</h5>

                                    <p>Frehence</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item illustration web-design branding">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/3.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_carousel.html">
                                <div class="portfolio-description"><h5>Mountain Stationary</h5>

                                    <p>Branding Collateral</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item apps banner-design">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/4.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_image.html">
                                <div class="portfolio-description"><h5>Wave Poster</h5>

                                    <p>Logo Design</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item illustration branding">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/5.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_video.html">
                                <div class="portfolio-description"><h5>Tesla Controller</h5>

                                    <p>Apple watch application</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item apps branding banner-design">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/6.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_carousel.html">
                                <div class="portfolio-description"><h5>hello world</h5>

                                    <p>culture</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item illustration web-design banner-design">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/7.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_image.html">
                                <div class="portfolio-description"><h5>Authentic Apparel</h5>

                                    <p>Packaging Design</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item apps web-design banner-design">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/8.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_video.html">
                                <div class="portfolio-description"><h5>Organic Scpice Company</h5>

                                    <p>Product Packaging</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grid-item illustration web-design branding">
                    <div class="portfolio-thumb"><img
                            src="http://markup.themewagon.com/mountain/assets/images/portfolio/9.png"
                            class="img-responsive"/>

                        <div class="portfolio-hover">
                            <div class="vcenter"><a
                                    href="http://markup.themewagon.com/mountain/portfolio_single_featured_carousel.html">
                                <div class="portfolio-description"><h5>Thomas Mullar</h5>

                                    <p>Branding & Identity</p></div>
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection