<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patien;

class RegisterPatienController extends Controller
{
    public function store(Request $request){
        Patien::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan,
            'nomor_whatsapp' => $request->nomor_whatsapp,
        ]);

        return redirect()->back()->with([
            'success' => 'Selamat, anda telah melakukan registrasi. Mohon tunggu untuk mendapatkan kode pendaftaran melalui Whatsapp atau email.',
        ]);
    }
}
