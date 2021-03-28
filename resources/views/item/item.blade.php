@extends('app')

@section('title', '商品画面一覧')

@section('content')

@include('search')

<br>
<br>
<form action="{{ route('item.item') }}" method="POST">
<div class="flex flex-nowrap">
<!-- モーリスF351 -->
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:1080px ; 
       width:500px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">
モーリス F351
</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  ¥30,800
  </div>
  <br>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style=" 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 40px;">
   カートに入れる
</button>
  </div>
</div>
</form>

<!-- モーリスF352 -->
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:1080px ; 
       width:500px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">
モーリス M280
</div>
<br>
  <img src="/image/top/mor-m28.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  ¥30,800
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #低音がよく出る
    </span></div>
    <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #音が大きい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>

<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">
モーリス M351
</div>

<br>
  <img src="/image/top/mor-m35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  ￥30850
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #長く使える
    </span></div>
    <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #音が大きい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
</div>
</div>

<br>
<br>
<div class="flex flex-nowrap">
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
</div>

<br>
<br>
<div class="flex flex-nowrap">
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style=" 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style=" 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">

</div>

<br>
  <img src="/image/top/mor-f35.jpeg" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style=" 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
</div>


<div class="flex flex-nowrap">
@foreach ($items as $item)
<div class="max-w-sm rounded overflow-hidden shadow-lg" 
style="height:940px ; 
       width:360px ;
       margin-bottom: 0px;
       margin-right: 30px;
       margin-left: 30px;
       text-align : center;
       border: 5px solid #FFDBC9;">
<div class="font-bold text-xl mb-2 text-5xl ...">
{{ $item->name }}
</div>

<br>
  <img src="{{ $item->image_file_name }}" 
  style="height: 480px; width: 260px; 
  display: inline-block;">
  <div class="flex flex-col ...">
  <div class="my-4 block text-gray-700 text-center bg-gray-400 px-4 py-2 text-3xl ..."
  style="height: 70px; color: white; font-size: 55px;
  line-height: 50px;">
  モーリス　F351
  </div>
  <br>
    <div><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 text-3xl ...">
    #弾きやすい
    </span></div>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full text-3xl ..."
    style="display: inline-block; 
    width: 270px;
    height: 55px; 
    line-height: 20px;
    color: white;
    margin-left: 30px;">
  カートに入れる
</button>
  </div>
</div>
@endforeach
<div>


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