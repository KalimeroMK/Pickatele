<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Mainpages as Mainpages;
use App\Slider as Slider;
use App\Script as Script;

class BookController extends Controller
{
    /**
     * Show the books index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["scripts" => $scripts, "mainpages" => $mainpages];
        return view('main.books')->with($data);
    }

    public function getBook()
    {
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["scripts" => $scripts, "mainpages" => $mainpages];
        return view('main.book')->with($data);
    }
}