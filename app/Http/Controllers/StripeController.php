<?php

namespace App\Http\Controllers;

use App\Models\Abonnements;
use App\Models\Offers;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Orders;

class StripeController extends Controller
{
    public function checkout()
    {
        return redirect('card')->with('message', 'payments Failed');
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
            $order->id_user = $card->id_user;
            $order->updated_at = $card->updated_at;
            $order->created_at = $card->created_at;
            $order->save();
        }
        Card::truncate();
        return redirect('card')->with('message', 'Payment succed. We will contact you soon');
    }



    public function payforoffer(Request $request, $price)
    {

        $id = $request->id_offer;
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
            'success_url' => route('offer_success', $id),
            'cancel_url' => route('offer_failed'),
        ]);

        return redirect()->away($session->url);

    }

    public function offer_failed()
    {
        return redirect('offers')->with('message', 'payments Failed');
    }


    public function offer_success($id)
    {
        $offer = Offers::find($id);
        $user = auth()->user();
        $abnmt = new Abonnements;
        $abnmt->name_user = $user->fullname;
        $abnmt->price = $offer->price;
        $abnmt->duration = $offer->duration;
        $abnmt->category = $offer->category;
        $abnmt->description = $offer->description;
        $abnmt->save();


        return redirect('offers')->with('message', 'payments Failed');
    }



}