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
        $cart->fill([
            'sub_name' => $item->name,
            'sub_price' => $item->price,
        'sub_image_file_name' => $item->image_file_name,
           ])->save();
        return redirect('item/parts',
        [
        'item' => $item,
        'carts' => [],
        'cart' => $cart,
        ])
        ->with('flash_message', "商品をカートに追加しました"); 
      }
        
    

    public function update(Request $request, int $id)
    {
        return view('item.item',compact($item,$id));
    }


    public function destroy(Request $request, int $id)
     {
        $item->delete;
         return redirect()->route('item.item');
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
