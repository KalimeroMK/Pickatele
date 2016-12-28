<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Slider as Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $staticpages = StaticPage::all();
        $data = ["staticpages" => $staticpages, "sliders" => $sliders];
        return view('main.home')->with($data);
    }

    public function staticpages($slug)
    {
        $staticpage = StaticPage::where("slug", "=", $slug)->first();
        $staticpages = StaticPage::all();
        $data = ["staticpage" => $staticpage, "staticpages" => $staticpages];
        return view('main.staticpage')->with($data);

    }
}
