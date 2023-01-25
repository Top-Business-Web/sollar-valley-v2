<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;

class FaqsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $slider = Slider::first();
        return view('Front.faqs', compact('settings', 'slider'));
    }
}
