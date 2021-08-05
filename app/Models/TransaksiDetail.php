<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;


    protected $fillable = ['transaksi_id', 'harga', 'jumlah', 'sub_total'];
}
