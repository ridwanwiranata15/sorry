<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal_pemeriksaan',
        'tindakan_medis',
        'resep_obat',
    ];
    public function pasien(){
        return $this->belongsTo(Patien::class);
    }
    public function dokter(){
        return $this->belongsTo(Doctor::class);
    } 
}
