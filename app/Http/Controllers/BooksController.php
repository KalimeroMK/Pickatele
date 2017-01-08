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
        $data = ['categories' => $categories, 'genres' => $genre, 'users' => $users, 'workflows' => $workflows, 'countries' => $countries, 'bundles' => $bundles, 'levels' => $levels,'partners' => $partners];
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

        $slug = Book::where('title', htmlspecialchars_decode(str_replace('39','', $request['title'])))->get();

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
        $data = ['book' => $book, 'genres' => $genre, 'categories' => $categories, 'users' => $users, 'workflows' => $workflows, 'countries' => $countries, 'bundles' => $bundles, 'levels' => $levels,'partners' => $partners];
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
}
