<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserKesosController extends Controller
{
    public function index()
    {
        return view("user.kesos");
    }
}
