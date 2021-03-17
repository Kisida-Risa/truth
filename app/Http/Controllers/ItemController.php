<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all()->sortByDesc('created_at');
        return view('item.item', ['items' => $items]);
    }

    public function create(Request $request, Item $item)
    {
        $item = Item::find($id);
        return view('item.sell',
         [
           'item' => $item,
           'id' => $id,
           ]);
        }


     public function store(Request $request, Item $items)
     {
         echo $items->fill($request->all());
         echo $items->name = $request->name;
         echo $items->details = $request->details;
         echo $items->price= $request->price;
         echo $items->image_file_name_sub= $request->image_file_name_sub;
         echo $items->save();
         return view('item.sell', 
         ['items' => $items]);  
     }
    

    public function update(Request $request, Item $items)
    {
        $items = DB::table(‘item’)->where(‘id’,[id])->first();
        $request->session()->put('id', $id);
        $request->session()->put('price',$price);
        $request->session()->put('details', $details);
        $request->session()->put('name', $name);
        $request->session()->put('image_file_name_sub', $image_file_name_sub);
        return view('item.sell');
    }


    public function destroy(Item $items)
     {
        $item->delete;
         return redirect()->route('item.item');
     }
    
    public function saveImage(UploadedFile $file): string
     {
         $tempPath = $this->makeTempPath();
 
         Image::make($file)->fit(300, 300)->save($tempPath);
 
         $filePath = Storage::disk('public')
             ->putFile('item-images', new File($tempPath));
 
         return basename($filePath);
     }

     public function makeTempPath(): string
     {
         $tmp_fp = tmpfile();
         $meta   = stream_get_meta_data($tmp_fp);
         return $meta["uri"];
     }


   

     public function search(Request $request){
            $keyword = $request->input('name'); 
        if(!empty($keyword)){
            $query = Item::query();
            $users = $query->where('name','like', '%' .$keyword. '%')->get();
        }
       return view('/search')->with([
        'users' => $users,
      ]);
     }
}
