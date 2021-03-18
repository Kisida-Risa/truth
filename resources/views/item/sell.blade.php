@extends('app')

@section('title','商品出品')
    

@section('content')
@include('nav')

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
                            出品する
                        </button>

                         <form action="{{ route('item.store',[$item->id]) }}" method="POST">
                            @csrf
                             <input type="submit" class="btn btn-block btn-secondary">
                         　   カート一覧へ
                            </button>
                           </a>
                         </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection