<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainpages as Mainpages;
use App\Script as Script;

class MiniPageController extends Controller
{

    private function getData() {
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["scripts" => $scripts, "mainpages" => $mainpages];
        return $data;
    }

    public function about()
    {
        return view('main.about')->with($this->getData());
    }

    public function copyright()
    {
        return view('main.copyright')->with($this->getData());
    }

    public function careers()
    {
        return view('main.careers')->with($this->getData());
    }

    public function terms()
    {
        return view('main.terms')->with($this->getData());
    }

    public function privacy()
    {
        return view('main.privacy')->with($this->getData());
    }
}