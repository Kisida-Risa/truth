@extends('app')

@section('title', 'EC一覧')


@section('content')
@include('nav')

<div class="container">
   　<div class="row">
   　　 @foreach ($items as $item)
        　　<div class="col">
   　　      　<img src="{{ $item->image_file_name }}"　style="height: 500px;"></img></a>

　　　　　　　　　　　<div>
                    <h2>{{ $item->name }}</h2>
                    <br>

                    <h2>{{ $item->details }}</h2>
                    <br>
                   
                    <h2>{{ $item->price }}</h2>
                    </div>
                    </div>
                    　　　
　　　　　　</div>
　　　　</div>

                  <form method="POST" action="{{ route('item.update', ['id' => $item->id]) }}">
                  @csrf
               <input type="hidden" name="stock" value="{{ $item->id }}">
                  <button 
                   type = submit 
                   class="btn btn-outline-warning" 
                   data-mdb-ripple-color="dark"
                   style="width: 600px; height: 50px;">
                   カートに入れる
                  </button>
               </button>
            </form>
          </div>
        @endforeach
        
        <div>
        <button type=submit >
        　商品一覧へ
        </butoon>
        </div>
    </div>
</div>
@endsection