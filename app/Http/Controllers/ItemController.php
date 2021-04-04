<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Cart;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all()->sortByDesc('created_at');
        return view('item.item', [
            'items' => $items,
            'item' => [],
            ]);
    }
        
      public function store(Request $request, int $id)
      {
         $cart = new Cart;
         $item = Item::find($id);
         dd($item);
         $cart->fill([
             'sub_name' => $item->name,
             'sub_price' => $item->price,
             'sub_image_file_name' => $item->image_file_name,
             'user_id' => auth()->id(),
            ])->save();
         return redirect()->route('item.item',
         [
         'item' => $item,
         'carts' => [],
         'cart' => $cart,
         ])
         ->with('flash_message', "商品をカートに追加しました"); 
       }
    

     public function search(Request $request, Item $item)
     {
            $keyword = $request->input('keyword');   
            $stock = $repuest->input('stock');
            $query = Item::query();

        if(!empty($keyword)){
            $query->where('name','like', "%$keyword%")->get();
            $query->orWhere('price', 'LIKE', "%$stock%")->get();
        }

        $items = $query->get();
 
       return view('item.search',
       [
       'items'=> $items,
       'keyword'=>$keyword,
       'stock' =>$stock
       ]);
     }
}
