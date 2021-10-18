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
<div>{{$comment->body}} </div>
@empty
<span>No comments to show</span>
@endforelse
<br>
<form class='mt-3' action="{{ route('createComment',['post'=> $post->id] )}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="body">Add comment:</label>
        <textarea name="body" id="body" cols="30" rows="10" class='form-control'></textarea>
        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary" type='submit'>Submit </button>
</form>
@endsection