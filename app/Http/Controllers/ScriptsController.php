<?php

namespace App\Http\Controllers;

use App\Script;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ScriptsController extends Controller
{
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
        $scripts = Script::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.scripts.index')->with(['scripts' => $scripts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scripts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'code' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect('/admin/scripts/create')
                ->withErrors($errors)
                ->withInput();
        }

        Script::create([
            'name' => $request['name'],
            'code' => $request['code'],
            'status' => $request['status'],
            'role' => $request['role'],
        ]);

        Session::flash('flash_message', 'Script successfully created!');

        return redirect('/admin/scripts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $script = Script::find($id);
        return view('admin.scripts.edit')->with(['script' => $script]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request['id'];
        $script = Script::findOrFail($id);

        $errors = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'code' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect('/admin/scripts/' . $id . '/edit')
                ->withErrors($errors)
                ->withInput();
        }

        $script->fill($request->all())->save();
        Session::flash('flash_message', 'Script successfully edited!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $script = Script::find($id);
        $script->delete();
        return redirect('/admin/scripts');
    }
}
