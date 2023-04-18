<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Meals;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CardController extends Controller
{
    public function addcard(Request $request, $id)
    {
        if (auth::id()) {
            $meal = Meals::find($id);
            $user = auth()->user();
            $card = new Card;
            $card->phone = $user->phone;
            $card->id_user = $user->id;
            $card->adress = $user->adress;
            $card->product_name = $meal->name;
            $p = $meal->price;
            $card->quantity = $request->quantity;
            $card->price = $card->quantity * $p;
            $card->save();
            return redirect('card');
        }
    }
    public function deletecard($id)
    {

        $prod = Card::find($id);
        $prod->delete();
        return redirect('card');


    }



}