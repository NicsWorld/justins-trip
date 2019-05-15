@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card post">
                <div class="card-header">
                  {{$post->title}}
                  <div>{{$post->user->name}} posted...{{$post->created_at->diffForHumans()}}</div>
                </div>
                <div class="card-body">{{$post->body}}</div>
                @if($post->photo)
                <img src="{{url('/storage/'.$post->photo)}}"></img>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
