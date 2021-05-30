@extends('app')

@section('title', '商品画面一覧')

@section('content')

@include('search')



<br>
<br>
<div class="h-48 flex flex-wrap content-between ..."
style="display:flex ;
       flex-wrap:wrap ;">
       @foreach ($items as $item)
<div><div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:1190px ; 
       width:640px ;
       margin-bottom: 100px;
       margin-right: 50px;
       margin-left: 50px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">
{{ $item->name }}
</div>

<br>
  <img src="{{ $item->image_file_name }}" 
  style="height: 480px; width: 280px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  ¥{{ $item->price }}
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    {{ $item->details }}
    </span></div>
    <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    {{ $item->a_details }}
    </span></div>
    
    <br>
    <form action="{{ route('item.store',[$item->id]) }}" method="POST">
     @csrf
    <div>
    <input type="submit" value="カートに入れる"
    class="bg-blue-500 hover:bg-blue-700 text-black 
     font-bold py-2 px-4 rounded-full text-3xl ..."
      style="display: inline-block; 
      width: 300px;
      height: 55px; 
      line-height: 20px;
      margin-left: 40px;
      color: white;">
    </div>
  </form>
<br>

<button class="bg-blue-500 hover:bg-blue-700 text-black 
font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 300px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 40px;">
    <a href="{{ route('cart.index') }}">
    カート一覧へ
    </a>
    </button>
  </div>
</div>
</div>
@endforeach
</div>
@endsection
