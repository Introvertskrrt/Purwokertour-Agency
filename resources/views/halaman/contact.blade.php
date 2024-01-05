<!-- home.blade.php -->

@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Langsung <em>Hubungi Kami</em></h2>
                        <p>Kami siap melayani anda kapanpun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> info</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5><a href="#">+62823-2508-5612</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="#">21104045@ittelkom-pwt.ac.id</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>Purwokerto</h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Institut%20Teknologi%20Telkom%20Purwokerto&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="margin:auto; display:block;"></iframe>
            <a href="https://embedgooglemap.net/124/">flushed away 123movies</a><br>
            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
            <a href="https://www.embedgooglemap.net">embed google maps</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div>
    </div>
</section>

    <!-- ***** Contact Us Area Ends ***** -->

@endsection
