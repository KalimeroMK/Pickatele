<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Workflow;
use Illuminate\Http\Request;
use App\Settings as Settings;
use App\User as User;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Session;

class SettingsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = Settings::first();
        $workflows = Workflow::all();
        $users = User::all();

        $data = ['users' => $users, "settings" => $settings, 'workflows' => $workflows];
        if (empty($settings)) {

            return view('admin.settings.create')->with($data);
        } else {
            $settings = Settings::first()->get();
            $data = ['users' => $users, "settings" => $settings, 'workflows' => $workflows];
            return view('admin.settings.index')->with($data);
        }
    }

    public function store(Request $request)
    {

        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'mainurl' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'logo' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $input = $request->all();


        if ($request->hasFile('logo')) {

            $image = $request->file('logo');
            $path = public_path() . '/assets/img/logo';
            $pathThumb = public_path() . '/assets/img/logo/thumbnails/';
            $pathMedium = public_path() . '/assets/img/logo/medium/';
            $ext = $image->getClientOriginalExtension();
            $imageName = 'logo.' . $ext;

            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/logo/' . $imageName;
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

            $input['logo'] = $image;
            $input['logomedium'] = $imagemedium;
            $input['logothumb'] = $imagethumb;

        }


        Settings::create($input);

        Session::flash('flash_message', 'Settings successfully created!');

        return redirect()->back();
    }

    public function edit($id)
    {
        $settings = Settings::FindOrFail($id);
        $workflows = Workflow::all();
        $users = User::all();
        $data = ['users' => $users, "settings" => $settings, 'workflows' => $workflows];
        return view('admin.settings.edit')->with($data);
    }

    public function update(Request $request)
    {

        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'mainurl' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $input = $request->all();
        $settings = Settings::FindOrFail($request->id);

        $settings->fill($input)->save();

        if ($request->hasFile('logo')) {

            $image = $request->file('logo');
            $path = public_path() . '/assets/img/logo';
            $pathThumb = public_path() . '/assets/img/logo/thumbnails/';
            $pathMedium = public_path() . '/assets/img/logo/medium/';
            $ext = $image->getClientOriginalExtension();
            $imageName = 'logo.' . $ext;

            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/logo/' . $imageName;
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

            $input['logo'] = $image;
            $input['logomedium'] = $imagemedium;
            $input['logothumb'] = $imagethumb;
        }


        $settings->fill($input)->save();


        Session::flash('flash_message', 'Settings successfully edited!');

        return redirect()->back();
    }
}
