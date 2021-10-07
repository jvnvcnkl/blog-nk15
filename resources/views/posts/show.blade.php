@extends('layouts.app')

@section('title',$post->title)
@section('content')


<h2>
    {{$post->title}}
</h2>
<div>
    {{$post->body}}
</div>

@endsection