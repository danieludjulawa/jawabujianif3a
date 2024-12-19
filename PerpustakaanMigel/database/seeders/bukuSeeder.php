<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'judul_buku' => 'Hujan',
            'penerbit' => 'Gramedia',
            'pengarang' => 'Tere Liye',
            'jumlah' => 10
        ]);
        DB::table('bukus')->insert([
            'judul_buku' => 'Laskar Pelangi',
            'penerbit' => 'Bentang Pustaka',
            'pengarang' => 'Andrea Hirata',
            'jumlah' => 6
        ]);
        DB::table('bukus')->insert([
            'judul_buku' => 'Atomic Habits',
            'penerbit' => 'Penguin Random House',
            'pengarang' => 'James Clear',
            'jumlah' => 7
        ]);
    }
}
