<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutSettingController extends Controller
{
    public function index()
    {
        $about_setting = AboutSetting::first();
        return view('admin.about_setting.index', compact('about_setting'));
    }

    public function store(Request $request)
    {
        $about_setting = AboutSetting::first();
        $uploadPath = 'uploads/about/';

        $data = [
            'description' => $request->description,
            'title' => $request->title,
            'title_description' => $request->title_description,
            'birth_date' => $request->birth_date,
            'age' => $request->age,
            'website' => $request->website,
            'degree' => $request->degree,
            'phone' => $request->phone,
            'email' => $request->email,
            'city' => $request->city,
            'freelance' => $request->freelance,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/about/', $filename);
            $data['image'] = $uploadPath . $filename;
        }

        if ($about_setting) {
            if ($request->hasFile('image')) {
                $path = public_path($about_setting->image);
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
            $about_setting->update($data);
            return redirect()->back()->with('message', 'About Settings Updated');
        } else {
            AboutSetting::create($data);
            return redirect()->back()->with('message', 'About Settings Saved');
        }
    }
}
