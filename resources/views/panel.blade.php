@extends('layout.layout')

@section('content')
    @auth
     <main>
        <form method="POST" class="taskCreator">
            <input type="text" placeholder="Name of task" name="content" />
            <button type="submit">Add</button>
        </form>
        <form method="POST" action="/logout">
            <h1>Current User: {{ auth() -> user()['name'] }}</h1>
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>
        <div class="todos">
            @foreach ($tasks as $task)
            <section class="task d-flex justify-content-around align-items-center p-3">
                <p class="taskTitle">{{ $task['content'] }}</p>
                <div class="taskButtons">
                    <button class="btn btn-warning" id="edit">Edit</button>
                    <button class="btn btn-success" id="delete">End</button>
                </div>
            </section>
            @endforeach
            <section class="task taskBtn btn btn-secondary taskBtn d-flex justify-content-around align-items-center p-3">
               <p>+</p>
            </section>
        </div>
     </main>
    @endauth
@endsection