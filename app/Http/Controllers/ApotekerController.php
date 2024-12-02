<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Apoteker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApotekerController extends Controller
{
    public function index(){
        $apoteker = Apoteker::all();
        return view('admin.apoteker.index', compact('apoteker'));
    }
    public function store(Request $request){
       $user = User::create(
        [
            'name' => $request->dokter,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'apoteker'
        ]);

        Apoteker::create([
            "id_users" => $user->id,
            "nama" => $request->dokter,
            "telepon" => $request->telepon,
            "alamat" => $request->alamat,
            "str" => $request->str,
            "shift" => $request->shift,
            "status" => $request->status,
        ]);
           return redirect('/admin/apoteker/');
    }
    public function edit($id){
        $apoteker = Apoteker::find($id);
        return view('admin.apoteker.edit', ['apoteker' => $apoteker]);
    }
    public function update($id, Request $request){
        $apoteker =  Apoteker::find($id);
        $apoteker->update([
            "nama" => $request->dokter,
            "telepon" => $request->telepon,
            "Alamat" => $request->alamat,
            "str" => $request->str,
            "shift" => $request->shift,
            "status" => $request->status,
        ]);
        return redirect('/admin/apoteker/');
    }
    public function delete($id){
        $apoteker =  Apoteker::find($id);
        $apoteker->delete();
        return redirect('/admin/apoteker/');      
    }
}
