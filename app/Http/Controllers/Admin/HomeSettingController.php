<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeSettingController extends Controller
{
    public function index()
    {
        $home_setting = HomeSetting::first();
        return view('admin.home_setting.index',compact('home_setting'));
    }


    public function store(Request $request)
    {
        $home_setting = HomeSetting::first();
        if ($home_setting) {
            //update Data
            $home_setting->update([
                'name' => $request->name,
                'job1' => $request->job1,
                'job2' => $request->job2,
                'job3' => $request->job3,
                'job4' => $request->job4,
            ]);
            return redirect()->back()->with('message', 'Home Settings Updated');
        } else //Create Data
        {

            HomeSetting::create([
                'name' => $request->name,
                'job1' => $request->job1,
                'job2' => $request->job2,
                'job3' => $request->job3,
                'job4' => $request->job4,
            ]);

            return redirect()->back()->with('message', 'Home Settings Saved');
        }

    }
}
