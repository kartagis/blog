@extends('main')
@section('content')
{{ Form::open(['route' => 'post.store']) }}
<div class="container">
    <div class="form-group">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Post']) }}
    </div>
    {{ Form::submit('Save', ['class' => 'btn btn-info btn-block']) }}
    {{ Form::close() }}
</div>
