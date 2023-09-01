<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request) {
        $fields = $request -> validate([
            'name' => ['required', 'unique:users', 'min:3','max: 64'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if($fields['password'] !== $fields['password2']) {
            return redirect('/registerView');
        }

        else {
            $fields['password'] = bcrypt($fields['password']);
            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => $fields['password']
            ]);
            auth() -> login($user);
            return redirect('/panel');
        }
    }

    public function login(Request $request, Validator $validator) {
        $fields = $request -> all();

        $validator = Validator::make($fields,[
            'username' => ['required'],
            'password' => ['required']
        ]);
    }
}
