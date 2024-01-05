<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarWisata;


class ViewController extends Controller
{
    public function home()
    {
        $daftarWisatas = DaftarWisata::all();
        return view('halaman.home', compact('daftarWisatas'));
    }

    public function contact()
    {
        return view('halaman.contact');
    }

    public function packages()
    {
        $daftarWisatas = DaftarWisata::paginate(3); // Use paginate instead of simplePaginate
        return view('halaman.packages', compact('daftarWisatas'));
    }


    public function about()
    {
        return view('halaman.about');
    }

    public function blog()
    {
        return view('halaman.blog');
    }

    public function testimonials()
    {
        return view('halaman.testimonials');
    }

    public function blog_details()
    {
        return view('halaman.blog-details');
    }

    public function terms()
    {
        return view('halaman.terms');
    }

    public function package_details()
    {
        return view('halaman.package_details');
    }
}
