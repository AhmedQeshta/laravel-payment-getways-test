<?php

namespace App\Http\Controllers;

class PaymentController extends Controller
{
    public function pay()
    {
        $payLink = auth()->user()->charge(14.99, "Pay by paddle");

        return view("payments.billing", compact('payLink'));
    }//end pay function
}
