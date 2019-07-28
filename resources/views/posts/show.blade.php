@extends('layouts.app')

@section('content')

    <a href="/lsapp/public/posts" class="btn btn-default">Go back</a>

    <h1>{{$post->title}}</h1>
    <img style = "width:100%" src="http://localhost/lsapp/public/storage/cover_image/{{$post->cover_image}}" alt="image">

    <small> Written on {{ $post->created_at }} </small>

    <div class="card">

        {{ $post->body }}

    </div>

    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)

<a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!!Form::close()!!}
@endif
@endif

@endsection