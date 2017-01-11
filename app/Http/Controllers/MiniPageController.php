<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainpages as Mainpages;
use App\Script as Script;
use App\Faq as Faq;

class MiniPageController extends Controller
{

    private function getData() {
        $faqs = Faq::take(2)->get();
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["faqs" => $faqs,"scripts" => $scripts, "mainpages" => $mainpages];
        return $data;
    }

    public function about()
    {
        return view('main.about')->with($this->getData());
    }

    public function help()
    {
        $data = $this->getData();
        $data["faqs"] = Faq::where("status", "=", 1)->get();
        return view('main.help-center')->with($data);
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