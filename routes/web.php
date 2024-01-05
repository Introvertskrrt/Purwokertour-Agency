<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'home']);

Route::get('/home', [ViewController::class, 'home']);

Route::get('/contact', [ViewController::class, 'contact']);

Route::get('/packages', [ViewController::class, 'packages']);

Route::get('/blog', [ViewController::class, 'blog']);

Route::get('/about', [ViewController::class, 'about']);

Route::get('/testimonials', [ViewController::class, 'testimonials']);

Route::get('/blog-details', [ViewController::class, 'blog_details']);

Route::get('/terms', [ViewController::class, 'terms']);

Route::get('/package-details', [ViewController::class, 'package_details']);