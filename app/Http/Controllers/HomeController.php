<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function PaymentPlaneShow($packagePrice){
        return view('PaymentCard',compact('packagePrice'));

    }
    public function PaymentDone($packagePrice){
        $stringWithoutComma = str_replace(',', '', $packagePrice);
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Make Payment',
                        ],
                        'unit_amount' => $stringWithoutComma,
                    ],
                    'quantity' => 1,
                    ]
                ],
                'mode'  => 'payment',
                'success_url' => route('index'),
                'cancel_url' => route('about'),
        ]);
        // dd($session->toArray());
        return redirect('/')->with('success','Congratulation! Your Payment Succesfully Done..........Your Package Successfully Reserved');;


    }

}
