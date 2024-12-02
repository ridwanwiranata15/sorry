<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poly;
use Illuminate\Support\Facades\Redirect;

class PoliController extends Controller
{
    public function index(){
        $polies = Poly::all();
        return view('admin.poli.index', compact('polies'));
    }
    public function create(){
        return view('admin.poli.create');
    }
    public function store(Request $requeest){
       Poly::create([
        'nama' => $requeest->poli,
        'lokasi' => $requeest->lokasi,
        'jadwal' => $requeest->jadwal,
        'hari' => $requeest->hari,
        'kapasitas' => $requeest->kapasitas,
        'kepala' => $requeest->kepala,
        'jumlah' => $requeest->jumlah
       ]);

       return Redirect::route('poli.index');
    }

    public function edit($id){
        $poly = Poly::find($id);
        return view('admin/poli/edit', ['poly' => $poly]);
    }
    public function update($id, Request $requeest){
        $poly = Poly::find($id);
        $poly->update([
            'nama' => $requeest->poli,
            'lokasi' => $requeest->lokasi,
            'jadwal' => $requeest->jadwal,
            'hari' => $requeest->hari,
            'kapasitas' => $requeest->kapasitas,
            'kepala' => $requeest->kepala,
            'jumlah' => $requeest->jumlah
        ]);
        return Redirect::route('poli.index');
    }
    public function delete($id){
        $poly = Poly::find($id);
        $poly->delete();
        return Redirect::route('poli.index');
    }
}
