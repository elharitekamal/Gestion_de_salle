<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use App\Models\Offers;
use App\Models\Card;
use App\Models\Catmeals;
use App\Models\Catoffers;
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
        $user = auth()->user();
        $count = Card::Where('phone', $user->phone)->count();
        return view('home', ['count' => $count]);
    }

    public function about()
    {
        $user = auth()->user();
        $count = Card::Where('phone', $user->phone)->count();
        return view('about', ['count' => $count]);
    }

    public function meals()
    {
        $user = auth()->user();
        $count = Card::Where('phone', $user->phone)->count();
        $meals = Meals::all();
        return view('meals', ['meals' => $meals], ['count' => $count]);
    }

    public function editmeal($id)
    {
        $user = auth()->user();
        $count = Card::Where('phone', $user->phone)->count();
        $catmeals = Catmeals::all();
        $meals = Meals::where('id', $id)->get();
        return view('editmeal', ['meals' => $meals, 'catmeals' => $catmeals], ['count' => $count]);
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
        $user = auth()->user();
        $count = Card::Where('phone', $user->phone)->count();
        $offers = Offers::all();
        return view('offers', ['offers' => $offers], ['count' => $count]);
    }

    public function card()
    {
        $user = auth()->user();
        $total = Card::Where('phone', $user->phone)->sum('price');
        $prods = Card::Where('phone', $user->phone)->get();
        $count = Card::Where('phone', $user->phone)->count();
        return view('card', ['count' => $count, 'prods' => $prods, 'total' => $total]);
    }

}