@extends('layout.master') 
@section('content') @component('layout.components.title') posts index card @endcomponent
<div class="container">
  <div class="row">
    <div class="col-12">
      @foreach($posts as $post) @if($loop->index%3 == 0)
      <div class="card-deck my-2">
        @endif
        <div class="card">
          <a href="{{route('posts.show',$post->id)}}">
            <img src="{{$post->image}}" alt="" class="card-img-top">
        
          <div class="card-body">
            <h5 class="card-title">
              <a href="{{route('posts.show',$post->id)}}">
              {{$post->title}}
              </a>
          </h5>
          <p class="card-text">{{$post->description}}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
                @foreach($post->categories as $category)
                {{$category->name}}{{$loop->last ? '' : ','}}
                @endforeach
            </small>
        </div>
      </div>
      @if($loop->index%3 == 2)
    </div>
    @endif @endforeach
  </div>
</div>
</div>
@endsection
