<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorPageController extends Controller
{
    public function index(){
        return view('doctor.index');
    }
}
