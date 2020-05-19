<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Validator;
use Ramsey\Uuid\Uuid;

class PenyakitController extends Controller
{
    public function index()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('penyakit.index', compact('data'));
    }
}
