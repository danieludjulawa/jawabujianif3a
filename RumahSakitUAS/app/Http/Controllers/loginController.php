<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class loginController extends Controller
{
    public function first(){
        if(Auth::check()){
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function login(Request $request){
        $users = [
            'email'=> $request->input('email'),
            'password'=> $request->input('password'),
        ];

        if (Auth::attempt($users)) {
            return redirect('home');
        } else {
            Session::flash('error','Salah Bosq');
            return redirect('/');
        }
        
        
    }
}
