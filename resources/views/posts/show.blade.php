@extends('layout.master') 
@section('content') @component('layout.components.title') post detail @endcomponent
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>{{$post->title}}</h1>
      <div>
        <p class="text-muted font-italic">{{$post->description}}</p>
      </div>
      <div>
        <img src="{{$post->image}}" class="w-50 h-50" alt="">
      </div>
      <div class="mt-3">
        {!!$post->content!!}
      </div>
    </div>
  </div>
</div>
@endsection
