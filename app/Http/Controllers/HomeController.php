<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Mainpages as Mainpages;
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
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["staticpages" => $staticpages, "sliders" => $sliders, "scripts" => $scripts, "mainpages" => $mainpages];
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
    public function mainpages($slug)
    {
        $mainpage = Mainpages::where("slug", "=", $slug)->first();
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["mainpage" => $mainpage, "mainpages" => $mainpages, "scripts" => $scripts];
        return view('main.mainpages')->with($data);

    }
}
