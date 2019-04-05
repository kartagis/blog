@extends('main')
@section('content')
    $posts = DB::table('blog')-get();
    @if (!$posts->isEmpty())
        @foreach($posts as $post)
            <a href="posts/{id}">{{ $post->body }}</a>
        @endforeach
    @else
        <p>No posts found.</p>
    @if
@endsection
