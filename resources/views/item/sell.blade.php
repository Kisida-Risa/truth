@extends('app')

@section('title','商品出品')
    

@section('content')
@include('nav')

@if (session('flash_message'))
            <div class="flash_message bg-success text-center py-3 my-0">
                {{ session('flash_message') }}
            </div>
        @endif

    <div class="container">
       <div class="row"> 
     　　<div class="col">
             <img src="{{ $item->image_file_name_sub }}"　style="height: 500px;"></img>
                
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
　　　　   
                    <div class="form-group mb-0 mt-3">
                        <button type="submit" class="btn btn-block btn-secondary">
                            カートに入れる
                        </button>

                         <form action="{{ route('item.store',[$item->id]) }}" method="POST">
                            @csrf
                             <input type="submit" class="btn btn-block btn-secondary">
                         　   カート一覧へ
                         </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


    <script>
(function() {
    'use strict';

    // フラッシュメッセージのfadeout
    $(function(){
        $('.flash_message').fadeOut(3);
    });

})();
</script>
@endsection
