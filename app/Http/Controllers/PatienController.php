<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patien;
use App\Models\Doctor;
use App\Models\Pemeriksaan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\PendaftaranPasien;

class PatienController extends Controller
{
    public function index(){
        $patiens = Patien::all();
        return view('admin.pasien.index', ['patiens' => Patien::all()]);
    }
    public function detail($id){
        $patien = Patien::find($id);
        return view('admin.pasien.detail', [
            'patien' => $patien,
            
        ]);
    }
    public function pemeriksaan($id){
        $pasien = Patien::find($id);
        return view("admin.pasien.pengobatan", [
            'patien' => $pasien,
            'doctors' => Doctor::all()
        ]);
    }
    public function store_pemeriksaan(Request $request, $id){
    $pasien = Patien::find($id);
    
    // Buat data pemeriksaan
    Pemeriksaan::create([
        'id_pasien' => $pasien->id,
        'id_dokter' => $request->dokter,
    ]);

    // Buat kode pendaftaran
    $kode_pendaftaran = 'REG-' . strtoupper(Str::random(6));
    $pasien->update(['kode_pendaftaran' => $kode_pendaftaran]);

    // Kirim email kode pendaftaran
    $nomor_whatsapp = $pasien->nomor_whatsapp;
    $pesan = "Pendaftaran Anda selesai. Kami siap melayani Anda. Berikut kode pendaftaran Anda: $kode_pendaftaran";
    $url = "https://wa.me/$nomor_whatsapp?text=" . urlencode($pesan);

    // Redirect ke WhatsApp atau tampilkan URL ke pengguna
    return redirect($url);
}
public function search(Request $request){
    $search = $request->query('search');
    $patiens = Patien::where('kode_pendaftaran', 'LIKE', '%'.$search.'%')->get();
    return view('admin.pasien.index', ['patiens' => $patiens]);
}
    
}
