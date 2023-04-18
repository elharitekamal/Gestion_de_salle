<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Meals;
use App\Models\Catmeals;
use App\Models\User;

class MealsController extends Controller
{




    public function addmeal(request $request)
    {

        $meal = new Meals();
        $meal->description = $request->description;
        $meal->name = $request->name;
        $meal->price = $request->price;
        $meal->category = $request->category;
        $meal->image = $request->file('image')->store('image', 'public');
        $meal->save();
        return redirect('dash');

    }


    public function updatemeal(Request $request, $id)
    {

        $meal = Meals::find($id);

        $meal->name = $request->input('name');
        $meal->price = $request->input('price');
        $meal->description = $request->input('description');
        if ($request->hasFile('image')) {
            $meal->img = $request->file('image')->store('image', 'public');
        }
        if ($request->has('category')) {
            $meal->category = $request->input('category');
        }
        $meal->save();

        return redirect('dash');
    }

    public function deletemeal($id)
    {

        $cat = Meals::find($id);
        $cat->delete();
        return redirect('dash');


    }




    public function addcatmeal(request $request)
    {

        $meal = new Catmeals();
        $meal->name = $request->name;
        $meal->save();
        return redirect('dash');

    }

    public function deletecatmeal($id)
    {

        $cat = Catmeals::find($id);
        $cat->delete();
        return redirect('dash');


    }

    public function deleteorder($id)
    {

        $order = Orders::find($id);
        $order->delete();
        return redirect('orders');


    }



}