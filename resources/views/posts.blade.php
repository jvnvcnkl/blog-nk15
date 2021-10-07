@extends('layouts.app')

@section('title','Blog')
@section('content')

<body>
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
        <li><a href="{{route('post', [ 'id' => $post->id ]) }}">

                {{$post->title }}
            </a>
        </li>

        @endforeach
    </ul>


</body>
@endsection