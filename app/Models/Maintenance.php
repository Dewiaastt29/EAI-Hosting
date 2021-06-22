<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $fillable = [
        'dieshop_tm',
        'tgl_maintenance',
        'keadaan_dieshop',
        'keperluan',
        'jumlah_anggaran',
        'hasil_pemeliharaan'
    ];
}
