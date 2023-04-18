<?php

namespace App\Http\Controllers;

use App\Models\Abonnements;
use App\Models\Meals;
use App\Models\Offers;
use App\Models\Card;
use App\Models\Catmeals;
use App\Models\Catoffers;
use App\Models\Orders;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function home()
    {

        return view('home');
    }

    public function about()
    {

        return view('about');
    }

    public function meals()
    {

        $meals = Meals::all();
        return view('meals', ['meals' => $meals]);
    }

    public function editmeal($id)
    {

        $catmeals = Catmeals::all();
        $meals = Meals::where('id', $id)->get();
        return view('editmeal', ['meals' => $meals, 'catmeals' => $catmeals]);
    }

    public function editoffer($id)
    {
        $catoffers = Catoffers::all();
        $offers = Offers::where('id', $id)->get();
        return view('editoffer', ['offers' => $offers, 'catoffers' => $catoffers]);
    }

    public function dash()
    {
        $meals = Meals::all();
        $offers = Offers::all();
        $catoffers = Catoffers::all();
        $catmeals = Catmeals::all();
        return view('dash', ['meals' => $meals, 'offers' => $offers, 'catoffers' => $catoffers, 'catmeals' => $catmeals]);
    }

    public function offers()
    {

        $offers = Offers::all();
        return view('offers', ['offers' => $offers]);
    }

    public function card()
    {
        $user = auth()->user();
        $total = Card::Where('id_user', $user->id)->sum('price');
        $prods = Card::Where('id_user', $user->id)->get();
        return view('card', ['prods' => $prods, 'total' => $total]);


    }

    public function orders()
    {
        $orders = Orders::all();
        return view('orders', ['orders' => $orders]);
    }

    public function abonnement()
    {
        $abonnements = Abonnements::all();
        return view('abonnement', ['abonnements' => $abonnements]);
    }
    public function profil()
    {
        return view('profil');
    }

}