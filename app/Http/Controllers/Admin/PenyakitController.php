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
        # code...
    }

    public function store(request $request)
    {
        # code...
    }

    public function edit($id)
    {
        # code...
    }

    public function update(request $request, $id)
    {
        # code...
    }

    public function destroy($id)
    {
        # code...
    }
}
