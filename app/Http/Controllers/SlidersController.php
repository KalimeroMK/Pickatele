<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sliders as Slider;
use App\User as User;
use App\Country as Country;
use App\Category as Category;
use App\Books as Book;
use App\Workflow as Workflow;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Session;
use DB;


class SlidersController extends Controller
{

    public function index($id)
    {
        $book = Book::FindOrFail($id);
        $users = User::all();
        $sliders = Slider::where('book_id', '=', $id)->get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['workflows' => $workflows, 'sliders' => $sliders, "users" => $users, "book" => $book];

        return view('admin.sliders.create')->with($data);
    }


    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'image' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $input = $request->all();


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/sliders';
            $pathThumb = public_path() . '/assets/img/sliders/thumbnails/';
            $pathMedium = public_path() . '/assets/img/sliders/medium/';
            $ext = $image->getClientOriginalExtension();


            $imageName = rand(1003332, 1003332443434) . '.' . strtolower($ext);


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/sliders/' . $imageName;
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


        Slider::create($input);

        Session::flash('flash_message', 'Slider image successfully created!');

        return redirect()->back();
    }


    public function destroy(Request $request)
    {
        $slider = Slider::FindOrFail($request['id']);

        // Delete blog images
        $image = public_path() . '/assets/img/sliders/' . $slider->image;
        $imagemedium = public_path() . '/assets/img/sliders/medium/' . $slider->image;
        $imagethumb = public_path() . '/assets/img/sliders/thumbnails/' . $slider->image;

        unlink($image);
        unlink($imagemedium);
        unlink($imagethumb);

        $slider->delete();
        return redirect()->back();
    }
}
