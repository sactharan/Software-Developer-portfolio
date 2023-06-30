<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ContactSetting;
use App\Http\Controllers\Controller;

class ContactSettingController extends Controller
{
    public function index()
    {
        $contact_setting = ContactSetting::first();
        return view('admin.contact_setting.index', compact('contact_setting'));
    }


    public function store(Request $request)
    {
        $contact_setting = ContactSetting::first();
        if ($contact_setting) {
            //update Data
            $contact_setting->update([
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' => $request->location,
            ]);
            return redirect()->back()->with('message', 'Contact Settings Updated');
        } else //Create Data
        {

            ContactSetting::create([
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'location' => $request->location,
            ]);

            return redirect()->back()->with('message', 'Contact Settings Saved');
        }

    }
}
