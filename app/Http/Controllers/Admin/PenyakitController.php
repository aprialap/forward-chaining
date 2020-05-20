<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use Validator;
use Ramsey\Uuid\Uuid;

class PenyakitController extends Controller
{
    public function index()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('admin.penyakit.index', compact('data'));
    }

    public function create()
    {
        return view('admin.penyakit.create');
    }

    public function store(request $request)
    {
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'kd_penyakit'   => 'required',
            'nama_penyakit' => 'required',
            'deskripsi'     => 'required',
 		]); 

		if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data                = new Penyakit;
        $data->kd_penyakit   = $request->kd_penyakit;
        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi     = $request->deskripsi;
        $data->save();

        return redirect()->route('admin.penyakit')->with('success','Berhasil menambahkan data');

    }

    public function edit($id)
    {
        if(!$data  = Penyakit::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
		}

        return view ('admin.penyakit.edit' ,compact('data'));

    }

    public function update(request $request, $id)
    {
        if(!$data  = Penyakit::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
        }
        
        $input = $request->except('_token');
        
        $validation = Validator::make($input,[
            'kd_penyakit'   => 'required',
            'nama_penyakit' => 'required',
            'deskripsi'     => 'required',
 		]); 

		if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }


        $data                = Penyakit::findOrFail($id);
        $data->kd_penyakit   = $request->kd_penyakit;
        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi     = $request->deskripsi;
        $data->save();

        return redirect()->route('admin.penyakit')->with('success','Berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        if(!$data  = Penyakit::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('admin.penyakit')->with('success','Berhasil menghapus data');

    }
}
