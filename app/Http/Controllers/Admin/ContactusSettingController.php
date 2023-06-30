<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSetting;
use Illuminate\Http\Request;

class ContactusSettingController extends Controller
{
    public function index()
    {
        $contact_uss = ContactUsSetting::all();
        return view('admin.contact_us_setting.index',compact('contact_uss'));
    }

}
