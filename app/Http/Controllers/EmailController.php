<?php

namespace App\Http\Controllers;

use App\Mail\Inquiry;

use Illuminate\Http\Request;
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

        $data["title"] = "New message from Contact us page";

        Mail::to("martin@myhost.mk")->send(new Inquiry($data));
        Session::flash('flash_message', 'Email successfully sent!');
        return redirect('/contact');
    }

    public function sendJob(Request $request)
    {

        $data = $request->all();
        $errors = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'cv' => 'required|file',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($errors->fails()) {
            return redirect('/jobs')
                ->withErrors($errors)
                ->withInput();
        }

        $data["title"] = "New message from Jobs page";

        Mail::to("martin@myhost.mk")->send(new Inquiry($data));
        Session::flash('flash_message', 'Email successfully sent!');
        return redirect('/jobs');
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

        $data["title"] = "New message from About us page";

        Mail::to("martin@myhost.mk")->send(new Inquiry($data));
        Session::flash('flash_message', 'Email successfully sent!');
        return redirect('/about');
    }

    public function sendPartners(Request $request)
    {

        $data = $request->all();
        $errors = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'partnership-type' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($errors->fails()) {
            return redirect('/partners')
                ->withErrors($errors)
                ->withInput();
        }

        $data["title"] = "New message from Partners page";

        Mail::to("martin@myhost.mk")->send(new Inquiry($data));
        Session::flash('flash_message', 'Email successfully sent!');
        return redirect('/partners');
    }

}
