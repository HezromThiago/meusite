<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function productShow(string $slug)
    {
        return view('pages.product-show', compact('slug'));
    }

    public function cities()
    {
        return view('pages.cities');
    }

    public function cityShow(string $slug)
    {
        return view('pages.city-show', compact('slug'));
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
