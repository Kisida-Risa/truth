@extends('app')

@section('title', 'カート一覧')


@section('content')


<div class="flex flex-col ...">
<div>
<div style="
       height: 400px; 
       width: 1000px;
       margin-top: 50px;
       margin-bottom: 100px;
       margin-right: 50px;
       margin-left: 50px;
       text-align: center;
       border: 5px solid #FFDBC9;
       box-shadow: 0 10px 25px 0 rgba(0, 0, 0, .5);">
<div class="flex items-center">

@foreach ($carts as $cart)
<p>
 {{ $cart->sub_name }}
</p>
@endforeach
</div>
</div>
</div>
<br>
<br>


<form action="#" method=delete>
  @csrf
<div class="flex flex-col ...">
<div>
<div style="
       height: 400px; 
       width: 1000px;
       margin-top: 50px;
       margin-bottom: 100px;
       margin-right: 50px;
       margin-left: 50px;
       text-align: center;
       border: 5px solid #FFDBC9;
       box-shadow: 0 10px 25px 0 rgba(0, 0, 0, .5);">
<div class="flex items-center">
      <img class="w-10 h-10 rounded-full mr-4" src="/image/top/yam-fs.jpeg"
      style="
      width: 290px; 
      height: 350px;
      margin-top: 10px;
      text-align:left;
      ">

      <div class="text-sm">
        <p class="text-gray-900 leading-none text-5xl ... text-yellow-500"
        style="text-align: left;">
        </p>
        <br>
        <br>
        <br>
        <p class="text-gray-900 leading-none text-5xl ... text-gray-600"
        style="text-align: left;">
        Aug 18</p>
  <br>
  <br>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Button
</button>
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Button
</button>
      </div>
      <div>
</div>
<div>
</div>
</form>
@endsection