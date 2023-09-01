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
}
