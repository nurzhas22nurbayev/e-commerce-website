<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('base');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);
        
        $data = array(
            'email' =>  $request->email
        );

        
        Mail::to($data['email'])->send(new SendMail($data));
        return back()->with('success', 'Thanks for joining us !');   
    }
}
