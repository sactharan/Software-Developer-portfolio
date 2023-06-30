<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSetting;
use Illuminate\Http\Request;

class FooterSettingController extends Controller
{
    public function index()
    {
        $footer_setting = FooterSetting::first();
        return view('admin.footer_setting.index', compact('footer_setting'));
    }


    public function store(Request $request)
    {
        $footer_setting = FooterSetting::first();
        if ($footer_setting) {
            //update Data
            $footer_setting->update([
                'title' => $request->title,
                'designer' => $request->designer,
                'link' => $request->link,
                'year' => $request->year,
            ]);
            return redirect()->back()->with('message', 'Footer Settings Updated');
        } else //Create Data
        {

            FooterSetting::create([
                'title' => $request->title,
                'designer' => $request->designer,
                'link' => $request->link,
                'year' => $request->year,
            ]);

            return redirect()->back()->with('message', 'Footer Settings Saved');
        }

    }
}
