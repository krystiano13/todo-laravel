@extends('layout.layout')

@section('content')
    <form method="POST" action="/login" class="Form wrapper d-flex flex-column align-items-center justify-content-center">
        @csrf
        <input type="text" placeholder="username" name="name" />
        <input type="password" placeholder="password" name="password" />
        <button class="FormButton btn btn-primary" type="submit">Login</button>
        @foreach ($errors -> all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    </form> 
@endsection