<?php

namespace App\Http\Controllers\Admin;

use App\Models\FactSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FactSettingController extends Controller
{
    public function index()
    {
        $fact_setting = FactSetting::first();
        return view('admin.fact_setting.index', compact('fact_setting'));
    }


    public function store(Request $request)
    {
        $fact_setting = FactSetting::first();
        if ($fact_setting) {
            //update Data
            $fact_setting->update([
                'clients' => $request->clients,
                'projects' => $request->projects,
                'hours_of_support' => $request->hours_of_support,
                'hard_workers' => $request->hard_workers,
            ]);
            return redirect()->back()->with('message', 'Facts Settings Updated');
        } else //Create Data
        {

            FactSetting::create([
                'clients' => $request->clients,
                'projects' => $request->projects,
                'hours_of_support' => $request->hours_of_support,
                'hard_workers' => $request->hard_workers,
            ]);

            return redirect()->back()->with('message', 'Facts Settings Saved');
        }

    }
}
