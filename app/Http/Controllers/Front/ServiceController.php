<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();
        $slider = Slider::first();
        $settings = Setting::first();
        return view('Front.service', compact('services', 'settings', 'slider'));
    }
}
