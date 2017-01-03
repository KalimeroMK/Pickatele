<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Mainpages as Mainpages;
use App\Workflow as Workflow;
use Validator;
use Image;
use Session;
use DB;

class MainpagesController extends Controller
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
        $mainpages = Mainpages::paginate(10);
        $data = ["mainpages" => $mainpages];
        return view('admin.mainpages.index')->with($data);
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
        return view('admin.mainpages.create')->with($data);
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

        $slug = mainpage::where('title', $request['title'])->get();

        (int)$count = count($slug);

        if ($count > 0) $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();
        if(empty($request->metadesctiption))
        {

            $input['metadescription'] = $request->description;
        }

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/mainpages';
            $pathThumb = public_path() . '/assets/img/mainpages/thumbnails/';
            $pathMedium = public_path() . '/assets/img/mainpages/medium/';
            $ext = $image->getClientOriginalExtension();


            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/mainpage/' . $imageName;
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


        Mainpages::create($input);

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
        $mainpage = Mainpages::find($id);
        $data = ['mainpage' => $mainpage];
        return view('admin.mainpages.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mainpage = Mainpages::FindOrFail($id);
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['mainpage' => $mainpage, 'users' => $users, 'workflows' => $workflows];
        return view('admin.mainpage.edit')->with($data);
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

        $slug = DB::table('mainpage')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;


        $input = $request->all();
        $mainpage = Mainpages::FindOrFail($id);

        $mainpage->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/mainpage';
            $pathThumb = public_path() . '/assets/img/mainpage/thumbnails/';
            $pathMedium = public_path() . '/assets/img/mainpage/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/mainpage/' . $imageName;
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


        $mainpage->fill($input)->save();


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
        $mainpage = Mainpages::FindOrFail($id);

        if ($mainpage->image) {
            // Delete mainpage images
            $image = public_path() . '/assets/img/mainpage/' . $mainpage->image;
            $imagemedium = public_path() . '/assets/img/mainpage/medium/' . $mainpage->image;
            $imagethumb = public_path() . '/assets/img/mainpage/thumbnails/' . $mainpage->image;

            unlink($image);
            unlink($imagemedium);
            unlink($imagethumb);
        }


        $mainpage->delete();
        return redirect('/admin/mainpage');
    }
}
