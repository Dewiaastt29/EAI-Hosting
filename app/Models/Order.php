<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_order',
        'jumlah_produk',
        'nama_produk',
        'materials',
        'total_harga'
    ];
}
