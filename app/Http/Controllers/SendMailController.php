<?php

namespace App\Http\Controllers;

use App\Mail\AfricaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('sendmail.index');
    }

    public function sendMail() {
        Mail::to('doo@gmail.com')->send(new AfricaMail());
    }
}
