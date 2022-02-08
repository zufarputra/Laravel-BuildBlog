@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if (count($posts) > 0)
    @foreach ($posts as $post)
    <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img width="100%" src="/storage/cover_image/{{$post->cover_image}}"/>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h3>
                    <small>Writen On {{ $post->created_at }} by : {{$post->user->name}}</small>
                </div>
               
            </div>
         
        </div>
    @endforeach
    {{$posts->links('pagination::bootstrap-4')}}
@else
    <p>No poosts fooound</p>
@endif
@endsection