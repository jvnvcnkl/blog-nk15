@extends('layouts.app')

@section('title',$post->title)
@section('content')


<a href="/posts">Go to posts page</a>
<h2>
    {{$post->title}}
</h2>
<div>
    {{$post->body}}
</div>

@endsection