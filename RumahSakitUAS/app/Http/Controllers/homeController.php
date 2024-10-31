<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function store(Request $request){
        DB::table('pasiens')->insert([
            'name'=> $request->input('nama'),
            'alamat'=> $request->input('alamat'),
            'umur'=> $request->input('umur'),
            'jeniskelamin'=> $request->input('ans'),
            'tanggal_daftar'=> now()
            ]);
            return redirect('tampil');
    }
    public function show(){
        $data = DB::select("select * from pasiens");
        return view("tampil",["pasien"=>$data]);
    }
}
