<?php

namespace App\Http\Controllers\Admin;

use App\Models\EduSetings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EducationFormRequest;

class EduSettingController extends Controller
{
    public function index()
    {
        $educations = EduSetings::all();
        return view('admin.edu_setting.index',compact('educations'));
    }

    public function create()
    {
        return view('admin.edu_setting.create');
    }

    public function store(EducationFormRequest $request)
    {

        $validatedData = $request->validated();
        EduSetings::create($validatedData);
        return redirect('admin/edu_setting')->with('message','Education Added Successfully');
    }

    public function edit(EduSetings $education)
    {

        return view('admin.edu_setting.edit',compact('education'));
    }

    public function update(EducationFormRequest $request, $education_id)
    {

        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        EduSetings::find($education_id)->update($validatedData);
        return redirect('admin/edu_setting')->with('message','Education Updated Successfully');

    }

    public function destroy($education_id)
    {
        $education = EduSetings::findOrFail($education_id);
        $education->delete();
        return redirect('admin/edu_setting')->with('message','Education Deleted Successfully');

    }
}
