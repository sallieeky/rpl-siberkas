<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "nik" => "required",
            "password" => "required"
        ]);

        $credentials = $request->only(["nik", "password"]);

        if (auth()->attempt($credentials)) {
            return redirect("/");
        }

        return redirect()->back()->with("pesan", "NIK atau Password salah");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
}
