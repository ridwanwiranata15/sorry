<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poly extends Model
{
    protected $fillable = [
        'nama',
        'lokasi',
        'jadwal',
        'hari',
        'kapasitas',
        'kepala',
        'jumlah'
    ];
}
