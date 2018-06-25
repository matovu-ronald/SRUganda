<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Notifications\Feedback;
use Config;
use Illuminate\Http\Request;
use Mail;


class ContactController extends Controller
{
    public function send(Request $request)
    {
    	$inputs = $request->all();

    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required',
    		'message' => 'required',
    	]);

    	$name = $inputs['name'];
    	$email = $inputs['email'];
    	$phone = $inputs['phone'];
    	$message = $inputs['message'];

    	$sendTo = Config::get('settings.email_one');

    	Mail::to($sendTo)->send(new Contact($name, $email, $phone, $message));
        \Notification::route('mail', $email)->notify(new Feedback());

    	return back()->withSuccess('Thanks for contacting us. We shall reply you ASAP');

    }
}
