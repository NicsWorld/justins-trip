@extends('layouts.app')

@section('content')
<div class="container">
  <h1>All Posts <a href="/posts/create"><button class="btn-primary btn">+</button></a></h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
          @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">{{$post->body}}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
