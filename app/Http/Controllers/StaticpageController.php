<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Staticpage as StaticPage;
use App\Workflow as Workflow;
use Validator;
use Image;
use Session;
use DB;

class StaticpageController extends Controller
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
        $staticpage = Staticpage::paginate(10);
        $data = ["staticpages" => $staticpage];
        return view('admin.staticpage.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $workflows = Workflow::get();
        $data = ["users" => $users, "workflows" => $workflows];
        return view('admin.staticpage.create')->with($data);
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
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);

        $slug = Staticpage::where('title', $request['title'])->get();

        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();
        if(empty($request->metadesctiption))
        {

            $input['metadescription'] = $request->description;
        }

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/staticpage';
            $pathThumb = public_path() . '/assets/img/staticpage/thumbnails/';
            $pathMedium = public_path() . '/assets/img/staticpage/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/staticpage/' . $imageName;
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


        Staticpage::create($input);

        Session::flash('flash_message', 'Static Page successfully created!');

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
        $staticpage = Staticpage::find($id);
        $data = ['staticpage' => $staticpage];
        return view('admin.staticpage.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staticpage = Staticpage::FindOrFail($id);
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['staticpage' => $staticpage, 'users' => $users, 'workflows' => $workflows];
        return view('admin.staticpage.edit')->with($data);
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

        $slug = DB::table('staticpage')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;


        $input = $request->all();
        $staticpage = Staticpage::FindOrFail($id);

        $staticpage->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/staticpage';
            $pathThumb = public_path() . '/assets/img/staticpage/thumbnails/';
            $pathMedium = public_path() . '/assets/img/staticpage/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/staticpage/' . $imageName;
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


        $staticpage->fill($input)->save();


        Session::flash('flash_message', 'Static page successfully edited!');

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
        $staticpage = Staticpage::FindOrFail($id);

        if ($staticpage->image) {
            // Delete staticpage images
            $image = public_path() . '/assets/img/staticpage/' . $staticpage->image;
            $imagemedium = public_path() . '/assets/img/staticpage/medium/' . $staticpage->image;
            $imagethumb = public_path() . '/assets/img/staticpage/thumbnails/' . $staticpage->image;

            unlink($image);
            unlink($imagemedium);
            unlink($imagethumb);
        }


        $staticpage->delete();
        return redirect('/admin/staticpage');
    }
}
