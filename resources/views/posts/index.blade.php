@extends('layouts.app')

@section('content')
<div class="container">
  <h1>All Posts <a href="/posts/create"><button class="btn-primary btn">+</button></a></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
          @foreach ($posts as $post)
            <div class="card post">
                <div class="card-header">
                    {{ str_limit($post->title, $limit = 25, $end = '...') }}
                  <div>{{$post->user->name}} posted...{{$post->created_at->diffForHumans()}}</div>
                </div>
                <div class="card-body">  {{ str_limit($post->body, $limit = 50, $end = '...') }}</div>
                @if($post->photo)
                <img src="{{url('/storage/'.$post->photo)}}"></img>
                @endif
                  <a href="posts/{{$post->id}}"><button class="btn btn-primary">View Full Post</button></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
