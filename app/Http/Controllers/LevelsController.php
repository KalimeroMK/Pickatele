<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Levels as Levels;
use Baum;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use App\Sliders as Slider;
use App\User as User;
use App\Country as Country;
use App\Workflow as Workflow;
use Input;
use DB;

class LevelsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $levels = Levels::roots()->get();
        $list = Levels::getTree($levels);
        $data = ['list' => $list];
        return view('admin.levels.index')->with($data);
    }

    public function create()
    {
        $cat = Levels::first();
        if (empty($cat)) {
            return view('admin.levels.create')->with(['status' => false]);
        }
        $levels = Levels::roots()->with('children')->first()->all();
        $data = ['status' => true, 'levels' => $levels];
        return view('admin.levels.create')->with($data);

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
        $slug = Levels::where('name', $request['name'])->get();
        if ($slug) {
            $request['slug'] = $request['slug'] . '-' . count($slug);
        }

        $input = $request->all();




        if ($input['parent_id'] == "null") {
            Levels::create(['name' => $input['name'], 'slug' => $input['slug']]);
        } else {
            $child = Levels::create(['name' => $input['name'], 'slug' => $input['slug']]);
            $child->makeChildOf($input['parent_id']);
        }


        Session::flash('flash_message', 'Levels was successfully updated!');

        return redirect()->back();


        return redirect('/admin/levels');
    }

    public function show($id)
    {
        $level = Levels::FindOrFail($id);
        $data = ['category' => $level];
        return view('admin.levels.show')->with($data);
    }

    public function edit($id)
    {
        $levels = Levels::roots()->with('children')->first()->all();
        $level = Levels::FindOrFail($id);
        $data = ['level' => $level, 'levels' => $levels];
        return view('admin.levels.edit')->with($data);
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

        $level = Levels::FindOrFail($id);
        $request['slug'] = str_slug($request['name']);
        $slug = Levels::where('name', $request['name'])->get();

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


        $level->fill($input)->save();

        Session::flash('flash_message', 'Levels successfully edited!');

        return redirect('/admin/levels');
    }

    public function destroy($id)
    {
        $level = Levels::FindOrFail($id);
        $level->delete();
        return redirect('/admin/levels');
    }
}
