@extends('layouts.app')

@section('content')

<div class="mt-2 px-4 py-3 px-md-4 py-md-3 row text-white rounded-top bg-dark">
        <h3 class="custom-content-title">Contact Us</h3>
      
</div>
<div class="px-4 py-2 px-md-4 py-md-1 row custom-bg-lighter-grey-2">
      <h4 class="pt-2 vw-100 text-center custom-content-sub-title">Communication is the bower</h4>
    </div>
<div class="px-4 py-2 px-md-4 py-md-1 row custom-bg-lighter-grey-2">
  <p class="text-center w-responsive mx-auto py-3">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.
  If you face any trouble, you can always let our dedicated support team help you. They are ready for you 24/7.</p>
</div>
<div class="px-4 py-2 px-md-4 py-md-1 row custom-bg-lighter-grey-2">
  <!--Grid column-->
        <div class="col-md-7 col-sm-7 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-secondary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-3x"></i>
                    <p>House #06, Road # 10, Sector # 09 Uttara,Dhaka-1218</p>
                </li>

                <li><i class="fas fa-phone fa-3x"></i>
                    <p>+880248953090</p>
                </li>

                <li><i class="fas fa-envelope fa-3x"></i>
                    <p>info@leadedge-sourcing.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->
</div>


       
@endsection