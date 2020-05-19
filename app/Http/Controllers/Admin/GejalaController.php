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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
