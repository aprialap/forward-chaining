<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Validator;
use Ramsey\Uuid\Uuid;

class UmumController extends Controller
{   
    public function home()
    {
        return view('umum.home');
    }
    public function infoPenyakit()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('umum.info-penyakit', compact('data'));
    }

    public function konsultasi()
    {
        return view('umum.konsultasi');
    }

    public function infoPetunjuk()
    {
        return view('umum.info-petunjuk');
    }

    public function kontak()
    {
        return view('umum.kontak');
    }

    public function loginAdmin()
    {
        return view('umum.login-admin');
    }

    public function tentang()
    {
        return view('umum.tentang');
    }

}
