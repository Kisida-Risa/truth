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
        $item = Item::find($id);
        $item->user()->attach(auth()->id(),[
          'sub_name' => $item->name,
          'sub_price'=> $item->price,
          'sub_image_file_name' => $item->image_file_name,
        ]);
         return redirect()->route('item.item',
         [
         'item' => $item,
         'user'  => [],
         'id' =>$id,
         ])
         ->with('flash_message', "商品をカートに追加しました"); 
       }
    

     public function search(Request $request, Item $keyword)
     {
      $bag = $request->input('keyword');
      $keyword = Item::when($bag, function ($query, $bag) {
                          return $query->where('name', 'like', "%$bag%");
                      })
                      ->get();
       
       return view('search',
       [
       'keyword' =>$keyword,
       'bag' =>$bag,
       ]);
       }
}
