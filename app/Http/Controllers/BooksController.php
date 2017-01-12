<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Books as Book;
use App\Workflow as Workflow;
use App\Bundle as Bundle;
use App\User as User;
use App\Country as Country;
use App\Levels as Level;
use App\Partner as Partner;
use App\Genre as Genre;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Session;
use DB;
use Curl;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'asc')->paginate(10);
        $data = ['books' => $books];
        return view('admin.book.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Bundle::get();
        $genre = Genre::get();
        $users = User::get();
        $countries = Country::all();
        $bundles = Bundle::all();
        $levels = Level::all();
        $partners = Partner::all();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['categories' => $categories, 'genres' => $genre, 'users' => $users, 'workflows' => $workflows, 'countries' => $countries, 'bundles' => $bundles, 'levels' => $levels, 'partners' => $partners];
        return view('admin.book.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);

        $slug = Book::where('title', str_replace('39', '', $request['title']))->get();

        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/books';
            $pathThumb = public_path() . '/assets/img/books/thumbnails/';
            $pathMedium = public_path() . '/assets/img/books/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/books/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

        }


        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imagethumb;


        $book = Book::create($input);

        Session::flash('flash_message', 'Book successfully created!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::FindOrFail($id);
        $categories = Bundle::get();
        $genre = Genre::get();
        $users = User::get();
        $countries = Country::all();
        $bundles = Bundle::all();
        $levels = Level::all();
        $partners = Partner::all();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['book' => $book, 'genres' => $genre, 'categories' => $categories, 'users' => $users, 'workflows' => $workflows, 'countries' => $countries, 'bundles' => $bundles, 'levels' => $levels, 'partners' => $partners];
        return view('admin.book.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);

        $slug = DB::table('book')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;


        $input = $request->all();
        $book = Book::FindOrFail($id);

        $book->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/books';
            $pathThumb = public_path() . '/assets/img/books/thumbnails/';
            $pathMedium = public_path() . '/assets/img/books/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/books/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;


            $input['image'] = $image;
            $input['imagemedium'] = $imagemedium;
            $input['imagethumb'] = $imagethumb;

        }


        $book->fill($input)->save();


        Session::flash('flash_message', 'Book successfully edited!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::FindOrFail($id);
        if ($book->image) {
            // Delete blog images
            $image = public_path() . '/assets/img/books/' . $book->image;
            $imagemedium = public_path() . '/assets/img/books/medium/' . $book->image;
            $imagethumb = public_path() . '/assets/img/books/thumbnails/' . $book->image;

            unlink($image);
            unlink($imagemedium);
            unlink($imagethumb);
        }


        $book->delete();
        return redirect('/admin/book');
    }

    public function getBooks()
    {
        $apikey = "developer";
        $countrycode = "en|cn|sv|no|da";
        $partner = "pickatale";
        $data = ["api_key" => $apikey, "country_code" => $countrycode, "partner" => $partner];
        $books = Curl::to('http://dev.pickatale.com:9001/list_book_json')
            ->withData($data)
            ->containsFile()
            ->asJson()
            ->get();

        foreach ($books as $book) {


            // Book check
            $checkbook = Book::where("title", "=", $book->book_name)->first();

            if (!$checkbook && $book->country_code === "EN") {
                // Get values from API
                $reference = $book->reference;
                $country_code = $book->country_code;
                $url_commun_file = basename($book->url_commun_file);
                $url_language_file = basename($book->url_language_file);
                $url_cover_img = $book->url_cover_img;
                $book_name = $book->book_name;
                $img = basename($book->url_cover_img);
                $ext = explode('.', $img);
                $ext = $ext[1];
                $bookslug = str_slug($book_name);

                $imageName = $bookslug . '.' . $ext;
                $path = public_path() . '/assets/img/books/thumbnails/';

                $downloadbookimage = Curl::to($url_cover_img)
                    ->withContentType('image/' . $ext)
                    ->download(public_path() . '/assets/img/books/downloads/' . $bookslug . '.' . $ext);


                $findimage = public_path() . '/assets/img/books/downloads/' . $bookslug . '.' . $ext;
                $image = Image::make($findimage);

                $image->save($path . $imageName);

                /*
                $downloadbookfile = Curl::to($book->url_commun_file)
                ->withContentType('application/zip')
                ->download(public_path() . '/assets/img/books/downloads/files/'.$bookslug.'-'.$url_commun_file);

                $downloadlanguagefile = Curl::to($book->url_language_file)
                    ->withContentType('application/zip')
                    ->download(public_path() . '/assets/img/books/downloads/files/'.$bookslug.'-'.$url_language_file);
                */

                $imagename = $bookslug . $ext;
                $book_language = $book->book_language;
                $description_short = $book->description_short;
                $description = $book->description;
                $date_create = $book->date_create;
                $date_update = $book->date_update;
                $age = trim($book->age, "+");
                $backend_version = $book->backend_version;
                $atos = $book->atos;
                $lexile = $book->lexile;
                $isFree = $book->isFree;
                $isPreview = $book->isPreview;
                $coverCorrect = $book->coverCorrect;
                $isChoose = $book->isChoose;
                $priority = $book->priority;
                $freebook = $book->freebook;

                // End of get values from Api

                $categories = $book->categories; // array

                $levels = array();
                $genres = array();

                foreach ($categories as $index => $category) {


                    if ($index == 0) {
                        $level = Level::where("name", "=", $category)->first();
                        if (!$level) {
                            $level = new Level();
                            $level->name = $category;
                            $level->slug = str_slug($category);
                            $level->save();

                            $level_id = $level->id;
                        } else {
                            $level_id = $level->id;
                        }
                    } else {
                        $genre = Genre::where("name", "=", $category)->first();
                        if (!$genre) {
                            $genre = new Genre();
                            $genre->name = $category;
                            $genre->slug = str_slug($category);
                            $genre->save();
                            $genre_id = $genre->id;

                        } else {
                            $genre_id = $genre->id;
                        }
                    }
                }

                // Setup new book to database





                $newbook = new Book();
                $newbook->title = $book_name;
                $newbook->slug = str_slug($book_name);
                $newbook->partner_id = 1;
                $newbook->bundle_id = 1;
                $newbook->country_code = $country_code;
                $newbook->country_id = 840;
                $newbook->book_language = $book_language;
                $newbook->url_commun_file = $book->url_commun_file;
                $newbook->url_language_file = $book->url_language_file;
                $newbook->image = $imageName;
                $newbook->imagethumb = $imageName;
                $newbook->imagemedium = $imageName;
                $newbook->book_language = $book_language;
                $newbook->description_short = $description_short;
                $newbook->description = $description;
                $newbook->level_id = $level_id;
                $newbook->categories_id = $genre_id;
                $newbook->age = $age;
                $newbook->backend_version = $backend_version;
                $newbook->atos = $atos;
                $newbook->lexile = $lexile;
                $newbook->isFree = $isFree;
                $newbook->isPreview = $isPreview;
                $newbook->coverCorrect = $coverCorrect;
                $newbook->isChoose = $isChoose;
                $newbook->priority = $priority;
                $newbook->freebook = $freebook;
                $newbook->user_id = 1;
                $newbook->video = "";
                $newbook->author = "";
                $newbook->workflow_id = 1;
                $newbook->created_at = $date_create;
                $newbook->updated_at = $date_update;

                $newbook->save();

                //  dd($newbook);
                // End of setup
            }


        }

    }
}
