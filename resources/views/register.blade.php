@extends('layout.layout')

@section('content')
    <form class="Form wrapper d-flex flex-column align-items-center justify-content-center">
        <input type="text" placeholder="username" name="username" />
        <input type="email" placeholder="email adress" name="email" />
        <input type="password" placeholder="password" name="password" />
        <input type="password" placeholder="repeat password" name="password2" />
        <button class="FormButton btn btn-primary" type="submit">Create Account</button>
    </form> 
@endsection