<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        if(!auth()->check()) {
            return redirect('/');
        }

        $userTasks = Task::where('user_id',auth()->id())->get();
        return view('/panel', ['tasks' => $userTasks]);
    }

    public function add(Request $request) {
        if(!auth() -> check()) return;

        $fields = $request -> validate([
            'content' => ['required', 'min:1']
        ]);

        $fields['content'] = strip_tags($fields['content']);

        Task::create(
            [
                'content' => $fields['content'],
                'user_id' => auth() -> id()
            ]
        );

        return redirect('/panel');
    }
}
