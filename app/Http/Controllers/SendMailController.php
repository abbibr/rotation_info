<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function store(Request $request) {
        $user = [
            'email' => 'abbosovibrohim183@gmail.com'
        ];

        Mail::to($user)->send(new ContactMail($request->all()));

        return redirect()->back();
    }
}
