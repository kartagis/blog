@extends('main')
@section('content')
    @if (!$posts->isEmpty())
        @foreach($posts as $post)
            <a href="posts/{{$post->id}}">{{ $post->body }}</a>
        @endforeach
    @else
        No posts found.
    @endif
    <a href="{{ URL::route('post.create') }}">Make a new entry</a>
@endsection
