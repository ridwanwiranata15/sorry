<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekerPageController extends Controller
{
    public function index(){
        return view('apoteker.index');
    }
}
