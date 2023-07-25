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
<<<<<<< HEAD
        $credentials = $request->validate([
            'email'=> 'required|email:dns',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }

        return back()->with('LoginError', 'Login Gagal!');
=======
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
>>>>>>> 4424f5ab9605c18f074585f842994d519cdb7fcd
    }
}
