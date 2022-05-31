<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $credentials = $request->only(["email", "password"]);

        if (auth()->attempt($credentials)) {
            return redirect("/");
        }

        return redirect()->back()->withErrors(["email" => "Invalid credentials"]);
    }
}
