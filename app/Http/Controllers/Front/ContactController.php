<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Service;
use App\Models\Contact;
use App\Http\Requests\StoreContact;


class ContactController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $services = Service::get();
        return view('Front.contact', compact('settings', 'services'));
    }

    public function store(StoreContact $storeContact)
    {

        $inputs = $storeContact->all();

        if(Contact::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
