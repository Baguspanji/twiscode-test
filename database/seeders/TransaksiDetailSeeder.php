<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiDetail;

class TransaksiDetailSeeder extends Seeder
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
                'tanggal_order' => date('Y-m-d H:i:s', strtotime('2020-12-01 11:30:00')),
                'status_lunas' => 1,
                'tanggal_pembayaran' => date('Y-m-d H:i:s', strtotime('2020-12-01 12:00:00')),
            ],
            [
                'tanggal_order' => date('Y-m-d H:i:s', strtotime('2020-12-01 11:30:00')),
                'status' => 2,
                'tanggal_pembayaran' => date('Y-m-d H:i:s', strtotime('2020-12-01 12:00:00')),
            ]
        ];

        foreach ($rows as $row) {
            TransaksiDetail::create($row);
        }
    }
}
