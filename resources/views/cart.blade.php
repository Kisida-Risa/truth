@extends('app')

@section('title', 'カート一覧')


@section('content')


<br>
<br>
<div class="flex flex-col ...">
@foreach ($items as $item)
<div>
    <div class="w-full lg:max-w-full lg:flex">
      <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col 
      justify-between leading-normal"
      style="margin-bottom: 30px;
      margin-left: 30px;">
          <div class="text-gray-900 font-bold text-xl mb-2 text-4xl ..."
          style="text-align:center ;">
          {{ $item->pivot->sub_name }}
          </div>
        <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="{{ $item->pivot->sub_image_file_name }}" 
          style="
          height:350px ;
          width:140px ;
          display: inline-block;">
          <div class="text-sm">
          <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
             style="height: 50px; 
             color: white; 
             line-height: 50px;">
              ¥{{ $item->pivot->sub_price }}
               </div>
            <br>
            <br>
      <form action="{{ route('cart.destroy',[$item->id]) }}" method="POST">
      @csrf
      <div>
      <input type="submit" value="削除する"
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
    <a href="{{ route('item.item') }}">
    商品一覧へ
    </a>
    </button>
          </div>
        </div>
      </div>
    </div>
    </div>
    @endforeach
    </div>


@endsection