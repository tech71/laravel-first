@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @if(count($posts) > 0)

        @foreach ($posts as $post)

            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                    <img style = "width:100%" src="http://localhost/lsapp/public/storage/cover_image/{{$post->cover_image}}" alt="image">
                    </div>
                    <div class="col-md-8">
                            <h3>  <a href="/lsapp/public/posts/{{$post->id}}">{{ $post->title }}</a>  </h3>
                            <small>Written on {{ $post->created_at }}  </small>
                        </div>
                </div>
            
            </div>
            
        @endforeach

        {{ $posts->links() }}

    @else

            <p>No posts found</p>

    @endif

@endsection