<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    use HasFactory;
    protected $fillable = [
        'produksi_id',
        'tanggal_keluar',
        'tanggal_masuk',
        'alamat'
    ];
}
