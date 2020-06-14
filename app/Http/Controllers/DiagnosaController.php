<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Relasi;
use App\Models\Pasien;
use App\Models\Diagnosa;
use Validator;
use Ramsey\Uuid\Uuid;

class DiagnosaController extends Controller
{    

    public function index()
    {
       
         $gejala = Relasi::with('gejala')->orderBy('kd_gejala', 'ASC')->get();

        return view('konsultasi.pertanyaan', compact('gejala'));
    }

    public function diagnosa(request $request)
    {        
        if($request->gejala == null){
            return redirect()->route('diagnosa.list')->with('warning', 'Anda Belum menentukan gejala, silahkan pilih gejala');
        }
        $diagnosa = $this->knowlage($request->gejala);
        $penyakit = Penyakit::where('kd_penyakit', $diagnosa)->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit', $penyakit->kd_penyakit)->get();
        $pasien   = Pasien::where('id', session()->get('id'))->first();

        $konsultasi = new Diagnosa;
        $konsultasi->id                 = Uuid::uuid4() -> getHex();
        $konsultasi->pasien_id          = $pasien->id;
        $konsultasi->kd_penyakit        = $penyakit->kd_penyakit;
        $konsultasi->tanggal_konsultasi = date('Y-m-d H:i:s');
        $konsultasi->save();

        return view('konsultasi.hasil-diagnosa', compact('gejala','penyakit','pasien'));
    }

    function knowlage($gejala)
    {   
        $role['P01'] = 0;
        $role['P02'] = 0;
        $role['P03'] = 0;
        $role['P04'] = 0;
        $role['P05'] = 0;
        $role['P06'] = 0;
        $role['P07'] = 0;
        $role['P08'] = 0;

        for($i=0;$i<count($gejala); $i++) {
            
            //role 1 (P01)
            if($gejala[$i] == 'G01' || $gejala[$i] == 'G02' 
            || $gejala[$i] == 'G03' || $gejala[$i] == 'G04' 
            || $gejala[$i] == 'G05'  || $gejala[$i] == 'G06' 
            || $gejala[$i] == 'G07' || $gejala[$i] == 'G08'){

                $role['P01'] = $role['P01'] + 1;
               
            }

              
            //role 2 (P02)
            if($gejala[$i] == 'G02' || $gejala[$i] == 'G06' 
            || $gejala[$i] == 'G09' || $gejala[$i] == 'G10' 
            || $gejala[$i] == 'G11' || $gejala[$i] == 'G12' 
            || $gejala[$i] == 'G13' || $gejala[$i] == 'G14'){

                $role['P02'] = $role['P02'] + 1;
               
            }

            //role 3 (P03)
            if($gejala[$i] == 'G06' || $gejala[$i] == 'G15' 
            || $gejala[$i] == 'G16' || $gejala[$i] == 'G17' 
            || $gejala[$i] == 'G18' || $gejala[$i] == 'G19' 
            || $gejala[$i] == 'G20' ){

                $role['P03'] = $role['P03'] + 1;
               
            }

            //role 4 (P04)
            if($gejala[$i] == 'G12' || $gejala[$i] == 'G17' 
            || $gejala[$i] == 'G21' || $gejala[$i] == 'G22' 
            || $gejala[$i] == 'G23' || $gejala[$i] == 'G24' 
            || $gejala[$i] == 'G25' ){

                $role['P04'] = $role['P04'] + 1;
               
            }

            //role 5 (P05)
            if($gejala[$i] == 'G26' || $gejala[$i] == 'G27' 
            || $gejala[$i] == 'G28' || $gejala[$i] == 'G29'){

                $role['P05'] = $role['P05'] + 1;
              
            }

            //role 6 (P06)
            if($gejala[$i] == 'G30' || $gejala[$i] == 'G31' 
            || $gejala[$i] == 'G32' || $gejala[$i] == 'G33'
            || $gejala[$i] == 'G34' || $gejala[$i] == 'G35'){

                $role['P06'] = $role['P06'] + 1;
               
            }


            //role 7 (P07)
            if($gejala[$i] == 'G36' || $gejala[$i] == 'G37' 
            || $gejala[$i] == 'G38' || $gejala[$i] == 'G39'
            || $gejala[$i] == 'G40' || $gejala[$i] == 'G41'){

                $role['P07'] = $role['P07'] + 1;
               
            }


            //role 8 (P08)
            if($gejala[$i] == 'G10' || $gejala[$i] == 'G14' 
            || $gejala[$i] == 'G42' || $gejala[$i] == 'G43'
            || $gejala[$i] == 'G44' || $gejala[$i] == 'G45'){

                $role['P08'] = $role['P08'] + 1;
              
            }
        }
        
        
        
        $data = $role;
        asort($data);      
        foreach($data as $x => $x_value) {
                $hasil = $x;
        }

          return $hasil;
    }
}
