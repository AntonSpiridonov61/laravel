<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller {
    public function index() {
        return "okey";
    }
    public function register(Request $request) {
        $validation = $request->validate([
            'name' => 'required|min:3|max:26',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return redirect()->route('home')->with('success', 'Ваш аккаунт был зарегестрирован');
    }

    public function allData() {
        $users = new User();
        return view('messages', ['data' => $users->orderBy('id', 'desc')->get()]);
    }
}
