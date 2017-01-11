<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Mainpages as Mainpages;
use App\Slider as Slider;
use App\Script as Script;
use App\Books as Books;
use App\Sliders as Sliders;
use App\Genre as Genre;
use App\Country as Country;
use App\Bundle as Bundle;
use App\Levels as Level;
use App\Partner as Partner;
use App\Faq as Faq;
use Illuminate\Contracts\Pagination;
use DB;

class HelpCenterController extends Controller
{
    /**
     * Search the specified resource from storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $results = Faq::where('question', 'like', '%'.$request['q'].'%')
                ->orWhere('answer', 'like', '%'.$request['q'].'%')->get();

        return view('main.partials.help-center-accordion')->with(['faqs' => $results]);
    }
}