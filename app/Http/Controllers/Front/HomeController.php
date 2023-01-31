<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);
        $settings = Setting::first();
        $about = AboutUs::first();
        $questions = Question::latest()->take(3)->get();
//        dd($questions);
        return view('Front.index', compact('products', 'settings','about','questions'));
    }
}
