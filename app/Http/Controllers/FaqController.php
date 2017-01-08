<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
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
        $faqs = Faq::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.faq.index')->with(['faqs' => $faqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
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
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect('/admin/faq/create')
                ->withErrors($errors)
                ->withInput();
        }

        Faq::create([
            'question' => $request['question'],
            'answer' => $request['answer'],
            'status' => $request['status'],
        ]);

        Session::flash('flash_message', 'Faq successfully created!');

        return redirect('/admin/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.edit')->with(['faq' => $faq]);
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
        $faq = Faq::findOrFail($id);

        $errors = Validator::make($request->all(), [
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect('/admin/faq/' . $id . '/edit')
                ->withErrors($errors)
                ->withInput();
        }

        $faq->fill($request->all())->save();
        Session::flash('flash_message', 'Faq successfully edited!');

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
        $script = Faq::find($id);
        $script->delete();
        return redirect('/admin/faq');
    }
}
