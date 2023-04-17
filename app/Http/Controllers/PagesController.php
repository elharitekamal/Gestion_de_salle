<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use App\Models\Offers;
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

}