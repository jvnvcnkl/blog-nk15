@extends('layouts.app')

@section('title','Blog')
@section('content')

<body>
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
        <li><a href="{{ route ('post', [ 'post' => $post->id ]) }}">

                {{$post->title }} {{$post->comments->count() }}
            </a>
            - by <a href="{{ route ('author', [ 'author' => $post->user_id ]) }}">{{$post->user->name}}</a> </li>

        @endforeach
    </ul>


</body>
@endsection