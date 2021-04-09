<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function create() {
        return view('payment.create');
    }

    public function store() {
        ProductPurchased::dispatch('toy');
        // event(new ProductPurchased('toy'));
        dd();
        request()->user()->notify(new PaymentReceived(900));
        return redirect('/payment/create')->with('message', 'Email sent!');
    }
}
