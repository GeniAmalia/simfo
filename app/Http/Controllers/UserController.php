<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        return view('UI 1/user', compact('data'));
    }
}
