<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\StoreQuote;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('Front.quote', compact('settings'));
    }

    public function store(StoreQuote $storeQuote)
    {
        $inputs = $storeQuote->all();

        if(Quote::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
