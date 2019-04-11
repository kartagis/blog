@extends('main')
@section('content')
    <div class="flex-container">
        <div class="item">
    @if (!$posts->isEmpty())
        @foreach($posts as $post)
            <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
        @endforeach
    @else
        No posts found.
    @endif
        </div>
        <div class="item">
            <a href="{{ URL::route('post.create') }}">Make a new entry</a>
        </div>
    </div>
@endsection
