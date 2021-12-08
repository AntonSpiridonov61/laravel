<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
