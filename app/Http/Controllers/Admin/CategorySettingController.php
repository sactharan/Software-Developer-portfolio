<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CategorySetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategorySettingController extends Controller
{
    public function index()
    {
        $categories = CategorySetting::all();
        return view('admin.category_setting.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category_setting.create');
    }

    public function store(CategoryFormRequest $request)
    {

        $validatedData = $request->validated();
        CategorySetting::create($validatedData);
        return redirect('admin/category_setting')->with('message','Category Added Successfully');
    }

    public function edit(CategorySetting $category)
    {

        return view('admin.category_setting.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request, $category_id)
    {

        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        CategorySetting::find($category_id)->update($validatedData);
        return redirect('admin/category_setting')->with('message','Category Updated Successfully');

    }

    public function destroy($category_id)
    {
        $category = CategorySetting::findOrFail($category_id);
        $category->delete();
        return redirect('admin/category_setting')->with('message','Category Deleted Successfully');

    }
}
