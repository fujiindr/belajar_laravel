<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Baju',
                'varian' => 'Atasan',
                'harga_beli' => 25000,
                'harga_jual' => 50000],
            ['nama_barang' => 'Kemeja',
                'varian' => 'Atasan',
                'harga_beli' => 50000,
                'harga_jual' => 75000],
            ['nama_barang' => 'sweater',
                'varian' => 'Atasan',
                'harga_beli' => 75000,
                'harga_jual' => 100000],
            ['nama_barang' => 'Katun',
                'varian' => 'Bawahan',
                'harga_beli' => 150000,
                'harga_jual' => 175000],
            ['nama_barang' => 'Kulot',
                'varian' => 'Bawahan',
                'harga_beli' => 50000,
                'harga_jual' => 100000],
        ];

        DB::table('pembelians')->insert($pembelian);

    }
}
