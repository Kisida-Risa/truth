@extends('app')

@section('title', 'SNS一覧')

@section('content')

@include('nav')

@include('search')

<br>
<br>
<div class="flex flex-nowrap">
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;">
<div class="font-bold text-xl mb-2 text-5xl ...">モーリス　F351</div>
<br>
  <img src="/image/top/mor-f35.jpeg" style="height: 480px; width: 260px;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px;">
  ¥30,600
  </div>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full text-3xl ..."
    style="deiplay: inline-block; width: 270px;">
  カートに入れる
</button>
  </div>
</div>

<br>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:800px ; 
       width:360px ;
       display: inline-block;
       margin-right: 30px;">
<div class="font-bold text-xl mb-2 text-5xl ...">モーリス　F351</div>
  <img src="/image/top/mor-f35.jpeg" style="height: 480px; width: 260px; display: inline-block;">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"></div>
    <p class="text-gray-700 text-base">
      itationem praesentium nihil.
    </p>
  </div>
  <div class="flex flex-col ...">
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">#弾きやすい</span></div>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:800px ; 
       width:360px ;
       display: inline-block;
       margin-right: 30px;">
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
</div>

<br>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:800px ; 
       width:360px ;
       display: inline-block;
       margin-right: 30px;">
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
</div>
</div>
</div>

<br>
<br>
<div class="flex flex-nowrap">
<div class="max-w-sm rounded overflow-hidden shadow-lg" style ="height: 500px;">
<div class="font-bold text-xl mb-2">あっh</div>
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"></div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
</div>

<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
</div>

<div class="container">
      　<div class="row">
          @foreach ($items as $item)
         　　<div class="col">
             <form action="{{ route('item.item') }}" method="POST">
               <a href="{{route('item.create',[$item->id])}}"><img src="{{ $item->image_file_name }}"　style="height: 500px width: 300px;"></img></a>

　　　　　　　　　　　<div>
                     <h2>{{ $item->name }}</h2>
                       <br>

                        <h2>{{ $item->details }}</h2>
                        <br>
                   
                       <h2>{{ $item->price }}</h2>
                      </div>
                    </div>
        @endforeach
    </div>
  </div>
  </div>
@endsection