@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at}} by : {{$post->user->name}}</small>
    <hr>
    {{-- @if (!Auth::user()->id == $post->user->id) --}}
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'float-right'])!!}
        {{ Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    {{-- @endif --}}
 
    @endsection