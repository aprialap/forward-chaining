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
        return view('admin.gejala.create');
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
