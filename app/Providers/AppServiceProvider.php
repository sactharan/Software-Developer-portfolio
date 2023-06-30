<?php

namespace App\Providers;


use App\Models\FactSetting;
use App\Models\HomeSetting;
use App\Models\ProSettings;
use App\Models\AboutSetting;
use App\Models\FooterSetting;
use App\Models\ContactSetting;
use App\Models\SummarySetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $home_setting = HomeSetting::first();
        $about_setting = AboutSetting::first();
        $contact_setting = ContactSetting::first();
        $summary_setting = SummarySetting::first();
        $fact_setting = FactSetting::first();
        $footer_setting = FooterSetting::first();
        View::share('appSetting',$home_setting);
        View::share('appSetting1',$about_setting);
        View::share('appSetting2',$contact_setting);
        View::share('appSetting3',$summary_setting);
        View::share('appSetting4',$fact_setting);
        View::share('appSetting5',$footer_setting);
    }
}
