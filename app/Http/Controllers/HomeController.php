<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Mainpages as Mainpages;
use App\Slider as Slider;
use App\Script as Script;
use App\Faq as Faq;
use App\Partner as Partner;
use App\Bundle as Bundle;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bundles = Bundle::first();
        $partners = Partner::all();
        $sliders = Slider::all();
        $staticpages = Staticpage::all();
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $faqs = Faq::take(3)->get();
        $data = ["bundles" => $bundles,"partners" => $partners,"faqs" => $faqs,"staticpages" => $staticpages, "sliders" => $sliders, "scripts" => $scripts, "mainpages" => $mainpages];
        return view('main.home')->with($data);
    }

    public function staticpages($slug)
    {
        $partners = Partner::all();
        $staticpage = Staticpage::where("slug", "=", $slug)->first();
        $staticpages = Staticpage::all();
        $scripts = Script::where("status", "=", 1)->get();
        $faqs = Faq::take(3)->get();
        $data = ["partners" => $partners,"faqs" => $faqs,"staticpage" => $staticpage, "staticpages" => $staticpages, "scripts" => $scripts];
        return view('main.staticpage')->with($data);

    }
    public function mainpages($slug)
    {
        $partners = Partner::all();
        $mainpage = Mainpages::where("slug", "=", $slug)->first();
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $faqs = Faq::take(3)->get();
        $data = ["partners" => $partners,"faqs" => $faqs,"mainpage" => $mainpage, "mainpages" => $mainpages, "scripts" => $scripts];
        return view('main.mainpages')->with($data);

    }
}
