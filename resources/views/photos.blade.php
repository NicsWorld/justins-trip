
@extends('layouts.app')

@section('content')
<div class="container">
  <h1>All Photos</h1>
  @foreach ($posts as $post)
  <div class="photo-gallery">
    <img src="{{ url('storage/'.$post->photo) }}" alt="" title="" />
  </div>
  @endforeach
</div>
@endsection
