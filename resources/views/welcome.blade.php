@extends('main')
@section('content')
<div class="content">
    <div class="title m-b-md">
        My Laravel Journey
    </div>
    <div class="links">
        <a href="https://github.com/kartagis">GitHub</a>
        <a href="{{ URL::route('about') }}">About Me</a>
        <a href="{{ URL::route('posts.index') }}">Blog entries</a>
    </div>
</div>
</div>
@endsection
