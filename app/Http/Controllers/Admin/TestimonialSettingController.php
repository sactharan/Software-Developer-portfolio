<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TestimonialSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\TestimonialFormRequest;

class TestimonialSettingController extends Controller
{
    public function index()
    {
        $testimonials = TestimonialSetting::all();
        return view('admin.testimonial_setting.index',compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial_setting.create');
    }

    public function store(TestimonialFormRequest $request)
    {

        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename = time() .'.'. $ext;
            $file->move('uploads/testimonial/' , $filename);
            $validatedData['image'] = "uploads/testimonial/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        TestimonialSetting::create([
            'name' => $validatedData['name'],
            'job' => $validatedData['job'],
            'review' => $validatedData['review'],
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],
        ]);

         return redirect('admin/testimonial_setting')->with('message','Testimonial Added Successfully');
    }

    public function edit(TestimonialSetting $testimonial)
    {

        return view('admin.testimonial_setting.edit',compact('testimonial'));
    }

    public function update(TestimonialFormRequest $request, $testimonial)
    {


        $validatedData = $request->validated();

        if($request->hasFile('image')){

            $destination = $testimonial->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename = time() .'.'. $ext;
            $file->move('uploads/testimonial/' , $filename);
            $validatedData['image'] = "uploads/testimonial/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        TestimonialSetting::where('id',$testimonial->id)->update([
            'name' => $validatedData['name'],
            'job' => $validatedData['job'],
            'review' => $validatedData['review'],
            'image' => $validatedData['image'] ?? $testimonial->image,
            'status' => $validatedData['status'],
        ]);

         return redirect('admin/testimonial_setting')->with('message','Testimonial Updated Successfully');


    }

    public function destroy(TestimonialSetting $testimonial)
    {
        if($testimonial->count() > 0 ){
            $destination = $testimonial->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $testimonial->delete();
            return redirect('admin/testimonial_setting')->with('message','Testimonial Deleted Successfully');
        }
        return redirect('admin/testimonial_setting')->with('message','Something went wrong');

    }

}
