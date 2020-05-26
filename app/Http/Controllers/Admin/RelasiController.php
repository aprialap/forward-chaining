<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Relasi;
use Validator;
use Ramsey\Uuid\Uuid;

class RelasiController extends Controller
{
   
    public function index()
    {
        $data = Relasi::with('penyakit','gejala')->orderBy('kd_penyakit', 'ASC')->get();

        return view('admin.relasi.index', compact('data'));
    }

    
    public function create()
    {
        $penyakit = Penyakit::orderBy('kd_penyakit', 'ASC')->get();
        $gejala   = Gejala::orderBy('kd_gejala', 'ASC')->get();

        return view('admin.relasi.create', compact('penyakit', 'gejala'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'penyakit' => 'required',
            'gejala'    => 'required',
           
         ]); 
         
        if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        if(!$penyakit = Penyakit::where('id', $request->penyakit)->first()){

            return redirect()->route('admin.relasi')->with('warning', 'Data Penyakit tidak ditemukan');
        }
        
        if(!$gejala = Gejala::where('id', $request->gejala)->first()){

            return redirect()->route('admin.relasi')->with('warning', 'Data Gejala tidak ditemukan');
        }
        
        $data              = new Relasi;
        $data->id          = Uuid::uuid4() -> getHex();
        $data->kd_penyakit = $penyakit->kd_penyakit;
        $data->kd_gejala   = $gejala->kd_gejala;    
        $data->save();

        return redirect()->route('admin.relasi')->with('success','Berhasil menambahkan data');

    }

    public function edit($id)
    {
        if(!$data  = Relasi::find($id)){
            return redirect()->route('admin.relasi')->with('warning', 'Data tidak ditemukan');
        }
        
        $penyakit = Penyakit::orderBy('kd_penyakit', 'ASC')->get();
        $gejala   = Gejala::orderBy('kd_gejala', 'ASC')->get();

        return view ('admin.relasi.edit' ,compact('data','penyakit','gejala'));
    }

    public function update(Request $request, $id)
    {
        if(!$data  = Relasi::find($id)){
            return redirect()->route('admin.relasi')->with('warning', 'Data tidak ditemukan');
        }

        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'penyakit' => 'required',
            'gejala'    => 'required',
           
         ]); 
         
        if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        if(!$penyakit = Penyakit::where('id', $request->penyakit)->first()){

            return redirect()->route('admin.relasi')->with('warning', 'Data Penyakit tidak ditemukan');
        }
        
        if(!$gejala = Gejala::where('id', $request->gejala)->first()){

            return redirect()->route('admin.relasi')->with('warning', 'Data Gejala tidak ditemukan');
        }
        
        $data              = Relasi::findOrFail($id);
        $data->kd_penyakit = $penyakit->kd_penyakit;
        $data->kd_gejala   = $gejala->kd_gejala;    
        $data->save();

        return redirect()->route('admin.relasi')->with('success','Berhasil mengubah data');
    }

    public function destroy($id)
    {
        if(!$data  = Relasi::find($id)){
            return redirect()->route('admin.relasi')->with('warning', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('admin.relasi')->with('success','Berhasil menghapus data');
    }
}
