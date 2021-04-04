<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request,Item $item)
    {
       $user = Auth::user();
       $user->with('item')->find(auth()->id());
       dd($user);
       return view('cart',
       [
       'items' => [],
       'item' => $item,
       'user' => $user,
       'users' => [],
       ]);
     }

     public function destroy(Request $request, int $id)
     {
        $cart->delete;
         return redirect()->route('cart');
     }
}
