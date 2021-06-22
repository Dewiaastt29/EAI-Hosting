<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $fillable = [
        'hasil_produk',
        'materials',
        'jumlah_produksi',
        'lama_produksi',
        'tanggal_produksi',
        'engineer'
    ];
}
