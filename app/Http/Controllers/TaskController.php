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
        if(!auth() -> check()) return redirect('/');

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

    public function edit(int $id, Request $request) {
        if(!auth() -> check() || !isset($id)) return redirect('/');

       $fields = $request -> validate([
            'content' => 'required'
       ]); 

       $fields['content'] = strip_tags($fields['content']);

       Task::where('id', $id)->update(['content' => $fields['content']]);

       return redirect('/panel');
    }

    public function delete(int $id) {
        if(!auth() -> check() || !isset($id)) return redirect('/');
        Task::where('id', $id)->delete();
        return redirect('/panel');
    }
}
