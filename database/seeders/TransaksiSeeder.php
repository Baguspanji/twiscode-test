<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'transaksi_id' => 1,
                'harga' => 10000,
                'jumlah' => 2,
                'sub_total' => 20000,
            ],
            [
                'transaksi_id' => 2,
                'harga' => 6250,
                'jumlah' => 4,
                'sub_total' => 25000,
            ]
        ];

        foreach ($rows as $row) {
            DB::table('transaksi_details')->insert($row);
        }
    }
}
