<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessionFormRequest;

class ProSettingController extends Controller
{
    public function index()
    {
        $professions = ProSettings::all();
        return view('admin.pro_settings.index',compact('professions'));
    }

    public function create()
    {
        return view('admin.pro_settings.create');
    }

    public function store(ProfessionFormRequest $request)
    {

        $validatedData = $request->validated();
        ProSettings::create($validatedData);
        return redirect('admin/pro_settings')->with('message','Profession Added Successfully');
    }

    public function edit(ProSettings $profession)
    {

        return view('admin.pro_settings.edit',compact('profession'));
    }

    public function update(ProfessionFormRequest $request, $profession_id)
    {

        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        ProSettings::find($profession_id)->update($validatedData);
        return redirect('admin/pro_settings')->with('message','Profession Updated Successfully');

    }

    public function destroy($profession_id)
    {
        $profession = ProSettings::findOrFail($profession_id);
        $profession->delete();
        return redirect('admin/pro_settings')->with('message','Profession Deleted Successfully');

    }

}
