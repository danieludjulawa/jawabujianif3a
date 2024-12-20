<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index()
    {
        $data = DB::select("select * from anggotas");
        return view("anggota.view", ["anggotas" => $data]);
    }

    public function add()
    {
        return view('anggota.add');
    }

    public function submitAnggota(Request $request)
    {
        DB::table('anggotas')->insert([
            'nama_anggota' => $request->input('nama_anggota'),

            'alamat' => $request->input('alamat'),
            'jurusan' => $request->input('jurusan'),
            'tgl_dftar' => date(now()),
        ]);
        return redirect()->route('anggotaview')->with('message', 'Data Anggota Berhasil Ditambah');
    }

    
    public function edit($idanggota)
    {
        $anggotas = Anggota::where('idanggota', $idanggota)->first();
        return view('anggota.edit', compact('anggotas'));
    }


    public function update(Request $request, $idanggota)
    {   

        DB::table('anggotas')
            ->where('idanggota', $idanggota) 
            ->update([
                'nama_anggota' => $request->input('nama_anggota'),
                'alamat' => $request->input('alamat'),
                'jurusan' => $request->input('jurusan'),
            ]);


        return redirect()->route('anggotaview')->with('message', 'Berhasil di Edit');
    }

    public function delete($idanggota){
        DB::delete("Delete from anggotas where anggotas.idanggota = '$idanggota'");
        
        return redirect()->route('anggotaview')->with('message','Data Anggota Berhasil Dihapus!');
    }
}
