<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Mail\About;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function sendContact(Request $request)
    {

        $data = $request->all();
        $errors = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'interest' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($errors->fails()) {
            return redirect('/contact')
                ->withErrors($errors)
                ->withInput();
        }

        Mail::to("kpapazov@gmail.com")->send(new About($data));
        Session::flash('flash_message', 'Email successfully sent!');
        return redirect('/contact');
    }

    public function sendAbout(Request $request)
    {

        $data = $request->all();
        $errors = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'interest' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($errors->fails()) {
            return redirect('/about')
                ->withErrors($errors)
                ->withInput();
        }

        Mail::to("kpapazov@gmail.com")->send(new About($data));
        Session::flash('flash_message', 'Email successfully sent!');
        return redirect('/about');
    }
}
