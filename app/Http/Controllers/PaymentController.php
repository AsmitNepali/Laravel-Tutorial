<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function create() {
        return view('payment.create');
    }

    public function store() {
        request()->user()->notify(new PaymentReceived(900));
        return redirect('/payment/create')->with('message', 'Email sent!');
    }
}
