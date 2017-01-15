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

class BookController extends Controller
{
    public function index()
    {
        $genres = Genre::pluck('name', 'id');
        $genres->prepend('Select Genre');
        $countries = Country::pluck('name', 'id');
        $countries->prepend('Select Country');

        $bundles = Bundle::pluck('title', 'id');
        $bundles->prepend('Select Bundles');

        $levels = Level::pluck('name', 'id');
        $levels->prepend('Select Levels');

        $partners = Partner::pluck('title', 'id');
        $partners->prepend('Select Partner');

        $books = Books::orderBy('created_at', 'asc')->paginate(9);
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $faqs = Faq::take(3)->get();
        $data = [
            "books" => $books, "scripts" => $scripts, "mainpages" => $mainpages,
            "levels" => $levels, "genres" => $genres, "countries" => $countries, "bundles" => $bundles,
            "partners" => $partners, "faqs" => $faqs
        ];
        return view('main.books')->with($data);
    }

    public function filter(Request $request)
    {
        $builder = Books::query();
        $term = $request->all();
        $order = 'id';
        $direction = 'asc';

        if(!empty($term['genre'])){
            $builder->where('categories_id','=',$term['genre']);
        }
        if(!empty($term['partner'])){
            $builder->where('partner_id','=',$term['partner']);
        }
        if(!empty($term['bundle'])){
            $builder->where('bundle_id','=',$term['bundle']);
        }
        if(!empty($term['level'])){
            $builder->where('level_id','=',$term['level']);
        }
        if(!empty($term['age-range'])){
            $builder->where('age','>=',$term['age-range']);
        }
        if(!empty($term['bundle'])){
            $builder->where('bundle_id','>=',$term['bundle']);
        }
        if(!empty($term['letter'])){
            $builder->where('title', 'like', $term['letter'].'%');
        }
        if(!empty($term['radio-filter'])){
            if($term['radio-filter'] === 'newest') {
                $order = 'created_at';
                $direction = 'desc';
            }
        }
        $result = $builder->orderBy($order, $direction)->paginate(9);
        return view('main.partials.book-results')->with(["books" => $result]);
    }

    public function getBook($slug)
    {
        $book = Books::where('slug', '=', $slug)->first();
        $partnerid = $book[0]['partner_id'];
        $faqs = Faq::take(3)->get();
        $bookid = $book->id;
        $bookimages = Sliders::where('book_id', '=', $bookid)->get();
        $books = Books::where('partner_id', '=', $partnerid)->get();
        $relatedbook =
            Books::where('categories_id', '=', $book->categories_id)
                ->where('id', '!=', $book->id)
                ->get();
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["faqs" => $faqs,"scripts" => $scripts, "mainpages" => $mainpages, "book" => $book, "books" => $books, "bookimages" => $bookimages, "relatedbooks" => $relatedbook];
        return view('main.book')->with($data);
    }
}