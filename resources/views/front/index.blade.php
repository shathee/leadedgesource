@extends('layouts.front')

@section('header')
    <header id="header" class="header">
        <div style="background-image:url('public/assets/images/layouts/corporate/lead-back.psd.jpg')" class="header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <div class="intro-box">
                                <div class="intro"><h1 data-wow-delay="0.4s" class="header-title wow fadeInUp">
                                        Welcome </br> to Lead Edge Sourcing.</h1>

                                    <p data-wow-delay="0.6s" class="header-subtitle wow fadeInUp"> Know your source Know your Product</p>

                                    <div class="mountain-btn-group">
                                        <a href="#" class="btn btn-mountain-flat btn-round">Explore</a>
                                        <a href="contact.php" class="btn btn-mountain-o btn-o-white btn-round">Contact</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('middle-content')
    <section id="about" class="about down-arrow-dest about-us-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><img src="public/assets/images/about/1.png" alt="about" data-wow-delay="0.1s"
                                           class="img-responsive wow fadeInUp"/></div>
                <div class="col-sm-6"><h3 class="section-title wow fadeInUp">&nbsp;</h3>

                    <p data-wow-delay="0.2s" class="wow fadeInUp">Lead Edge Sourcing Assures</p>
                    <p data-wow-delay="0.2s" class="wow fadeInUp">
                        In the world of apparel sourcing landscape, Bangladesh has proved it's true potential in terms of quality, capacity and capability for the last four decades.
                    </p>


                    <div style="margin-bottom:45px;" class="clearfix"></div>
                    <a href="#" data-wow-delay="0.3s" class="btn btn btn-mountain-o btn-round wow fadeInUp">read
                        more</a></div>
            </div>
        </div>
    </section>

@endsection
