<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class FaqsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('Front.faqs', compact('settings'));
    }
}
