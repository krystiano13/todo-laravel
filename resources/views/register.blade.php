@extends('layout.layout')

@section('content')
    <form action="/register" method="POST" class="Form wrapper d-flex flex-column align-items-center justify-content-center">
        @csrf
        <input type="text" placeholder="username" name="name" />
        <input type="email" placeholder="email adress" name="email" />
        <input type="password" placeholder="password" name="password" />
        <input type="password" placeholder="repeat password" name="password2" />
        <button class="FormButton btn btn-primary" type="submit">Create Account</button>
        @foreach ($errors -> all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    </form> 
@endsection