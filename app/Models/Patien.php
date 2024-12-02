<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patien extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'tempat',
        'tanggal',
        'jenis_kelamin',
        'alamat',
        'keluhan',
        'nomor_whatsapp',
        'kode_pendaftaran'
    ];
}
