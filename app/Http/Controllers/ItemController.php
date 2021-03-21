<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use Aoo\Models\Cart;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all()->sortByDesc('created_at');
        return view('item.item', ['items' => $items]);
    }

    public function create(Request $request, int $id)
    {
        $item = Item::find($id);
        return view('item.sell', 
        ['item' =>$item,
        'id' =>$id,
        ]);
        }


     public function store(Request $request, int $id)
     {
        $item = new Item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->image_file_name_sub = $request->image_file_name_sub;
        $item->save();
        
        return view('item.item',
        [
        'items' => [],
        'item' => $item,])
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
