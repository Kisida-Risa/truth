<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request,Cart $cart)
    {
       $user = Auth::user();
       $items =auth()->user()->items;
       return view('cart',
       [
       'items' => $items,
       ]);
     }

     public function destroy(Request $request, int $id)
     {
      $item = Item::find($id);
      $item->user()->detach(auth()->id());
         return redirect()->route('item.item',
         [
           'item' => $item,
           'id' =>$id,
         ])->with('success', '削除しました');
     }
}
