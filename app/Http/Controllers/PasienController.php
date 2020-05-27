<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Gejala;
use Validator;
use Ramsey\Uuid\Uuid;
use Propaganistas\LaravelPhone\PhoneNumber;

class PasienController extends Controller
{
    public $isoCode = 'ID'; //isocode indonesia

    public function registrasi(request $request)
    {
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'nama'           => 'required',
            'usia_kehamilan' => 'required|integer',
            'umur'           => 'required|integer',
            'alamat'         => 'required',
            'phone'          => 'required|phone:'.$this->isoCode,
           
         ]); 
         
        if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data                 = new Pasien;
        $data->id             = Uuid::uuid4() -> getHex();
        $data->nama_lengkap   = $request->nama;
        $data->usia_kehamilan = $request->usia_kehamilan;
        $data->umur           = $request->umur;
        $data->alamat         = $request->alamat;
        $data->no_hp          = PhoneNumber::make($request->phone, $this->isoCode);;
        $data->save();

        $pasien = Pasien::where('id', $data->id)->first();
        $gejala = Gejala::orderBy('kd_gejala', 'ASC')->get();

        return view('konsultasi.pertanyaan', compact('pasien','gejala'));
    }
}
