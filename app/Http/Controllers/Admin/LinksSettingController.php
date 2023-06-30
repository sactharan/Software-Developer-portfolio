<?php

namespace App\Http\Controllers\Admin;

use App\Models\Links;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\LinkFormRequest;
use Illuminate\Support\Facades\Storage;

class LinksSettingController extends Controller
{
    public function index()
    {
        $links = Links::all();
        return view('admin.link_setting.index',compact('links'));
    }

    public function create()
    {
        return view('admin.link_setting.create');
    }

    public function store(LinkFormRequest $request)
    {
        $validatedData = $request->validated();
        Links::create($validatedData);
        return redirect('admin/link_setting')->with('message','Links Added Successfully');
    }

    public function edit(Links $link)
    {
        return view('admin.link_setting.edit', compact('link'));
    }

    public function update(LinkFormRequest $request, $link_id)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        Links::find($link_id)->update($validatedData);
        return redirect('admin/link_setting')->with('message','Link Updated Successfully');
    }

    public function destroy($link_id)
    {
        $link = Links::findOrFail($link_id);
        $link->delete();
        return redirect('admin/link_setting')->with('message','Link Deleted Successfully');
    }

}
