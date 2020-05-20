<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use Validator;
use Ramsey\Uuid\Uuid;

class GejalaController extends Controller
{
   
    public function index()
    { 
        $data = Gejala::orderBy('kd_gejala', 'ASC')->get();

     
        return view('admin.gejala.index', compact('data'));
    }

   
    public function create()
    {   
        $kode = Gejala::select('kd_gejala')->orderBy('kd_gejala', 'desc')->first();

 
        if ($kode != null) {
            $pecah  = explode("G", $kode->kd_gejala);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "G0".$number;
            }else{
                $kode   = "G".$number;
            }
        }else{
            $kode = "G01";
        }
       

        return view('admin.gejala.create', compact('kode'));
    }

    public function store(request $request)
    {   
      
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'kd_gejala' => 'required',
            'gejala'    => 'required',
           
 		]); 

		if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data            = new Gejala;
        $data->id        = Uuid::uuid4() -> getHex();
        $data->kd_gejala = $request->kd_gejala;
        $data->gejala    = $request->gejala;
        $data->save();

        return redirect()->route('admin.gejala')->with('success','Berhasil menambahkan data');

    }

    public function edit($id)
    {
        if(!$data  = Gejala::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
		}

        return view ('admin.gejala.edit' ,compact('data'));

    }

    public function update(request $request, $id)
    {
        if(!$data  = Gejala::find($id)){
            return redirect()->route('admin.gejala')->with('warning', 'Data tidak ditemukan');
        }
        
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'kd_gejala' => 'required',
            'gejala'    => 'required',
          
 		]); 

		if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }


        $data            = Gejala::findOrFail($id);
        $data->kd_gejala = $request->kd_gejala;
        $data->gejala    = $request->gejala;
        $data->save();

        return redirect()->route('admin.gejala')->with('success','Berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        if(!$data  = Gejala::find($id)){
            return redirect()->route('admin.gejala')->with('warning', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('admin.gejala')->with('success','Berhasil menghapus data');

    }
}
