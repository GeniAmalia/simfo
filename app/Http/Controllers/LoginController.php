<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'login',
            'active'=> 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $data = User::where('email', '=', $request->input('email'))->first();
        //dd($request->all());
        //dd(Hash::check($request->input('password'), $data->password));
        if(!$data){
            return redirect('/login')->with("error","Email anda salah"); 
        }
        if (Hash::check($request->input('password'), $data->password)) {
            Auth::loginUsingId($data->id);
            $request->session()->regenerate();
            return redirect()->intended('/');
         }else{
           return redirect('/login')->with("error","Password anda salah");
         }
    }
}
