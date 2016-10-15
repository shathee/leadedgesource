@extends('layouts.front')


@section('header')
    <section id="innerheader2"
             style="background-image: url(http://markup.themewagon.com/mountain/assets/images/header/contact-header.jpg)"
             class="innerheader innerheader2">
        <div class="container">
            <div class="row pad-small">
                <div class="col-sm-12 text-center">
                    <div class="inner-title"><h3 data-wow-delay="0.1s" class="wow fadeInUp">Contact with us</h3>

                        <p data-wow-delay="0.2s" class="wow fadeInUp">Communication is the bower</p></div>
                    <div data-wow-delay="0.1s" class="inner-breadcrumb wow fadeInUp">
                        <ol class="breadcrumb">
                            <li><a href="http://markup.themewagon.com/mountain/index.html" target="_blank">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('middle-content')
        <!-- /#innerheader2-->
    <section id="contact" class="contact-form section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contact-header"><h2>Get in touch</h2></div>
                <div class="col-md-6 contact-desc"><p class="wow fadeInUp">If you face any trouble, you can always let
                        our dedicated support team help you. They are ready for you 24/7.</p>

                    <div data-wow-delay="0.1s" class="call-us contact-icon-block clearfix wow fadeInUp"><span
                                class="contact-form-icons text-center"><i class="ion-ios-telephone"></i></span>

                        <div class="contact-small-text"><h5 class="contact-small-header">Call us</h5><span>+61 3 8376 6284</span>
                        </div>
                    </div>
                    <div data-wow-delay="0.2s" class="address contact-icon-block clearfix wow fadeInUp"><span
                                class="contact-form-icons text-center"><i class="ion-ios-location"></i></span>

                        <div class="contact-small-text"><h5 class="contact-small-header">Address</h5><span>House No.124, Road No.1,<br/>Mohakhali,Dhaka 1206</span>
                        </div>
                    </div>
                    <div data-wow-delay="0.3s" class="email contact-icon-block clearfix wow fadeInUp"><span
                                class="contact-form-icons text-center"><i class="ion-at"></i></span>

                        <div class="contact-small-text"><h5 class="contact-small-header">Email us</h5><span>support@themewagon.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-fields">
                        <form id="contactForm" action="http://markup.themewagon.com/mountain/php/contact.php"
                              method="post" name="contactform">
                            <div data-wow-delay="0.1s" class="form-group wow fadeInUp"><input id="name" type="text"
                                                                                              placeholder="Your Name"
                                                                                              name="name"
                                                                                              required="required"
                                                                                              class="form-control"/>
                            </div>
                            <!-- /.form-group-->
                            <div data-wow-delay="0.2s" class="form-group wow fadeInUp"><input id="email" type="email"
                                                                                              placeholder="Your Email"
                                                                                              name="email"
                                                                                              required="required"
                                                                                              class="form-control"/>
                            </div>
                            <!-- /.form-group-->
                            <div data-wow-delay="0.3s" class="form-group wow fadeInUp"><textarea rows="6"
                                                                                                 placeholder="Message"
                                                                                                 name="message"
                                                                                                 class="form-control"></textarea>
                            </div>
                            <!-- /.form-group-->
                            <div id="contactFormResponse"></div>
                            <button id="cfsubmit" type="submit" data-wow-delay="0.2s"
                                    class="btn btn-mountain btn-block wow fadeInUp">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-map" class="contact-map">
        <div id="map"></div>
    </section>
@endsection
