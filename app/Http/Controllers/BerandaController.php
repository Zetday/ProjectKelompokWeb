<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $profiles = Profil::all();
        return view('beranda.index', [
            "profiles" => $profiles
        ]);
    } 
}
