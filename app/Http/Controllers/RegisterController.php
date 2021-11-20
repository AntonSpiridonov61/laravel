<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    public function register(Request $request) {
        $validation = $request->validate([
            'name' => 'required|min:3|max:26',
            'email' => ['required', 'email'],
            'password' => ['required|min:8', 'confirmed'],
        ]);
    }

    // public function post(SubmitRequest $request)
    // {
    //     $name = $request->name;
    //     $city = $request->city;
    //     $age = $request->age;

    //     $filename = storage_path('data/' . uniqid() . '.json');

    //     file_put_contents($filename, json_encode([
    //         'name' => $name,
    //         'city' => $city,
    //         'age' => $age,
    //     ]));

    //     $result = 'Hello, ' . $name . '! You are from ' . $city . ', and you are ' . $age . ' y.o.';

    //     $request->session()->put('result', $result);

    //     return redirect('/form');
    // }
}
