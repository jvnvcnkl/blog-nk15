@extends('layouts.app')

@section('title',$post->title)
@section('content')


<h2>
    {{$post->title}}
</h2>
<div>
    {{$post->body}}
</div>

<h5>Comments </h5>
@forelse($post->comments as $comment)
{{$comment->body}}
@empty
<span>No comments to show</span>
@endforelse

@endsection