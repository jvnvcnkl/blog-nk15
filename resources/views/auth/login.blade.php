@extends('layouts.app')

@section('title','Login')


@section('content')
<h3>Log in to your account</h3>
<form action="/login" method='POST'>
    @csrf
    <div class="form-group mt-3">
        <label for="email">E-mail</label>
        <input type="email" id='email' name='email' class="form-control">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="password">Password</label>
        <input type="password" id='password' name='password' class="form-control">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    @if($invalid_credentials ?? false )
    <div class="alert alert-danger"> Invalid credentials. Please try again.</div>
    @endif

    <button type='submit' class='btn btn-primary'>Login</button>
</form>


@endsection