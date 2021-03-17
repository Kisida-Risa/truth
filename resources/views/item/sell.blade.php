@extends('app')

@section('title','商品出品')
    

@section('content')
@include('nav')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        
     <div class="container">
       <div class="row"> 
     　　<div class="col">
           <form action="{{ route('item.sell',id->$id) }}" method="POST">
             
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection