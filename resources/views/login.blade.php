@extends('layout.layout')

@section('content')
    <form class="Form wrapper d-flex flex-column align-items-center justify-content-center">
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button class="FormButton btn btn-primary" type="submit">Login</button>
    </form> 
@endsection