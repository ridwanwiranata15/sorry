<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'nama',
        'spesialis',
        'jadwal',
        'kontak',
        'id_poli',
        'id_users'
        
    ];
    public function poly(){
        return $this->belongsTo(Poly::class, 'id_poli', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
