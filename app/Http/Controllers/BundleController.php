<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bundle as Bundle;
use App\User as User;
use App\Workflow as Workflow;
use Validator;
use Image;
use Input;
use Session;
use DB;


class BundleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $bundles = Bundle::all();
        $data = ['bundles' => $bundles, "users" => $users];
        return view('admin.bundle.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['users' => $users, 'workflows' => $workflows];
        return view('admin.bundle.create')->with($data);
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

        $slug = Bundle::where('title', $request['title'])->get();
        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/bundle';
            $pathThumb = public_path() . '/assets/img/bundle/thumbnails/';
            $pathMedium = public_path() . '/assets/img/bundle/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/bundle/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(800, null, function ($constraint) {
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


        Bundle::create($input);

        Session::flash('flash_message', 'Bundle image successfully created!');

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
        $bundle = Bundle::FindOrFail($id);
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['bundle' => $bundle, 'users' => $users, 'workflows' => $workflows];
        return view('admin.bundle.edit')->with($data);
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

        $slugname = str_slug($request['title']);

        $input = $request->all();
        $bundle = Bundle::FindOrFail($id);

        $bundle->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/bundle';
            $pathThumb = public_path() . '/assets/img/bundle/thumbnails/';
            $pathMedium = public_path() . '/assets/img/bundle/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/bundle/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(800, null, function ($constraint) {
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


        $bundle->fill($input)->save();


        Session::flash('flash_message', 'Bundle successfully edited!');

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
        $bundle = Bundle::FindOrFail($id);

        if($bundle->image) {
            // Delete blog images
            $image = public_path() . '/assets/img/bundle/' . $bundle->image;
            $imagemedium = public_path() . '/assets/img/bundle/medium/' . $bundle->image;
            $imagethumb = public_path() . '/assets/img/bundle/thumbnails/' . $bundle->image;

            unlink($image);
            unlink($imagemedium);
            unlink($imagethumb);
        }


        $bundle->delete();
        return redirect('/admin/bundle');
    }
}
