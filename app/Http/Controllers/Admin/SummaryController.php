<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SummarySetting;
use App\Http\Controllers\Controller;

class SummaryController extends Controller
{
    public function index()
    {
        $summary_setting = SummarySetting::first();
        return view('admin.summary_setting.index', compact('summary_setting'));
    }

    public function store(Request $request)
    {
        $summary_setting = SummarySetting::first();
        if ($summary_setting) {
            //update Data
            $summary_setting->update([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address,
                'contact' => $request->contact,
                'email' => $request->email,
            ]);
            return redirect()->back()->with('message', 'Summary Settings Updated');
        } else //Create Data
        {

            SummarySetting::create([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address,
                'contact' => $request->contact,
                'email' => $request->email,
            ]);

            return redirect()->back()->with('message', 'Summary Settings Saved');
        }

    }
}
