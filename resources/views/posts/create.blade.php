@extends('layout.master') 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="{{route('posts.store')}}">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
