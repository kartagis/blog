@extends('main')
@section('content')
{{ Form::open(['route' => 'blog.store']) }}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
{{ Form::close() }}
