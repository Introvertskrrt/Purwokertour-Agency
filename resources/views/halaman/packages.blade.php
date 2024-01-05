<!-- packages.blade.php -->
@php
    use App\Models\DaftarWisata;
@endphp

@extends('layouts.app')

@section('title', 'Packages')

@section('content')

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Paket <em>Tersedia</em></h2>
                    <p>Daftar tempat wisata terbaik di Banyumas</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>

        <div class="row">
            @foreach($daftarWisatas as $daftarWisata)
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
            @endforeach
        </div>

        <br>

        <nav>
            <ul class="pagination justify-content-center">
                @if ($daftarWisatas->previousPageUrl())
                    <li class="page-item">
                        <a class="page-link" href="{{ $daftarWisatas->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        </a>
                    </li>
                @endif

                <li class="page-item disabled">
                    <span class="page-link">Page {{ $daftarWisatas->currentPage() }} of {{ $daftarWisatas->lastPage() }}</span>
                </li>

                @if ($daftarWisatas->nextPageUrl())
                    <li class="page-item">
                        <a class="page-link" href="{{ $daftarWisatas->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>


    </div>
</section>
<!-- ***** Fleet Ends ***** -->

@endsection
