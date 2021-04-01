<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Request $request,Cart $id)
    {
       $cart= Cart::find($id);
       $cart->sub_name = $request->sub_name;
       $cart->sub_price = $request->sub_price;
       $cart->sub_image_file_name = $request->sub_image_file_name;
       return view('cart',
       [
       'carts' => [],
       'cart' => $cart,
       'id' => [],
       ]);
     }

     public function destroy(Request $request, int $id)
     {
        $cart->delete;
         return redirect()->route('cart');
     }
}
