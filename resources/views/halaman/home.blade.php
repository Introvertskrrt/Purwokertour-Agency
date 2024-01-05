<!-- home.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Tour Agency Nomor 1 di Banyumas</h6>
                <h2><em>Menjelajah</em> Bersama kami</h2>
                <div class="main-button">
                    <a href="contact">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Wisata <em>Populer</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Tempat Wisata Terpopuler di Banyumas</p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($daftarWisatas as $index => $daftarWisata)
            @if ($index < 3)
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{ asset('uploads/' . $daftarWisata->gambar) }}" alt="{{ $daftarWisata->nama_wisata }}">
                    </div>
                        <div class="down-content">
                            <span>
                                <sup>Rp</sup>{{ $daftarWisata->min_harga }} - <sup>Rp</sup>{{ $daftarWisata->max_harga }}
                            </span>

                            <h4>{{ $daftarWisata->nama_wisata }}</h4>

                            <p>
                                <i class="fa fa-calendar"></i> {{ $daftarWisata->musim }} &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-cube"></i> {{ $daftarWisata->durasi_malam }} nights &nbsp;&nbsp;&nbsp;

                                <i class="fa fa-plane"></i> {{ $daftarWisata->penerbangan ? 'Flight included' : 'No Flight' }} &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="https://wa.me/082325085612", target="blank">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                    @break
                @endif
                @endforeach
            </div>

            <br>

            <div class="main-button text-center">
                <a href="packages">Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Baca <em>Tentang Kami</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>
                        Selamat datang di Purwoker Tour, partner setia Anda dalam merencanakan petualangan tak terlupakan di destinasi eksotis Banyumas, terutama Purwokerto. Kami adalah agen perjalanan yang didedikasikan untuk membantu Anda menemukan dan menjelajahi keindahan alam, budaya, dan atraksi luar biasa yang dimiliki oleh wilayah ini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>
                        Kami berdedikasi memberikan pengalaman perjalanan yang unik dan memuaskan bagi pelanggan kami, menyajikan pilihan destinasi terbaik di Banyumas, termasuk tempat-tempat indah, situs bersejarah, dan keunikan budaya.
                        </p>

                        <p>
                        Mulailah petualangan Anda bersama kami dan temukan keajaiban Banyumas! Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut atau merencanakan perjalanan Anda. Terima kasih atas kepercayaan Anda kepada Purwoker Tour.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Kirim <em>Pesan</em></h2>
                        <p>
                        Jika Anda memiliki pertanyaan, informasi lebih lanjut, atau ingin merencanakan perjalanan Anda bersama kami, silakan hubungi tim layanan pelanggan kami. Kami siap membantu Anda dengan senang hati.
                        </p>
                        <div class="main-button">
                            <a href="contact.php">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Baca <em>Testimoni</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Belum ada ulasan yang ditampilkan</p>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>

            <br>

            <div class="main-button text-center">
                <a href="testimonials">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

@endsection
