<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Slider as Slider;
use App\Script as Script;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $staticpages = StaticPage::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["staticpages" => $staticpages, "sliders" => $sliders, "scripts" => $scripts];
        return view('main.home')->with($data);
    }

    public function staticpages($slug)
    {
        $staticpage = StaticPage::where("slug", "=", $slug)->first();
        $staticpages = StaticPage::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["staticpage" => $staticpage, "staticpages" => $staticpages, "scripts" => $scripts];
        return view('main.staticpage')->with($data);

    }
}
