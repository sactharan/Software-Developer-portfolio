<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\CategorySetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PortfolioFormRequest;

class PortfolioSettingController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio_setting.index', compact('portfolios'));
    }

    public function create()
    {
        $portfolio_categorys = CategorySetting::all();
        return view('admin.portfolio_setting.create', compact('portfolio_categorys'));
    }

    public function store(PortfolioFormRequest $request)
    {
        $validatedData = $request->validated();
        $portfolio_category = CategorySetting::findOrFail($validatedData['category_id']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/portfolio/', $filename);
            $validatedData['image'] = "uploads/portfolio/$filename";
        }

        $portfolio = $portfolio_category->portfolios()->create([
            'category_id' => $validatedData['category_id'],
            'title' => $validatedData['title'],
            'status' => $request->status == true ? '1' : '0',
            'image' => $validatedData['image'],
        ]);

        return redirect('admin/portfolio_setting')->with('message', 'Portfolio Added Successfully');
    }

    public function edit(int $portfolio_id)
{
    $portfolio_categorys = CategorySetting::all();
    $portfolio = Portfolio::findOrFail($portfolio_id);
    return view('admin.portfolio_setting.edit', compact('portfolio_categorys', 'portfolio'));
}
public function update(PortfolioFormRequest $request, $portfolio_id)
{
    $validatedData = $request->validated();
    $portfolio = Portfolio::findOrFail($portfolio_id); // Fetch the portfolio by its id

    if ($portfolio) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $destinationPath = 'uploads/portfolio/';
            $file->move($destinationPath, $filename);
            $validatedData['image'] = $destinationPath . $filename;
        }

        $portfolio->update([
            'category_id' => $validatedData['category_id'],
            'title' => $validatedData['title'],
            'status' => $request->status == true ? '1' : '0',
            // 'image' => $validatedData['image'],
        ]);

        return redirect('admin/portfolio_setting')->with('message', 'Portfolio Updated Successfully');
    } else {
        return redirect()->with('message', 'No Such Portfolio Id Found');
    }


}

public function destroy(Portfolio $portfolio)
{
    if ($portfolio) {
        $destination = $portfolio->image; // Get the image path

        if (File::exists($destination)) {
            File::delete($destination); // Delete the image file
        }

        $portfolio->delete(); // Delete the portfolio record

        return redirect('admin/portfolio_setting')->with('message', 'Portfolio Deleted Successfully');
    }

    return redirect('admin/portfolio_setting')->with('message', 'Something went wrong');
}




}
