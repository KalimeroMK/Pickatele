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
use Illuminate\Contracts\Pagination;
use DB;

class BookController extends Controller
{
    public function index()
    {
        $genres = Genre::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        $bundles = Bundle::pluck('title', 'id');
        $levels = Level::pluck('name', 'id');
        $partners = Partner::pluck('title', 'id');

        $books = Books::orderBy('created_at', 'asc')->paginate(12);
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = [
            "books" => $books, "bookpaginator" => $books, "scripts" => $scripts, "mainpages" => $mainpages,
            "levels" => $levels, "genres" => $genres, "countries" => $countries, "bundles" => $bundles,
            "partners" => $partners
        ];
        return view('main.books')->with($data);
    }

    public function filter(Request $request)
    {
        $builder = Books::query();
        $term = $request->all();
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
        $result = $builder->orderBy('id')->paginate(12);
        $data = ["books" => $result, "bookpaginator" => $result];
        return view('main.books.ajax')->with($data);
    }

    public function getBook($slug)
    {
        $book = Books::where('slug', '=', $slug)->first();
        $partnerid = $book[0]['partner_id'];
        $bookid = $book->id;
        $bookimages = Sliders::where('book_id', '=', $bookid)->get();
        $books = Books::where('partner_id', '=', $partnerid)->get();
        $relatedbook =
            Books::where('categories_id', '=', $book->categories_id)
                ->where('id', '!=', $book->id)
                ->get();
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["scripts" => $scripts, "mainpages" => $mainpages, "book" => $book, "books" => $books, "bookimages" => $bookimages, "relatedbooks" => $relatedbook];
        return view('main.book')->with($data);
    }
}