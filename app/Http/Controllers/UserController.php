<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Image;

class UserController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $users = User::orderBy('created_at', 'asc')->paginate(10);
        $data = ['users' => $users];
        return view('admin.users.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('created_at', 'asc')->paginate(10);
        $data = ['status' => 'all', 'users' => $users];
        return view('admin.users.create')->with($data);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'role' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect('/admin/users/create')
                ->withErrors($errors)
                ->withInput();
        }

        $input = $request->all();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/avatars';
            $pathThumb = public_path() . '/assets/img/avatars/thumbnails/';
            $ext = $image->getClientOriginalExtension();
            $imageName = (rand(11111, 99999) . time()) . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/avatars/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagethumb->save($pathThumb . $imageName);


            $image = $request->image = $imageName;
            $imagethumb = $request->imagethumb = $imageName;

            $input['image'] = $image;
            $input['imagethumb'] = $imagethumb;

        }


        $input['password'] = Hash::make($input['password']);
        User::create($input);

        Session::flash('flash_message', 'Referral successfully created!');


        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        $data = ['user' => $user];

        return view('admin.users.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $data = ['user' => $user];
        return view('admin.users.edit')->with($data);
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
        $user = User::findOrFail($id);


        $errors = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|',
            'role' => 'required',
            'password' => 'confirmed|min:6',
        ]);

        if ($errors->fails()) {
            return redirect('/admin/users/' . $id . '/edit')
                ->withErrors($errors)
                ->withInput();
        }


        if (trim(Input::get('password')) == '') {
            $request = Input::except('password', 'password_confirmation');
        } else {
            $request = Input::all();
            $request['password'] = Hash::make($request['password']);
        }


        $user->fill($request)->save();

        if (Input::hasFile('image')) {

            $image = Input::file('image');
            $path = public_path() . '/assets/img/avatars';
            $pathThumb = public_path() . '/assets/img/avatars/thumbnails/';
            $ext = $image->getClientOriginalExtension();
            $imageName = (rand(11111, 99999) . time()) . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/avatars/' . $imageName;

            $imagethumb = Image::make($findimage)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->fit(200);


            $imagethumb->save($pathThumb . $imageName);


            $user->imagethumb = $imageName;
            $user->image = $imageName;
            $user->save();
        }

        Session::flash('flash_message', 'User successfully edited!');

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
        $user = User::FindOrFail($id);
        if ($user->image) {
            // Delete user images
            $image = public_path() . '/assets/img/avatars/' . $user->image;
            $imagethumb = public_path() . '/assets/img/avatars/thumbnails/' . $user->imagethumb;
            unlink($image);
            unlink($imagethumb);
        }
        $user->delete();
        return redirect('/admin/users');

    }
}
