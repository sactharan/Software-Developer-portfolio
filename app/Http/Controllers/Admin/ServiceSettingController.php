<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ServiceSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceFormRequest;

class ServiceSettingController extends Controller
{
    public function index()
    {
        $services = ServiceSetting::all();
        return view('admin.service_setting.index',compact('services'));
    }

    public function create()
    {
        return view('admin.service_setting.create');
    }

    public function store(ServiceFormRequest $request)
    {

        $validatedData = $request->validated();
        ServiceSetting::create($validatedData);
        return redirect('admin/service_setting')->with('message','Service Added Successfully');
    }

    public function edit(ServiceSetting $service)
    {

        return view('admin.service_setting.edit',compact('service'));
    }

    public function update(ServiceFormRequest $request, $service_id)
    {

        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        ServiceSetting::find($service_id)->update($validatedData);
        return redirect('admin/service_setting')->with('message','Service Updated Successfully');

    }

    public function destroy($service_id)
    {
        $service = ServiceSetting::findOrFail($service_id);
        $service->delete();
        return redirect('admin/service_setting')->with('message','Service Deleted Successfully');

    }
}
