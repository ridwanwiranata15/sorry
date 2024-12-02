<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Poly;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('admin.doctor.index', compact('doctors'));
    }
    public function store(Request $request){
        $user = User::create([
            'name' => $request->dokter,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'dokter'
        ]);

        Doctor::create([
            'nama' => $request->dokter,
            'spesialis' => $request->spesialis,
            'jadwal' => $request->jadwal,
            'kontak' => $request->kontak,
            'id_poli' => $request->poli,
            'id_users' => $user->id
        ]);

        return redirect()->route('dokter.index');
    }
    public function create(){
        $polies = Poly::all();
        return view('admin.doctor.create', compact('polies'));
    }
    public function edit($id){
        $doctor = Doctor::find($id);
        $polies = Poly::All();
        return view("admin.doctor.edit", [
            "polies" => $polies,
            "doctor" => $doctor
        ]);
    }
    public function update($id, Request $request)
    {
        $doctor = Doctor::find($id);
        $doctor->update([
            'nama' => $request->dokter,
            'spesialis' => $request->spesialis,
            'jadwal' => $request->jadwal,
            'kontak' => $request->kontak,
            'id_poli' => $request->poli,
        ]);
        return redirect()->route('dokter.index');
    }
    public function delete($id){
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('dokter.index');
    }
}
