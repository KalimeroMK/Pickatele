<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Genre as Genre;
use Baum;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use App\Sliders as Slider;
use App\User as User;
use App\Country as Country;
use App\Workflow as Workflow;
use Input;
use DB;

class GenreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $genres = Genre::roots()->get();
        $list = Genre::getTree($genres);
        $data = ['list' => $list];
        return view('admin.genre.index')->with($data);
    }

    public function create()
    {
        $cat = Genre::first();
        if (empty($cat)) {
            return view('admin.genre.create')->with(['status' => false]);
        }
        $genres = Genre::roots()->with('children')->first()->all();
        $data = ['status' => true, 'genres' => $genres];
        return view('admin.genre.create')->with($data);

    }


    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['slug'] = str_slug($request['name']);
        $slug = Genre::where('name', $request['name'])->get();
        if ($slug) {
            $request['slug'] = $request['slug'] . '-' . count($slug);
        }

        $input = $request->all();




        if ($input['parent_id'] == "null") {
           Genre::create(['name' => $input['name'], 'slug' => $input['slug']]);
        } else {
            $child = Genre::create(['name' => $input['name'], 'slug' => $input['slug']]);
            $child->makeChildOf($input['parent_id']);
        }


        Session::flash('flash_message', 'Genre was successfully updated!');

        return redirect()->back();


        return redirect('/admin/genre');
    }

    public function show($id)
    {
        $genre = Genre::FindOrFail($id);
        $data = ['category' => $genre];
        return view('admin.genre.show')->with($data);
    }

    public function edit($id)
    {
        $genres = Genre::roots()->with('children')->first()->all();
        $genre = Genre::FindOrFail($id);
        $data = ['genre' => $genre, 'genres' => $genres];
        return view('admin.genre.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $errors = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }

        $genre = Genre::FindOrFail($id);
        $request['slug'] = str_slug($request['name']);
        $slug = Genre::where('name', $request['name'])->get();

        $input = $request->all();

        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/categories';
            $pathThumb = public_path() . '/assets/img/categories/thumbnails/';
            $pathMedium = public_path() . '/assets/img/categories/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['name']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['name']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/categories/' . $imageName;
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


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path() . '/assets/files/categories';
            $ext = $file->getClientOriginalExtension();
            $fileName = str_slug($request->filename) . rand(1000, 10000) . '.' . $ext;
            $file->move($path, $fileName);
            $input['file'] = $request->file = $fileName;
        }


        $genre->fill($input)->save();

        Session::flash('flash_message', 'Genre successfully edited!');

        return redirect('/admin/genre');
    }

    public function destroy($id)
    {
        $genre = Genre::FindOrFail($id);
        $genre->delete();
        return redirect('/admin/genre');
    }
}
