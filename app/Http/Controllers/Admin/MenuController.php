<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosa;
use App\User;
use Validator;
use Auth;
use Hash;


class MenuController extends Controller
{
    public function kelola()
    {
        return view('admin.menu.kelola');
    }

    public function logKonsultasi()
    {   
        $data = Diagnosa::with('pasien','penyakit')->orderBy('created_at', 'DESC')->get();

        return view('admin.menu.log-konsultasi',compact('data'));
    }

    public function informasi()
    {
        return view('admin.menu.informasi');
    
    }

    public function tentang()
    {
        return view('admin.menu.tentang');
    }

    public function resetPassword()
    {
        return view('admin.menu.reset-password');
    }

    public function updatePassword(request $request)
    {
  
        if (!Hash::check($request->password_old, Auth::user()->password)) {
            return redirect()->route('admin.menu.reset-password')->with('warning', 'Kata sandi lama tidak sesuai');
        }

        $input = $request->except('_token');

        $validation = Validator::make($input,[
            'password_old'             => 'required',
            'password'                 => 'required',
            'password_confirmation'    => 'same:password', 
        ]); 
        
        if ($validation->fails()) {
            
            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data = User::findOrFail(Auth::user()->id);
		$data->password           = Hash::make($request->password);
       
        $data->save();

        return redirect()->route('admin.reset-password')->with('success','Berhasil memperbaharui data');
    }

}
