<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Orders;

class StripeController extends Controller
{
    public function checkout()
    {
        return redirect('meals')->with('message', 'payments Failed');
    }

    public function session($price)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'You need to pay',
                        ],
                        'unit_amount' => $price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        $cards = Card::all();

        foreach ($cards as $card) {
            $order = new Orders;
            $order->product_name = $card->product_name;
            $order->phone = $card->phone;
            $order->adress = $card->adress;
            $order->quantity = $card->quantity;
            $order->price = $card->price;
            $order->updated_at = $card->updated_at;
            $order->created_at = $card->created_at;
            $order->save();
        }
        Card::truncate();
        return redirect('meals')->with('message', 'Payment succed. We will contact you soon');
    }
}