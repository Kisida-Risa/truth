@extends('app')

@section('title', 'EC一覧')


@section('content')
@include('nav')

<div class="container">
   　<div class="row">
   　　 @foreach ($items as $item)
        　　<div class="col">
   　　      　<img src="{{ $item->sub_image_file_name }}"　style="height: 500px;"></img></a>

　　　　　　　　　　　<div>
                    <h2>{{ $item->sub_name }}</h2>
                    <br>

                    <h2>{{ $item->sub_details }}</h2>
                    <br>
                   
                    <h2>{{ $item->sub_price }}</h2>
                    </div>
                    </div>
                    　　　
　　　　　　</div>
　　　　</div>
          </div>
        @endforeach
        
        <div>
        <form action="{{ route('item.buy',[$item->id]) }}" method="POST">
                       @csrf
               <div class="form-group mb-0 mt-3">
                <input type="submit" class="btn btn-block btn-secondary" value ="カート一覧へ">
          </form>
      </div>
    </div>
</div>
@endsection