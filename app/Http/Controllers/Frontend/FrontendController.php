<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Links;
use App\Models\Portfolio;
use App\Models\EduSetings;
use App\Models\ProSettings;
use App\Models\SkillSetting;
use Illuminate\Http\Request;
use App\Models\ServiceSetting;
use App\Models\CategorySetting;
use App\Models\ContactUsSetting;
use App\Models\TestimonialSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactusFormRequest;

class FrontendController extends Controller
{
    public function index()
    {
        $professions = ProSettings::where('status', '0')->latest()->take(2)->get();
        $educations = EduSetings::where('status', '0')->latest()->take(2)->get();
        $skills = SkillSetting::where('status', '0')->latest()->take(6)->get();
        $services = ServiceSetting::where('status', '0')->latest()->take(6)->get();
        $testimonials = TestimonialSetting::where('status', '0')->latest()->take(6)->get();
        $categories = CategorySetting::where('status', '0')->latest()->take(4)->get();
        $portfolios = Portfolio::where('status', '0')->latest()->get();
        $links = Links::where('status', '0')->latest()->take(4)->get();
        return view('frontend.contact', compact('professions','educations','skills','services','testimonials','categories','portfolios','links'));

    }

    public function create()
    {
        return view('frontend.contact_us.create');
    }

    public function store(ContactusFormRequest $request)
    {

        $validatedData = $request->validated();
        ContactUsSetting::create($validatedData);
        return redirect('frontend/contact_us')->with('message','Details Send Successfully');
    }

    public function productView(string $category_title, string $portfolio_title)
    {
        $category = CategorySetting::where('title', $category_title)->first();
        if ($category) {
            $portfolio = $category->portfolios()->where('title', $portfolio_title)->where('status', '0')->first();
            if ($portfolio) {
                return view('frontend.portfolio_details.index', compact('portfolio','category'));
            } else {

                return redirect()->back();
            }

        } else {

            return redirect()->back();
        }
    }


}
