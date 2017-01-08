<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Partner as Partner;
use App\User as User;
use App\Workflow as Workflow;
use Validator;
use Image;
use Input;
use Session;
use DB;


class PartnerController extends Controller
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
        $partners = Partner::all();
        $data = ['partners' => $partners, "users" => $users];
        return view('admin.partners.index')->with($data);
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
        return view('admin.partners.create')->with($data);
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

        $slug = Partner::where('title', $request['title'])->get();
        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/partners';
            $pathThumb = public_path() . '/assets/img/partners/thumbnails/';
            $pathMedium = public_path() . '/assets/img/partners/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/partners/' . $imageName;
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


        Partner::create($input);

        Session::flash('flash_message', 'Partner image successfully created!');

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
        $partner = Partner::FindOrFail($id);
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['partner' => $partner, 'users' => $users, 'workflows' => $workflows];
        return view('admin.partners.edit')->with($data);
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
        $partner = Partner::FindOrFail($id);

        $partner->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/partners';
            $pathThumb = public_path() . '/assets/img/partners/thumbnails/';
            $pathMedium = public_path() . '/assets/img/partners/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/partners/' . $imageName;
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


        $partner->fill($input)->save();


        Session::flash('flash_message', 'Partner successfully edited!');

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
        $partner = Partner::FindOrFail($id);

        if($partner->image) {
            // Delete blog images
            $image = public_path() . '/assets/img/partners/' . $partner->image;
            $imagemedium = public_path() . '/assets/img/partners/medium/' . $partner->image;
            $imagethumb = public_path() . '/assets/img/partners/thumbnails/' . $partner->image;

            unlink($image);
            unlink($imagemedium);
            unlink($imagethumb);
        }


        $partner->delete();
        return redirect('/admin/partner');
    }
}
