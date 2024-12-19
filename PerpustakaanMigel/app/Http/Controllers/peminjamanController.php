<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function index()
    {
        $data = DB::select("select * from bukus");
        $data2 = DB::select(("select * from anggotas"));
        return view("main", ["bukus" => $data, "anggotas" => $data2]);
    }

    public function index2()
    {
        $data = DB::table('detail_pinjams')
            ->join('anggotas', 'detail_pinjams.idanggota', '=', 'anggotas.idanggota')
            ->join('bukus', 'detail_pinjams.idbuku', '=', 'bukus.idbuku')
            ->select('detail_pinjams.*', 'anggotas.nama_anggota as nama', 'bukus.judul_buku as judul')
            ->get();
        return view("detail.view", ["details" => $data]);
    }

    public function store(Request $request)
    {
        DB::table('detail_pinjams')->insert([
            'idanggota' => $request->input('anggota'),
            'idbuku' => $request->input('buku'),

            'tgl_pinjam' => date(now()),
            'tgl_kembali' => $request->input('tgl_kembali'),
            'denda' => 0
        ]);

        DB::table('bukus')
            ->where('idbuku', $request->input('buku'))
            ->update(['jumlah' => DB::raw('jumlah - 1')]);
        return redirect("/");
    }
    public function edit($nopinjam)
    {
        $bukus = DB::select("select * from bukus");
        $anggotas = DB::select(("select * from anggotas"));
        $details = $data = DB::table('detail_pinjams')
            ->join('anggotas', 'detail_pinjams.idanggota', '=', 'anggotas.idanggota')
            ->join('bukus', 'detail_pinjams.idbuku', '=', 'bukus.idbuku')
            ->select('detail_pinjams.*', 'anggotas.nama_anggota as nama', 'bukus.judul_buku as judul')
            ->where('nopinjam', $nopinjam)
            ->first();
        return view('detail.edit', compact('details', "bukus" ,"anggotas"), );
    }

    public function update(Request $request, $nopinjam)
    {   

        DB::table('detail_pinjams')
            ->where('nopinjam', $nopinjam) 
            ->update([
                'idanggota' => $request->input('anggota'),
                'idbuku' => $request->input('buku'),
                'tgl_pinjam' => $request->input('tgl_pinjam'),
                'tgl_kembali' => $request->input('tgl_kembali'),
                'denda' => $request->input('denda'),
            ]);


        return redirect()->route('detailview')->with('message', 'Berhasil di Edit');
    }


    public function delete($nopinjam)
    {
        DB::delete("Delete from detail_pinjams where detail_pinjams.nopinjam = '$nopinjam'");

        return redirect()->route('detailview')->with('message', 'Data Pinjam Berhasil Dihapus!');
    }
}
