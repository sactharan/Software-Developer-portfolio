<?php

namespace App\Http\Controllers\Admin;

use App\Models\SkillSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkillFormRequest;

class SkillsSettingController extends Controller
{
    public function index()
    {
        $skills = SkillSetting::all();
        return view('admin.skill_setting.index',compact('skills'));
    }

    public function create()
    {
        return view('admin.skill_setting.create');
    }

    public function store(SkillFormRequest $request)
    {

        $validatedData = $request->validated();
        SkillSetting::create($validatedData);
        return redirect('admin/skill_setting')->with('message','Skill Added Successfully');
    }

    public function edit(SkillSetting $skill)
    {

        return view('admin.skill_setting.edit',compact('skill'));
    }

    public function update(SkillFormRequest $request, $skill_id)
    {

        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        SkillSetting::find($skill_id)->update($validatedData);
        return redirect('admin/skill_setting')->with('message','Skill Updated Successfully');

    }

    public function destroy($skill_id)
    {
        $skill = SkillSetting::findOrFail($skill_id);
        $skill->delete();
        return redirect('admin/skill_setting')->with('message','Skill Deleted Successfully');

    }
}
