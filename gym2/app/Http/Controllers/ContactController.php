<?php


namespace App\Http\Controllers;
use App\Mail\ContactMessage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            '_subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('_subject');
        $messageBody = $request->input('message');

        Mail::to(config('mail.admin_email'))->send(new ContactMessage($name, $email, $subject, $messageBody));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
