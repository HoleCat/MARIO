<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceivedCall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailCallController extends Controller
{
    public function store(Request $request) {
        
        $msg = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone-number' => 'required',
            'Subject' => 'required',
            'message' => 'required|min:30|max:200'
        ]);
        
        Mail::to(env('MAIL_TO_ADRESS'))->queue(new MessageReceivedCall($msg));
        //return $request->email;
        return view('app');
    }
}
