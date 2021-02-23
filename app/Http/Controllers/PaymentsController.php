<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');// resources/views/payments/create.blade.php
    }


    public function store()
    {
        request()->user()->notify(new PaymentReceived(900));
//        Notification::send(request()->user(), new PaymentReceived());
//        return view('payments.create');// resources/views/payments/create.blade.php
    }
}
