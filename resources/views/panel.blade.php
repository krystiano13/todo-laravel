@extends('layout.layout')

@section('content')
    @auth
     <main>
        <form method="POST" action="/logout">
            <h1>Current User: {{ auth() -> user()['name'] }}</h1>
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>
        <div class="todos">
            <section class="task d-flex justify-content-around align-items-center p-3">
                <p class="taskTitle">Learn Laravel</p>
                <div class="taskButtons">
                    <button class="btn btn-warning" id="edit">Edit</button>
                    <button class="btn btn-success" id="delete">End</button>
                </div>
            </section>
        </div>
     </main>
    @endauth
@endsection