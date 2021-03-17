@extends('app')

@section('title', 'SNS一覧')

@section('content')
@include('nav')


<div class="container">
@foreach($articles as $article) 
      @include('articles.card') 
    @endforeach 
  </div>
@endsection