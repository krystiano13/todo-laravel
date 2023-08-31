<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Validator $validator, Request $request) {
        $validator = Validator::make($request->all(),[
            'username' => ['required', 'unique:users', 'min:3','max: 64'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if($validator -> fails()) {
            return view('/register',['err' => 'username, email or password is incorrect']);
        }

        else {
            $fields = $request -> all();
            $fields['password'] = bcrypt($fields['password']);
            $user = User::create($fields);
            auth() -> login($user);
            return redirect('/panel');
        }
    }
}
