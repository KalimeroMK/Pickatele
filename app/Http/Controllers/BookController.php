<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staticpage as StaticPage;
use App\Mainpages as Mainpages;
use App\Slider as Slider;
use App\Script as Script;
use App\Books as Books;
use App\Sliders as Sliders;

class BookController extends Controller
{
    /**
     * Show the books index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::orderBy('created_at', 'asc')->paginate(12);
        $mainpages = Mainpages::all();
        $scripts = Script::where("status", "=", 1)->get();
        $data = ["books" => $books,"scripts" => $scripts, "mainpages" => $mainpages];
        return view('main.books')->with($data);
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