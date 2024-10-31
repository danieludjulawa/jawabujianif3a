<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\QueryException;
class registerController extends Controller
{
    public function view()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        try {
            User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),


            ]);
            return redirect()->route('login')->with('success', 'Berhasil terdaftar');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return redirect()->route('login')->with('error', 'Email Telah Terdaftar');
            };

            return redirect('/')->with('error', 'Mantap');
        }
    }
}
