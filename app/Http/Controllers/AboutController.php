<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainpages as Mainpages;
use App\Script as Script;

class AboutController extends Controller
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
        return view('main.about')->with($data);
    }
}