@extends('app')

@section('title', 'SNS一覧')

@section('content')
@include('nav')


<div class="container">
      　<div class="row">
         　　 @foreach ($items as $item)
         　　<div class="col">
         <form action="{{ route('item.item') }}" method="POST">
         <a href="{{route('item.create',[$items->image_file_name])}}"><img src="{{ $item->image_file_name }}"　style="height: 500px;"></img></a>

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
@endsection