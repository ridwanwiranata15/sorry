<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    protected $fillable = [
        "id_users",
        "nama",
        "telepon",
        "alamat",
        "str",
        "shift",
        "status",
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
