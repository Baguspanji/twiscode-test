<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DB::table('transaksis')
        ->join('transaksi_details', 'transaksis.id', '=', 'transaksi_details.transaksi_id')
        ->select('transaksis.id', 'transaksis.tanggal_order', 'transaksis.status_lunas', 'transaksis.tanggal_pembayaran', 'transaksi_details.sub_total', 'transaksi_details.jumlah')->get();

        return $transaksi;
    }

}
