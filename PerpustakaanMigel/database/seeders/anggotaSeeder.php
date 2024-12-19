<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Time;

class anggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggotas')->insert([
            'nama_anggota' => 'Migel Orvin',
            'alamat' => 'Jalan Karya Baru',
            'jurusan' => 'Informatika',
            'tgl_dftar' => date(now())
        ]);
        DB::table('anggotas')->insert([
            'nama_anggota' => 'Mikey',
            'alamat' => 'Jalan Kenten',
            'jurusan' => 'Manajemen',
            'tgl_dftar' => date(now())
        ]);
        DB::table('anggotas')->insert([
            'nama_anggota' => 'Marcel',
            'alamat' => 'Jalan Nusa indah Palembang',
            'jurusan' => 'Akuntansi',
            'tgl_dftar' => date(now())
        ]);
    }
}
