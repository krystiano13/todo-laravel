@extends('layout.layout')

@section('content')
    @auth
     <main>
        <form id="addTask" action="/add" method="post" class="taskCreator wrapper d-flex flex-column justify-content-center align-items-center">
            @csrf
            <input type="text" placeholder="Name of task" name="content" />
            <button class="taskbtn btn btn-primary" type="submit">Add</button>
            <button type="button" class="cancelbtn btn btn-danger">Cancel</button>
        </form>
        <form id="editTask" method="post" class="taskCreator wrapper d-flex flex-column justify-content-center align-items-center">
            @csrf
            @method('PUT')
            <input id="editInput" type="text" placeholder="Name of task" name="content" />
            <button class="taskbtn btn btn-primary" type="submit">Edit</button>
            <button type="button" class="cancelbtn btn btn-danger">Cancel</button>
        </form>
        <form method="POST" action="/logout">
            <h1>Current User: {{ auth() -> user()['name'] }}</h1>
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>
        <div class="todos">
            @foreach ($tasks as $task)
            <section class="task d-flex justify-content-between align-items-center p-3">
                <p class="taskTitle">{{ $task['content'] }}</p>
                <div class="taskButtons">
                    <button data-edit="{{ $task['content'] }}" id={{ $task['id'] }} class="edBtn btn btn-warning" id="edit">Edit</button>
                    <button id={{ $task['id'] }} class="enBtn btn btn-success" id="delete">End</button>
                </div>
            </section>
            @endforeach
            <section id="add" class="task taskBtn btn btn-secondary taskBtn d-flex justify-content-around align-items-center p-3">
               <p>+</p>
            </section>
        </div>
     </main>
    @endauth
@endsection