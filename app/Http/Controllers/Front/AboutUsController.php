<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;

class AboutUsController extends Controller
{
    public function index()
    {
        $slider = Slider::first();
        $about_us = AboutUs::first();
        $settings = Setting::first();
        $services = Service::get();
        $related = Product::latest()->take(6)->get();
        return view('Front.about_us',
                    compact('about_us',
                     'related',
                     'settings',
                     'services',
                     'slider'));
    }
}
